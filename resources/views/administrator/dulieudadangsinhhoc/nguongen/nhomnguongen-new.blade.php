@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Nhóm nguồn gen</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dulieudadangsinhhoc.nhomnguongen') }}">Nhóm nguồn gen</a></li>
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
                    <form action="{{ route('dulieudadangsinhhoc.nhomnguongen-create-post') }}" method="POST">
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
                                    <label for="phanloai">Phân loại <span class="text-require">*</span></label>
                                    <select class="form-control" name="phanloai" id="phanloai" onchange="loadTudienJs('phanloai', 'phanloai2')">
                                        <option value="">--Lựa chọn--</option>
                                        @foreach($tudien as $i)
                                            <option value="{{$i->id}}">{{$i->type}}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control mt-2" id="phanloai2" name="phanloai2"></select>
                                </div>
                                <div class="form-group">
                                    <label for="ten">Tên nhóm nguồn gen <span class="text-require">*</span></label>
                                    <input type="text" class="form-control" id="ten" name="ten" value="{{ old('ten') }}">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea class="form-control" id="mota" name="mota" rows="10">{{ old('mota') }}</textarea>
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