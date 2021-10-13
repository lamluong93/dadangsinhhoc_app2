@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Danh mục chỉ thị</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh mục chỉ thị</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="bi bi-list-nested"></i> Danh sách</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-header">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('dadangsinhhochanoi.chithi-create') }}"><button class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                          </svg> Thêm mới</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    Yêu cầu đã được xử lý.
                                </div>
                            @endif
                            @if (count($data))
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0 font-size-14">
                                    <thead>
                                        <tr class="table-primary text-center">
                                            <th style="width: 4%;">#</th>
                                            <th style="width: 30%">Nhóm chỉ thị</th>
                                            <th style="width: 30%">Tên chỉ thị</th>
                                            <th style="width: 30%">Ghi chú</th>
                                            <th style="width: 6%"><i class="bi bi-list"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                            @php
                                                $v1 = \App\Models\DefValue::select('giatri')->where('id', $item->nhomct_id)->get();
                                            @endphp
                                            <td>
                                                @if ( count($v1) )
                                                    {{ $v1[0]->giatri }}
                                                @endif
                                            </td>
                                            <td>{{ $item->ten }}</td>
                                            <td>{!! $item->ghichu !!}</td>
                                            <td class="text-center text-supersm">
                                                <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
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
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection