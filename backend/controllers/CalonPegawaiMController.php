<?php

namespace backend\controllers;

use Yii;
use backend\models\CalonPegawaiM;
use backend\models\search\CalonPegawaiMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\UrlManager;

/**
 * CalonPegawaiMController implements the CRUD actions for CalonPegawaiM model.
 */
class CalonPegawaiMController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CalonPegawaiM models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CalonPegawaiMSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }

    /**
     * Displays a single CalonPegawaiM model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CalonPegawaiM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CalonPegawaiM();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->save();

            $image = UploadedFile::getInstance($model, 'foto');
            $cv = UploadedFile::getInstance($model, 'lampiran');
            if ($image == NULL){
                $model->save();
            } 
            else if ($cv == NULL){
                $model->save();
            } else {
            $image = UploadedFile::getInstance($model, 'foto');
            $cv = UploadedFile::getInstance($model, 'lampiran');

            $cv = $model->calon_pegawai_id;
            $image = $model->calon_pegawai_id;
            $cv = UploadedFile::getInstance($model, 'lampiran');
            $image = UploadedFile::getInstance($model, 'foto');
            $cvName = $model->nama_lengkap . $cv;
            $imageName = $model->nama_lengkap . $image;

            $cv->saveAs(Yii::getAlias('@calonpegawaiCVPath') . '/' . $cvName);
            $image->saveAs(Yii::getAlias('@calonpegawaiFotoPath') . '/' . $imageName);
            $model->lampiran = $cvName;
            $model->foto = $imageName;
            $model->save(); 

        }

            $model->created_at = date("d-m-Y H:i");
            $model->created_by = Yii::$app->user->identity->username;
            $model->host_name = Yii::$app->getRequest()->getUserIp();

            $model->save(false);      
            
            return $this->redirect(['view', 'id' => $model->calon_pegawai_id]);
            

        } else {
        return $this->render('create', [
            'model' => $model,
        ]);
        }
    }

    /**
     * Updates an existing CalonPegawaiM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'foto');
            $model->cv = UploadedFile::getInstance($model, 'lampiran');

            if ($model->foto != NULL) {
            $model->foto->name = 'Update_' . $model->nama_lengkap .'_'. $model->foto;;
            $model->foto->saveAs(Yii::getAlias('@calonpegawaiFotoPath') . '/' . $model->foto->baseName . '.' . $model->foto->extension );
            } 
            else if ($model->lampiran != NULL) {
            $model->lampiran->name = 'Update_' . $model->nama_lengkap .'_'. $model->lampiran;;
            $model->lampiran->saveAs(Yii::getAlias('@calonpegawaiCVPath') . '/' . $model->lampiran->baseName . '.' . $model->lampiran->extension );
            }
           
            $model->updated_at = date("d-m-Y H:i");
            $model->updated_by = Yii::$app->user->identity->username;
            $model->save(false);
            
            return $this->redirect(['view', 'id' => $model->calon_pegawai_id]);
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CalonPegawaiM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CalonPegawaiM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CalonPegawaiM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CalonPegawaiM::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpload()
    {
    $model = new UploadForm();
    if ($model->load(Yii::$app->request->post())) {
        $model->lampiran = UploadedFile::getInstances($model, 'lampiran');
        
        if ($model->lampiran){
            $cv = $model->lampiran->name;
            if ($model->lampiran->saveAs(Yii::getAlias('@cbackend') . '/calon-pegawai/cv' . $cv)){
                $model->lampiran->$cv;
            }
        }
        $model->save();

        $model->foto = UploadedFile::getInstances($model, 'foto');
        if ($model->foto){
            $image = $model->foto->name;
            if ($model->foto->saveAs(Yii::getAlias('@backend') . '/calon-pegawai/foto' . $image)){
                $model->foto->$image;
            }
        }
        $model->save();
        return $this->redirect(['index']);
    } else {
        return $this->render('upload', [
            'model' => $model,
            ]);
    }
    }
}
