<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\TuDien;
use App\Models\ToChuc;
use App\Models\MoHinhSangKien;

class MoHinhSangKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Mô hình sáng kiến';
        $nav = 'Mô hình sáng kiến';
        $type = 1;
        $data = MoHinhSangKien::orderBy('id')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.mohinhsangkien', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Mô hình sáng kiến';
        $nav = 'Mô hình sáng kiến';
        $type = 0;
        $tudien = TuDien::select('id', 'type')->get();
        $tochuc = ToChuc::select('id', 'ten')->get();
        return view('administrator.dadangsinhhoctphanoi.mohinhsangkien-new', compact(['title', 'nav', 'type', 'tudien', 'tochuc']));
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
                'tenmohinh' => 'required|max:255',
                'hinhthuc2' => 'required|numeric',
                'tgbatdau' => 'nullable|date',
                'tgketthuc' => 'nullable|date',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tenmohinh.required' => 'Không được để trống tên',
                'tenmohinh.max'  => 'Tên quá dài',
                'hinhthuc2.required' => 'Không được để trống trường hình thức',
                'tgbatdau.date' => 'Thời gian bắt đầu không hợp lệ',
                'tgketthuc.date' => 'Thời gian kết thúc không hợp lệ',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        MoHinhSangKien::create([
            'ten' => $request->input('tenmohinh'),
            'hinhthuc' => $request->input('hinhthuc2'),
            'noidung' => str_replace( "\n", '<br>', $request->input('noidung') ),
            'diadiemtochuc' => str_replace( "\n", '<br>', $request->input('diadiem') ),
            'coquan_id' => $request->input('tochuc'),
            'tgbatdau' => $request->input('tgbatdau'),
            'tgketthuc' => $request->input('tgketthuc'),
            'ketquaapdung' => str_replace( "\n", '<br>', $request->input('ketqua') ),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.mohinhsangkien')->with('message', 1);
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
