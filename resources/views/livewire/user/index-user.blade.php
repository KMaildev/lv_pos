<div>

    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">Users</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('store_user') }}" class="btn btn-outline-theme btn-color">
                <i class="fa fa-plus-circle fa-fw me-1"></i>
                Create
            </a>
        </div>
    </div>

    <div class="mb-sm-4 mb-3 d-sm-flex">
        <div class="mt-sm-0 mt-2">
            <a href="#" class="text-white text-opacity-75 text-decoration-none">
                <i class="fa fa-download fa-fw me-1 text-theme"></i>
                Export
            </a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr class="" style="background-color:#03184a;">
                <th>
                    #
                </th>
                <th>
                    Employee ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone No
                </th>
                <th>
                    Photo
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Address
                </th>
                <th>
                    Employment Type
                </th>
                <th>
                    Join Date
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr style="background-color:#9ec0f3; color:black;">
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $user->employee_id ?? '' }}
                    </td>
                    <td>
                        {{ $user->name ?? '' }}
                    </td>
                    <td>
                        {{ $user->email ?? '' }}
                    </td>
                    <td>
                        {{ $user->phone ?? '' }}
                    </td>

                    <td>
                        @if ($user->passport_photo)
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="" data-bs-original-title="">
                                    <img src="{{ Storage::url($user->passport_photo) }}" alt="Avatar"
                                        class="rounded-circle">
                                </li>
                            </ul>
                        @endif
                    </td>
                    <td>
                        {{ $user->gender ?? '' }}
                    </td>
                    <td>
                        {{ $user->address ?? '' }}
                    </td>
                    <td>
                        {{ $user->employment_type ?? '' }}
                    </td>
                    <td>
                        {{ $user->join_date ?? '' }}
                    </td>

                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown"
                            wire:ignore.self>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-color"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
