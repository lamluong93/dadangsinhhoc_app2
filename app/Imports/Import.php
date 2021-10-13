<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Models\Gioi;
use App\Models\Nganh;
use App\Models\Lop;
use App\Models\Bo;
use App\Models\Ho;
use App\Models\Chi;
use App\Models\Loai;

class Import implements ToModel
{
    public function model(array $row)
    {   
        $gioi = Gioi::select('id')->where('tenkhoahoc', '=', $row['1'])->get()->toArray(); $idgioi = 0;
        if (!count($gioi)) {
            $id = Gioi::create([
                'tenkhoahoc' => $row['1'],
            ]);
            $idgioi = $id->id;
        } else $idgioi = $gioi[0]['id'];

        $nganh = Nganh::select('id')->where('tenkhoahoc', '=', $row['2'])->get()->toArray(); $idnganh = 0;
        if (!count($nganh)) {
            $id = Nganh::create([
                'tenkhoahoc' => $row['2'],
                'gioi_id' => $idgioi,
                'chuanphanloai' => 'Chuẩn phân loại',
                'trangthai' => 'Trạng thái',
            ]);
            $idnganh = $id->id;
        } else $idnganh = $nganh[0]['id'];

        $lop = Lop::select('id')->where('tenkhoahoc', '=', $row['3'])->get()->toArray(); $idlop = 0;
        if (!count($lop)) {
            $id = Lop::create([
                'tenkhoahoc' => $row['3'],
                'nganh_id' => $idnganh,
                'chuanphanloai' => 'Chuẩn phân loại',
                'trangthai' => 'Trạng thái',
            ]);
            $idlop = $id->id;
        } else $idlop = $lop[0]['id'];

        $bo = Bo::select('id')->where('tenkhoahoc', '=', $row['4'])->get()->toArray(); $idbo = 0;
        if (!count($bo)) {
            $id = Bo::create([
                'tenkhoahoc' => $row['4'],
                'lop_id' => $idlop,
                'chuanphanloai' => 'Chuẩn phân loại',
                'trangthai' => 'Trạng thái',
            ]);
            $idbo = $id->id;
        } else $idbo = $bo[0]['id'];

        $ho = Ho::select('id')->where('tenkhoahoc', '=', $row['5'])->get()->toArray(); $idho = 0;
        if (!count($ho)) {
            $id = Ho::create([
                'tenkhoahoc' => $row['5'],
                'bo_id' => $idbo,
                'chuanphanloai' => 'Chuẩn phân loại',
                'trangthai' => 'Trạng thái',
            ]);
            $idho = $id->id;
        } else $idho = $ho[0]['id'];

        $chi = Chi::select('id')->where('tenkhoahoc', '=', $row['6'])->get()->toArray(); $idchi = 0;
        if (!count($chi)) {
            $id = Chi::create([
                'tenkhoahoc' => $row['6'],
                'ho_id' => $idho,
                'chuanphanloai' => 'Chuẩn phân loại',
                'trangthai' => 'Trạng thái',
            ]);
            $idchi = $id->id;
        } else $idchi = $chi[0]['id'];

        Loai::create([
            'tenkhoahoc' => $row[0],
            'tentiengviet' => $row[7],
            'chi_id' => $idchi,
            'chuanphanloai' => 'Chuẩn phân loại',
            'trangthai' => 'Trạng thái',
        ]);

    }
}