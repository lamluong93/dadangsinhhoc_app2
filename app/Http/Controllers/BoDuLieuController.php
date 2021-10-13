<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

use App\Models\ToChuc;
use App\Models\BoDuLieu;
use App\Models\TaiLieuThamKhaoBoDuLieu;

class BoDuLieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Bộ dữ liệu';
        $nav = 'Bộ dữ liệu';
        $type = 0;
        $data = BoDuLieu::select('id', 'tieude', 'ngaycongbo', 'tomtat', 'tochuc_id', 'ngaybatdau')->paginate(25);
        return view('administrator.dulieudadangsinhhoc.thongtinchung.bodulieu', compact(['title', 'nav', 'type', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới | Bộ dữ liệu';
        $nav = 'Bộ dữ liệu';
        $type = 0;
        $tochuc = ToChuc::select('id', 'ten')->orderBy('ten')->get();
        return view('administrator.dulieudadangsinhhoc.thongtinchung.bodulieu-new', compact(['title', 'nav', 'type', 'tochuc']));
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
                'tieude' => 'required',
                'ngaycongbo' => 'required|date',
                'ngonngu' => 'required',
                'quyensohuutritue' => 'required',
                'batdau' => 'required|date',
                'ketthuc' => 'nullable|date',
                'tay' => 'nullable|numeric',
                'dong' => 'nullable|numeric',
                'bac' => 'nullable|numeric',
                'nam' => 'nullable|numeric',
                'tochuc' => 'required',
                'diadiem' => 'required',
                'loaibodulieu' => 'required',
                'chuanphanloai' => 'required',
            ],
            [
                '_token.required' => 'Lỗi cài đặt bảo mật Form',
                'tieude.required' => 'Trường Tiêu đề không được để trống.',
                'ngaycongbo.required' => 'Trường Ngày công bố không được để trống.',
                'ngaycongbo.date' => 'Trường Ngày công bố không đúng định dạng ngày tháng.',
                'ngonngu.required' => 'Trường Ngôn ngữ không được để trống.',
                'quyensohuutritue.required' => 'Trường Quyền sở hữu trí tuệ không được để trống.',
                'batdau.required' => 'Trường Ngày bắt đầu lập bộ dữ liệu không được để trống.',
                'batdau.date' => 'Trường Ngày bắt đầu lập bộ dữ liệu không đúng định dạng ngày tháng.',
                'ketthuc.date' => 'Trường Ngày hoàn thành lập bộ dữ liệu không đúng định dạng ngày tháng.',
                'tay.numeric' => 'Giới hạn tọa độ Tây phải là số.',
                'dong.numeric' => 'Giới hạn tọa độ Đông phải là số.',
                'bac.numeric' => 'Giới hạn tọa độ Bắc phải là số.',
                'nam.numeric' => 'Giới hạn tọa độ Nam phải là số.',
                'tochuc.required' => 'Trường Tổ chức thực hiện không được để trống.',
                'diadiem.required' => 'Trường Địa điểm không được để trống.',
                'loaibodulieu.required' => 'Trường Các dạng/ kiểu bộ dữ liệu không được để trống.',
                'chuanphanloai.required' => 'Trường Chuẩn phân loại không được để trống',
            ]
        );

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        // insert data
        $dt = BoDuLieu::create([
            'tieude' => $request->input('tieude'),
            'ngaycongbo' => $request->input('ngaycongbo'),
            'ngonngu' => $request->input('ngonngu'),
            'series' => $request->input('seri'),
            'tomtat' => str_replace("\n", '<br>', $request->input('tomtat')),
            'thongtinbosung' => str_replace("\n", '<br>', $request->input('ttbosung')),
            'quyensohuutritue' => str_replace("\n", '<br>', $request->input('quyensohuutritue')),
            'phanloai' => str_replace("\n", '<br>', $request->input('phanloai')),
            'dophu' => $request->input('dophu'),
            'websitelink' => $request->input('website'),
            'logo_url' => $request->input('logo'),
            'trichdan' => str_replace("\n", '<br>', $request->input('trichdan')),
            'motadialy' => str_replace("\n", '<br>', $request->input('motadialy')),
            'tukhoa' => $request->input('tukhoa'),
            'tukhoadongnghia' => $request->input('dongnghia'),
            'ngaybatdau' => $request->input('batdau'),
            'ngayketthuc' => $request->input('ketthuc'),
            'dophuphanloai' => $request->input('dophuphanloai'),
            'toadotay' => $request->input('tay'),
            'toadodong' => $request->input('dong'),
            'toadobac' => $request->input('bac'),
            'toadonam' => $request->input('nam'),
            'tochuc_id' => $request->input('tochuc'),
            'diadiem' => $request->input('diadiem'),
            'loaibodulieu' => $request->input('loaibodulieu'),
            'trangthai' => $request->input('trangthai'),
            'chuanphanloai' => $request->input('chuanphanloai'),
        ]);

        // Tai lieu tham khao
        $data = [];
        $tmp = explode('[#]', $request->input('list-value'));
        foreach ($tmp as $item) {
            $atmp = [];
            if (!empty($item)) {
                $atmp['bodulieu_id'] = $dt->id;
                $atmp['ten'] = $item;
                array_push($data, $atmp);
            }
        }
        TaiLieuThamKhaoBoDuLieu::insert($data);

        // tai file
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $ext = $request->file('file')->extension();
            if (strtolower($ext) != 'exe') {
                $filename = $request->file('file')->getClientOriginalName();
                $fileNameUpload = Str::random(30).time().'.'.$ext;
                $path = $request->file('file')->storeAs('public/bodulieu', $fileNameUpload);
                BoDuLieu::where('id', $dt->id)->update(['tenfile' => $fileNameUpload, 'tenfilegoc' => $filename]);

                // asset('storage/filename') blade
            }
        }

        return redirect()->route('dulieudadangsinhhoc.bodulieu')->with('message', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Chi tiết bộ dữ liệu';
        $nav = 'Bộ dữ liệu';
        $type = 0;
        $key = 0;
        try {
            $key = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            
        }
        
        if ($key == 0 ) return back();

        $data = [];
        $data = BoDuLieu::where('id', $key)->get();
        $tochuc = ToChuc::select('ten')->where('id', $data[0]->tochuc_id)->get();
        $tltk = TaiLieuThamKhaoBoDuLieu::select('ten')->where('bodulieu_id', $data[0]->id)->get();
        return view('administrator.dulieudadangsinhhoc.thongtinchung.bodulieu-details', compact('title', 'nav', 'type', 'data', 'tochuc', 'tltk'));
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
