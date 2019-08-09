<?php

namespace backend\controllers;

use Yii;
use backend\models\IzinCutiT;
use backend\models\search\IzinCutiTSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\UrlManager;
use common\models\User;
use common\models\PegawaiM;
use yii\helpers\Json;
use yii\models\LookupM;

/**
 * IzinCutiTController implements the CRUD actions for IzinCutiT model.
 */
class IzinCutiTController extends Controller
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
     * Lists all IzinCutiT models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IzinCutiTSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = ['pageSize' => 10];
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
     * Displays a single IzinCutiT model.
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
     * Creates a new IzinCutiT model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IzinCutiT();

        if ($model->load(Yii::$app->request->post())) {

            $model->save();
            $file = UploadedFile::getInstance($model, 'lampiran');
            if ($file == NULL){
                $model->save();
            } else {
            $file = UploadedFile::getInstance($model, 'lampiran');

            $fileName = $file . '_' . $model->tanggal_rencana_cuti;
            $file->saveAs(Yii::getAlias('@pegawaiCutiPath') . '/' . $fileName);
            $model->lampiran = $fileName;
            $model->save(); 
            }
            
            $model->created_at = date("d-m-Y H:i");
            $model->created_by = Yii::$app->user->identity->username;
            $model->host_name = Yii::$app->getRequest()->getUserIp();
            
            $model->save(false);

            // echo ('<pre/>');
            // print_r($model);
            // die;
            return $this->redirect(['view', 'id' => $model->cuti_id]);
        
        } else{
        return $this->render('create', [
            'model' => $model,
        ]);}    
    }

    /**
     * Updates an existing IzinCutiT model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->lampiran = UploadedFile::getInstance($model, 'lampiran');

            if ($model->lampiran != NULL) {
            $model->lampiran->name = 'Update' . '_' . $model->tanggal_rencana_cuti .'_'. $model->lampiran;
            $model->lampiran->saveAs(Yii::getAlias('@pegawaiCutiPath') . '/' . $model->lampiran->baseName . '.' . $model->lampiran->extension );
            }
           
            $model->updated_at = date("d-m-Y H:i");
            $model->updated_by = Yii::$app->user->identity->username;
            $model->save(false);
            
            return $this->redirect(['view', 'id' => $model->cuti_id]);
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IzinCutiT model.
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
     * Finds the IzinCutiT model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IzinCutiT the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IzinCutiT::findOne($id)) !== null) {
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
            $file = $model->lampiran->name;
            if ($model->lampiran->saveAs(Yii::getAlias('@pegawaiCutiPath'). $file)){
                $model->lampiran->$file;
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

    public function actionCancelByPegawai($id)
    {
        $model = $this->findModel($id);

        if ($model->status_cuti = "Menunggu") {
            $model->status_cuti = "Dibatalkan";
            $model->save();

            \Yii::$app->session->setFlash('succes', 'Cuti Dibatalkan');

            return $this->redirect(['index']);

        } else {
            \Yii::$app->session->setFlash('success', 'Cuti Tidak Dapat Dibatalkan karena Sudah Dikonfirmasi');

            return $this->redirect('index', ['model' => $model]);
        }
        
    }

}
