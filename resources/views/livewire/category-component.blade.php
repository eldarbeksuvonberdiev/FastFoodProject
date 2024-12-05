<div>
    <h2><strong>Categories</strong></h2>
    <button class="btn btn-primary mt-2 mb-3" wire:click="create">{{ $createForm ? 'Create' : 'Back' }}</button>
    @if (!$createForm)
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <input type="text" wire:model="name" class="form-control" placeholder="Category name">
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </div>
    </form>
    @endif
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
