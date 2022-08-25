<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('store_sub_category') }}" class="btn btn-outline-theme btn-color">
                    <i class="fa fa-plus-circle fa-fw me-1"></i>
                    Create
                </a>
            </div>

            <div class="col-md-8  d-flex flex-row-reverse">
                <input type="text" class="text-white bg-secondary form-control form-control-sm"
                    style="height: 10px !important;" placeholder="Search" wire:model="search">
            </div>
        </div>
    </div>

    <div class="col-md-8">
        @foreach ($traditionals as $traditional)
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                data-bs-placement="top" data-bs-content="Top popover">
                {{ $traditional->title ?? '' }}
            </button>
        @endforeach
    </div>
</div>
<br>
