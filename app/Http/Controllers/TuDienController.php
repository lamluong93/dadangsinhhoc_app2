<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TuDien;
use App\Models\DefValue;

class TuDienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dữ liệu từ điển';
        $nav = 'Từ điển (Look up)';
        $type = 0;
        $tudien = TuDien::paginate(25);
        return view('administrator.dulieudanhmuc.tudien.tudien', compact(['title', 'nav', 'type', 'tudien']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'type' => 'required|max:250|unique:tu_dien',
                'list-value' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt Form.',
                'type.required' => 'Không được để trống tên kiểu.',
                'type.max'  => 'Tên kiểu quá dài',
                'type.unique' => 'Tên kiểu đã tồn tại',
                'list-value.required' => 'Không được để trống giá trị cho từ điển.',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        
        $list = TuDien::create([
            'value' => $request->input('type'),
            'type' => $request->input('type'),
            'description' => str_replace( "\n", '<br>', $request->input('mota') ),
        ]);
        
        $data = [];
        $tmp = explode('[#]', $request->input('list-value'));
        foreach ($tmp as $item) {
            $atmp = [];
            if (!empty($item)) {
                $atmp['tudien_id'] = $list->id;
                $atmp['giatri'] = $item;
                array_push($data, $atmp);
            }
        }
        DefValue::insert($data);

        return back()->with('message', 1);
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
