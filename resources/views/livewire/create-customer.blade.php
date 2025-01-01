{{--
<h1 class="alert alert-danger">
    Knowing others is intelligence; knowing yourself is true wisdom.
</h1> --}}

<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form action="" wire:submit="save">
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
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>