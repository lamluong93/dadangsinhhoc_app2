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
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết bộ dữ liệu</li>
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
                                    <h4 class="card-title"><i class="bi bi-list-nested"></i> Chi tiết bộ dữ liệu</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-header">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('dulieudadangsinhhoc.bodulieu-create') }}"><button class="btn btn-outline-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                          </svg> Thêm mới</button></a>
                                        <a href="#"><button class="btn btn-outline-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg> Sửa</button></a>
                                        <a href="#"><button class="btn btn-outline-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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
                                        <tr>
                                            <td class="text-bold-500 w-25 table-primary">Tiêu đề bộ dữ liệu</td>
                                            <td class="w-75 text-justify">{{ $data[0]->tieude }}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngày công bố bộ dữ liệu</td>
                                            <td>
                                                @if ($data[0]->ngaycongbo != NULL) {{ date('d/m/Y', strtotime($data[0]->ngaycongbo)) }} @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngôn ngữ</td>
                                            <td>
                                                {{ $data[0]->ngonngu }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Số seri hoặc mô tả seri</td>
                                            <td class="text-justify">
                                                {{ $data[0]->series }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Tóm tắt</td>
                                            <td class="text-justify">
                                                {!! $data[0]->tomtat !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Thông tin bổ sung</td>
                                            <td class="text-justify">
                                                {!! $data[0]->thongtinbosung !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Quyền sở hữu trí tuệ</td>
                                            <td class="text-justify">
                                                {!! $data[0]->quyensohuutritue !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Phân loại bộ dữ liệu</td>
                                            <td class="text-justify">
                                                {!! $data[0]->phanloai !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Độ phủ</td>
                                            <td class="text-justify">
                                                {{ $data[0]->dophu }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Địa chỉ website</td>
                                            <td class="text-justify">
                                                <a href="{{$data[0]->websitelink}}" target="_blank">{{$data[0]->websitelink}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Hình ảnh Logo tổ chức hoặc dự án</td>
                                            <td class="text-justify">
                                                @if ($data[0]->logo_url != NULL)
                                                    <img src="{{ $data[0]->logo_url }}" alt="Logo">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Trích dẫn</td>
                                            <td class="text-justify">
                                                {!! $data[0]->trichdan !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Mô tả đặc điểm địa lý</td>
                                            <td class="text-justify">
                                                {!! $data[0]->motadialy !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Từ khóa</td>
                                            <td class="text-justify">
                                                {{ $data[0]->tukhoa }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Từ đồng nghĩa</td>
                                            <td class="text-justify">
                                                {{ $data[0]->tukhoadongnghia }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngày bắt đầu lập bộ dữ liệu</td>
                                            <td class="text-justify">
                                                @if ($data[0]->ngaybatdau != NULL)
                                                    {{ date('d/m/Y', strtotime($data[0]->ngaybatdau)) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Ngày hoàn thành lập bộ dữ liệu</td>
                                            <td class="text-justify">
                                                @if ($data[0]->ngayketthuc != NULL)
                                                    {{ date('d/m/Y', strtotime($data[0]->ngayketthuc)) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Độ phủ phân loại</td>
                                            <td class="text-justify">
                                                {{ $data[0]->dophuphanloai }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Giới hạn tọa độ Tây</td>
                                            <td class="text-justify">
                                                {{ $data[0]->toadotay }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Giới hạn tọa độ Đông</td>
                                            <td class="text-justify">
                                                {{ $data[0]->toadodong }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Giới hạn tọa độ Bắc</td>
                                            <td class="text-justify">
                                                {{ $data[0]->toadobac }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Giới hạn tọa độ Nam</td>
                                            <td class="text-justify">
                                                {{ $data[0]->toadonam }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">File tài liệu</td>
                                            <td class="text-justify">
                                                <a href="{{ asset('storage/bodulieu/'.$data[0]->tenfile) }}" target="_blank">{{$data[0]->tenfilegoc}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Tổ chức thực hiện</td>
                                            <td class="text-justify">
                                                {{ $tochuc[0]->ten }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Địa điểm</td>
                                            <td class="text-justify">
                                                {{ $data[0]->diadiem }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Các dạng/ kiểu bộ dữ liệu</td>
                                            <td class="text-justify">
                                                {{ $data[0]->loaibodulieu }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Trạng thái bộ dữ liệu</td>
                                            <td class="text-justify">
                                                {{ $data[0]->trangthai }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Chuẩn phân loại</td>
                                            <td class="text-justify">
                                                {{ $data[0]->chuanphanloai }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500 table-primary">Tài liệu tham khảo bộ dữ liệu</td>
                                            <td class="text-justify">
                                                @foreach($tltk as $df)
                                                    <p>{{ $df->ten }}</p>
                                                @endforeach
                                            </td>
                                        </tr>
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