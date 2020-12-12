{{-- Header --}}
@if (config('layout.extras.notifications.dropdown.style') == 'light')
    <div class="d-flex flex-column pt-12 bg-dark-o-5 rounded-top">
        {{-- Title --}}
        <h4 class="d-flex flex-center">
            <span class="text-dark">اطلاعیه ها</span>
            <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 مورد جدید</span>
        </h4>

        {{-- Tabs --}}
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary mt-3 px-8" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications"  >هشدارها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"  >رویدادها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"  >لاگ ها</a>
            </li>
        </ul>
    </div>
@else
    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('{{ asset('media/misc/bg-1.jpg') }}')">
        {{-- Title --}}
        <h4 class="d-flex flex-center rounded-top">
            <span class="text-white">اطلاعیه های کاربر</span>
            <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 مورد جدید</span>
        </h4>

        {{-- Tabs --}}
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications"  >هشدارها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"  >رویدادها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"  >لاگ ها</a>
            </li>
        </ul>
    </div>
@endif

{{-- Content --}}
<div class="tab-content">
    {{-- Tabpane --}}
    <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
        {{-- Scroll --}}
        <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
            {{-- Item --}}
            <div class="d-flex align-items-center mb-6">
                {{-- Symbol --}}
                <div class="symbol symbol-40 symbol-light-primary mr-5">
                    <span class="symbol-label">
                        {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg svg-icon-primary") }}
                    </span>
                </div>

                {{-- Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">علی حسینی</a>
                    <span class="text-muted">درخواست برداشت وجه</span>
                </div>
            </div>


        </div>
    </div>

    {{-- Tabpane --}}
    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
        {{-- Nav --}}
        <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
            {{-- Item --}}
            <a href="#" class="navi-item">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-line-chart text-success"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            گزاش گیری انجام شده است.
                        </div>
                        <div class="text-muted">
                            24 ساعت قبل
                        </div>
                    </div>
                </div>
            </a>

            {{-- Item --}}
            <a href="#" class="navi-item">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-user flaticon2-line- text-success"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            سفارش جدید آماده شده است
                        </div>
                        <div class="text-muted">
                            2 ساعت قبل
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    {{-- Tabpane --}}
    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
        {{-- Nav --}}
        <div class="d-flex flex-center text-center text-muted min-h-200px">
            همه چی عالی است!
            <br/>
            هیچ اطلاعیه ای وجود ندارد.
        </div>
    </div>
</div>
