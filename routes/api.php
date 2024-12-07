    <?php

    use App\Http\Controllers\Api\V1\Admin\AgamaAdminController;
    use App\Http\Controllers\Api\V1\Admin\AnnouncementController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatBinsatLaplakgiatController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatBinsatRenlakgiatController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatIndukController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatLapsatIndukController;
    use App\Http\Controllers\Api\V1\Admin\BinsiapsatLapsatLampiranController;
    use App\Http\Controllers\Api\V1\Admin\CatPersonilController;
    use App\Http\Controllers\Api\V1\Admin\ChatController;
    use App\Http\Controllers\Api\V1\Admin\GolJabatanController;
    use App\Http\Controllers\Api\V1\Admin\HelpTicketController;
    use App\Http\Controllers\Api\V1\Admin\JabatanController;
    use App\Http\Controllers\Api\V1\Admin\KompersSatjarCategorysController;
    use App\Http\Controllers\Api\V1\Admin\KompersSatjarController;
    use App\Http\Controllers\Api\V1\Admin\KorpsController;
    use App\Http\Controllers\Api\V1\Admin\LearningController;
    use App\Http\Controllers\Api\V1\Admin\Master\MasterBinsiapsatCategoryController;
    use App\Http\Controllers\Api\V1\Admin\Master\MasterMaterialCategoryController;
    use App\Http\Controllers\Api\V1\Admin\MaterialController;
    use App\Http\Controllers\Api\V1\Admin\PangkatController;
    use App\Http\Controllers\Api\V1\Admin\PermissionAdminController;
    use App\Http\Controllers\Api\V1\Admin\PersonilController;
    use App\Http\Controllers\Api\V1\Admin\PetaJabatanController;
    use App\Http\Controllers\Api\V1\Admin\PrestasiController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatJabatanController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatKeluargaAnakController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatKeluargaController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatKemampuanBahasaController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatKepangkatanController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatPendidikanMiliterController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatPendidikanUmumController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatPenugasanLuarNegeriController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatPenugasanOperasiController;
    use App\Http\Controllers\Api\V1\Admin\RiwayatTandaJasaController;
    use App\Http\Controllers\Api\V1\Admin\RoleAdminController;
    use App\Http\Controllers\Api\V1\Admin\RoleHasPermissionController;
    use App\Http\Controllers\Api\V1\Admin\SatuanController;
    use App\Http\Controllers\Api\V1\Admin\SatuanJabatanDansatController;
    use App\Http\Controllers\Api\V1\Admin\SatuanLainLainController;
    use App\Http\Controllers\Api\V1\Admin\SatuanLambangController;
    use App\Http\Controllers\Api\V1\Admin\SatuanPrestasiController;
    use App\Http\Controllers\Api\V1\Admin\SatuanPurnawirawanController;
    use App\Http\Controllers\Api\V1\Admin\SatuanTradisiController;
    use App\Http\Controllers\Api\V1\Admin\SiapsatController;
    use App\Http\Controllers\Api\V1\Admin\UserController;
    use App\Http\Controllers\Api\V1\Admin\UserPermissionAdminController;
    use App\Http\Controllers\Api\V1\Admin\UserPersonilAdminController;
    use App\Http\Controllers\Api\V1\AuthController;
    use App\Http\Controllers\Api\V1\Searcher\BinsiapsatBinsatLaplakgiatSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\BinsiapsatBinsatRenlakgiatSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\BinsiapsatLapsatIndukSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\BinsiapsatLapsatLampiranSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\MaterialSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\PersonilSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatJabatanSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatKeluargaAnakSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatKeluargaSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatKemampuanBahasaSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatKepangkatanSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatPendidikanMiliterSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatPendidikanUmumSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatPenugasanLuarNegeriSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\RiwayatPenugasanOperasiSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\SatuanSearcherController;
    use App\Http\Controllers\Api\V1\Searcher\TandaJasaSearcherController;
    use Illuminate\Support\Facades\Route;

    /*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    Route::prefix('v1')->group(function () {

        Route::post('auth/login', [AuthController::class, 'masterLogin']);
        Route::post('auth/logout', [AuthController::class, 'logout']);
        Route::post('auth/refresh-token', [AuthController::class, 'rfresh']);
        Route::post('auth/register', [AuthController::class, 'registration']);


        Route::group([
            'prefix' => 'admin',
            // 'middleware' => ['jwt.role:1']
        ], function () {

            // Announcement
            Route::get('pengumuman', [AnnouncementController::class, 'index']);
            Route::get('pengumuman/{id}', [AnnouncementController::class, 'show']);
            Route::post('pengumuman/{id}', [AnnouncementController::class, 'update']);
            Route::post('pengumuman', [AnnouncementController::class, 'store']);
            Route::delete('pengumuman/{id}', [AnnouncementController::class, 'destroy']);

            // PERSONIL
            Route::get('personil', [PersonilController::class, 'index']);
            Route::get('personil/{id}', [PersonilController::class, 'show']);
            Route::post('personil/{id}', [PersonilController::class, 'update']);
            Route::post('personil-password/{id}', [PersonilController::class, 'updatePassword']);
            Route::post('personil', [PersonilController::class, 'store']);
            Route::delete('personil/{id}', [PersonilController::class, 'destroy']);

            Route::get('list/personil/satuan', [PersonilController::class, 'getSatuan']);
            Route::get('list/personil/gol-jabatan', [PersonilController::class, 'getGolJabatan']);
            Route::get('list/personil/jabatan', [PersonilController::class, 'getJabatan']);
            Route::get('list/personil/pangkat', [PersonilController::class, 'getPangkat']);
            Route::get('list/personil/korps', [PersonilController::class, 'getKorps']);
            Route::get('list/personil/suku-bangsa', [PersonilController::class, 'getSukuBangsa']);
            Route::get('list/personil/agama', [PersonilController::class, 'getAgama']);
            Route::get('list/personil/sumber-pa', [PersonilController::class, 'getSumberPA']);
            Route::get('list/personil/golongan-darah', [PersonilController::class, 'getGolonganDarah']);

            Route::get('personil-download/pdf/{id}', [PersonilController::class, 'exportPdf']);
            Route::post('personil-import/excel', [PersonilController::class, 'importExcel']);
            Route::get('personil-download/excel', [PersonilController::class, 'exportExcel']);

            Route::get('personil/{id_personil}/cat-personil', [CatPersonilController::class, 'index']);
            Route::get('personil/{id_personil}/cat-personil/{id_jabatan}', [CatPersonilController::class, 'show']);
            Route::post('personil/{id_personil}/cat-personil', [CatPersonilController::class, 'store']);
            Route::post('personil/{id_personil}/cat-personil/{id_cat_personil}', [CatPersonilController::class, 'update']);
            Route::delete('personil/{id_personil}/cat-personil/{id_cat_personil}', [CatPersonilController::class, 'destroy']);

            Route::get('personil/{id_personil}/riwayat-jabatan', [RiwayatJabatanController::class, 'index']);
            Route::get('personil/{id_personil}/riwayat-jabatan/{id_jabatan}', [RiwayatJabatanController::class, 'show']);
            Route::post('personil/{id_personil}/riwayat-jabatan', [RiwayatJabatanController::class, 'store']);
            Route::post('personil/{id_personil}/riwayat-jabatan/{id_jabatan}', [RiwayatJabatanController::class, 'update']);
            Route::delete('personil/{id_personil}/riwayat-jabatan/{id_jabatan}', [RiwayatJabatanController::class, 'destroy']);

            Route::get('personil/{id_personil}/keluarga', [RiwayatKeluargaController::class, 'index']);
            Route::get('personil/{id_personil}/keluarga/{id_keluarga}', [RiwayatKeluargaController::class, 'show']);
            Route::post('personil/{id_personil}/keluarga', [RiwayatKeluargaController::class, 'store']);
            Route::post('personil/{id_personil}/keluarga/{id_keluarga}', [RiwayatKeluargaController::class, 'update']);
            Route::delete('personil/{id_personil}/keluarga/{id_keluarga}', [RiwayatKeluargaController::class, 'destroy']);

            Route::get('personil/{id_personil}/keluarga/{id_keluarga}/anak', [RiwayatKeluargaAnakController::class, 'index']);
            Route::get('personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}', [RiwayatKeluargaAnakController::class, 'show']);
            Route::post('personil/{id_personil}/keluarga/{id_keluarga}/anak', [RiwayatKeluargaAnakController::class, 'store']);
            Route::post('personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}', [RiwayatKeluargaAnakController::class, 'update']);
            Route::delete('personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}', [RiwayatKeluargaAnakController::class, 'destroy']);

            Route::get('personil/{id_personil}/bahasa', [RiwayatKemampuanBahasaController::class, 'index']);
            Route::get('personil/{id_personil}/bahasa/{id_bahasa}', [RiwayatKemampuanBahasaController::class, 'show']);
            Route::post('personil/{id_personil}/bahasa', [RiwayatKemampuanBahasaController::class, 'store']);
            Route::post('personil/{id_personil}/bahasa/{id_bahasa}', [RiwayatKemampuanBahasaController::class, 'update']);
            Route::delete('personil/{id_personil}/bahasa/{id_bahasa}', [RiwayatKemampuanBahasaController::class, 'destroy']);

            Route::get('personil/{id_personil}/pangkat', [RiwayatKepangkatanController::class, 'index']);
            Route::get('personil/{id_personil}/pangkat/{id_pangkat}', [RiwayatKepangkatanController::class, 'show']);
            Route::post('personil/{id_personil}/pangkat', [RiwayatKepangkatanController::class, 'store']);
            Route::post('personil/{id_personil}/pangkat/{id_pangkat}', [RiwayatKepangkatanController::class, 'update']);
            Route::delete('personil/{id_personil}/pangkat/{id_pangkat}', [RiwayatKepangkatanController::class, 'destroy']);

            Route::get('personil/{id_personil}/pendidikan-militer', [RiwayatPendidikanMiliterController::class, 'index']);
            Route::get('personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}', [RiwayatPendidikanMiliterController::class, 'show']);
            Route::post('personil/{id_personil}/pendidikan-militer', [RiwayatPendidikanMiliterController::class, 'store']);
            Route::post('personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}', [RiwayatPendidikanMiliterController::class, 'update']);
            Route::delete('personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}', [RiwayatPendidikanMiliterController::class, 'destroy']);

            Route::get('personil/{id_personil}/pendidikan-umum', [RiwayatPendidikanUmumController::class, 'index']);
            Route::get('personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}', [RiwayatPendidikanUmumController::class, 'show']);
            Route::post('personil/{id_personil}/pendidikan-umum', [RiwayatPendidikanUmumController::class, 'store']);
            Route::post('personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}', [RiwayatPendidikanUmumController::class, 'update']);
            Route::delete('personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}', [RiwayatPendidikanUmumController::class, 'destroy']);

            Route::get('personil/{id_personil}/tugas-luar-negeri', [RiwayatPenugasanLuarNegeriController::class, 'index']);
            Route::get('personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}', [RiwayatPenugasanLuarNegeriController::class, 'show']);
            Route::post('personil/{id_personil}/tugas-luar-negeri', [RiwayatPenugasanLuarNegeriController::class, 'store']);
            Route::post('personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}', [RiwayatPenugasanLuarNegeriController::class, 'update']);
            Route::delete('personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}', [RiwayatPenugasanLuarNegeriController::class, 'destroy']);

            Route::get('personil/{id_personil}/tugas-operasi', [RiwayatPenugasanOperasiController::class, 'index']);
            Route::get('personil/{id_personil}/tugas-operasi/{id_tugas_operasi}', [RiwayatPenugasanOperasiController::class, 'show']);
            Route::post('personil/{id_personil}/tugas-operasi', [RiwayatPenugasanOperasiController::class, 'store']);
            Route::post('personil/{id_personil}/tugas-operasi/{id_tugas_operasi}', [RiwayatPenugasanOperasiController::class, 'update']);
            Route::delete('personil/{id_personil}/tugas-operasi/{id_tugas_operasi}', [RiwayatPenugasanOperasiController::class, 'destroy']);

            Route::get('personil/{id_personil}/tanda-jasa', [RiwayatTandaJasaController::class, 'index']);
            Route::get('personil/{id_personil}/tanda-jasa/{id_tanda_jasa}', [RiwayatTandaJasaController::class, 'show']);
            Route::post('personil/{id_personil}/tanda-jasa', [RiwayatTandaJasaController::class, 'store']);
            Route::post('personil/{id_personil}/tanda-jasa/{id_tanda_jasa}', [RiwayatTandaJasaController::class, 'update']);
            Route::delete('personil/{id_personil}/tanda-jasa/{id_tanda_jasa}', [RiwayatTandaJasaController::class, 'destroy']);

            Route::get('personil/{id_personil}/prestasi', [PrestasiController::class, 'index']);
            Route::get('personil/{id_personil}/prestasi/{id_prestasi}', [PrestasiController::class, 'show']);
            Route::post('personil/{id_personil}/prestasi', [PrestasiController::class, 'store']);
            Route::post('personil/{id_personil}/prestasi/{id_prestasi}', [PrestasiController::class, 'update']);
            Route::delete('personil/{id_personil}/prestasi/{id_prestasi}', [PrestasiController::class, 'destroy']);

            // Kompers Satjar category
            Route::get('kompers-satjar/category', [KompersSatjarCategorysController::class, 'index']);
            Route::post('kompers-satjar/category', [KompersSatjarCategorysController::class, 'store']);

            // Kompers Satjar
            Route::get('kompers-satjar', [KompersSatjarController::class, 'index']);
            Route::post('kompers-satjar', [KompersSatjarController::class, 'store']);
            Route::post('kompers-satjar/{id}', [KompersSatjarController::class, 'update']);
            Route::delete('kompers-satjar/{id}', [KompersSatjarController::class, 'destroy']);

            // Peta Jabatan
            Route::get('peta-jabatan', [PetaJabatanController::class, 'index']);
            Route::get('peta-jabatan/summary', [PetaJabatanController::class, 'summary']);
            Route::get('peta-jabatan/{id}', [PetaJabatanController::class, 'show']);
            Route::post('peta-jabatan', [PetaJabatanController::class, 'store']);
            Route::post('peta-jabatan/{id_personil}', [PetaJabatanController::class, 'update']);
            Route::delete('peta-jabatan/{id_personil}', [PetaJabatanController::class, 'destroy']);

            Route::get('user', [UserController::class, 'index']);
            Route::get('user/{id}', [UserController::class, 'show']);
            Route::post('user/{id}', [UserController::class, 'update']);
            Route::post('user-password/{id}', [UserController::class, 'updatePassword']);
            Route::post('user', [UserController::class, 'store']);
            Route::delete('user/{id}', [UserController::class, 'destroy']);

            Route::post('user-import/excel', [UserController::class, 'importExcel']);
            Route::get('user-download/excel', [UserController::class, 'exportExcel']);

            // User from another table data
            Route::get('user-from-chat/{id}', [UserController::class, 'fromChat']);

            // Satuan lambang
            Route::get('satuan/lambang', [SatuanLambangController::class, 'index']);
            Route::post('satuan/lambang', [SatuanLambangController::class, 'store']);
            Route::post('satuan/lambang/{id}', [SatuanLambangController::class, 'update']);
            Route::delete('satuan/lambang/{id}', [SatuanLambangController::class, 'destroy']);

            // Satuan tradisi
            Route::get('satuan/tradisi', [SatuanTradisiController::class, 'index']);
            Route::post('satuan/tradisi', [SatuanTradisiController::class, 'store']);
            Route::post('satuan/tradisi/{id}', [SatuanTradisiController::class, 'update']);
            Route::delete('satuan/tradisi/{id}', [SatuanTradisiController::class, 'destroy']);

            Route::get('satuan', [SatuanController::class, 'index']);
            Route::get('satuan/{id}', [SatuanController::class, 'show']);
            Route::post('satuan', [SatuanController::class, 'store']);
            Route::post('satuan/{id}', [SatuanController::class, 'update']);
            Route::delete('satuan/{id}', [SatuanController::class, 'destroy']);

            // Gol Jabatan
            Route::get('gol-jabatan', [GolJabatanController::class, 'index']);
            Route::post('gol-jabatan', [GolJabatanController::class, 'store']);
            Route::post('gol-jabatan/{id}', [GolJabatanController::class, 'update']);
            Route::delete('gol-jabatan/{id}', [GolJabatanController::class, 'destroy']);

            // Jabatan
            Route::get('jabatan', [JabatanController::class, 'index']);
            Route::post('jabatan', [JabatanController::class, 'store']);
            Route::post('jabatan/{id}', [JabatanController::class, 'update']);
            Route::delete('jabatan/{id}', [JabatanController::class, 'destroy']);

            // Pangkat
            Route::get('pangkat', [PangkatController::class, 'index']);
            Route::post('pangkat', [PangkatController::class, 'store']);
            Route::post('pangkat/{id}', [PangkatController::class, 'update']);
            Route::delete('pangkat/{id}', [PangkatController::class, 'destroy']);

            // Korps
            Route::get('korps', [KorpsController::class, 'index']);
            Route::post('korps', [KorpsController::class, 'store']);
            Route::post('korps/{id}', [KorpsController::class, 'update']);
            Route::delete('korps/{id}', [KorpsController::class, 'destroy']);

            Route::get('satuan-prestasi', [SatuanPrestasiController::class, 'index']);
            Route::get('satuan-prestasi/{id}', [SatuanPrestasiController::class, 'show']);
            Route::post('satuan-prestasi', [SatuanPrestasiController::class, 'store']);
            Route::post('satuan-prestasi/{id}', [SatuanPrestasiController::class, 'update']);
            Route::delete('satuan-prestasi/{id}', [SatuanPrestasiController::class, 'destroy']);

            Route::get('satuan-jabatan-dansat', [SatuanJabatanDansatController::class, 'index']);
            Route::get('satuan-jabatan-dansat/{id}', [SatuanJabatanDansatController::class, 'show']);
            Route::post('satuan-jabatan-dansat', [SatuanJabatanDansatController::class, 'store']);
            Route::post('satuan-jabatan-dansat/{id}', [SatuanJabatanDansatController::class, 'update']);
            Route::delete('satuan-jabatan-dansat/{id}', [SatuanJabatanDansatController::class, 'destroy']);

            Route::get('satuan-purnawirawan', [SatuanPurnawirawanController::class, 'index']);
            Route::get('satuan-purnawirawan/{id}', [SatuanPurnawirawanController::class, 'show']);
            Route::post('satuan-purnawirawan', [SatuanPurnawirawanController::class, 'store']);
            Route::post('satuan-purnawirawan/{id}', [SatuanPurnawirawanController::class, 'update']);
            Route::delete('satuan-purnawirawan/{id}', [SatuanPurnawirawanController::class, 'destroy']);

            Route::get('satuan-lain-lain', [SatuanLainLainController::class, 'index']);
            Route::get('satuan-lain-lain/{id}', [SatuanLainLainController::class, 'show']);
            Route::post('satuan-lain-lain', [SatuanLainLainController::class, 'store']);
            Route::post('satuan-lain-lain/{id}', [SatuanLainLainController::class, 'update']);
            Route::delete('satuan-lain-lain/{id}', [SatuanLainLainController::class, 'destroy']);

            Route::get('material', [MaterialController::class, 'index']);
            Route::get('material/{id}', [MaterialController::class, 'show']);
            Route::post('material/{id}', [MaterialController::class, 'update']);
            Route::post('material', [MaterialController::class, 'store']);
            Route::delete('material/{id}', [MaterialController::class, 'destroy']);

            Route::get('list/material/category', [MaterialController::class, 'getCategoryList']);

            Route::post('material-import/excel', [MaterialController::class, 'importExcel']);
            Route::get('material-download/excel', [MaterialController::class, 'exportExcel']);

            Route::prefix('master')->group(function () {
                Route::get('material-category', [MasterMaterialCategoryController::class, 'index']);
                Route::get('material-category/{id}', [MasterMaterialCategoryController::class, 'show']);
                Route::put('material-category/{id}', [MasterMaterialCategoryController::class, 'update']);
                Route::post('material-category', [MasterMaterialCategoryController::class, 'store']);
                Route::delete('material-category/{id}', [MasterMaterialCategoryController::class, 'destroy']);

                Route::get('binsiapsat-category', [MasterBinsiapsatCategoryController::class, 'index']);
                Route::get('binsiapsat-category/{id}', [MasterBinsiapsatCategoryController::class, 'show']);
                Route::put('binsiapsat-category/{id}', [MasterBinsiapsatCategoryController::class, 'update']);
                Route::post('binsiapsat-category', [MasterBinsiapsatCategoryController::class, 'store']);
                Route::delete('binsiapsat-category/{id}', [MasterBinsiapsatCategoryController::class, 'destroy']);
            });

            Route::get('binsiapsat/binsat/laplakgiat', [BinsiapsatBinsatLaplakgiatController::class, 'index']);
            Route::get('binsiapsat/binsat/laplakgiat/{id}', [BinsiapsatBinsatLaplakgiatController::class, 'show']);
            Route::post('binsiapsat/binsat/laplakgiat/{id}', [BinsiapsatBinsatLaplakgiatController::class, 'update']);
            Route::post('binsiapsat/binsat/laplakgiat', [BinsiapsatBinsatLaplakgiatController::class, 'store']);
            Route::delete('binsiapsat/binsat/laplakgiat/{id}', [BinsiapsatBinsatLaplakgiatController::class, 'destroy']);

            Route::get('binsiapsat/binsat/renlakgiat', [BinsiapsatBinsatRenlakgiatController::class, 'index']);
            Route::get('binsiapsat/binsat/renlakgiat/{id}', [BinsiapsatBinsatRenlakgiatController::class, 'show']);
            Route::post('binsiapsat/binsat/renlakgiat/{id}', [BinsiapsatBinsatRenlakgiatController::class, 'update']);
            Route::post('binsiapsat/binsat/renlakgiat', [BinsiapsatBinsatRenlakgiatController::class, 'store']);
            Route::delete('binsiapsat/binsat/renlakgiat/{id}', [BinsiapsatBinsatRenlakgiatController::class, 'destroy']);

            Route::get('binsiapsat/lapsat/lampiran', [BinsiapsatLapsatLampiranController::class, 'index']);
            Route::get('binsiapsat/lapsat/lampiran/{id}', [BinsiapsatLapsatLampiranController::class, 'show']);
            Route::post('binsiapsat/lapsat/lampiran/{id}', [BinsiapsatLapsatLampiranController::class, 'update']);
            Route::post('binsiapsat/lapsat/lampiran', [BinsiapsatLapsatLampiranController::class, 'store']);
            Route::delete('binsiapsat/lapsat/lampiran/{id}', [BinsiapsatLapsatLampiranController::class, 'destroy']);

            Route::get('binsiapsat/lapsat/induk', [BinsiapsatLapsatIndukController::class, 'index']);
            Route::get('binsiapsat/lapsat/induk/{id}', [BinsiapsatLapsatIndukController::class, 'show']);
            Route::post('binsiapsat/lapsat/induk/{id}', [BinsiapsatLapsatIndukController::class, 'update']);
            Route::post('binsiapsat/lapsat/induk', [BinsiapsatLapsatIndukController::class, 'store']);
            Route::delete('binsiapsat/lapsat/induk/{id}', [BinsiapsatLapsatIndukController::class, 'destroy']);

            Route::get('binsiapsat/induk', [BinsiapsatIndukController::class, 'index']);
            Route::get('binsiapsat/induk/{id}', [BinsiapsatIndukController::class, 'show']);
            Route::post('binsiapsat/induk/{id}', [BinsiapsatIndukController::class, 'update']);
            Route::post('binsiapsat/induk', [BinsiapsatIndukController::class, 'store']);
            Route::delete('binsiapsat/induk/{id}', [BinsiapsatIndukController::class, 'destroy']);

            Route::get('binsiapsat', [BinsiapsatController::class, 'index']);
            Route::get('binsiapsat/{id}', [BinsiapsatController::class, 'show']);
            Route::post('binsiapsat/{id}', [BinsiapsatController::class, 'update']);
            Route::post('binsiapsat', [BinsiapsatController::class, 'store']);
            Route::delete('binsiapsat/{id}', [BinsiapsatController::class, 'destroy']);

            // Siapsat
            Route::get('siapsat', [SiapsatController::class, 'index']);
            Route::get('siapsat/{id}', [SiapsatController::class, 'show']);
            Route::post('siapsat/{id}', [SiapsatController::class, 'update']);
            Route::post('siapsat', [SiapsatController::class, 'store']);
            Route::delete('siapsat/{id}', [SiapsatController::class, 'destroy']);

            // // Leaning
            Route::get('learning', [LearningController::class, 'index']);
            Route::post('learning', [LearningController::class, 'store']);
            Route::post('learning/{id}', [LearningController::class, 'update']);
            Route::delete('learning/{id}', [LearningController::class, 'destroy']);

            Route::get('chat', [ChatController::class, 'index']);
            Route::post('chat', [ChatController::class, 'store']);
            Route::post('chat-download', [ChatController::class, 'download']);

            Route::get('role', [RoleAdminController::class, 'index']);
            Route::get('role/{id}', [RoleAdminController::class, 'show']);
            Route::post('role/{id}', [RoleAdminController::class, 'update']);
            Route::post('role', [RoleAdminController::class, 'store']);
            Route::delete('role/{id}', [RoleAdminController::class, 'destroy']);

            Route::get('permission', [PermissionAdminController::class, 'index']);
            Route::get('permission/{id}', [PermissionAdminController::class, 'show']);
            Route::post('permission/{id}', [PermissionAdminController::class, 'update']);
            Route::post('permission', [PermissionAdminController::class, 'store']);
            Route::delete('permission/{id}', [PermissionAdminController::class, 'destroy']);

            Route::get('role-permission', [RoleHasPermissionController::class, 'index']);

            Route::get('agama', [AgamaAdminController::class, 'index']);
            Route::get('agama/{id}', [AgamaAdminController::class, 'show']);
            Route::post('agama/{id}', [AgamaAdminController::class, 'update']);
            Route::post('agama', [AgamaAdminController::class, 'store']);
            Route::delete('agama/{id}', [AgamaAdminController::class, 'destroy']);

            Route::get('user-permission/{id}', [UserPermissionAdminController::class, 'show']);
            Route::post('user-permission/{id}', [UserPermissionAdminController::class, 'update']);
            Route::post('user-permission', [UserPermissionAdminController::class, 'store']);

            Route::get('user-personil/{id}', [UserPersonilAdminController::class, 'show']);
            Route::post('user-personil/{id}', [UserPersonilAdminController::class, 'update']);
            Route::post('user-personil', [UserPersonilAdminController::class, 'store']);

            // Help Center
            Route::get('help/ticket', [HelpTicketController::class, 'index']);
            Route::post('help/ticket', [HelpTicketController::class, 'store']);
        });

        Route::group([
            'prefix' => 'searcher',
            // 'middleware' => ['jwt.role:2']
        ], function () {

            // Binsiapsat
            Route::get('binsiapsat/binsat/renlakgiat', [BinsiapsatBinsatRenlakgiatSearcherController::class, 'index']);
            Route::get('binsiapsat/binsat/laplakgiat', [BinsiapsatBinsatLaplakgiatSearcherController::class, 'index']);

            Route::get('binsiapsat/lapsat/induk', [BinsiapsatLapsatIndukSearcherController::class, 'index']);
            Route::get('binsiapsat/lapsat/lampiran', [BinsiapsatLapsatLampiranSearcherController::class, 'index']);

            Route::get('personil', [PersonilSearcherController::class, 'index']);
            Route::get('personil/{id}', [PersonilSearcherController::class, 'show']);

            Route::get('list/personil/satuan', [PersonilSearcherController::class, 'getSatuan']);
            Route::get('list/personil/suku-bangsa', [PersonilSearcherController::class, 'getSukuBangsa']);
            Route::get('list/personil/agama', [PersonilSearcherController::class, 'getAgama']);
            Route::get('list/personil/sumber-pa', [PersonilSearcherController::class, 'getSumberPA']);
            Route::get('list/personil/golongan-darah', [PersonilSearcherController::class, 'getGolonganDarah']);

            Route::get('personil/{id_personil}/jabatan', [RiwayatJabatanSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/jabatan/{id_jabatan}', [RiwayatJabatanSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/keluarga', [RiwayatKeluargaSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/keluarga/{id_keluarga}', [RiwayatKeluargaSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/keluarga/{id_keluarga}/anak', [RiwayatKeluargaAnakSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/keluarga/{id_keluarga}/anak/{id_anak}', [RiwayatKeluargaAnakSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/bahasa', [RiwayatKemampuanBahasaSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/bahasa/{id_bahasa}', [RiwayatKemampuanBahasaSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/pangkat', [RiwayatKepangkatanSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/pangkat/{id_pangkat}', [RiwayatKepangkatanSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/pendidikan-militer', [RiwayatPendidikanMiliterSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/pendidikan-militer/{id_pendidikan_militer}', [RiwayatPendidikanMiliterSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/pendidikan-umum', [RiwayatPendidikanUmumSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/pendidikan-umum/{id_pendidikan_umum}', [RiwayatPendidikanUmumSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/tugas-luar-negeri', [RiwayatPenugasanLuarNegeriSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/tugas-luar-negeri/{id_tugas_luar_negeri}', [RiwayatPenugasanLuarNegeriSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/tugas-operasi', [RiwayatPenugasanOperasiSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/tugas-operasi/{id_tugas_operasi}', [RiwayatPenugasanOperasiSearcherController::class, 'show']);

            Route::get('personil/{id_personil}/tanda-jasa', [TandaJasaSearcherController::class, 'index']);
            Route::get('personil/{id_personil}/tanda-jasa/{id_tanda_jasa}', [TandaJasaSearcherController::class, 'show']);

            Route::get('material', [MaterialSearcherController::class, 'index']);
            Route::get('material/{id}', [MaterialSearcherController::class, 'show']);
            Route::get('material-recommendation', [MaterialSearcherController::class, 'material_recommended']);

            Route::get('list/material/category', [MaterialSearcherController::class, 'getCategoryList']);

            Route::get('satuan', [SatuanSearcherController::class, 'index']);
            Route::get('satuan/{id}', [SatuanSearcherController::class, 'show']);
        });
    });
