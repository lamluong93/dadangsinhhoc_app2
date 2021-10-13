<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\ChuyenDoiMucDichSuDungDat;
use App\Models\TuDien;
use App\Models\KhuBaoTon;

class ChuyenDoiMucDichSuDungDatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Chuyển đổi mục đích sử dụng đất';
        $nav = 'Chuyển đổi mục đích sử dụng đất';
        $type = 1;
        $data = ChuyenDoiMucDichSuDungDat::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.chuyendoimucdichsudungdat', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Chuyển đổi mục đích sử dụng đất';
        $nav = 'Chuyển đổi mục đích sử dụng đất';
        $type = 1;
        $diadiem = KhuBaoTon::select('id', 'ten')->get();
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dadangsinhhoctphanoi.chuyendoimucdichsudungdat-new', compact(['title', 'nav', 'type', 'diadiem', 'tudien']));
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
                'tenduan' => 'required',
                'loaidat2' => 'required|numeric',
                'dientich' => 'nullable|numeric',
                'thoigian' => 'nullable|digits_between:4,4',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tenduan.required' => 'Tên dự án không được để trống',
                'loaidat2.required' => 'Loại đất chuyển đổi không được để trống',
                'dientich.numeric' => 'Diện tích chuyển đổi phải là kiểu số',
                'thoigian.digits_between' => 'Thời gian (Năm) phải là số có 4 chữ số',
            ]
        );

        // print_r($request->all());
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        ChuyenDoiMucDichSuDungDat::create([
            'tenduan' => $request->input('tenduan'),
            'mucdichchuyendoi' => $request->input('mucdich2'),
            'loaidatchuyendoi' => $request->input('loaidat2'),
            'dientich' => $request->input('dientich'),
            'diadiem_id' => $request->input('diadiem'),
            'thoigian' => $request->input('thoigian'),
            'huyen' => str_replace("\n", '<br>', $request->input('huyen') ),
            'xa' => str_replace("\n", '<br>', $request->input('xa') ),
            'nguondulieu' => str_replace("\n", '<br>', $request->input('nguondulieu') ),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.chuyenmucdichsudungdat')->with('message', 1);
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
