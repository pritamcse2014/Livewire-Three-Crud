{{-- <div>
    Because she competes with no one, no one can compete with her.
</div> --}}

<div class="card offset-3 col-6">
    <div class="card-header">
        Edit Customer
    </div>
    <div class="card-body">
        <form action="" wire:submit="update">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input wire:model="name" class="form-control" type="text" name="name" id="name">
                <div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input wire:model="email" class="form-control" type="email" name="email" id="email">
                <div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input wire:model="phone" class="form-control" type="tel" name="phone" id="phone">
                <div>
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary" type="submit">Update</button>
                <button wire:navigate href="/customers" class="btn btn-secondary ms-auto">Back</button>
            </div>
        </form>
    </div>
</div>