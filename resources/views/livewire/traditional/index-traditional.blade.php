<div wire:ignore.self wire:key="index_traditional">
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">
                Traditional Food
            </h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_traditional') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr class="" style="background-color:#03184a;">
                <th style="width: 1%;">
                    #
                </th>
                <th style="width: 80%;">
                    Country
                </th>
                <th style="width: 10%;">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($traditionals as $key => $traditional)
                <tr style="background-color:#9ec0f3; color:black;">
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td>
                        {{ $traditional->title ?? '' }}
                    </td>

                    <td>
                        <a href="#" class="btn btn-theme btn-sm">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
