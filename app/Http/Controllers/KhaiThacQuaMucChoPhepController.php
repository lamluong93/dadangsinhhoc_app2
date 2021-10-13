<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhaiThacQuaMucChoPhepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Khai thác quá mức cho phép';
        $nav = 'Khai thác quá mức cho phép';
        $type = 1;
        $data = [];
        return view('administrator.dadangsinhhoctphanoi.khaithacquamucchophep', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Khai thác quá mức cho phép';
        $nav = 'Khai thác quá mức cho phép';
        $type = 1;
        $diadiem = [];
        $tudien = [];
        return view('administrator.dadangsinhhoctphanoi.khaithacquamucchophep-new', compact(['title', 'nav', 'type', 'diadiem', 'tudien']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
