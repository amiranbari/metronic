@php
    $direction = config('layout.extras.search.offcanvas.direction', 'right');
@endphp
{{-- Search Panel --}}
<div id="kt_quick_search" class="offcanvas offcanvas-{{ $direction }} p-10">

    {{-- Header --}}
    <div class="offcanvas-header d-flex align-items-center justify-content-between mb-5">
        <h3 class="font-weight-bold m-0">
            Search
            <small class="text-muted font-size-sm ml-2">files, reports, members</small>
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_search_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>

    {{-- Content --}}
    <div class="offcanvas-content">
        {{-- Container --}}
        <div class="quick-search quick-search-offcanvas quick-search-has-result" id="kt_quick_search_offcanvas">
            {{-- Form --}}
            <form method="get" class="quick-search-form border-bottom pt-5 pb-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            {{ Metronic::getSVG("media/svg/icons/General/Search.svg", "svg-icon-lg") }}
                        </span>
                    </div>
                    <input type="text" class="form-control " placeholder="Search..."/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                        </span>
                    </div>
                </div>
            </form>

            {{-- Wrapper --}}
            <div class="quick-search-wrapper pt-5">
                <div class="quick-search-result">
                    {{-- Message --}}
                    <div class="text-muted d-none">
                        No record found
                    </div>

                    {{-- Section --}}
                    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
                        Documents
                    </div>
                    <div class="mb-10">
                        {{-- Item --}}
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                                <img src="{{ asset('media/svg/files/doc.svg') }}" alt=""/>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                    AirPlus Requirements
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                    by Grog John
                                </span>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                                <img src="{{ asset('media/svg/files/pdf.svg') }}" alt=""/>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                TechNav Documentation
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                by Mary Broun
                                </span>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                                <img src="{{ asset('media/svg/files/xml.svg') }}" alt=""/>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                All Framework Docs
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                by Nick Stone
                                </span>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                                <img src="{{ asset('media/svg/files/csv.svg') }}" alt=""/>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                    Finance & Accounting Reports
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                    by Jhon Larson
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Section --}}
                    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
                        Members
                    </div>
                    <div class="mb-10">
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label" style="background-image:url('{{ asset('media/users/300_20.jpg') }}')"></div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                Milena Gibson
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                UI Designer
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label"  style="background-image:url('{{ asset('media/users/300_15.jpg') }}')"></div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                Stefan JohnStefan
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Marketing Manager
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label"  style="background-image:url('{{ asset('media/users/300_12.jpg') }}')"></div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                Anna Strong
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Software Developer
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0" >
                                <div class="symbol-label" style="background-image:url('{{ asset('media/users/300_16.jpg') }}')"></div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                Nick Bold
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Project Coordinator
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Section --}}
                    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
                        Files
                    </div>
                    <div class="mb-10">
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label">
                                    <i class="flaticon-psd text-primary"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                79 PSD files generated
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                by Grog John
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label">
                                    <i class="flaticon2-supermarket text-warning"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                $2900 worth products sold
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Total 234 items
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label">
                                    <i class="flaticon-safe-shield-protection text-info"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                4 New items submitted
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Marketing Manager
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 mb-2">
                            <div class="symbol symbol-30 flex-shrink-0">
                                <div class="symbol-label">
                                    <i class="flaticon-safe-shield-protection text-warning"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                4 New items submitted
                                </a>
                                <span class="font-size-sm font-weight-bold text-muted">
                                Marketing Manager
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
