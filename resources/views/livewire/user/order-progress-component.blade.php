<div>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-4">
                <div class="card-header">
                    Received Orders
                </div>
                <div class="card-body">
                    @forelse ($receivedOrders as $receivedOrder)
                        <strong class="text-danger">
                            {{ $receivedOrder->queue }}
                        </strong>
                    @empty
                        <span class="text-secondary">No orders </span>
                    @endforelse
                </div>
            </div>
            <div class="col-4">
                <div class="card-header">
                    In progress
                </div>
                <div class="card-body">
                    @forelse ($inProgresses as $inProgress)
                        <span class="text-secondar">
                            {{ $inProgress->queue }}
                        </span>
                    @empty
                        <span class="text-secondary">No orders</span>
                    @endforelse
                </div>
            </div>
            <div class="col-4">
                <div class="card-header">
                    Ready to take
                </div>
                <div class="card-body">
                    @forelse ($readies as $ready)
                        <span class="text-secondar">
                            {{ $ready->queue }}
                        </span>
                    @empty
                        <span class="text-secondary">No orders</span>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
