<section class="content" wire:ignore.self wire:key="index_main_category">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Category
                </h4>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('store_main_category') }}" class="waves-effect waves-light btn btn-info">
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
                            <tr>
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

                                <td style="text-align: center">
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <button wire:click="delete({{ $main_categorie->id }})"
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
