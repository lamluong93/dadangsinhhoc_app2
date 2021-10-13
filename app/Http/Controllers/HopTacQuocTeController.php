<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\HopTacQuocTe;
use App\Models\TuDien;
// use App\CryptString\CryptString;

use Illuminate\Support\Facades\Crypt; // Mã hóa chuỗi
use Illuminate\Contracts\Encryption\DecryptException;

class HopTacQuocTeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hợp tác quốc tế';
        $nav = 'Hợp tác quốc tế';
        $type = 1;
        $data = HopTacQuocTe::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.hoptacquocte', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Hợp tác quốc tế';
        $nav = 'Hợp tác quốc tế';
        $type = 0;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dadangsinhhoctphanoi.hoptacquocte-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'ten' =>'required|max:255'
            ],
            [
                'ten.required' => 'Không được để trống tên văn bản/ dự án.',
                'ten.max' => 'Tên văn bản/ dự án quá dài.',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        HopTacQuocTe::create([
            'ten' => $request->input('ten'),
            'tinhchat' => $request->input('tinhchat2'),
            'ngaybanhanh' => $request->input('ngaybanhanh'),
            'ngayhieuluc' => $request->input('ngayhieuluc'),
            'thoihanhieuluc' => $request->input('thoihan'),
            'tendoitacnn' => $request->input('tendoitac'),
            'phancap' => $request->input('phancap2'),
            'danhnghia' => $request->input('danhnghia2'),
            'coquanchutri' => $request->input('coquanchutri'),
            'nguoiki' => $request->input('nguoiky'),
            'thoigianketthuc' => $request->input('ketthuc'),
            'tinhtrang' => $request->input('tinhtrang2'),
            'noidungchinh' => $request->input('ndchinh'),
            'noidung' => str_replace("\n", '<br>', $request->input('noidung') ),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu') )
        ]);

        return redirect()->route('dadangsinhhochanoi.hoptacquocte')->with('message', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Xem chi tiết | Hợp tác quốc tế';
        $nav = 'Hợp tác quốc tế';
        $type = 0;

        $key = 0;
        try {
            $key = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            
        }
        
        $data = [];
        if ($key == 0 ) return view('administrator.dadangsinhhoctphanoi.hoptacquocte-details', compact('title', 'nav', 'type', 'data'));

        $data = HopTacQuocTe::where('id', $key)->get();
        return view('administrator.dadangsinhhoctphanoi.hoptacquocte-details', compact('title', 'nav', 'type', 'data'));
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
