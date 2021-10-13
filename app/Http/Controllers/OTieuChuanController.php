<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\KhuBaoTon;
use App\Models\OTieuChuan;

class OTieuChuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Ô tiêu chuẩn';
        $nav = 'Ô tiêu chuẩn';
        $type = 1;
        $data = OTieuChuan::orderBy('ten')->paginate(25);
        return view('administrator.dulieudadangsinhhoc.thongtinchung.otieuchuan', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Ô tiêu chuẩn';
        $nav = 'Ô tiêu chuẩn';
        $type = 0;
        $diadiem = KhuBaoTon::select('id', 'ten')->orderBy('ten')->get();
        return view('administrator.dulieudadangsinhhoc.thongtinchung.otieuchuan-new', compact(['title', 'nav', 'type', 'diadiem']));
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
                'ten' => 'required',
                'kichthuoc' => 'required',
                'dosau' => 'nullable|numeric',
                'docao' => 'nullable|numeric',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'ten.required' => 'Trường Tên ô tiêu chuẩn không được để trống.',
                'kichthuoc.required' => 'Trường Kích thước không được để trống.',
                'docao.numeric' => 'Trường Độ cao phải là số',
                'dosau.numeric' => 'Trường Độ sâu phải là số',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        
        // insert data
        $dt = OTieuChuan::create([
            'ten' => $request->input('ten'),
            'kichthuoc' => $request->input('kichthuoc'),
            'hinhdang' => $request->input('hinhdang'),
            'vitri' => $request->input('vitri'),
            'khonggian' => $request->input('khonggian'),
            'docao' => $request->input('docao'),
            'dosau' => $request->input('dosau'),
            'diadiem_id' => $request->input('diadiem'),
        ]);

        return redirect()->route('dulieudadangsinhhoc.otieuchuan')->with('message', 1);
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
