<div wire:ignore.self wire:key="store_user">
    <div class="row">
        <div class="col-xl-12 mx-auto" style="background-color: white; color: black">
            <h6 class="mb-0 text-uppercase">
                Create
            </h6>
            <hr />
            <div class="card border-top border-0 border-4 border-info">
                <form wire:submit.prevent="storeUser" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">
                                    Create a new user
                                </h5>
                            </div>
                            <hr />
                            <br>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Employee ID
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="employee_id"
                                        id="employee_id">
                                    @error('employee_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Name
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="name"
                                        id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Email
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="email"
                                        id="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Phone
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="phone"
                                        id="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Passport Photo
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control bg-secondary" wire:model="passport_photo"
                                        id="passport_photo">
                                    @error('passport_photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    NRC Number
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="nrc_number"
                                        id="nrc_number">
                                    @error('nrc_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    NRC Front Photo
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control bg-secondary" wire:model="nrc_front_photo"
                                        id="nrc_front_photo">
                                    @error('nrc_front_photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    NRC Back Photo
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control bg-secondary" wire:model="nrc_back_photo"
                                        id="nrc_back_photo">
                                    @error('nrc_back_photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Household Member List
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control bg-secondary"
                                        wire:model="household_member_list" id="household_member_list">
                                    @error('household_member_list')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Gender
                                </label>
                                <div class="col-sm-9">
                                    <select class="form-control text-white bg-secondary"
                                        wire:model.debounce.800ms="gender" id="gender">
                                        <option value="">
                                            Select Gender
                                        </option>
                                        <option value="Male">
                                            Male
                                        </option>
                                        <option value="Female">
                                            Female
                                        </option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Address
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="address"
                                        id="address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Department
                                </label>
                                <div class="col-sm-9">
                                    <select class="form-control text-white bg-secondary"
                                        wire:model.debounce.800ms="department_id" id="department_id">
                                        <option value="">
                                            Select Department
                                        </option>
                                        <option value="1">
                                            Admin
                                        </option>
                                        <option value="2">
                                            Waiter
                                        </option>
                                    </select>
                                    @error('department_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Role
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black" wire:model="role_id"
                                        id="role_id">
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Employment Type
                                </label>

                                <div class="col-sm-9">
                                    <select class="form-control text-white bg-secondary"
                                        wire:model.debounce.800ms="employment_type" id="employment_type">
                                        <option value="">
                                            Select Employment Type
                                        </option>
                                        <option selected value="Probation">
                                            Probation
                                        </option>
                                        <option value="Contract">
                                            Contract
                                        </option>
                                    </select>
                                    @error('employment_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="flatpickr-date" class="col-sm-3 col-form-label">
                                    Join Date
                                </label>
                                <div class="col-sm-9">
                                    <input type="datetime-local" class="form-control text-black date_picker"
                                        wire:model="join_date" id="join_date">
                                    @error('join_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Emergency Contact Person
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black"
                                        wire:model="emergency_contact_person" id="emergency_contact_person">
                                    @error('emergency_contact_person')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Emergency Contact Number
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-black"
                                        wire:model="emergency_contact_number" id="emergency_contact_number">
                                    @error('emergency_contact_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                    Password
                                </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control text-black" wire:model="password"
                                        id="password">
                                    @error('password')
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
</div>
