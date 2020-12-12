{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">لیست مدیران
                    <div class="text-muted pt-2 font-size-sm">در این بخش شما لیست مدیران را مشاهده میکنید</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('panel.managers.create') }}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                         version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path
                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>افزودن مدیر جدید</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">

            <!--begin::Search Form-->
            <form action="{{ route('panel.managers.index') }}" method="GET">
                <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-xl-4">
                            <div class="row align-items-center">
                                <div class="col-md-12 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="جستجو ..."
                                               id="kt_datatable_search_query" name="name"
                                               value="{{ request('name') }}"/>
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                            <button class="btn btn-light-primary px-6 font-weight-bold" type="submit">
                                جستجو
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Search Form-->

            <table class="table table-bordered table-hover" id="datatable_admin_list">
                <thead>
                <tr>
                    <th>کد کاربری</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>وضعیت</th>
                    <th>نوع</th>
                    <th>دسترسی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <span class="label-cursor">
                                {{ $user->id }}
                            </span>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span
                                class="label @if($user->status == '0') label-danger @else label-success @endif label-dot mr-2">
                            </span>
                            @if($user->status == '0')
                                <span class="font-weight-bold text-danger label-cursor">
                                    غیرفعال
                                </span>
                            @else
                                <span class="font-weight-bold text-success label-cursor">
                                    فعال
                                </span>
                            @endif
                        </td>
                        <td>
                            <span class="label label-lg font-weight-bold label-light-info label-inline label-cursor">مدیریت</span>
                        </td>
                        <td>
                            <a href="{{ route('panel.users.permissions', ['user' => $user->id]) }}" class="btn btn-sm btn-clean btn-icon" title="دسترسی">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-1"/>
                                            </mask>
                                            <g/>
                                            <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('panel.managers.destroy', ['manager' => $user->id]) }}" method="POST"
                                  id="deleteAdmin{{ $user->id }}">
                                @method('DELETE')
                                @csrf
                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon delete-admin" title="حذف"
                                   data-delete="{{ $user->id }}"> <span
                                        class="svg-icon svg-icon-lg svg-icon-danger">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g
                                                stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        <rect
                                                    x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                                <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection

{{-- Styles Section --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Tools.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    @toastr_render
@endsection
