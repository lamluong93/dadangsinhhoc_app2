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
        return view('web.search.search-species');
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

        if ($validator->fails()) return back()->withErrors($validator);

        $data = KhuBaoTon::select('ten', 'tentienganh', 'phancap', 'mota', 'phanloai', 'mucdodadangsinhhoc')
            ->where('ten', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('tentienganh', '%'.$request->input('search').'%')
            ->paginate(25);
        return view('web.search.protectedarea', compact('data'));
    }
    
}

