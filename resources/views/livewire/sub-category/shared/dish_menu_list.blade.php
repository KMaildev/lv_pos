<div class="pos-content">
    <div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
        <div class="row gx-4">
            @foreach ($sub_categories as $sub_categorie)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 pb-3">
                    <div class="card h-100">
                        <div class="card-body h-100 p-1">
                            <div class="pos-product">
                                <div class="img"
                                    style="background-image: url({{ asset('assets/img/pos/product-1.html') }})">
                                </div>
                                <div class="info">
                                    <div class="title text-truncate text-black">
                                        {{ $sub_categorie->title ?? '' }}
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
