<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loai;
use App\Models\KhuBaoTon;

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
    
}

