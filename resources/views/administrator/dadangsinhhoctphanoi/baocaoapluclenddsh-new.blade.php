@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Báo cáo áp lực lên đa dạng sinh học</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dadangsinhhochanoi.baocaoapluclenddsh') }}">Báo cáo áp lực lên đa dạng sinh học</a></li>
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
                    <form action="{{ route('dadangsinhhochanoi.baocaoapluclenddsh-create-post') }}" method="POST">
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
                                    <label for="thongso_id">Thông số <span class="text-require">*</span></label>
                                    <select class="form-control" name="thongso_id">
                                        <option value="">--Lựa chọn--</option>
                                        @foreach($thongso as $i)
                                            <option value="{{$i->id}}">{{$i->ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="soluong">Số lượng</label>
                                    <input type="text" class="form-control" id="soluong" name="soluong" value="{{ old('soluong') }}">
                                </div>
                                <div class="form-group">
                                    <label for="dvtsoluong">Đơn vị tính số lượng</label>
                                    <input type="text" class="form-control" id="dvtsoluong" name="dvtsoluong" value="{{ old('dvtsoluong') }}">
                                </div>
                                <div class="form-group">
                                    <label for="khoiluong">Khối lượng</label>
                                    <input type="text" class="form-control" id="khoiluong" name="khoiluong" value="{{ old('khoiluong') }}">
                                </div>
                                <div class="form-group">
                                    <label for="dvtkhoiluong">Đơn vị tính khối lượng</label>
                                    <input type="text" class="form-control" id="dvtkhoiluong" name="dvtkhoiluong" value="{{ old('dvtkhoiluong') }}">
                                </div>
                                <div class="form-group">
                                    <label for="dientich">Diện tích</label>
                                    <input type="text" class="form-control" id="dientich" name="dientich" value="{{ old('dientich') }}">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" class="form-control" id="mota" name="mota" value="{{ old('mota') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phancapbaocao">Phân cấp <span class="text-require">*</span></label>
                                    <select class="form-control" id="phancapbaocao" onchange="loadTudienJs('phancapbaocao', 'phancapbaocao2')">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-3" name="phancapbaocao2" id="phancapbaocao2"></select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tendonvi">Tên đơn vị</label>
                                    <input type="text" class="form-control" id="tendonvi" name="tendonvi" value="{{ old('tendonvi') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kybaocao">Kỳ báo cáo</label>
                                    <input type="text" class="form-control" id="kybaocao" name="kybaocao" value="{{ old('kybaocao') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgbatdau">Thời gian bắt đầu</label>
                                    <input type="date" class="form-control" id="tgbatdau" name="tgbatdau" value="{{ old('tgbatdau') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgketthuc">Thời gian kết thúc</label>
                                    <input type="date" class="form-control" id="tgketthuc" name="tgketthuc" value="{{ old('tgketthuc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ghichu">Ghi chú</label>
                                    <textarea class="form-control" id="ghichu" name="ghichu" rows="10">{{ old('ghichu') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="nguondulieu">Nguồn dữ liệu</label>
                                    <input type="text" class="form-control" id="nguondulieu" name="nguondulieu" value="{{ old('nguondulieu') }}">
                                </div>
                            </div>
                            <div class="col-md-12 pt-2">
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