<section class="content" wire:ignore.self wire:key="index_category">
    <div class="row">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Main Category
                </h4>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('store_category') }}" class="waves-effect waves-light btn btn-info btn-xs">
                        <i class="fa fa-plus"></i>
                        Create New
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 mb-20">
            <div class="row ">
                <div class="col-md-6">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"
                            style="background-color: #03184A; color: white;">
                            Food
                        </a>
                        @foreach ($foods as $food)
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="color:black;">
                                {{ $food->title ?? '' }}
                                <span class="badge bg-primary">
                                    <a href="javascript:void(0);" class="text-white">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <a wire:click="CategoryDestroy({{ $food->id }})" href="javascript:void(0);"
                                        class="text-white">
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
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="color:black;">
                                {{ $bar->title ?? '' }}
                                <span class="badge bg-primary">
                                    <a href="javascript:void(0);" class="text-white">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <a wire:click="CategoryDestroy({{ $bar->id }})" href="javascript:void(0);"
                                        class="text-white">
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
</section>
