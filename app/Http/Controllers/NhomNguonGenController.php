<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\NhomNguonGen;
use App\Models\TuDien;

class NhomNguonGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nhóm nguồn gen';
        $nav = 'Nhóm nguồn gen';
        $type = 1;
        $data = NhomNguonGen::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dulieudadangsinhhoc.nguongen.nhomnguongen', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Nhóm nguồn gen';
        $nav = 'Nhóm nguồn gen';
        $type = 1;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dulieudadangsinhhoc.nguongen.nhomnguongen-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'phanloai2' => 'required|numeric',
                'ten' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'ten.required' => 'Không được để trống tên',
                'phanloai2.required' => 'Không được để trống trường phân loại',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        NhomNguonGen::create([
            'phanloai' => $request->input('phanloai2'),
            'nhomnguongen' => $request->input('ten'),
            'mota' => str_replace("\n", '<br>', $request->input('mota')),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu')),
        ]);

        return redirect()->route('dulieudadangsinhhoc.nhomnguongen')->with('message', 1);

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
