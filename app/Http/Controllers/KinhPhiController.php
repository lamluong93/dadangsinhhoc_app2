<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KinhPhi;
use App\Models\TuDien;

class KinhPhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Quản lý kinh phí';
        $nav = 'Kinh phí';
        $type = 1;
        $data = KinhPhi::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dadangsinhhoctphanoi.kinhphi', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới kinh phí';
        $nav = 'Kinh phí';
        $type = 0;
        $tudien = TuDien::select('id', 'type')->get();
        return view('administrator.dadangsinhhoctphanoi.kinhphi-new', compact(['title', 'nav', 'type', 'tudien']));
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
                'nguon2' => 'required|numeric',
                'thoigian' => 'required|digits_between:1,4',
                'tyle' => 'numeric',
            ],
            [
                'nguon2.required'  => 'Nguồn kinh phí không được để trống',
                'nguon2.numeric'  => 'Kiểu dữ liệu không đúng',
                'thoigian.required' => 'Thời gian không được để trống',
                'thoigian.digits_between' => 'Năm phải gồm từ 1 đến 4 chữ số',
                'tyle.numeric' => 'Tỷ lệ phải là kiểu số',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        KinhPhi::create([
            'nguonkinhphi' => $request->input('nguon2'),
            'mucdichsudung' => str_replace( "\n", '<br>', $request->input('mucdichsudung') ),
            'tyle' => $request->input('tyle'),
            'thoigian' => $request->input('thoigian'),
            'ghichu' => str_replace( "\n", '<br>', $request->input('ghichu') ),
        ]);

        return redirect()->route('dadangsinhhochanoi.kinhphi')->with('message', 1);
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
