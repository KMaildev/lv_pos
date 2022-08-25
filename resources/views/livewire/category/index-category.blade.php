<div wire:ignore.self wire:key="index_ingred">
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">Category</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_category') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>


    <div class="col">
        <hr />
        <div class="card" style="background-color: white">
            <h5 class="card-header text-black">
                List of category
            </h5>
            <div class="card-body" style="background-color: #A6C4F5">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active"
                                style="background-color: #03184A; color: white;">
                                Food
                            </a>
                            @foreach ($foods as $food)
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black;">
                                    {{ $food->title ?? '' }}
                                    <span class="badge bg-primary" >
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <a wire:click="CategoryDestroy({{ $food->id }})" href="javascript:void(0);"
                                            class="text-red">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active"
                                style="background-color: #03184A; color: white;">
                                Bar
                            </a>
                            @foreach ($bars as $bar)
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black;">
                                    {{ $bar->title ?? '' }}
                                    <span class="badge bg-primary">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <a wire:click="CategoryDestroy({{ $bar->id }})" href="javascript:void(0);"
                                            class="text-red">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
