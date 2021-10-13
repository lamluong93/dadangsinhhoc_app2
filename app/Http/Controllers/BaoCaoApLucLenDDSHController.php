<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\TuDien;
use App\Models\DanhMucThongSo;
use App\Models\BaoCaoApLucLenDDSH;

class BaoCaoApLucLenDDSHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Báo cáo áp lực lên ĐDSH';
        $nav = 'Báo cáo áp lực lên ĐDSH';
        $type = 1;
        $data = BaoCaoApLucLenDDSH::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.baocaoapluclenddsh', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Báo cáo áp lực lên ĐDSH';
        $nav = 'Báo cáo áp lực lên ĐDSH';
        $type = 1;
        $tudien = TuDien::select('id', 'type')->get();
        $thongso = DanhMucThongSo::select('id', 'ten')->get();
        return view('administrator.dadangsinhhoctphanoi.baocaoapluclenddsh-new', compact(['title', 'nav', 'type', 'tudien', 'thongso']));
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
                'thongso_id' => 'required|numeric',
                'soluong' => 'nullable|numeric',
                'khoiluong' => 'nullable|numeric',
                'dientich' => 'nullable|numeric',
                'phancapbaocao2' => 'required|numeric',
                'tgbatdau' => 'nullable|date',
                'tgketthuc' => 'nullable|date',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'thongso_id.required' => 'Thông số không được để trống',
                'soluong.numeric' => 'Số lượng phải là số',
                'khoiluong.numeric' => 'Khối lượng phải là số',
                'dientich.numeric' => 'Diện tích phải là số',
                'phancapbaocao2.required' => 'Phân cấp không được để trống',
                'tgbatdau.date' => 'Thời gian bắt đầu không hợp lệ',
                'tgketthuc.date' => 'Thời gian kết thúc không hợp lệ',
            ]
        );

        // print_r($request->all());
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        BaoCaoApLucLenDDSH::create([
            'thongso_id' => $request->input('thongso_id'),
            'soluong' => $request->input('soluong'),
            'donvitinhsoluong' => $request->input('dvtsoluong'),
            'khoiluong' => $request->input('khoiluong'),
            'donvitinhkhoiluong' => $request->input('dvtkhoiluong'),
            'dientich' => $request->input('dientich'),
            'mota' => $request->input('mota'),
            'phancap' => $request->input('phancapbaocao2'),
            'tendonvi' => $request->input('tendonvi'),
            'kybaocao' => $request->input('kybaocao'),
            'thoigianbatdau' => $request->input('tgbatdau'),
            'thoigianketthuc' => $request->input('tgketthuc'),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
            'nguondulieu' => $request->input('nguondulieu')
        ]);

        return redirect()->route('dadangsinhhochanoi.baocaoapluclenddsh')->with('message', 1);
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
