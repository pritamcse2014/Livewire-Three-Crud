{{--
<div>
    Be like water.
</div> --}}

<div class="card offset-3 col-6">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="" wire:submit="store">
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
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <div class="card-footer text-body-secondary d-flex">
        New account create
        <button wire:navigate href="/registration" class="btn btn-success btn-sm ms-auto">Registration</button>
    </div>
</div>