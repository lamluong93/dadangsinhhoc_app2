@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Hợp tác quốc tế</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dadangsinhhochanoi.hoptacquocte') }}">Hợp tác quốc tế</a></li>
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
                    <form action="{{ route('dadangsinhhochanoi.hoptacquocte-create-post') }}" method="POST">
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
                                    <label for="ten">Tên văn bản/ dự án <span class="text-require">*</span></label>
                                    <input type="text" class="form-control" id="ten" name="ten" value="{{ old('ten') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tinhchat">Tính chất</label>
                                    <select class="form-control" id="tinhchat">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="tinhchat2" id="tinhchat2"></select>
                                </div>
                                <div class="form-group">
                                    <label for="ngaybanhanh">Ngày ban hành (d-ngày, m-tháng, y-năm)</label>
                                    <input type="date" class="form-control" id="ngaybanhanh" name="ngaybanhanh" value="{{ old('ngaybanhanh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ngayhieuluc">Ngày có hiệu lực (d-ngày, m-tháng, y-năm)</label>
                                    <input type="date" class="form-control" id="ngayhieuluc" name="ngayhieuluc" value="{{ old('ngayhieuluc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="thoihan">Thời hạn hiệu lực</label>
                                    <input type="text" class="form-control" id="thoihan" name="thoihan" value="{{ old('thoihan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tendoitac">Tên đối tác nước ngoài</label>
                                    <input type="text" class="form-control" id="tendoitac" name="tendoitac" value="{{ old('tendoitac') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phancap">Phân cấp</label>
                                    <select class="form-control" id="phancap">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="phancap2" id="phancap2"></select>
                                </div>
                                <div class="form-group">
                                    <label for="danhnghia">Danh nghĩa</label>
                                    <select class="form-control" id="danhnghia">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="danhnghia2" id="danhnghia2"></select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coquanchutri">Cơ quan chủ trì</label>
                                    <input type="text" class="form-control" id="coquanchutri" name="coquanchutri" value="{{ old('coquanchutri') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nguoiky">Người ký</label>
                                    <input type="text" class="form-control" id="nguoiky" name="nguoiky" value="{{ old('nguoiky') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ketthuc">Thời gian kết thúc (d-ngày, m-tháng, y-năm)</label>
                                    <input type="date" class="form-control" id="ketthuc" name="ketthuc" value="{{ old('ketthuc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tinhtrang">Tình trạng</label>
                                    <select class="form-control" id="tinhtrang">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="tinhtrang2" id="tinhtrang2"></select>
                                </div>
                                <div class="form-group">
                                    <label for="ndchinh">Nội dung chính</label>
                                    <input type="text" class="form-control" id="ndchinh" name="ndchinh" value="{{ old('ndchinh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="noidung">Nội dung</label>
                                    <textarea class="form-control" id="noidung" name="noidung" rows="5">{{ old('noidung') }}</textarea>
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