@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mô hình sáng kiến</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dadangsinhhochanoi.mohinhsangkien') }}">Mô hình sáng kiến</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
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
                    <form action="{{ route('dadangsinhhochanoi.mohinhsangkien-create-post') }}" method="POST">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tenmohinh">Tên mô hình sáng kiến<span class="text-require">*</span></label>
                                    <input type="text" class="form-control" id="tenmohinh" name="tenmohinh" value="{{ old('tenmohinh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="hinhthuc">Hình thức sáng kiến <span class="text-require">*</span></label>
                                    <select class="form-control" id="hinhthuc">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="hinhthuc2" id="hinhthuc2"></select>
                                </div>
                                <div class="form-group">
                                    <label for="noidung">Nội dung</label>
                                    <textarea class="form-control" id="noidung" name="noidung" rows="10">{{ old('noidung') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="diadiem">Địa điểm tổ chức</label>
                                    <textarea class="form-control" id="diadiem" name="diadiem" rows="6">{{ old('diadiem') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgbatdau">Thời gian bắt đầu (d-ngày, m-tháng, y-năm)</label>
                                    <input type="date" class="form-control" id="tgbatdau" name="tgbatdau" value="{{ old('tgbatdau') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgketthuc">Thời gian kết thúc (d-ngày, m-tháng, y-năm)</label>
                                    <input type="date" class="form-control" id="tgketthuc" name="tgketthuc" value="{{ old('tgketthuc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tochuc">Tổ chức</label>
                                    <select class="form-control" id="tochuc" name="tochuc">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tochuc as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ketqua">Kết quả áp dụng</label>
                                    <textarea class="form-control" id="ketqua" name="ketqua" rows="10">{{ old('ketqua') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ghichu">Ghi chú</label>
                                    <textarea class="form-control" id="ghichu" name="ghichu" rows="5">{{ old('ghichu') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <button type="submit" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                                  </svg> Lưu lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    @include('administrator.layouts.footer')
@endsection