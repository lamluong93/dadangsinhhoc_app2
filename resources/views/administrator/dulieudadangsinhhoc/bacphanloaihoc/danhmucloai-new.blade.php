@extends('administrator.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Danh mục loài</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dulieudadangsinhhoc.danhmucloai') }}">Danh mục loài</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm dữ liệu mới</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><i class="bi bi-file-earmark-plus-fill"></i> Thêm dữ liệu mới</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('dulieudadangsinhhoc.danhmucloai-create-post') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="offset-md-2 col-md-8">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    Thêm dữ liệu mới thành công
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="phanloaihoc">BẬC PHÂN LOẠI HỌC <span class="text-require">*</span></label>
                                <select class="form-control" name="phanloaihoc" id="phanloaihoc">
                                    <option>--Lựa chọn--</option>
                                    <option value="0" @if (old('phanloaihoc') === '0') {{ 'selected' }} @endif>Giới (Kingdom)</option>
                                    <option value="1" @if (old('phanloaihoc') === '1') {{ 'selected' }} @endif>Ngành (Phylum)</option>
                                    <option value="2" @if (old('phanloaihoc') === '2') {{ 'selected' }} @endif>Lớp (Class)</option>
                                    <option value="3" @if (old('phanloaihoc') === '3') {{ 'selected' }} @endif>Bộ (Order)</option>
                                    <option value="4" @if (old('phanloaihoc') === '4') {{ 'selected' }} @endif>Họ (Family)</option>
                                    <option value="5" @if (old('phanloaihoc') === '5') {{ 'selected' }} @endif>Chi (Genus)</option>
                                    <option value="6" @if (old('phanloaihoc') === '6') {{ 'selected' }} @endif>Loài (Species)</option>
                                    <option value="7" @if (old('phanloaihoc') === '7') {{ 'selected' }} @endif>Dưới loài (Subspecies)</option>
                                    <option value="8" @if (old('phanloaihoc') === '8') {{ 'selected' }} @endif>Đồng danh (Synonyms)</option>
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_01">
                                <label for="tenkhoahoc">Tên khoa học <span class="text-require">*</span></label>
                                <input type="text" class="form-control" id="tenkhoahoc" name="tenkhoahoc" value="{{ old('tenkhoahoc') }}">
                            </div>
                            <div class="form-group d-none" id="elm_02">
                                <label for="tentiengviet">Tên Tiếng Việt</label>
                                <input type="text" class="form-control" id="tentiengviet" name="tentiengviet" value="{{ old('tentiengviet') }}">
                            </div>
                            <div class="form-group d-none" id="elm_14">
                                <label for="bacphanloai">Bậc phân loại <span class="text-require">*</span></label>
                                <input type="text" class="form-control" id="bacphanloai" name="bacphanloai" value="{{ old('bacphanloai') }}">
                            </div>
                            <div class="form-group d-none" id="elm_12">
                                <label for="maloai">Mã loài</label>
                                <input type="text" class="form-control" id="maloai" name="maloai" value="{{ old('maloai') }}">
                            </div>
                            <div class="form-group d-none" id="elm_06">
                                <label for="gioiid">Giới (Kingdom) <span class="text-require">*</span></label>
                                <select class="form-control" name="gioiid" id="gioiid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($gioi as $item)
                                        @if (old('gioiid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_08">
                                <label for="nganhid">Ngành (Phylum) <span class="text-require">*</span></label>
                                <select class="form-control" name="nganhid" id="nganhid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($nganh as $item)
                                        @if (old('nganhid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_09">
                                <label for="lopid">Lớp (Class) <span class="text-require">*</span></label>
                                <select class="form-control" name="lopid" id="lopid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($lop as $item)
                                        @if (old('lopid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_10">
                                <label for="boid">Bộ (Order)</label>
                                <select class="form-control" name="boid" id="boid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($bo as $item)
                                        @if (old('boid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_11">
                                <label for="hoid">Họ (Family)</label>
                                <select class="form-control" name="hoid" id="hoid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($ho as $item)
                                        @if (old('hoid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_13">
                                <label for="chiid">Chi (Genus) <span class="text-require">*</span></label>
                                <select class="form-control" name="chiid" id="chiid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($chi as $item)
                                        @if (old('chiid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_03">
                                <label for="ghichu">Ghi chú</label>
                                <textarea class="form-control" id="ghichu" name="ghichu" rows="4">{{ old('ghichu') }}</textarea>
                            </div>
                            <div class="form-group d-none" id="elm_07">
                                <label for="chuanphanloai">Chuẩn phân loại <span class="text-require">*</span></label>
                                <input type="text" class="form-control" id="chuanphanloai" name="chuanphanloai" value="{{ old('chuanphanloai') }}">
                            </div>
                            <div class="form-group d-none" id="elm_15">
                                <label for="loaiid">Loài (Species) <span class="text-require">*</span></label>
                                <select class="form-control" name="loaiid" id="loaiid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($loai as $item)
                                        @if (old('loaiid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }} ({{ $item->tentiengviet }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_04">
                                <label for="trangthai">Trạng thái <span class="text-require">*</span></label>
                                <input type="text" class="form-control" id="trangthai" name="trangthai" value="{{ old('trangthai') }}">
                            </div>
                            <div class="form-group d-none" id="elm_05">
                                <label for="dongdanhid">Đồng danh (Synonyms)</label>
                                <select class="form-control" name="dongdanhid" id="dongdanhid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($dongdanh as $item)
                                        @if (old('dongdanhid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->ten }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group d-none" id="elm_16">
                                <label for="ten_dd">Tên</label>
                                <input type="text" class="form-control" id="ten_dd" name="ten_dd" value="{{ old('ten_dd') }}">
                            </div>
                            <div class="form-group d-none" id="elm_17">
                                <label for="nguondulieu_dd">Nguồn dữ liệu</label>
                                <input type="text" class="form-control" id="nguondulieu_dd" name="nguondulieu_dd" value="{{ old('nguondulieu_dd') }}">
                            </div>
                            <div class="form-group d-none" id="elm_18">
                                <label for="mota_dd">Mô tả</label>
                                <input type="text" class="form-control" id="mota_dd" name="mota_dd" value="{{ old('mota_dd') }}">
                            </div>
                            <div class="form-group d-none" id="elm_19">
                                <label for="phanloaihocid">Phân loại học (Taxons) <span class="text-require">*</span></label>
                                <select class="form-control" name="phanloaihocid" id="phanloaihocid">
                                    <option value="">--Lựa chọn--</option>
                                    @foreach($phanloaihoc as $item)
                                        @if (old('phanloaihocid') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->tenkhoahoc }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tenkhoahoc }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <p><small class="text-muted"><span class="text-require">*</span> Bắt buộc nhập dữ liệu.</small></p>
                            <button type="submit" class="btn btn-success mt-2 d-none" id="btnSubmit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                            </svg> Lưu lại</button>
                            <a href="{{ route('dulieudadangsinhhoc.danhmucloai') }}"><button type="button" class="btn btn-danger mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                            </svg> Quay lại</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@include('administrator.layouts.footer')
@endsection