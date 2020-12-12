{{-- Content --}}
@if (config('layout.content.extended'))
    @yield('content')
@else
    <div class="d-flex flex-column-fluid">
        <div class="{{ Metronic::printClasses('content-container', false) }}">
            @include('layout.partials.extras.errors')
            @yield('content')
        </div>
    </div>
@endif
