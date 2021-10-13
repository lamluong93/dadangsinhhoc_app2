@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Bộ dữ liệu</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dulieudadangsinhhoc.bodulieu') }}">Bộ dữ liệu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header" style="padding-bottom: 12px;">
                    <h4 class="card-title"><i class="bi bi-file-earmark-plus-fill"></i> Thêm dữ liệu mới</h4>
                </div>
    
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true">Nhập dữ liệu</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                role="tab" aria-controls="profile" aria-selected="false">Import Excel</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <form class="pt-4" action="{{ route('dulieudadangsinhhoc.bodulieu-create-post') }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="tieude">Tiêu đề tên bộ dữ liệu <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="tieude" name="tieude" value="{{ old('tieude') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ngaycongbo">Ngày công bố bộ dữ liệu <span class="text-require">*</span></label>
                                            <input type="date" class="form-control" id="ngaycongbo" name="ngaycongbo" value="{{ old('ngaycongbo') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ngonngu">Ngôn ngữ <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="ngonngu" name="ngonngu" value="{{ old('ngonngu') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="seri">Số seri hoặc mô tả seri</label>
                                            <input type="text" class="form-control" id="seri" name="seri" value="{{ old('seri') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tomtat">Tóm tắt</label>
                                            <textarea class="form-control" id="tomtat" name="tomtat" rows="3">{{ old('tomtat') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ttbosung">Thông tin bổ sung</label>
                                            <textarea class="form-control" id="ttbosung" name="ttbosung" rows="3">{{ old('ttbosung') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="quyensohuutritue">Quyền sở hữu trí tuệ <span class="text-require">*</span></label>
                                            <textarea class="form-control" id="quyensohuutritue" name="quyensohuutritue" rows="3" required>{{ old('quyensohuutritue') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phanloai">Phân loại bộ dữ liệu</label>
                                            <textarea class="form-control" id="phanloai" name="phanloai" rows="3">{{ old('phanloai') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="dophu">Độ phủ</label>
                                            <input type="text" class="form-control" id="dophu" name="dophu" value="{{ old('dophu') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Địa chỉ website</label>
                                            <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo URL</label>
                                            <input type="text" class="form-control" id="logo" name="logo" value="{{ old('logo') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="trichdan">Trích dẫn</label>
                                            <textarea class="form-control" id="trichdan" name="trichdan" rows="3">{{ old('trichdan') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="motadialy">Mô tả đặc điểm địa lý</label>
                                            <textarea class="form-control" id="motadialy" name="motadialy" rows="3">{{ old('motadialy') }}</textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tukhoa">Từ khóa</label>
                                            <input type="text" class="form-control" id="tukhoa" name="tukhoa" value="{{ old('tukhoa') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="dongnghia">Từ đồng nghĩa</label>
                                            <input type="text" class="form-control" id="dongnghia" name="dongnghia" value="{{ old('dongnghia') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="batdau">Ngày bắt đầu lập bộ dữ liệu <span class="text-require">*</span></label>
                                            <input type="date" class="form-control" id="batdau" name="batdau" value="{{ old('batdau') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ketthuc">Ngày hoàn thành lập bộ dữ liệu</label>
                                            <input type="date" class="form-control" id="ketthuc" name="ketthuc" value="{{ old('ketthuc') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dophuphanloai">Độ phủ phân loại</label>
                                            <input type="text" class="form-control" id="dophuphanloai" name="dophuphanloai" value="{{ old('dophuphanloai') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tay">Giới hạn tọa độ Tây</label>
                                            <input type="text" class="form-control" id="tay" name="tay" value="{{ old('tay') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="dong">Giới hạn tọa độ Đông</label>
                                            <input type="text" class="form-control" id="dong" name="dong" value="{{ old('dong') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="bac">Giới hạn tọa độ Bắc</label>
                                            <input type="text" class="form-control" id="bac" name="bac" value="{{ old('bac') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nam">Giới hạn tọa độ Nam</label>
                                            <input type="text" class="form-control" id="nam" name="nam" value="{{ old('nam') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="file">File tài liệu</label>
                                            <input type="file" class="form-control" id="file" name="file" value="{{ old('file') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="tochuc">Tổ chức thực hiện <span class="text-require">*</span></label>
                                            <select class="form-control" id="tochuc" name="tochuc" required>
                                                <option value="">---</option>
                                                @foreach($tochuc as $item)
                                                    @if (old('tochuc') == $item->id)
                                                        <option value="{{ $item->id }}" selected>{{ $item->ten }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="diadiem">Địa điểm <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="diadiem" name="diadiem" value="{{ old('diadiem') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="loaibodulieu">Các dạng/ kiểu bộ dữ liệu <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="loaibodulieu" name="loaibodulieu" value="{{ old('loaibodulieu') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="trangthai">Trạng thái bộ dữ liệu</label>
                                            <input type="text" class="form-control" id="trangthai" name="trangthai" value="{{ old     ('trangthai') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="chuanphanloai">Chuẩn phân loại <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="chuanphanloai" name="chuanphanloai" value="{{ old('chuanphanloai') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <h4 class="card-title"><i class="bi bi-book-half"></i> Tài liệu tham khảo bộ dữ liệu</h4>
                                        <div class="form-group input-group">
                                            <label for="value">Tên tài liệu tham khảo</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="value">
                                                <div class="input-group-append" id="add-value">
                                                    <span class="input-group-text cursor-pointer">+</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="display-none">Danh sách tài liệu tham khảo:</h6>
                                        <ol id="list">
                                        </ol>
                                        <p id="delListGt">Xóa danh sách</p>
                                        <input type="hidden" name="list-value" id="list-value" value="{{ old('list-value') }}">
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12 pt-2">
                                        <button type="submit" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                                          </svg> Lưu lại</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Chọn file dữ liệu</h5>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <input type="file" class="basic-filepond">
                                                <button class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                  </svg> Tải lên</button>
                                                <p class="mt-2"><a href="#">Tải mẫu nhập Excel</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('administrator.layouts.footer')
@endsection