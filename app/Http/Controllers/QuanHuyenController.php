<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;
use Grimzy\LaravelMysqlSpatial\Types\LineString;

use App\Models\QuanHuyen;

class QuanHuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Thông tin quận, huyện, thị xã';
        $nav = 'Thông tin quận, huyện, thị xã';
        $type = 1;
        $data = [];
        return view('administrator.dulieudanhmuc.diagioihanhchinh.quanhuyen', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Thông tin quận, huyện, thị xã';
        $nav = 'Thông tin quận, huyện, thị xã';
        $type = 1;
        return view('administrator.dulieudanhmuc.diagioihanhchinh.quanhuyen-new', compact(['title', 'nav', 'type']));
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
                'tenhuyen' => 'required|max:150',
                'khonggian' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tenhuyen.required' => 'Không được để trống tên',
                'tenhuyen.max'  => 'Tên quá dài',
                'khonggian.required' => 'Không được để trống trường không gian',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        $geo = new QuanHuyen();
        $geo->ten = $request->input('tenhuyen');
        $geo->khonggian = new Polygon([new LineString([
            new Point(40.74894149554006, -73.98615270853043),
            new Point(40.74848633046773, -73.98648262023926),
            new Point(40.747925497790725, -73.9851602911949),
            new Point(40.74837050671544, -73.98482501506805),
            new Point(40.74894149554006, -73.98615270853043)
        ])], 4326);
        $geo->save();

        return redirect()->route('dulieudanhmuc.quanhuyen')->with('message', 1);

        // INSERT INTO `quan_huyen` (`id`, `ten`, `khonggian`, `created_at`, `updated_at`) VALUES (NULL, 'andoduong', '\'POLYGON((70 5,80 6,90 2,60 0))\',4326', current_timestamp(), current_timestamp()), (NULL, '', '\'POLYGON((70 5,80 6,90 2,60 0))\',4326', current_timestamp(), current_timestamp())
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
