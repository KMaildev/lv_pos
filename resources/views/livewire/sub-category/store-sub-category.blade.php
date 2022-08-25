<div wire:ignore.self wire:key="store_category">
    <div class="row">
        <div class="col-xl-12 mx-auto" style="background-color: white; color: black">
            <form wire:submit.prevent="storeSubCategory" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">
                                Create
                            </h5>
                        </div>
                        <hr />
                        <br>

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Select Category
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control text-white bg-secondary"
                                    wire:model.debounce.800ms="selectedCategory">
                                    <option value="">
                                        Select Category
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id ?? 0 }}">
                                            {{ $category->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('selectedCategory')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        @if (!is_null($selectedCategory))
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Main Category
                                </label>
                                <div class="col-sm-9">
                                    <select class="form-control text-white bg-secondary"
                                        wire:model.debounce.800ms="main_category_id" id="main_category_id">
                                        <option value="">
                                            Select Main Category
                                        </option>
                                        @foreach ($main_categories as $main_category)
                                            <option value="{{ $main_category->id ?? 0 }}">
                                                {{ $main_category->title ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('main_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Traditional Food
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control text-white bg-secondary"
                                    wire:model.debounce.800ms="traditional_id" id="traditional_id">
                                    <option value="">
                                        Select Traditional Food
                                    </option>
                                    @foreach ($traditionals as $traditional)
                                        <option value="{{ $traditional->id ?? 0 }}">
                                            {{ $traditional->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('traditional_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Menu Name
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-black" wire:model="title" id="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Price
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-black" wire:model="price" id="price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Photo
                            </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control bg-secondary" wire:model="photo"
                                    id="photo">
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info px-5">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
