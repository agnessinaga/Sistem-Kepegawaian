<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user-2871.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?></p>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Beranda', 'icon' => 'home', 'url' => ['/']],
                    ['label' => 'Rekrutmen', 'icon' => 'user-plus', 'url' => ['/calon-pegawai-m']],
                    [
                        'label' => 'Data Pegawai',
                        'icon' => 'clipboard',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daftar Pegawai', 'icon' => 'user', 'url' => ['/pegawai-m'],],
                            ['label' => 'Riwayat Pendidikan', 'icon' => 'university', 'url' => ['/riwayat-pendidikan-pegawai-m'],],
                            ['label' => 'Riwayat Keluarga', 'icon' => 'users', 'url' => ['/riwayat-keluarga-m'],],
                            ['label' => 'Surat Peringatan', 'icon' => 'envelope', 'url' => ['/surat-peringatan-t'],],
                            ['label' => 'Penilaian Pegawai', 'icon' => 'star', 'url' => ['/penilaian-pegawai-t'],],
                        ],
                    ],
                    [
                        'label' => 'Data Administrasi',
                        'icon' => 'folder',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Surat Izin Tidak Hadir', 'icon' => 'file', 'url' => ['/izin-tidak-hadir-t'],],
                            ['label' => 'Surat Izin Keluar', 'icon' => 'file', 'url' => ['/izin-keluar-t'],],
                            ['label' => 'Surat Izin Cuti', 'icon' => 'file', 'url' => ['/izin-cuti-t'],],
                            ['label' => 'Surat Pengunduran Diri', 'icon' => 'file', 'url' => ['/pengunduran-diri-t'],],
                            
                        ],
                    ],
                    ['label' => 'Presensi', 'icon' => 'history', 'url' => ['/presensi-t']],
                    ['label' => 'Kalender', 'icon' => 'calendar', 'url' => ['/kalender-m']],
                    ['label' => 'Kuesioner', 'icon' => 'trophy', 'url' => ['/kuesioner-t']],
                    [
                        'label' => 'Laporan',
                        'icon' => 'clipboard',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Laporan Presensi', 'icon' => 'list', 'url' => ['/laporan-l'],],
                            ['label' => 'Laporan Pegawai', 'icon' => 'list', 'url' => ['/laporan-l'],],
                            ['label' => 'Laporan Keadaan Pegawai', 'icon' => 'list', 'url' => ['laporan-l'],],
                            ['label' => 'Laporan Rekrutmen', 'icon' => 'list', 'url' => ['/laporan-l'],],
                            
                        ],
                    ],
                ],
            ]
        )
        ?>

    </section>

</aside>
