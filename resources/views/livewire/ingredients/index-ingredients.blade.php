<div>
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">Ingredients</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_ingredients') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>

    <div class="mb-sm-4 mb-3 d-sm-flex">
        <div class="mt-sm-0 mt-2">
            <a href="#" class="text-white text-opacity-75 text-decoration-none">
                <i class="fa fa-download fa-fw me-1 text-theme"></i>
                Export
            </a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr class="" style="background-color:#03184a;">
                <th style="width: 1%;">
                    #
                </th>
                <th style="width: 5%;">
                    Photo
                </th>
                <th style="width: 10%;">
                    Title
                </th>
                <th style="width: 10%;">
                    Unit
                </th>
                <th style="width: 10%;">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $key => $ingredient)
                <tr style="background-color:#9ec0f3; color:black;">
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td style="text-align: center">
                        @if ($ingredient->photo)
                            <center>
                                <img src="{{ Storage::url($ingredient->photo) }}" alt="" width="70">
                            </center>
                        @endif
                    </td>

                    <td>
                        {{ $ingredient->unit ?? '' }}
                    </td>

                    <td>
                        {{ $ingredient->unit ?? '' }}
                    </td>

                    <td>
                        <a href="#" class="btn btn-theme btn-sm">
                            Edit
                        </a>
                        <button wire:click="delete({{ $ingredient->id }})" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
