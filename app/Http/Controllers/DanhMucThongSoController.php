<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\DanhMucThongSo;
use App\Models\DanhMucChiThi;

class DanhMucThongSoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh mục thông số';
        $nav = 'Danh mục thông số';
        $type = 1;
        $data = DanhMucThongSo::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.thongso', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Danh mục thông số';
        $nav = 'Danh mục thông số';
        $type = 1;
        $chithi = DanhMucChiThi::select('id', 'ten')->get();
        return view('administrator.dadangsinhhoctphanoi.thongso-new', compact(['title', 'nav', 'type', 'chithi']));
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
                'chithi_id' => 'required|numeric',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'chithi_id.required' => 'Chỉ thị không được để trống',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        DanhMucThongSo::create([
            'chithi_id' => $request->input('chithi_id'),
            'ten' => $request->input('tenthongso'),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.thongso')->with('message', 1);

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
