<div class="pos-content">
    <div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
        <div class="row gx-4">
            @foreach ($sub_categories as $sub_categorie)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 pb-3">
                    <div class="card h-100">
                        <div class="card-body h-100 p-1">
                            <div class="pos-product">
                                <div class="img"
                                    style="background-image: url({{ Storage::url($sub_categorie->photo) }})">
                                </div>

                                <div class="info">
                                    <div class="title text-truncate text-black" style="font-size: 14px;">
                                        {{ $sub_categorie->title ?? '' }}
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="w-100px">Price:</div>
                                        <div class="flex-1 text-black">
                                            @php
                                                $price = $sub_categorie->price ?? 0;
                                                echo number_format($price);
                                            @endphp
                                            MMK
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-success btn-sm text-white" title="Edit">
                                                <i class="fa fa-edit fa-fw"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" title="Delete">
                                                <i class="fa fa-trash fa-fw text-white"></i>
                                            </a>
                                            <a href="{{ route('index_manage_ingredients', ['id' => $sub_categorie->id]) }}"
                                                class="btn btn-success btn-sm text-white">
                                                <i class="fa fa-check fa-fw"></i>
                                                Ingredient
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
