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
                            <li class="breadcrumb-item active" aria-current="page">Hợp tác quốc tế</li>
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
                                    <h4 class="card-title"><i class="bi bi-list-nested"></i> Xem chi tiết</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-header">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('dadangsinhhochanoi.hoptacquocte-create') }}"><button class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                          </svg> Thêm mới</button></a>
                                        <a href="#"><button class="btn btn-outline-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg> Sửa</button></a>
                                        <a href="#"><button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg> Xóa</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            @if (count($data))
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0 font-size-14">
                                    <tbody>
                                        @foreach ($data as $item)
                                        @php
                                            $v1 = \App\Models\DefValue::select('giatri')->where('id', $item->tinhchat)->get();
                                            $v2 = \App\Models\DefValue::select('giatri')->where('id', $item->phancap)->get();
                                            $v3 = \App\Models\DefValue::select('giatri')->where('id', $item->danhnghia)->get();
                                            $v4 = \App\Models\DefValue::select('giatri')->where('id', $item->tinhtrang)->get();
                                        @endphp
                                        <tr>
                                            <td class="text-bold-500 w-25 table-primary">Tên văn bản/ dự án</td>
                                            <td class="w-75">{{ $item->ten }}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Tính chất</td>
                                            <td>@if ( count($v1) )
                                                {{ $v1[0]->giatri }}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngày ban hành</td>
                                            <td>@if ($item->ngaybanhanh != NULL) {{ date('d/m/Y', strtotime($item->ngaybanhanh)) }} @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngày có hiệu lực</td>
                                            <td>@if ($item->ngayhieuluc != NULL) {{ date('d/m/Y', strtotime($item->ngayhieuluc)) }} @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Thời hạn hiệu lực</td>
                                            <td>{{ $item->thoihanhieuluc }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Đối tác nước ngoài</td>
                                            <td>{{ $item->tendoitacnn }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Phân cấp</td>
                                            <td>
                                                @if ( count($v2) )
                                                    {{ $v2[0]->giatri }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Danh nghĩa</td>
                                            <td>
                                                @if ( count($v3) )
                                                    {{ $v3[0]->giatri }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Cơ quan chủ trì</td>
                                            <td>{{ $item->coquanchutri }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Người ký</td>
                                            <td>{{ $item->nguoiki }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Thời gian kết thúc</td>
                                            <td>@if ($item->thoigianketthuc != NULL) {{ date('d/m/Y', strtotime($item->thoigianketthuc)) }} @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Tình trạng</td>
                                            <td>
                                                @if ( count($v4) )
                                                    {{ $v4[0]->giatri }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Nội dung chính</td>
                                            <td>{{ $item->noidungchinh }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Nội dung</td>
                                            <td>{!! $item->noidung !!}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ghi chú</td>
                                            <td>{!! $item->ghichu !!}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                                <div class="alert alert-warning">Danh sách trống</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection