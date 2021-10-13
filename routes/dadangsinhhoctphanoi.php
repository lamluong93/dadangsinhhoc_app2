<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TuDienController;
use App\Http\Controllers\KinhPhiController;
use App\Http\Controllers\LoadTuDienController;
use App\Http\Controllers\HopTacQuocTeController;
use App\Http\Controllers\ToChucController;
use App\Http\Controllers\MoHinhSangKienController;
use App\Http\Controllers\ChuongTrinhDeTaiDuAnController;
use App\Http\Controllers\DanhMucChiThiController;
use App\Http\Controllers\DanhMucThongSoController;
use App\Http\Controllers\BaoCaoApLucLenDDSHController;
use App\Http\Controllers\TangDanSoVungDemController;
use App\Http\Controllers\ChuyenDoiMucDichSuDungDatController;
use App\Http\Controllers\KhaiThacQuaMucChoPhepController;
use App\Http\Controllers\BoDuLieuController;

use App\Http\Controllers\QuanHuyenController;
use App\Http\Controllers\NhomNguonGenController;
use App\Http\Controllers\LoaiNguonGenController;
use App\Http\Controllers\NguonGenController;

use App\Http\Controllers\DanhMucLoaiController;

use App\Http\Controllers\OTieuChuanController;

use App\Models\TuDien;

Route::prefix('/dashboard/da-dang-sinh-hoc-ha-noi')->group(function(){
    // Kinh phí
    Route::get('/kinh-phi', [KinhPhiController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.kinhphi');
    Route::get('/kinh-phi/them-moi', [KinhPhiController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.kinhphi-create');
    Route::post('/kinh-phi/them-moi', [KinhPhiController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.kinhphi-create-post');

    // Hợp tác quốc tế
    Route::get('/hop-tac-quoc-te', [HopTacQuocTeController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.hoptacquocte');
    Route::get('/hop-tac-quoc-te/chi-tiet/{value}', [HopTacQuocTeController::class, 'show'])->middleware(['auth'])->name('dadangsinhhochanoi.hoptacquocte-chitiet');
    Route::get('/hop-tac-quoc-te/them-moi', [HopTacQuocTeController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.hoptacquocte-create');
    Route::post('/hop-tac-quoc-te/them-moi', [HopTacQuocTeController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.hoptacquocte-create-post');

    // mo hinh sang kien
    Route::get('/mo-hinh-sang-kien', [MoHinhSangKienController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.mohinhsangkien');
    Route::get('/mo-hinh-sang-kien/them-moi', [MoHinhSangKienController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.mohinhsangkien-create');
    Route::post('/mo-hinh-sang-kien/them-moi', [MoHinhSangKienController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.mohinhsangkien-create-post');
    
    // Chuong trình de tai du an
    Route::get('/chuong-trinh-de-tai-da-an-svnlxh', [ChuongTrinhDeTaiDuAnController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.chuongtrinhdetaiduan');
    Route::get('/chuong-trinh-de-tai-da-an-svnlxh/them-moi', [ChuongTrinhDeTaiDuAnController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.chuongtrinhdetaiduan-create');
    Route::post('/chuong-trinh-de-tai-da-an-svnlxh/them-moi', [ChuongTrinhDeTaiDuAnController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.chuongtrinhdetaiduan-create-post');

    // Áp lực lên đa dạng sinh học
    Route::get('/nhom-chi-thi', function () {
        $title = 'Danh mục nhóm chỉ thị';
        $nav = 'Danh mục nhóm chỉ thị';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.nhomchithi', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.nhomchithi');

    Route::get('/chi-thi', [DanhMucChiThiController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.chithi');
    Route::get('/chi-thi/them-moi', [DanhMucChiThiController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.chithi-create');
    Route::post('/chi-thi/them-moi', [DanhMucChiThiController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.chithi-create-post');

    Route::get('/thong-so', [DanhMucThongSoController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.thongso');
    Route::get('/thong-so/them-moi', [DanhMucThongSoController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.thongso-create');
    Route::post('/thong-so/them-moi', [DanhMucThongSoController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.thongso-create-post');

    Route::get('/bao-cao-ap-luc-len-da-dang-sinh-hoc', [BaoCaoApLucLenDDSHController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.baocaoapluclenddsh');
    Route::get('/bao-cao-ap-luc-len-da-dang-sinh-hoc/them-moi', [BaoCaoApLucLenDDSHController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.baocaoapluclenddsh-create');
    Route::post('/bao-cao-ap-luc-len-da-dang-sinh-hoc/them-moi', [BaoCaoApLucLenDDSHController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.baocaoapluclenddsh-create-post');

    Route::get('/tang-dan-so-vung-dem', [TangDanSoVungDemController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.tangdansovungdem');
    Route::get('/tang-dan-so-vung-dem/them-moi', [TangDanSoVungDemController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.tangdansovungdem-create');
    Route::post('/tang-dan-so-vung-dem/them-moi', [TangDanSoVungDemController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.tangdansovungdem-create-post');

    Route::get('/chuyen-doi-muc-dich-su-dung-dat', [ChuyenDoiMucDichSuDungDatController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.chuyenmucdichsudungdat');
    Route::get('/chuyen-doi-muc-dich-su-dung-dat/them-moi', [ChuyenDoiMucDichSuDungDatController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.chuyenmucdichsudungdat-create');
    Route::post('/chuyen-doi-muc-dich-su-dung-dat/them-moi', [ChuyenDoiMucDichSuDungDatController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.chuyenmucdichsudungdat-create-post');

    Route::get('/khai-thac-qua-muc-cho-phep', [KhaiThacQuaMucChoPhepController::class, 'index'])->middleware(['auth'])->name('dadangsinhhochanoi.khaithacquamucchophep');
    Route::get('/khai-thac-qua-muc-cho-phep/them-moi', [KhaiThacQuaMucChoPhepController::class, 'create'])->middleware(['auth'])->name('dadangsinhhochanoi.khaithacquamucchophep-create');
    Route::post('/khai-thac-qua-muc-cho-phep/them-moi', [KhaiThacQuaMucChoPhepController::class, 'store'])->middleware(['auth'])->name('dadangsinhhochanoi.khaithacquamucchophep-create-post');

    Route::get('/o-nhiem-moi-truong', function () {
        $title = 'Ô nhiễm môi trường, cháy rừng, biến đổi khí hậu';
        $nav = 'Ô nhiễm môi trường, cháy rừng, biến đổi khí hậu';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.onhiemmoitruong', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.onhiemmoitruong');

    Route::get('/sinh-vat-ngoai-lai-xam-hai', function () {
        $title = 'Sinh vật ngoại lai xâm hại';
        $nav = 'Sinh vật ngoại lai xâm hại';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.sinhvatngoailaixamhai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.sinhvatngoailaixamhai');

    Route::get('/vi-pham-xu-phat-hanh-chinh-hinh-su', function () {
        $title = 'Vi phạm xử phạt hành chính và hình sự';
        $nav = 'Vi phạm xử phạt hành chính và hình sự';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.viphamxuphat', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.viphamxuphat');

    Route::get('/hoat-dong-du-lich', function () {
        $title = 'Hoạt động du lịch';
        $nav = 'Hoạt động du lịch';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.hoatdongdulich', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.hoatdongdulich');

    Route::get('/loai-hinh-quan-trac', function () {
        $title = 'Loại hình quan trắc';
        $nav = 'Loại hình quan trắc';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.loaihinhquantrac', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.loaihinhquantrac');

    Route::get('/thong-so-quan-trac', function () {
        $title = 'Thông số quan trắc';
        $nav = 'Thông số quan trắc';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.thongsoquantrac', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.thongsoquantrac');

    Route::get('/diem-quan-trac', function () {
        $title = 'Điểm quan trắc';
        $nav = 'Điểm quan trắc';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.diemquantrac', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.diemquantrac');

    Route::get('/ket-qua-quan-trac', function () {
        $title = 'Kết quả quan trắc';
        $nav = 'Kết quả quan trắc';
        $type = 1;
        return view('administrator.dadangsinhhoctphanoi.ketquaquantrac', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dadangsinhhochanoi.ketquaquantrac');
});

Route::prefix('/dashboard/du-lieu-da-dang-sinh-hoc')->group(function(){
    // Thông tin chung
    Route::get('/bo-du-lieu', [BoDuLieuController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.bodulieu');
    Route::get('/bo-du-lieu/them-moi', [BoDuLieuController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.bodulieu-create');
    Route::post('/bo-du-lieu/them-moi', [BoDuLieuController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.bodulieu-create-post');
    Route::get('/bo-du-lieu/chi-tiet/{value}', [BoDuLieuController::class, 'show'])->middleware(['auth'])->name('dulieudadangsinhhoc.bodulieu-show');

    Route::get('/tai-lieu-tham-khao-bo-du-lieu', function () {
        $title = 'Tài liệu tham khảo bộ dữ liệu';
        $nav = 'Tài liệu tham khảo bộ dữ liệu';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.thongtinchung.tailieuthamkhaobodulieu', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.tailieuthamkhaobodulieu');

    Route::get('/khu-bao-ton', function () {
        $title = 'Khu bảo tồn';
        $nav = 'Khu bảo tồn';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.thongtinchung.khubaoton', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.khubaoton');

    Route::get('/o-tieu-chuan', [OTieuChuanController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.otieuchuan');
    Route::get('/o-tieu-chuan/them-moi', [OTieuChuanController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.otieuchuan-create');
    Route::post('/o-tieu-chuan/them-moi', [OTieuChuanController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.otieuchuan-create-post');

    Route::get('/co-so-bao-ton-nguon-gen', function () {
        $title = 'Cơ sở bảo tồn nguồn gen';
        $nav = 'Cơ sở bảo tồn';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.thongtinchung.cosobaotonnguongen', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.cosobaotonnguongen');

    // Sự đa dạng các hệ sinh thái
    Route::get('/phan-loai-he-sinh-thai', function () {
        $title = 'Phân loại hệ sinh thái';
        $nav = 'Phân loại hệ sinh thái';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.phanloaihesinhthai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.phanloaihesinhthai');

    Route::get('/he-sinh-thai', function () {
        $title = 'Hệ sinh thái';
        $nav = 'Hệ sinh thái  ';
        $type = 0;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.hesinhthai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hesinhthai');

    Route::get('/he-sinh-thai-rung-tren-can', function () {
        $title = 'Hệ sinh thái rừng trên cạn';
        $nav = 'Hệ sinh thái rừng trên cạn';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.hesinhthairungtrencan', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hesinhthairungtrencan');

    Route::get('/he-sinh-thai-trang-co-cay-bui', function () {
        $title = 'Hệ sinh thái trảng cỏ, cây bụi';
        $nav = 'Hệ sinh thái trảng cỏ, cây bụi';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.hesinhthaicotrangcaybui', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hesinhthaicotrangcaybui');

    Route::get('/he-sinh-thai-dat-ngap-nuoc', function () {
        $title = 'Hệ sinh thái đất ngập nước';
        $nav = 'Hệ sinh thái đất ngập nước';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.hesinhthaidatngapnuoc', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hesinhthaidatngapnuoc');

    Route::get('/he-sinh-thai-dan-cu-nong-nghiep', function () {
        $title = 'Hệ sinh thái khu dân cư đô thị, dân cư nông thôn, nông nghiệp';
        $nav = 'Hệ sinh thái khu dân cư đô thị, dân cư nông thôn, nông nghiệp';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.hesinhthaidancunongnghiep', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hesinhthaidancunongnghiep');

    Route::get('/dich-vu-he-sinh-thai', function () {
        $title = 'Dịch vụ hệ sinh thái';
        $nav = 'Dịch vụ hệ sinh thái';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.sudangdangcachesinhthai.dichvuhesinhthai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.dichvuhesinhthai');

    // Bậc phân loại học
    Route::get('/danh-muc-loai', [DanhMucLoaiController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.danhmucloai');
    Route::get('/danh-muc-loai/them-moi', [DanhMucLoaiController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.danhmucloai-create');
    Route::post('/danh-muc-loai/them-moi', [DanhMucLoaiController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.danhmucloai-create-post');

    Route::get('/nganh', function () {
        $title = 'Ngành';
        $nav = 'Ngành';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.nganh', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.nganh');

    Route::get('/lop', function () {
        $title = 'Lớp';
        $nav = 'Lớp';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.lop', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.lop');

    Route::get('/bo', function () {
        $title = 'Bộ';
        $nav = 'Bộ  ';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.bo', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.bo');

    Route::get('/ho', function () {
        $title = 'Họ';
        $nav = 'Họ';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.ho', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.ho');

    Route::get('/chi', function () {
        $title = 'Chi';
        $nav = 'Chi';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.chi', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.chi');

    Route::get('/loai', function () {
        $title = 'Loài';
        $nav = 'Loài';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.loai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.loai');

    Route::get('/duoi-loai', function () {
        $title = 'Dưới loài';
        $nav = 'Dưới loài';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.duoiloai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.duoiloai');

    Route::get('/dong-danh', function () {
        $title = 'Đồng danh';
        $nav = 'Đồng danh';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.dongdanh', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.dongdanh');

    Route::get('/phan-loai-hoc', function () {
        $title = 'Phân loại học';
        $nav = 'Phân loại học';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.phanloaihoc', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.phanloaihoc');

    Route::get('/thong-tin-bo-sung-phan-loai-hoc', function () {
        $title = 'Thông tin bổ sung phân loại học';
        $nav = 'Thông tin bổ sung phân loại học';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.bosungphanloaihoc', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.bosungphanloaihoc');

    Route::get('/hinh-anh-loai', function () {
        $title = 'Hình ảnh loài';
        $nav = 'Hình ảnh loài';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.hinhanhloai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.hinhanhloai');

    Route::get('/phat-hien-loai', function () {
        $title = 'Phát hiện loài';
        $nav = 'Phát hiện loài';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.phathienloai', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.phathienloai');

    // Danh lục IUCN, công ước Cites, sách đỏ việt nam 2007, NĐ 06, NĐ 64
    Route::get('/danh-luc-iucn', function () {
        $title = 'Tình trạng đe dọa theo danh lục IUCN';
        $nav = 'Tình trạng đe dọa theo danh lục IUCN';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.danhluc.danhluciucn', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.danhluciucn');

    Route::get('/phu-luc-cong-uoc-cites', function () {
        $title = 'Tình trạng đe dọa theo phụ lục công ước cites';
        $nav = 'Tình trạng đe dọa theo phụ lục công ước cites';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.danhluc.phulucconguoccites', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.phulucconguoccites');

    Route::get('/sach-do-viet-nam', function () {
        $title = 'Tình trạng đe dọa theo sách đỏ Việt Nam';
        $nav = 'Tình trạng đe dọa theo sách đỏ Việt Nam';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.danhluc.sachdovietnam', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.sachdovietnam');

    Route::get('/nghi-dinh', function () {
        $title = 'Tình trạng đe dọa theo nghị định';
        $nav = 'Tình trạng đe dọa theo nghị định';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.danhluc.nghidinh', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.nghidinh');

    // Dữ liệu nguồn gen
    Route::get('/nhom-nguon-gen', [NhomNguonGenController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.nhomnguongen');
    Route::get('/nhom-nguon-gen/them-moi', [NhomNguonGenController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.nhomnguongen-create');
    Route::post('/nhom-nguon-gen/them-moi', [NhomNguonGenController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.nhomnguongen-create-post');

    Route::get('/loai-nguon-gen', [LoaiNguonGenController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.loainguongen');
    Route::get('/loai-nguon-gen/them-moi', [LoaiNguonGenController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.loainguongen-create');
    Route::post('/loai-nguon-gen/them-moi', [LoaiNguonGenController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.loainguongen-create-post');

    Route::get('/nguon-gen', [NguonGenController::class, 'index'])->middleware(['auth'])->name('dulieudadangsinhhoc.nguongen');
    Route::get('/nguon-gen/them-moi', [NguonGenController::class, 'create'])->middleware(['auth'])->name('dulieudadangsinhhoc.nguongen-create');
    Route::post('/nguon-gen/them-moi', [NguonGenController::class, 'store'])->middleware(['auth'])->name('dulieudadangsinhhoc.nguongen-create-post');

    Route::get('/thong-tin-luu-tru-nguon-gen', function () {
        $title = 'Thông tin lưu trữ nguồn gen';
        $nav = 'Thông tin lưu trữ nguồn gen';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.nguongen.luutrunguongen', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.luutrunguongen');

    Route::get('/tri-thuc-truyen-thong', function () {
        $title = 'Tri thức truyền thống';
        $nav = 'Tri thức truyền thống';
        $type = 1;
        return view('administrator.dulieudadangsinhhoc.nguongen.trithuctruyenthong', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudadangsinhhoc.trithuctruyenthong');
});

// Dữ liệu danh mục
Route::prefix('/dashboard/du-lieu-danh-muc')->group(function () {
    Route::get('/quan-huyen-thi-xa', [QuanHuyenController::class, 'index'])->middleware(['auth'])->name('dulieudanhmuc.quanhuyen');
    Route::get('/quan-huyen-thi-xa/them-moi', [QuanHuyenController::class, 'create'])->middleware(['auth'])->name('dulieudanhmuc.quanhuyen-create');
    Route::post('/quan-huyen-thi-xa/them-moi', [QuanHuyenController::class, 'store'])->middleware(['auth'])->name('dulieudanhmuc.quanhuyen-create-post');

    Route::get('/xa-phuong-thi-tran', function (){
        $title = 'Thông tin xã, phường, thị trấn';
        $nav = 'Thông tin xã, phường, thị trấn';
        $type = 1;
        return view('administrator.dulieudanhmuc.diagioihanhchinh.xaphuong', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudanhmuc.xaphuong');

    // To chuc
    Route::get('/to-chuc', [ToChucController::class, 'index'])->middleware(['auth'])->name('dulieudanhmuc.tochuc');
    Route::get('/to-chuc/them-moi', [ToChucController::class, 'create'])->middleware(['auth'])->name('dulieudanhmuc.tochuc-create');
    Route::post('/to-chuc/them-moi', [ToChucController::class, 'store'])->middleware(['auth'])->name('dulieudanhmuc.tochuc-create-post');

    // Từ điển
    Route::get('/tu-dien', [TuDienController::class, 'index'])->middleware(['auth'])->name('dulieudanhmuc.tudien');
    Route::post('/tu-dien', [TuDienController::class, 'store'])->middleware(['auth'])->name('tudien-post');

    Route::get('/quan-ly-nguoi-dung', function (){
        $title = 'Quản lý người dùng';
        $nav = 'Quản lý người dùng';
        $type = 0;
        return view('administrator.dulieudanhmuc.hethong.nguoidung', compact(['title', 'nav', 'type']));
    })->middleware(['auth'])->name('dulieudanhmuc.nguoidung');
});

// load ajax tudien
Route::post('/dashboard/load-tudien', [LoadTuDienController::class, 'index'])->middleware(['auth'])->name('dashboard.loadtudien');