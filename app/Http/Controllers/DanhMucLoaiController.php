<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\DongDanh;
use App\Models\Gioi;
use App\Models\Nganh;
use App\Models\Lop;
use App\Models\Bo;
use App\Models\Ho;
use App\Models\Chi;
use App\Models\Loai;
use App\Models\PhanLoaiHoc;
use App\Models\DuoiLoai;

class DanhMucLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh mục loài';
        $nav = 'Danh mục loài  ';
        $type = 1;
        $data1 = Gioi::all();
        $data2 = Nganh::all();
        $data3 = Lop::all();
        $data4 = Bo::all();
        $data5 = Ho::all();
        $data6 = Chi::all();
        $data7 = Loai::all();
        $data8 = DuoiLoai::all();
        $data9 = DongDanh::all();
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.danhmucloai', compact(['title', 'nav', 'type', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm dữ liệu | Danh mục loài';
        $nav = 'Danh mục loài  ';
        $type = 1;
        $nhom = [];
        $dongdanh = DongDanh::select('id', 'ten')->orderBy('ten')->get();
        $gioi = Gioi::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $nganh = Nganh::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $lop = Lop::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $bo = Bo::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $ho = Ho::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $chi = Chi::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $loai = Loai::select('id', 'tenkhoahoc', 'tentiengviet')->orderBy('tenkhoahoc')->get();
        $phanloaihoc = PhanLoaiHoc::select('id', 'tenkhoahoc')->orderBy('tenkhoahoc')->get();
        return view('administrator.dulieudadangsinhhoc.bacphanloaihoc.danhmucloai-new', compact(['title', 'nav', 'type', 'nhom', 'dongdanh', 'gioi', 'nganh', 'lop', 'bo', 'ho', 'chi', 'loai', 'phanloaihoc']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request->input('phanloaihoc')) {
            case 0:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Gioi::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 1:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'gioiid' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'gioiid.required' => 'Trường Giới (Kingdom) không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Nganh::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'gioi_id' => $request->input('gioiid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 2:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'nganhid' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'nganhid.required' => 'Trường Ngành (Phylum) không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Lop::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'nganh_id' => $request->input('nganhid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 3:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'lopid' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'lopid.required' => 'Trường Lớp (Class) không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Bo::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'lop_id' => $request->input('lopid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 4:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Ho::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'bo_id' => $request->input('boid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 5:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Chi::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'ho_id' => $request->input('hoid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 6:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'chuanphanloai' => 'required',
                        'trangthai' => 'required',
                        'chiid' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'trangthai.required' => 'Trường Trạng thái không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                        'chiid.required' => 'Trường Chi (Genus) không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                Loai::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'maloai' => $request->input('maloai'),
                    'chi_id' => $request->input('chiid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                    'trangthai' => $request->input('trangthai'),
                    'dongdanh_id' => $request->input('dongdanhid'),
                ]);

                return back()->with('message', 1); break;
            case 7:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'tenkhoahoc' => 'required',
                        'chuanphanloai' => 'required',
                        'bacphanloai' => 'required',
                        'loaiid' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'tenkhoahoc.required' => 'Trường Tên khoa học không được để trống',
                        'bacphanloai.required' => 'Trường Bậc phân loại không được để trống',
                        'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                        'loaiid.required' => 'Trường Loài (Species) không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                DuoiLoai::create([
                    'tenkhoahoc' => $request->input('tenkhoahoc'),
                    'tentiengviet' => $request->input('tentiengviet'),
                    'bacphanloai' => $request->input('bacphanloai'),
                    'loai_id' => $request->input('loaiid'),
                    'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
                    'chuanphanloai' => $request->input('chuanphanloai'),
                ]);

                return back()->with('message', 1); break;
            case 8:
                $validator = Validator::make($request->all(), [
                        '_token' => 'required',
                        'phanloaihocid' => 'required',
                        // 'chuanphanloai' => 'required',
                        // 'bacphanloai' => 'required',
                        // 'loaiid' => 'required',
                    ],
                    [
                        '_token.required' => 'Lỗi cài đặt bảo mật Form',
                        'phanloaihocid.required' => 'Trường Phân loại học không được để trống',
                        // 'bacphanloai.required' => 'Trường Bậc phân loại không được để trống',
                        // 'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
                        // 'loaiid.required' => 'Trường Loài (Species) không được để trống',
                    ]
                );
        
                if ($validator->fails()) return back()->withErrors($validator)->withInput();

                DongDanh::create([
                    'ten' => $request->input('ten_dd'),
                    'nguondulieu' => $request->input('nguondulieu_dd'),
                    'mota' => $request->input('mota_dd'),
                    // 'mota' => str_replace("\n", '<br>', $request->input('mota_dd') ),
                    'phanloaihoc_id' => $request->input('phanloaihocid'),
                ]);

                return back()->with('message', 1); break;
            default:
                return back()->withErrors('Null');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
