<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\LoaiNguonGen;
use App\Models\NguonGen;
use App\Models\TuDien;

class NguonGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dữ liệu nguồn gen';
        $nav = 'Gen';
        $type = 1;
        $data = NguonGen::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dulieudadangsinhhoc.nguongen.nguongen', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Dữ liệu nguồn gen';
        $nav = 'Gen';
        $type = 1;
        $tudien = TuDien::select('id', 'type')->get();
        $loainguongen = LoaiNguonGen::select('id', 'ten')->get();
        return view('administrator.dulieudadangsinhhoc.nguongen.nguongen-new', compact(['title', 'nav', 'type', 'tudien', 'loainguongen']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                '_token' => 'required',
                'loainguongen' => 'required|numeric',
                'ten' => 'required',
                'tinhtrangluugiu1' => 'required|numeric',
                'tinhtrangnghiencuu1' => 'required|numeric',
                'thoigianbatdau' => 'nullable|numeric',
                'dientichluugiu' => 'nullable|numeric',
                'maso_qg' => 'max:20',
                'masotinh' => 'max:15',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'ten.required' => 'Không được để trống tên',
                'loainguongen.required' => 'Không được để trống trường loại nguồn gen',
                'tinhtrangluugiu1.required' => 'Không được để trống trường tình trạng lưu trữ',
                'tinhtrangnghiencuu1.required' => 'Không được để trống trường tình trạng nghiên cứu',
                'thoigianbatdau.numeric' => 'Thời gian bắt đầu lưu giữ phải là số',
                'dientichluugiu.numeric' => 'Diện tích lưu giữ phải là số',
                'maso_qg.max' => 'Độ dài mã số quốc gia tối đa là 20 ký tự',
                'masotinh.max' => 'Độ dài mã số tỉnh tối đa là 15 ký tự',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        NguonGen::create([
            'loainguongen_id' => $request->input('loainguongen'),
            'ten' => $request->input('ten'),
            'tenthongthuong' => $request->input('tenthongthuong'),
            'tendantoc' => $request->input('tendantoc'),
            'tenkhoahoc' => $request->input('tenkhoahoc'),
            'dacdiem' => $request->input('dacdiem'),
            'maso_qg' => $request->input('msnguongen'),
            'masotinh' => $request->input('msnguongen1'),
            'tinhtrangluugiu' => $request->input('tinhtrangluugiu1'),
            'tinhtrangnghiencuu' => $request->input('tinhtrangnghiencuu1'),
            'tinhtrangsudung' => $request->input('tinhtrangsudung1'),
            'nguongoc' => $request->input('nguongoc1'),
            'xuatxu' => $request->input('xuatxu'),
            'phuongthucluutru' => $request->input('phuongthucluugiu1'),
            'dientichluutru' => $request->input('dientichluugiu'),
            'vatlieuditruyenluutru' => $request->input('vatlieuditruyen'),
            'slvatlieuditruyen' => $request->input('slvatlieuditruyen'),
            'thoigianbatdauluugiu' => $request->input('thoigianbatdau'),
            'hinhthucbaoquan' => $request->input('baoquan'),
            'genquyhiem' => $request->input('genquyhiem1'),
            'banchatditruyen' => $request->input('banchat1'),
            'tinhtrang' => $request->input('tinhtrang1'),
            'bienphapbaoton' => $request->input('bienphapbaoton'),
            'khanangtiepcan' => $request->input('khanangtiepcan'),
            'quytrinhtiepcan' => str_replace( "\n", '<br>', $request->input('quytrinhtiepcan') ),
            'genco_dk' => $request->input('gencodk1'),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dulieudadangsinhhoc.nguongen')->with('message', 1);
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
