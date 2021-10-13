<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\ChuongTrinhDeTaiDuAnKiemSoatSVNLXH;
use App\Models\TuDien;

class ChuongTrinhDeTaiDuAnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Chương trình, đề tài, dự án kiểm soát SVNLXH';
        $nav = 'Chương trình, đề tài, dự án kiểm soát SVNLXH';
        $type = 1;
        $data = ChuongTrinhDeTaiDuAnKiemSoatSVNLXH::orderBy('id')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.chuongtrinhdetaiduan', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Chương trình, đề tài, dự án kiểm soát SVNLXH';
        $nav = 'Chương trình, đề tài, dự án kiểm soát SVNLXH';
        $type = 0;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dadangsinhhoctphanoi.chuongtrinhdetaiduan-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'tendetai' => 'required|max:255',
                'tgbatdau' => 'nullable|date',
                'tgketthuc' => 'nullable|date',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tendetai.required' => 'Không được để trống tên',
                'tendetai.max'  => 'Tên quá dài',
                'tgbatdau.date' => 'Thời gian bắt đầu không hợp lệ',
                'tgketthuc.date' => 'Thời gian kết thúc không hợp lệ',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        ChuongTrinhDeTaiDuAnKiemSoatSVNLXH::create([
            'ten' => $request->input('tendetai'),
            'noidung' => str_replace( "\n", '<br>', $request->input('noidung') ),
            'thoigianbatdau' => $request->input('tgbatdau'),
            'thoigianketthuc' => $request->input('tgketthuc'),
            'donvithuchien' => $request->input('donvi'),
            'spchinh' => $request->input('sanpham'),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.chuongtrinhdetaiduan')->with('message', 1);
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
