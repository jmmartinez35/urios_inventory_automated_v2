<div class="row g-1">
    <div class="col-md-8">
        <div class="card shadow-sm p-3 rounded-0" x-data="{ barcode: '' }">
            <div class="d-flex align-items-center gap-2 justify-content-between">
                <div style="width:130px !important;">
                    <p class="m-0 fw-bold">[F8] BARCODE</p>
                </div>
                <div class="input-group">
                    <span class="input-group-text text-body rounded-0">
                        <i class="fa-solid fa-barcode" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" style="border-radius: 0px !important;"
                        x-ref="barcodeInput" x-model="barcode" wire:model.defer="barcode"
                        @keydown.window="
                            if ($event.key === 'F8') { 
                                $refs.barcodeInput.focus(); 
                                barcode = ''; // Clear input for next scan
                                $event.preventDefault(); 
                            }"
                        @input.debounce.300ms="$wire.processBarcode(barcode)"
                        @keydown.enter.prevent="$wire.processBarcode(barcode); barcode = '';">
                </div>
            </div>
        </div>
        <div class="card shadow-sm p-3 mt-1 rounded-0" style="border-top: 15px solid #120D4F;">
            <table class="table cart-table">
                <thead>
                    <tr class="table-head">
                        <th scope="col">Item</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>

                <tbody>
                    @if ($cartList->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                <i class="fas fa-shopping-cart fa-2x mt-4"></i>
                                <p>Your cart is empty.</p>
                            </td>
                        </tr>
                    @else
                        @foreach ($cartList as $cart)
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="{{ asset($cart->item->image_path ? 'storage/' . $cart->item->image_path : 'images/not_available.jpg') }}"
                                        alt="{{ $cart->item->name }}" class="img-thumbnail me-2"
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                    <span title="{{ ucfirst($cart->item->name) }}">
                                        {{ Str::limit(ucfirst($cart->item->name), 20, '...') }}
                                    </span>
                                </td>

                                <td>
                                    <div class="qty-box">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-link"
                                                wire:click="decrementItemQuantity({{ $cart->id }})">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input type="number" class="form-control input-number text-center"
                                                style="width: 100px; height: 40px; border-radius:0px !important;"
                                                wire:model.lazy="item_qty.{{ $cart->id }}" min="1"
                                                max="{{ $cart->quantity }}"
                                                wire:change="handleInputItemChange({{ $cart->id }}, $event.target.value)">

                                            <button type="button" class="btn btn-link"
                                                wire:click="incrementItemQuantity({{ $cart->id }})">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        {{-- <div class="input-group d-flex align-items-center">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    wire:click="decrementItemQuantity({{ $cart->id }})"
                                                    class="btn btn-sm">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>

                                            <input type="number" class="form-control input-number w-25 text-center"
                                                wire:model.lazy="item_qty.{{ $cart->id }}" min="1"
                                                max="{{ $cart->quantity }}"
                                                wire:change="handleInputItemChange({{ $cart->id }}, $event.target.value)">

                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    wire:click="incrementItemQuantity({{ $cart->id }})"
                                                    class="btn btn-sm">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div> --}}
                                    </div>
                                </td>
                                <td>
                                    <button type="button" wire:click="removeItemFromCart({{ $cart->id }})"
                                        class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>

                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mt-2 p-3 rounded-0 position-relative" style="border-top: 5px solid #120D4F;">
            <h6 class="mb-3 theme-color">BORROWER DETAILS</h6>
            <div class="mb-2">
                <label for="name" class="form-label">NAME</label>
                <input type="text" readonly class="form-control" id="name" name="name"
                    value="{{ optional($userDetails)->firstname ? Str::ucfirst($userDetails->firstname) . ' ' . Str::ucfirst($userDetails->middlename) . ' ' . Str::ucfirst($userDetails->lastname) : '' }}"
                    placeholder="N/A">
            </div>

        </div>
        <div class="card shadow-sm mt-2 p-3 rounded-0 position-relative" style="border-top: 5px solid #120D4F;">
            <h6 class="mb-3 theme-color">BORROW DETAILS</h6>
            <div class="mb-2">
                <label for="name" class="form-label">DATE OF USAGE (FROM)</label>
                <input type="text" readonly class="form-control" id="name" name="name"
                    value="{{ optional($borrowDetails) ? $borrowDetails?->start_date : '' }}" placeholder="N/A">
            </div>
            <div class="mb-2">
                <label for="name" class="form-label">DATE OF USAGE (TO)</label>
                <input type="text" readonly class="form-control" id="name" name="name"
                    value="{{ optional($borrowDetails) ? $borrowDetails?->end_date : '' }}" placeholder="N/A">
            </div>
            <div class="mb-2">
                <label for="name" class="form-label">REMARKS</label>
                <input type="text" readonly class="form-control" id="name" name="name"
                    value="{{ optional($borrowDetails) ? $borrowDetails?->reason : '' }}" placeholder="N/A">
            </div>
        </div>

        <div class="card shadow-sm mt-2 p-3 rounded-0 position-relative">
            <div class="d-flex gap-2">
                <button class="btn btn-primary w-100" wire:click="approveBorrowing" wire:loading.attr="disabled"
                    wire:target="approveBorrowing" :disabled="@js(!$borrowDetails)" x-data
                    @keydown.window.enter="$wire.approveBorrowing()">
                    APPROVED
                </button>

                <button class="btn btn-warning w-100"> GO TO WALK-IN</button>
            </div>
        </div>
    </div>

</div>
