<div>
    <h2><strong>Categories</strong></h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody wire:sortable="updateCategoryOrder">
            @forelse ($categories as $category)
                <tr draggable="true" wire:sortable.item="{{ $category->id }}">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->order }}</td>
                </tr>

            @empty
                <tr>
                    <td colspan="3" style="text-align: center; vertical-align: middle;">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
