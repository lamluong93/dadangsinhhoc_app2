@extends('administrator.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tăng dân số vùng đệm</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tăng dân số vùng đệm</li>
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
                                        <a href="{{ route('dadangsinhhochanoi.tangdansovungdem-create') }}"><button class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
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
                                            <th style="width: 15px;">#</th>
                                            <th style="width: 40px;">Dân số (Người)</th>
                                            <th style="width: 60px;">Tỷ lệ tăng<br>dân số (%)</th>
                                            <th style="width: 120px;">Vường quốc gia/<br>Khu bảo tồn</th>
                                            <th style="width: 50px">Thời gian<br>khảo sát</th>
                                            <th style="width: 100px">Kỳ báo cáo</th>
                                            <th style="width: 50px">Thời gian<br>bắt đầu</th>
                                            <th style="width: 50px;">Thời gian<br>kết thúc</th>
                                            <th style="width: 120px">Thông tin huyện</th>
                                            <th style="width: 120px">Thông tin xã</th>
                                            <th style="width: 100px">Nguồn dữ liệu</th>
                                            <th style="width: 120px">Ghi chú</th>
                                            <th style="width: 50px"><i class="bi bi-list"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                            <td class="">{{ number_format($item->danso) }}</td>
                                            <td class="">{{ $item->tyletang }}</td>
                                            @php
                                                $v1 = \App\Models\KhuBaoTon::select('ten')->where('id', $item->diadiem_id)->get();
                                            @endphp
                                            <td>
                                                @if ( count($v1) )
                                                    {{ $v1[0]->ten }}
                                                @endif
                                            </td>
                                            <td class="text-center">@if ($item->thoigiankhaosat != NULL) {{ date('d/m/Y', strtotime($item->thoigiankhaosat)) }} @endif</td>
                                            <td>{{ $item->kybaocao }}</td>
                                            <td class="text-center">@if ($item->tgbatdau != NULL) {{ date('d/m/Y', strtotime($item->tgbatdau)) }} @endif</td>
                                            <td class="text-center">@if ($item->tgketthuc != NULL) {{ date('d/m/Y', strtotime($item->tgketthuc)) }} @endif</td>
                                            @php
                                                $v2 = \App\Models\QuanHuyen::select('ten')->where('id', $item->huyen_id)->get();
                                            @endphp
                                            <td>
                                                @if ( count($v2) )
                                                    {{ $v2[0]->ten }}
                                                @endif
                                            </td>
                                            @php
                                                $v3 = \App\Models\Xa::select('ten')->where('id', $item->xa_id)->get();
                                            @endphp
                                            <td>
                                                @if ( count($v3) )
                                                    {{ $v3[0]->ten }}
                                                @endif
                                            </td>
                                            <td>{!! $item->nguondulieu !!}</td>
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