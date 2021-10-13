@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Khai thác quá mức cho phép</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dadangsinhhochanoi.khaithacquamucchophep') }}">Khai thác quá mức cho phép</a></li>
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
                    <form action="{{ route('dadangsinhhochanoi.khaithacquamucchophep-create-post') }}" method="POST">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mucdich">Mục đích chuyển đổi</label>
                                    <select class="form-control" id="mucdich" onchange="loadTudienJs('mucdich', 'mucdich2')">
                                        <option value="">---</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" name="mucdich2" id="mucdich2"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="loaidat">Loại đất chuyển đổi <span class="text-require">*</span></label>
                                    <select class="form-control" id="loaidat" onchange="loadTudienJs('loaidat', 'loaidat2')">
                                        <option value="">---</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" name="loaidat2" id="loaidat2"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dientich">Diện tích chuyển đổi (ha)</label>
                                    <input type="text" class="form-control" id="dientich" name="dientich" value="{{ old('dientich') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="diadiem">Vườn quốc gia/ Khu bảo tồn</label>
                                    <select class="form-control" id="diadiem" name="diadiem">
                                        <option value="">---</option>
                                        @foreach($diadiem as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="thoigian">Thời gian (Năm)</label>
                                    <input type="number" class="form-control" id="thoigian" name="thoigian" value="{{ old('thoigian') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="huyen">Quận/ Huyện/ Thị xã</label>
                                    <textarea class="form-control" id="huyen" name="huyen" rows="3">{{ old('huyen') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="xa">Xã/ Phường/ Thị trấn</label>
                                    <textarea class="form-control" id="xa" name="xa" rows="3">{{ old('xa') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nguondulieu">Nguồn dữ liệu</label>
                                    <textarea class="form-control" id="nguondulieu" name="nguondulieu" rows="6">{{ old('nguondulieu') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ghichu">Ghi chú</label>
                                    <textarea class="form-control" id="ghichu" name="ghichu" rows="6">{{ old('ghichu') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pt-2">
                                <button type="submit" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                                  </svg> <strong>Lưu lại</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    @include('administrator.layouts.footer')
@endsection