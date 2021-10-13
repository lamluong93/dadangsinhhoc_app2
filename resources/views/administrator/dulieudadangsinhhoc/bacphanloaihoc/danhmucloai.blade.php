@extends('administrator.master')

@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.4/js/dataTables.scroller.min.js"></script>

<style>
    table {
        font-size: 14px;
    }
</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Danh mục loài</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh mục loài</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Thêm mới</h4>
            </div> --}}

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Bậc phân loại</h4>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="{{ route('dulieudadangsinhhoc.danhmucloai-create') }}"><button class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                          </svg> Thêm mới</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-gioi-tab" data-bs-toggle="pill"
                                                href="#v-pills-gioi" role="tab" aria-controls="v-pills-gioi"
                                                aria-selected="true">Giới (Kingdom) (<span class="text-danger">{{ count($data1) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-nganh-tab" data-bs-toggle="pill"
                                                href="#v-pills-nganh" role="tab" aria-controls="v-pills-nganh"
                                                aria-selected="false">Ngành (Phylum) (<span class="text-danger">{{ count($data2) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-lop-tab" data-bs-toggle="pill"
                                                href="#v-pills-lop" role="tab" aria-controls="v-pills-lop"
                                                aria-selected="false">Lớp (Class) (<span class="text-danger">{{ count($data3) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-bo-tab" data-bs-toggle="pill"
                                                href="#v-pills-bo" role="tab" aria-controls="v-pills-bo"
                                                aria-selected="false">Bộ (Order) (<span class="text-danger">{{ count($data4) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-ho-tab" data-bs-toggle="pill"
                                                href="#v-pills-ho" role="tab" aria-controls="v-pills-ho"
                                                aria-selected="false">Họ (Family) (<span class="text-danger">{{ count($data5) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-chi-tab" data-bs-toggle="pill"
                                                href="#v-pills-chi" role="tab" aria-controls="v-pills-chi"
                                                aria-selected="false">Chi (Genus) (<span class="text-danger">{{ count($data6) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-loai-tab" data-bs-toggle="pill"
                                                href="#v-pills-loai" role="tab" aria-controls="v-pills-loai"
                                                aria-selected="false">Loài (Species) (<span class="text-danger">{{ count($data7) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-duoiloai-tab" data-bs-toggle="pill"
                                                href="#v-pills-duoiloai" role="tab" aria-controls="v-pills-duoiloai"
                                                aria-selected="false">Dưới loài (Subspecies) (<span class="text-danger">{{ count($data8) }}</span>)</a>
                                            <a class="nav-link" id="v-pills-dongdanh-tab" data-bs-toggle="pill"
                                                href="#v-pills-dongdanh" role="tab" aria-controls="v-pills-dongdanh"
                                                aria-selected="false">Đồng danh (Synonyms) (<span class="text-danger">{{ count($data9) }}</span>)</a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 border-sp">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active pt-1" id="v-pills-gioi" role="tabpanel"
                                                aria-labelledby="v-pills-gioi-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-gioi">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data1 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-nganh" role="tabpanel"
                                                aria-labelledby="v-pills-nganh-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-nganh">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Giới (Kingdom)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data2 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Gioi::select('tenkhoahoc', 'tentiengviet')->where('id', $item->gioi_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-lop" role="tabpanel"
                                                aria-labelledby="v-pills-lop-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-lop">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Ngành (Phylum)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data3 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Nganh::select('tenkhoahoc', 'tentiengviet')->where('id', $item->nganh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-bo" role="tabpanel"
                                                aria-labelledby="v-pills-bo-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-bo">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Lớp (Class)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data4 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Lop::select('tenkhoahoc', 'tentiengviet')->where('id', $item->lop_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-ho" role="tabpanel"
                                                aria-labelledby="v-pills-ho-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-ho">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Bộ (Order)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data5 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Bo::select('tenkhoahoc', 'tentiengviet')->where('id', $item->bo_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-chi" role="tabpanel"
                                                aria-labelledby="v-pills-chi-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-chi">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Họ (Family)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data6 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Ho::select('tenkhoahoc', 'tentiengviet')->where('id', $item->ho_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-loai" role="tabpanel"
                                                aria-labelledby="v-pills-loai-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-loai">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Mã loài</th>
                                                                <th class="text-center">Chi (Genus)</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Trạng thái</th>
                                                                <th class="text-center">Đồng danh<br>(Synonyms)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data7 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                <td>{{ $item->maloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Chi::select('tenkhoahoc', 'tentiengviet')->where('id', $item->chi_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->trangthai }}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\DongDanh::select('ten')->where('id', $item->dongdanh_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->ten }}
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-duoiloai" role="tabpanel"
                                                aria-labelledby="v-pills-duoiloai-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-duoiloai">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên khoa học</th>
                                                                <th class="text-center">Tên Tiếng Việt</th>
                                                                <th class="text-center">Bậc phân loại</th>
                                                                <th class="text-center">Ghi chú</th>
                                                                <th class="text-center">Chuẩn phân loại</th>
                                                                <th class="text-center">Loài<br>(Species)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data8 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->tenkhoahoc }}</td>
                                                                <td>{{ $item->tentiengviet }}</td>
                                                                <td>{{ $item->bacphanloai }}</td>
                                                                <td>{!! $item->ghichu !!}</td>
                                                                <td>{{ $item->chuanphanloai }}</td>
                                                                @php
                                                                    $v1 = \App\Models\Loai::select('tenkhoahoc', 'tentiengviet')->where('id', $item->loai_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->tentiengviet }})
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-dongdanh" role="tabpanel"
                                                aria-labelledby="v-pills-dongdanh-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-striped table-hover table-bordered" id="tbl-dongdanh">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th class="text-center">Tên</th>
                                                                <th class="text-center">Nguồn dữ liệu</th>
                                                                <th class="text-center">Mô tả</th>
                                                                <th class="text-center">Phân loại học<br>(Taxons)</th>
                                                                <th class="text-center">###</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data9 as $item)
                                                            <tr>
                                                                <td class="text-bold-500 text-center">{{ $loop->index + 1 }}</td>
                                                                <td>{{ $item->ten }}</td>
                                                                <td>{{ $item->nguondulieu }}</td>
                                                                <td>{{ $item->mota }}</td>
                                                                @php
                                                                    $v1 = \App\Models\PhanLoaiHoc::select('tenkhoahoc', 'idtenkhoahoc')->where('id', $item->phanloaihoc_id)->get();
                                                                @endphp
                                                                <td>
                                                                    @if ( count($v1) )
                                                                        {{ $v1[0]->tenkhoahoc }} ({{ $v1[0]->idtenkhoahoc }})
                                                                    @endif
                                                                </td>
                                                                <td class="text-center text-supersm">
                                                                    <i class="bi bi-pencil-square cursor-pointer text-warning"></i>&nbsp; <i class="bi bi-trash-fill cursor-pointer text-danger"></i>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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

<script src="{{ asset('admin/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // let tableGioi = document.querySelector('#tbl-gioi');
    // let dataTable = new simpleDatatables.DataTable(tableGioi, {
    //     "language": {
    //         "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
    //     },
    // });

    var table1 = $('#tbl-gioi').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table2 = $('#tbl-nganh').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table3 = $('#tbl-lop').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table4 = $('#tbl-bo').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table5 = $('#tbl-ho').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table6 = $('#tbl-chi').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table7 = $('#tbl-loai').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table8 = $('#tbl-duoiloai').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });

    var table9 = $('#tbl-dongdanh').DataTable({
        "processing": true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
        },
        dom: 'Blfrtip',
    });
</script>
@include('administrator.layouts.footer')
@endsection