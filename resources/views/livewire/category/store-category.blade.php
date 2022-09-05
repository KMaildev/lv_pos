<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Category / Create
                    </h4>
                </div>
                <div class="box-body">
                    <form wire:submit.prevent="storeCategory" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">
                                Title
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-black" wire:model="title" id="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputEnterYourName" class="col-md-2">
                                Type
                            </label>
                            <div class="col-md-10">
                                <select class="form-control text-white bg-secondary" wire:model.debounce.800ms="type"
                                    id="type">
                                    <option value="">
                                        Select Type
                                    </option>
                                    <option value="food">
                                        Food
                                    </option>
                                    <option value="bar">
                                        Bar
                                    </option>
                                </select>
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="waves-effect waves-light btn btn-info btn-sm">
                                    <i class="fa fa-plus"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
