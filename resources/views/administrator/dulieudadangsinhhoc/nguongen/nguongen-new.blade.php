@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dữ liệu nguồn gen</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dulieudadangsinhhoc.nguongen') }}">Dữ liệu nguồn gen</a></li>
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
                    <form action="{{ route('dulieudadangsinhhoc.nguongen-create-post') }}" method="POST">
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
                                    <label for="loainguongen">Loại nguồn gen <span class="text-require">*</span></label>
                                    <select class="form-control" name="loainguongen" id="loainguongen">
                                        <option value="">--Lựa chọn--</option>
                                        @foreach($loainguongen as $i)
                                            <option value="{{$i->id}}">{{$i->ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ten">Tên nguồn gen <span class="text-require">*</span></label>
                                    <input type="text" class="form-control" id="ten" name="ten" value="{{ old('ten') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tenthongthuong">Tên thông thường</label>
                                    <input type="text" class="form-control" id="tenthongthuong" name="tenthongthuong" value="{{ old('tenthongthuong') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tendantoc">Tên dân tộc</label>
                                    <input type="text" class="form-control" id="tendantoc" name="tendantoc" value="{{ old('tendantoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tenkhoahoc">Tên khoa học</label>
                                    <input type="text" class="form-control" id="tenkhoahoc" name="tenkhoahoc" value="{{ old('tenkhoahoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="dacdiem">Đặc điểm nổi bật</label>
                                    <input type="text" class="form-control" id="dacdiem" name="dacdiem" value="{{ old('dacdiem') }}">
                                </div>
                                <div class="form-group">
                                    <label for="msnguongen">Mã số nguồn gen (Quốc gia)</label>
                                    <input type="text" class="form-control" id="msnguongen" name="msnguongen" value="{{ old('msnguongen') }}">
                                </div>
                                <div class="form-group">
                                    <label for="msnguongen1">Mã số nguồn gen (Tỉnh)</label>
                                    <input type="text" class="form-control" id="msnguongen1" name="msnguongen1" value="{{ old('msnguongen1') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tinhtrangluugiu">Tình trạng lưu giữ <span class="text-require">*</span></label>
                                    <select class="form-control" id="tinhtrangluugiu" onchange="loadTudienJs('tinhtrangluugiu','tinhtrangluugiu1')">
                                        <option value="">-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" name="tinhtrangluugiu1" id="tinhtrangluugiu1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="tinhtrangnghiencuu">Tình trạng nghiên cứu <span class="text-require">*</span></label>
                                    <select class="form-control" id="tinhtrangnghiencuu" onchange="loadTudienJs('tinhtrangnghiencuu','tinhtrangnghiencuu1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="tinhtrangnghiencuu1" name="tinhtrangnghiencuu1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="tinhtrangsudung">Tình trạng sử dụng</label>
                                    <select class="form-control" id="tinhtrangsudung" onchange="loadTudienJs('tinhtrangsudung','tinhtrangsudung1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="tinhtrangsudung1" name="tinhtrangsudung1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="nguongoc">Nguồn gốc</label>
                                    <select class="form-control" id="nguongoc" onchange="loadTudienJs('nguongoc','nguongoc1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="nguongoc1" name="nguongoc1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="xuatxu">Xuất xứ</label>
                                    <input type="text" class="form-control" id="xuatxu" name="xuatxu" value="{{ old('xuatxu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phuongthucluugiu">Phương thức lưu giữ</label>
                                    <select class="form-control" id="phuongthucluugiu" onchange="loadTudienJs('phuongthucluugiu','phuongthucluugiu1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="phuongthucluugiu1" name="phuongthucluugiu1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="dientichluugiu">Diện tích lưu giữ</label>
                                    <input type="text" class="form-control" id="dientichluugiu" name="dientichluugiu" value="{{ old('dientichluugiu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="vatlieuditruyen">Vật liệu di truyền lưu giữ</label>
                                    <input type="text" class="form-control" id="vatlieuditruyen" name="vatlieuditruyen" value="{{ old('vatlieuditruyen') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slvatlieuditruyen">Số lượng vật liệu di truyền lưu giữ</label>
                                    <input type="number" class="form-control" id="slvatlieuditruyen" name="slvatlieuditruyen" value="{{ old('slvatlieuditruyen') }}">
                                </div>
                                <div class="form-group">
                                    <label for="thoigianbatdau">Thời gian bắt đầu lưu giữ (Năm)</label>
                                    <input type="number" class="form-control" id="thoigianbatdau" name="thoigianbatdau" value="{{ old('thoigianbatdau') }}">
                                </div>
                                <div class="form-group">
                                    <label for="baoquan">Hình thức bảo quản</label>
                                    <input type="text" class="form-control" id="baoquan" name="baoquan" value="{{ old('baoquan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="genquyhiem">Thuộc gen quý hiếm</label>
                                    <select class="form-control" id="genquyhiem" onchange="loadTudienJs('genquyhiem','genquyhiem1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="genquyhiem1" name="genquyhiem1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="banchat">Bản chất di truyền</label>
                                    <select class="form-control" id="banchat" onchange="loadTudienJs('banchat','banchat1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="banchat1" name="banchat1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="tinhtrang">Tình trạng</label>
                                    <select class="form-control" id="tinhtrang" onchange="loadTudienJs('tinhtrang','tinhtrang1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="tinhtrang1" name="tinhtrang1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="bienphapbaoton">Biện pháp bảo tồn</label>
                                    <input type="text" class="form-control" id="bienphapbaoton" name="bienphapbaoton" value="{{ old('bienphapbaoton') }}">
                                </div>
                                <div class="form-group">
                                    <label for="khanangtiepcan">Khả năng tiếp cận</label>
                                    <input type="text" class="form-control" id="khanangtiepcan" name="khanangtiepcan" value="{{ old('khanangtiepcan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="quytrinhtiepcan">Quy trình tiếp cận</label>
                                    <textarea class="form-control" id="quytrinhtiepcan" name="quytrinhtiepcan" rows="10">{{ old('quytrinhtiepcan') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gencodk">Thuộc danh mục nguồn gen khai thác có điều kiện</label>
                                    <select class="form-control" id="gencodk" onchange="loadTudienJs('gencodk','gencodk1')">
                                        <option>-- Lựa chọn --</option>
                                        @foreach ($tudien as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="gencodk1" name="gencodk1"></select>
                                </div>
                                <div class="form-group">
                                    <label for="ghichu">Ghi chú</label>
                                    <textarea class="form-control" id="ghichu" name="ghichu" rows="10">{{ old('ghichu') }}</textarea>
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