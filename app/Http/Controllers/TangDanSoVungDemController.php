<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\TangDanSoVungDem;
use App\Models\KhuBaoTon;
use App\Models\QuanHuyen;

class TangDanSoVungDemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tăng dân số vùng đệm';
        $nav = 'Tăng dân số vùng đệm';
        $type = 1;
        $data = TangDanSoVungDem::orderBy('id', 'DESC')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.tangdansovungdem', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Tăng dân số vùng đệm';
        $nav = 'Tăng dân số vùng đệm';
        $type = 1;
        $diadiem = KhuBaoTon::select('id', 'ten')->get();
        $huyen = QuanHuyen::select('id', 'ten')->get();
        return view('administrator.dadangsinhhoctphanoi.tangdansovungdem-new', compact(['title', 'nav', 'type', 'diadiem', 'huyen']));
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
                'danso' => 'required|numeric',
                'tyletang' => 'required|numeric',
                'tgkhaosat' => 'nullable|date',
                'tgbatdau' => 'nullable|date',
                'tgketthuc' => 'nullable|date',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'danso.required' => 'Trường dân số không được để trống',
                'danso.numeric' => 'Trường dân số phải là kiểu số nguyên',
                'tyletang.required' => 'Trường tỷ lệ tăng không được để trống',
                'tyletang.numeric' => 'Trường tỷ lệ tăng phải là kiểu số',
                'tgkhaosat.date' => 'Dữ liệu trường thời gian khảo sát không hợp lệ',
                'tgbatdau.date' => 'Dữ liệu trường thời gian bắt đầu không hợp lệ',
                'tgketthuc.date' => 'Dữ liệu trường thời gian kết thúc không hợp lệ',
            ]
        );

        // print_r($request->all());
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        TangDanSoVungDem::create([
            'danso' => $request->input('danso'),
            'tyletang' => $request->input('tyletang'),
            'diadiem_id' => $request->input('diadiem'),
            'thoigiankhaosat' => $request->input('tgkhaosat'),
            'kybaocao' => $request->input('kybaocao'),
            'tgbatdau' => $request->input('tgbatdau'),
            'tgketthuc' => $request->input('tgketthuc'),
            'huyen_id' => $request->input('huyen'),
            'xa_id' => $request->input('xa'),
            'nguondulieu' => str_replace("\n", '<br>', $request->input('nguondulieu') ),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.tangdansovungdem')->with('message', 1);

        // number_format(222,0,',', '.');
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
