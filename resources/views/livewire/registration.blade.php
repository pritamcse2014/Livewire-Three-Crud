{{--
<div>
    In work, do what you enjoy.
</div> --}}

<div class="card offset-3 col-6">
    <div class="card-header">
        Registration
    </div>
    <div class="card-body">
        <form action="" wire:submit="store">
            <div class="mb-3">
                <label class="form-label" for="">Name</label>
                <input class="form-control" wire:model="name" type="text" name="name" id="name">
                <div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Phone</label>
                <input class="form-control" wire:model="phone" type="tel" name="phone" id="phone">
                <div>
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Email</label>
                <input class="form-control" wire:model="email" type="email" name="email" id="email">
                <div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Password</label>
                <input class="form-control" wire:model="password" type="password" name="password" id="password">
                <div>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>