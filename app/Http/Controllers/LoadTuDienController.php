<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TuDien;
use App\Models\DefValue;

class LoadTuDienController extends Controller
{
    public function index(Request $request) {
        $validator = Validator::make($request->all(), [
            'type' => 'required|numeric',
            ],
            [
                'type.required'=> 'Không có dữ liệu tìm kiếm',
                'type.numeric' => 'Not num',
            ]
        );

        if ($validator->passes()) {
            $data = DefValue::select('id', 'giatri')->where('tudien_id', $request->input('type'))->get();
            return response()->json($data);
        }

        return response()->json(['error'=>$validator->errors()]);
    }
}
