<div wire:ignore.self wire:key="index_manage_ingredients">
    <div class="d-flex align-items-center mb-3">
        <div>
            <h1 class="page-header mb-0">
                {{ $sub_categorie->title }}
            </h1>
        </div>
    </div>

    <div class="card-body">
        <form>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="background-color: #03184a;">
                            <th>
                                No
                            </th>

                            <th style="text-align: center">
                                Ingredients
                            </th>

                            <th style="text-align: center">
                                Unit
                            </th>

                            <th style="text-align: center">
                                Number of Unit
                            </th>

                            <th style="text-align: center">
                                Price/ Kg
                            </th>

                            <th style="text-align: center">
                                Total Amount
                            </th>

                            <th style="text-align: center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>

                            <td>
                                <select class="form-control text-white bg-secondary"
                                    wire:change="changeEvent($event.target.value)" wire:model="ingredient_id">
                                    <option value="">
                                        -- Ingredients --
                                    </option>
                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient->id ?? 0 }}">
                                            {{ $ingredient->title ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>

                            <td>
                                <input style="height: 33px;" class="form-control text-white bg-secondary" type="text"
                                    wire:model="unit" readonly>
                            </td>

                            <td>
                                <input style="height: 33px;" class="form-control text-white bg-secondary" type="text"
                                    wire:model="number_of_unit">
                            </td>

                            <td>
                                <input style="height: 33px;" class="form-control text-white bg-secondary" type="text"
                                    wire:model="price">
                            </td>

                            <td colspan="2">
                                <input class="btn btn-primary btn-sm form-control" type="submit" value="Save"
                                    wire:click.prevent="storeManageIngredients()">
                            </td>
                        </tr>

                        @php
                            $AllTotal = [];
                        @endphp
                        @foreach ($manage_ingredients as $key => $manage_ingredient)
                            <tr>
                                <td class="text-black">
                                    {{ $key + 1 }}
                                </td>

                                <td class="text-black">
                                    {{ $manage_ingredient->ingredients_table->title ?? '' }}
                                </td>

                                <td class="text-black">
                                    {{ $manage_ingredient->ingredients_table->unit ?? '' }}
                                </td>

                                <td class="text-black" style="text-align: right">
                                    {{ $manage_ingredient->number_of_unit, 2 }}
                                </td>

                                <td class="text-black" style="text-align: right">
                                    {{ number_format($manage_ingredient->price, 2) }}
                                </td>

                                <td class="text-black" style="text-align: right">
                                    @php
                                        $numberof_unit = $manage_ingredient->number_of_unit ?? 0;
                                        $price = $manage_ingredient->price ?? 0;
                                        
                                        $total = $price * ($numberof_unit / 100);
                                        echo number_format($total, 2);
                                        $AllTotal[] = $total;
                                    @endphp
                                </td>

                                <td>
                                    <a wire:click="delete({{ $manage_ingredient->id }})" class="dropdown-item"
                                        href="javascript:void(0);" style="color: red">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
