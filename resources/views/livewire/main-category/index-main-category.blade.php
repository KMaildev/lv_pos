<div wire:ignore.self wire:key="index_main_category">
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">Main Category</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_main_category') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>

    <div class="col">
        <hr />
        <div class="card" style="background-color: white">
            <h5 class="card-header text-black">
                List of Main Category
            </h5>
            <div class="card-body" style="background-color: #A6C4F5">
                <div class="row">

                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr class="" style="background-color:#03184a;">
                <th style="width: 1%;">
                    #
                </th>
                <th style="width: 10%;">
                    Title
                </th>
                <th style="width: 10%;">
                    Unit
                </th>
                <th style="width: 10%;">
                    Category
                </th>
                <th style="width: 10%;">
                    Type
                </th>
                <th style="width: 10%;">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($main_categories as $key => $main_categorie)
                <tr style="background-color:#9ec0f3; color:black;">
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td>
                        {{ $main_categorie->title ?? '' }}
                    </td>

                    <td>
                        {{ $main_categorie->unit ?? '' }}
                    </td>

                    <td>
                        {{ $main_categorie->categories_table->title ?? '' }}
                    </td>

                    <td>
                        {{ Str::upper($main_categorie->categories_table->type ?? '') }}
                    </td>

                    <td>
                        <a href="#" class="btn btn-theme btn-sm">
                            Edit
                        </a>
                        <button wire:click="delete({{ $main_categorie->id }})" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
