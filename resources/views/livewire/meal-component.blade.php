<div>
    <div>
        <h2><strong>Meals</strong></h2>
        <button class="btn btn-primary mt-2 mb-3" wire:click="create">{{ $createForm ? 'Back' : 'Create' }}</button>
        @if ($createForm)
            <form wire:submit.prevent="store">
                <div class="row mb-3">
                    <div class="col-4">
                        <select class="form-select" wire:model="category_id">
                            @foreach ($categories as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="text" wire:model="name" class="form-control" placeholder="Product name">
                    </div>
                    <div class="col-4">
                        <input type="number" wire:model="price" class="form-control" placeholder="Prduct price">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <input type="file" wire:model="image" class="form-control">
                    </div>
                    @if ($image)
                        <div class="col-2">
                            <img src="{{ $image->temporaryUrl() }}" alt="" width="100px">
                        </div>
                    @endif
                    <div class="col-2">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        @endif
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Order</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody wire:sortable="updateCategoryOrder">
                @forelse ($products as $product)
                    @if ($editForm == $product->id)
                        <tr>
                            <td colspan="4">
                                <form wire:submit.prevent="edit">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <input type="text" wire:model="" class="form-control"
                                                placeholder="product name">
                                        </div>
                                        <div class="col-1">
                                            <button type="submit" class="btn btn-success">Store</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @else
                        <tr draggable="true" wire:sortable.item="{{ $product->id }}">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <img src="{{ asset('storage/'. $product->image ) }}" alt="" width="100px">
                            </td>
                            <td>{{ $product->order }}</td>
                            <td>
                                <button class="btn btn-warning" wire:click="editionForm({{ $product->id }})"><i
                                        class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger" wire:click="delete({{ $product->id }})"><i
                                        class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                    @endif
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center; vertical-align: middle;">No data available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
