<section class="content" wire:ignore.self wire:key="store_sub_category">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Table / Create
                    </h4>
                </div>
                <div class="box-body">
                    <form wire:submit.prevent="storeTableList" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">
                                Floor
                            </label>
                            <div class="col-md-10">
                                <select class="form-control select2" wire:model.debounce.800ms="floor_list_id">
                                    <option value="">
                                        Select Floor
                                    </option>
                                    @foreach ($floor_lists as $floor_list)
                                        <option value="{{ $floor_list->id ?? 0 }}">
                                            {{ $floor_list->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('floor_list_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">
                                Table name / No
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-black" wire:model="table_no"
                                    id="title">
                                @error('table_no')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">
                                Reservation
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control text-black" wire:model="reservation"
                                    id="title">
                                @error('reservation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">
                                Table Icon
                            </label>
                            <div class="col-md-10">
                                <input type="file" class="form-control bg-secondary" wire:model="table_icon"
                                    id="table_icon">
                                @error('table_icon')
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
