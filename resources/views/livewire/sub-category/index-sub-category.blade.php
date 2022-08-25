<div>
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">Sub Category</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_main_category') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>

    <div class="row">
        <div id="app" class="app app-content-full-height app-without-sidebar app-without-header">
            <div id="content" class="app-content p-1 pe-xl-4 pt-xl-3 pb-xl-3">
                <div class="pos card" id="pos">
     

                    <div class="pos-container card-body">
                        <div class="pos-sidebar" id="pos-sidebar">
                            <div class="h-100 d-flex flex-column p-0">
                                <div class="pos-sidebar-header">
                                    <div class="title">
                                        Menu List
                                    </div>
                                </div>
                                <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
                                    <div class="tab-pane fade h-100 show active" id="newOrderTab">
                                        @foreach ($categories as $categorie)
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">

                                                    <h3 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#MenuId_{{ $categorie->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="MenuId_{{ $categorie->id }}">
                                                            {{ $categorie->title ?? '' }}
                                                        </button>
                                                    </h3>

                                                    <div id="MenuId_{{ $categorie->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="list-group" style="background-color: white">
                                                            @foreach ($categorie->main_categories_table as $main_categorie)
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action active">
                                                                    {{ $main_categorie->title ?? '' }}
                                                                </a>
                                                                <hr>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pos-content">
                            <div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
                                <div class="row gx-4">
                                    @for ($i = 0; $i < 20; $i++)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 pb-3">
                                            <div class="card h-100">
                                                <div class="card-body h-100 p-1">
                                                    <div class="pos-product">
                                                        <div class="img"
                                                            style="background-image: url({{ asset('assets/img/pos/product-1.html') }})">
                                                        </div>
                                                        <div class="info">
                                                            <div class="title text-truncate">Grill Chicken
                                                                Chop&reg;
                                                            </div>
                                                            <div class="desc text-truncate">
                                                                chicken, egg, mushroom, salad
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="w-100px">Availability:</div>
                                                                <div class="flex-1">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="qty" id="product1" checked
                                                                            value="1" />
                                                                        <label class="form-check-label"
                                                                            for="product1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#"
                                                                    class="btn btn-success d-block mb-2"><i
                                                                        class="fa fa-check fa-fw"></i>
                                                                    Update</a>
                                                                <a href="#" class="btn btn-default d-block"><i
                                                                        class="fa fa-times fa-fw"></i>
                                                                    Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
