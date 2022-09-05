<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Menu List</h4>
            <div class="d-inline-block align-items-center">
                <input type="text" class="form-control form-control-sm" placeholder="Search" wire:model="search">
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        @foreach ($sub_categories as $sub_categorie)
            <div class="col-xxxl-3 col-xl-3 col-lg-6 col-12">
                <div class="box food-box">
                    <div class="box-body text-center">
                        <div class="menu-item">
                            <img src="{{ Storage::url($sub_categorie->photo) }}" class="img-fluid w-p75" alt=""
                                style="width: 140px; height: 140px; background-size: center; object-fit: cover; border-radius: 50%;" />
                        </div>

                        <div class="menu-details text-center">
                            <h5 class="mt-20 mb-10">
                                {{ $sub_categorie->title ?? '' }}
                            </h5>
                            <p>
                                {{ $sub_categorie->main_categories_table->title ?? '' }}
                            </p>
                        </div>

                        <div class="act-btn d-flex justify-content-between">
                            <div class="text-center mx-5">
                                <a href="#"
                                    class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5">
                                    <i class="fa fa-eye-slash"></i>
                                </a>
                                <small class="d-block">
                                    View
                                </small>
                            </div>
                            <div class="text-center mx-5">
                                <a href="#"
                                    class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <small class="d-block">
                                    Edit
                                </small>
                            </div>
                            <div class="text-center mx-5">
                                <a href="#"
                                    class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <small class="d-block">
                                    Delete
                                </small>
                            </div>
                            <div class="text-center mx-5">
                                <a href="{{ route('index_manage_ingredients', ['id' => $sub_categorie->id]) }}"
                                    class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5">
                                    <i class="fa fa-plus-square-o"></i>
                                </a>
                                <small class="d-block">
                                    Ingredient
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
