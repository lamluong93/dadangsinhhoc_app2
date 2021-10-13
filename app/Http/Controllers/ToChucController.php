<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToChuc;
use App\Models\TuDien;
use Illuminate\Support\Facades\Validator;

class ToChucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Thông tin tổ chức';
        $nav = 'Thông tin tổ chức';
        $type = 1;
        $data = ToChuc::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dulieudanhmuc.diagioihanhchinh.tochuc', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Thông tin tổ chức';
        $nav = 'Thông tin tổ chức';
        $type = 1;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dulieudanhmuc.diagioihanhchinh.tochuc-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'tentochuc' => 'required|max:200',
                'loaitochuc' => 'required|max:120',
                'email' => 'nullable|email:rfc,dns',
                'phone' => 'nullable|digits:10',
                'trangthaitochuc2' => 'required|numeric'
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tentochuc.required' => 'Không được để trống tên tổ chức',
                'tentochuc.max'  => 'Tên tổ chức quá dài',
                'loaitochuc.required' => 'Không được để trống loại tổ chức',
                'loaitochuc.max'  => 'Loại tổ chức quá dài',
                'email.email' => 'Email nhập không đúng định dạng',
                'phone.digits' => 'Số điện thoại phải là số, và độ dài bằng 10',
                'trangthaitochuc2.required' => 'Không được để trống trường trạng thái',
                'trangthaitochuc2.numeric' => 'Dữ liệu trạng thái gửi lên sai định dạng'
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        ToChuc::create([
            'ten' => $request->input('tentochuc'),
            'loai' => $request->input('loaitochuc'),
            'diachi' => str_replace( "\n", '<br>', $request->input('diachi') ),
            'lienhe' => str_replace( "\n", '<br>', $request->input('lienhe') ),
            'email' => $request->input('email'),
            'dienthoai' => $request->input('phone'),
            'mota' => str_replace( "\n", '<br>', $request->input('mota') ),
            'trangthai' => $request->input('trangthaitochuc2'),
        ]);

        return redirect()->route('dulieudanhmuc.tochuc')->with('message', 1);
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
