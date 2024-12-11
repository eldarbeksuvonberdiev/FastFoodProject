<div>
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content pb-3">
            <div class="container-fluid h-100">
                <div class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">
                            All Orders
                        </h3>
                    </div>
                    <div class="card-body">
                        @forelse ($givenOrders as $givenOrder)
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">Order {{ $givenOrder->id }} {!! $givenOrder->status == '3' ? "<span class='text-danger'>Ready</span>" : '' !!}</h5>
                                    <div class="card-tools">
                                        <a class="btn btn-info" data-bs-toggle="collapse"
                                            href="#info{{ $givenOrder->id }}" role="button" aria-expanded="false"
                                            aria-controls="multiCollapseExample1"><i class="bi bi-pencil"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="info{{ $givenOrder->id }}">
                                            <div class="card card-body">
                                                @if ($givenOrder->orderItems->count() > 0)
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            wire:click="orderReady({{ $givenOrder->id }})"
                                                            type="checkbox" value="" id="orderItem"
                                                            {{ $givenOrder->status == '3' ? 'checked disabled' : '' }}>
                                                        <label class="form-check-label" for="orderItem">
                                                            Order Ready
                                                        </label>
                                                    </div>
                                                @endif
                                                @forelse ($givenOrder->orderItems as $orderItem)
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            wire:click="changeStatus({{ $givenOrder }},{{ $orderItem->id }}, '3')"
                                                            type="checkbox" value=""
                                                            id="orderItem{{ $orderItem->id }}"
                                                            {{ $orderItem->status == '3' ? 'checked disabled' : '' }}>
                                                        <label class="form-check-label"
                                                            for="orderItem{{ $orderItem->id }}">
                                                            {{ $orderItem->meal->name . ' x ' . $orderItem->count }}
                                                        </label>
                                                    </div>
                                                @empty
                                                    This order has no items
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">No Orders are here yet</h5>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="card card-row card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            In Progress
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Create first milestone</h5>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-link">#5</a>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-row card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">
                            Done
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-light card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Update Readme</h5>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-link">#2</a>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor. Aenean massa.
                                    Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-row card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            Catered
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Create repo</h5>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-link">#1</a>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
