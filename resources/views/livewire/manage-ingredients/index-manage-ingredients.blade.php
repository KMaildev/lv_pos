<section class="content" wire:ignore.self wire:key="index_manage_ingredients">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    {{ $sub_categorie->title }}
                </h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
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
                                <select class="form-control" wire:change="changeEvent($event.target.value)"
                                    wire:model="ingredient_id">
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
                                <input style="height: 33px;" class="form-control" type="text" wire:model="unit">
                            </td>

                            <td>
                                <input style="height: 33px;" class="form-control" type="text"
                                    wire:model="number_of_unit">
                            </td>

                            <td>
                                <input style="height: 33px;" class="form-control" type="text" wire:model="price">
                            </td>

                            <td colspan="2">
                                <input class="btn btn-info btn-sm form-control" type="submit" value="Save"
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
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <td colspan="5">
                            Total
                        </td>
                        <td style="text-align: right">
                            @php
                                $TotalAll = array_sum($AllTotal);
                                echo number_format($TotalAll, 2);
                            @endphp
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
