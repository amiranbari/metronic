@if (config('layout', 'extras/user/dropdown/style') == 'light')
    {{-- Header --}}
    <div class="d-flex align-items-center p-8 rounded-top">
        {{-- Symbol --}}
        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
            <img src="{{ asset('media/users/300_21.jpg') }}" alt=""/>
        </div>

        {{-- Text --}}
        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">{{ auth()->user()->name }}</div>
        <span class="label label-light-success label-lg font-weight-bold label-inline">3 پیام جدید</span>
    </div>
    <div class="separator separator-solid"></div>
@else
    {{-- Header --}}
    <div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('{{ asset('media/misc/bg-1.jpg') }}')">
        <div class="d-flex align-items-center mr-2">
            {{-- Symbol --}}
            <div class="symbol bg-white-o-15 mr-3">
                <span class="symbol-label text-success font-weight-bold font-size-h4">A</span>
            </div>

            {{-- Text --}}
            <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">{{ auth()->user()->name }}</div>
        </div>
        <span class="label label-success label-lg font-weight-bold label-inline">3 پیام جدید</span>
    </div>
@endif

{{-- Nav --}}
<div class="navi navi-spacer-x-0 pt-5">
    {{-- Item --}}
    <a href="#" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-calendar-3 text-success"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    پروفایل من
                </div>
                <div class="text-muted">
                    تنظیمات اکانت و بیشتر
                    <span class="label label-light-danger label-inline font-weight-bold">ارتقا</span>
                </div>
            </div>
        </div>
    </a>

    {{-- Item --}}
    <a href="#"  class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-mail text-warning"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    پیام های من
                </div>
                <div class="text-muted">
                    جعبه پیام ها
                </div>
            </div>
        </div>
    </a>

    {{-- Item --}}
    <a href="#"  class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-rocket-1 text-danger"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    فعالیت های من
                </div>
                <div class="text-muted">
                    اطلاعیه ها
                </div>
            </div>
        </div>
    </a>

    {{-- Item --}}
    <a href="#" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-hourglass text-primary"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    وظایف من
                </div>
                <div class="text-muted">
                    اخرین وظایف و پروژه ها
                </div>
            </div>
        </div>
    </a>

    {{-- Footer --}}
    <div class="navi-separator mt-3"></div>
    <div class="navi-footer  px-8 py-5">
        <a href="{{ route('panel.logout') }}" class="btn btn-light-primary font-weight-bold">خروج</a>
        <a href="#" target="_blank" class="btn btn-clean font-weight-bold">ارتقای پلن</a>
    </div>
</div>
