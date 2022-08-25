<div wire:ignore.self wire:key="store_traditional">
    <div class="row">
        <div class="col-xl-12 mx-auto" style="background-color: white; color: black">
            <form wire:submit.prevent="storeTraditionals" enctype="multipart/form-data">
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
                                Country
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-black" wire:model="title" id="title">
                                @error('title')
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
