<section class="content" wire:ignore.self wire:key="index_ingred">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Table list
                </h4>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('store_table_list') }}" class="waves-effect waves-light btn btn-info">
                        <i class="fa fa-plus"></i>
                        Create New
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th style="width: 1%;">
                                #
                            </th>
                            <th style="width: 10%; text-align: center">
                                Floor
                            </th>
                            <th style="width: 10%; text-align: center">
                                Table name / No
                            </th>
                            <th style="width: 10%; text-align: center">
                                Reservation
                            </th>
                            <th style="width: 10%; text-align: center">
                                Table Icon
                            </th>
                            <th style="width: 10%; text-align: center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table_lists as $key => $table_list)
                            <tr>
                                <td style="text-align: center">
                                    {{ $key + 1 }}
                                </td>

                                <td style="text-align: center">
                                    {{ $table_list->floor_lists_table->title ?? '' }}
                                </td>

                                <td style="text-align: center">
                                    {{ $table_list->table_no ?? '' }}
                                </td>

                                <td style="text-align: center">
                                    {{ $table_list->reservation ?? '' }}
                                </td>

                                <td style="text-align: center">
                                    @if ($table_list->table_icon)
                                        <img src="{{ Storage::url($table_list->table_icon) }}" class="img-fluid w-p75"
                                            style="width: 120px; height: 90px; background-size: center; object-fit: cover;" />
                                    @endif
                                </td>

                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <button wire:click="delete({{ $table_list->id }})"
                                        class="btn btn-danger btn-sm">
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
