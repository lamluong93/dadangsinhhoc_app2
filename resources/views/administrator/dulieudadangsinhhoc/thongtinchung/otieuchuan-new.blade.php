@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ô tiêu chuẩn</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dulieudadangsinhhoc.otieuchuan') }}">Ô tiêu chuẩn</a></li>
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
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#input1"
                                role="tab" aria-controls="home" aria-selected="true">Nhập dữ liệu</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#input2"
                                role="tab" aria-controls="profile" aria-selected="false">Import Excel</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="input1" role="tabpanel"
                            aria-labelledby="home-tab">
                            <form class="pt-4" action="{{ route('dulieudadangsinhhoc.otieuchuan-create-post') }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ten">Tên ô tiêu chuẩn <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="ten" name="ten" value="{{ old('ten') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kichthuoc">Kích thước <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="kichthuoc" name="kichthuoc" value="{{ old('kichthuoc') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hinhdang">Hình dạng</label>
                                            <input type="text" class="form-control" id="hinhdang" name="hinhdang" value="{{ old('hinhdang') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="vitri">Vị trí</label>
                                            <input type="text" class="form-control" id="vitri" name="vitri" value="{{ old('vitri') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="khonggian">Không gian <span class="text-require">*</span></label>
                                            <input type="text" class="form-control" id="khonggian" name="khonggian" value="{{ old('khonggian') }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="docao">Độ cao</label>
                                            <input type="text" class="form-control" id="docao" name="docao" value="{{ old('docao') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dosau">Độ sâu</label>
                                            <input type="text" class="form-control" id="dosau" name="dosau" value="{{ old('dosau') }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="diadiem">Vường quốc gia/ Khu bảo tồn</label>
                                            <select class="form-control" id="diadiem" name="diadiem">
                                                <option value="">---</option>
                                                @foreach($diadiem as $item)
                                                    @if (old('diadiem') == $item->id)
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
                                    <div class="col-md-12 pt-2">
                                        <button type="submit" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                                            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                                          </svg> Lưu lại</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="input2" role="tabpanel"
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