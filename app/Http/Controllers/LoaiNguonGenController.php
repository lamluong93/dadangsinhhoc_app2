<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\LoaiNguonGen;
use App\Models\NhomNguonGen;

class LoaiNguonGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Loại nguồn gen';
        $nav = 'Loại nguồn gen';
        $type = 1;
        $data = LoaiNguonGen::orderBy('id', 'desc')->paginate(25);
        return view('administrator.dulieudadangsinhhoc.nguongen.loainguongen', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Loại nguồn gen';
        $nav = 'Loại nguồn gen';
        $type = 1;
        $nhom = NhomNguonGen::select('id', 'nhomnguongen')->get();
        return view('administrator.dulieudadangsinhhoc.nguongen.loainguongen-new', compact(['title', 'nav', 'type', 'nhom']));
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
                'nhomnguongen' => 'required|numeric',
                'ten' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'ten.required' => 'Không được để trống tên',
                'nhomnguongen.required' => 'Không được để trống trường nhóm nguồn gen',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        LoaiNguonGen::create([
            'ten' => $request->input('ten'),
            'nhomnguongen_id' => $request->input('nhomnguongen'),
            'mota' => str_replace("\n", '<br>', $request->input('mota')),
            'ghichu' => str_replace("\n", '<br>', $request->input('ghichu')),
        ]);

        return redirect()->route('dulieudadangsinhhoc.loainguongen')->with('message', 1);
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
