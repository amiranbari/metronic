<div class="alert alert-custom alert-{{ $type }} fade show mb-5 alert-size-small" role="alert">
    <div class="alert-icon">
        <i class="flaticon-warning icon-2x"></i>
    </div>
    <div class="alert-text font-weight-bold">
        {{ $slot }}
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
