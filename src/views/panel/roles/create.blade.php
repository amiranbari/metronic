{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    ایجاد نقش
                    <div class="text-muted pt-2 font-size-sm">
                        در این بخش شما میتوانید نقش جدید ایجاد کنید.
                    </div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('panel.roles.index') }}" class="btn btn-primary font-weight-bolder">
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
                </span>لیست نقش ها</a>
                <!--end::Button-->
            </div>
        </div>
        <br>

    </div>
    <hr>
    <form action="{{ route('panel.roles.store') }}" method="POST">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                        عنوان نقش
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="عنوان نقش ..." required value="{{ old('title') }}">
                </div>
            </div>
        </div>
        <hr>
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                        دسترسی های نقش
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    @foreach($permissions as $permission)
                        <div class="col-lg-3 col-6 mb-5">
                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                <input type="checkbox" value="{{ $permission->id }}" name="permissions[]">
                                <span></span>
                                {{ $permission->display_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <hr>
                <button class="btn btn-info font-weight-bold mr-2">
                    ذخیره دسترسی ها
                </button>
            </div>
        </div>
    </form>
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
