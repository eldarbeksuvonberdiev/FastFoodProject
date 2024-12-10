<div>
    <section class="h-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0">Food Cart</h3>
                    </div>
                    @forelse ($cartMeals as $key => $cartMeal)
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('storage/' . $cartMeal['image']) }}"
                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2"><strong>Name: {{ $cartMeal['name'] }}</strong>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                        <button class="btn btn-outline-info" style="width: 40px" wire:click="subtractOne({{ $key }})">
                                            <i class="bi bi-dash-square"></i>
                                        </button>

                                        <input min="0" name="quantity" value="{{ $cartMeal['quantity'] }}"
                                            style="width: 50px;" type="number" class="form-control">

                                        <button class="btn btn-outline-info px-2" style="width: 40px" wire:click="addOne({{ $key }})">
                                            <i class="bi bi-plus-square"></i>

                                        </button>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0"><strong>Price: {{ number_format($cartMeal['price']) }} So'm</strong></h5>
                                    </div>
                                    <div class="mr-5">
                                        <a href="#!" class="text-danger" style="font-size: 30px;" wire:click="deleteFromCart({{ $key }})"><i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 style="color: red">Your cart is empty</h3>
                    @endforelse
                    @if (!empty(session('cart')))
                        <div class="card">
                            <div class="card-body">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-warning btn-block btn-lg" wire:click="createOrder">Proceed to Pay</button>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
</div>
