<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loai;
use App\Models\KhuBaoTon;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function species()
    {
        $data = Loai::select('tenkhoahoc', 'tentiengviet', 'trangthai')->paginate(25);
        return view('web.search.search-species', compact('data'));
    }
    
    public function searchSpecies(Request $request) {
        $validator = Validator::make($request->all(), [
                '_token' => 'required',
                'search' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'search.required' => 'Vui lòng gõ từ khóa tìm kiếm',
            ]
        );

        if ($validator->fails()) return redirect()->route('search-species');

        $data = Loai::select('tenkhoahoc', 'tentiengviet', 'trangthai')
            ->where('tenkhoahoc', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('tentiengviet', 'LIKE', '%'.$request->input('search').'%')
            ->paginate(100);
        $text = $request->input('search');
        return view('web.search.search-species', compact('data', 'text'));
    }

    public function protectedarea()
    {
        $data = KhuBaoTon::select('ten', 'tentienganh', 'phancap', 'mota', 'phanloai', 'mucdodadangsinhhoc')->paginate(25);
        return view('web.search.protectedarea', compact('data'));
    }

    public function search(Request $request) {
        $validator = Validator::make($request->all(), [
                '_token' => 'required',
                'search' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'search.required' => 'Vui lòng gõ từ khóa tìm kiếm',
            ]
        );

        if ($validator->fails()) return redirect()->route('protectedarea');

        $data = KhuBaoTon::select('ten', 'tentienganh', 'phancap', 'mota', 'phanloai', 'mucdodadangsinhhoc')
            ->where('ten', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('tentienganh', 'LIKE', '%'.$request->input('search').'%')
            ->paginate(100);
        $text = $request->input('search');
        return view('web.search.protectedarea', compact('data', 'text'));
    }
    
}

