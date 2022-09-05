<section class="content" wire:ignore.self wire:key="index_ingred">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Floor List
                </h4>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('store_floor_list') }}" class="waves-effect waves-light btn btn-info">
                        <i class="fa fa-plus"></i>
                        Create New
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th style="width: 5%;">
                                #
                            </th>
                            <th style="width: 40%;">
                                Floor Name
                            </th>
                            <th style="width: 10%;">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($floor_lists as $key => $floor_list)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>

                                <td>
                                    {{ $floor_list->title ?? '' }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <button wire:click="delete({{ $floor_list->id }})" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
