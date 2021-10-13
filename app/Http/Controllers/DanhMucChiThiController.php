<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\DanhMucChiThi;
use App\Models\TuDien;

class DanhMucChiThiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh mục chỉ thị';
        $nav = 'Danh mục chỉ thị';
        $type = 1;
        $data = DanhMucChiThi::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.chithi', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Danh mục chỉ thị';
        $nav = 'Danh mục chỉ thị';
        $type = 1;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dadangsinhhoctphanoi.chithi-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'nhomchithi2' => 'required|numeric',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'nhomchithi2.required' => 'Nhóm chỉ thị không được để trống',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        
        DanhMucChiThi::create([
            'ten' => $request->input('tenchithi'),
            'nhomct_id' => $request->input('nhomchithi2'),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.chithi')->with('message', 1);
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
