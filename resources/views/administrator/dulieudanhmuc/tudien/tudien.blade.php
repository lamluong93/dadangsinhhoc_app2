@extends('administrator.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Từ điển</h3>
                <p class="text-subtitle text-muted">Nhập dữ liệu từ điển</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Từ điển</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><i class="bi bi-file-earmark-plus-fill"></i> Thêm mới</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('tudien-post') }}" method="POST">
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

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            Yêu cầu đã được xử lý.
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Tên kiểu <span class="text-require">*</span></label>
                                <input type="text" class="form-control" id="basicInput" name="type" value="{{ old('type') }}">
                            </div>

                            <div class="form-group">
                                <label for="mota">Mô tả</label>
                                <textarea class="form-control" id="mota" name="mota" rows="5">{{ old('mota') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group">
                                <label for="value">Giá trị <span class="text-require">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="value">
                                    <div class="input-group-append" id="add-value">
                                        <span class="input-group-text cursor-pointer">+</span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="display-none">Danh sách giá trị cho kiểu từ điển:</h6>
                            <ol id="list">
                            </ol>
                            <p id="delListGt">Xóa danh sách</p>
                            <input type="hidden" name="list-value" id="list-value" value="{{ old('list-value') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Lưu lại" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><i class="bi bi-list-nested"></i> Danh sách từ điển</h4>
                    </div>
                    <div class="card-body">
                        @if (count($tudien))
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                    <tr class="table-primary text-center">
                                        <th style="width: 15px;">#</th>
                                        <th>Tên kiểu</th>
                                        <th>Mô tả</th>
                                        <th style="width: 8%"><i class="bi bi-list"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tudien as $item)
                                    <tr>
                                        <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td class="text-bold-500">{!! $item->description !!}</td>
                                        <td class="text-center text-supersm">
                                            <i class="bi bi-eye-fill cursor-pointer text-primary"></i> &nbsp;<i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <div class="alert alert-warning">Danh sách trống</div>
                        @endif
                    </div>
                    <div class="card-footer text-center">
                        {{ $tudien->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('administrator.layouts.footer')
@endsection