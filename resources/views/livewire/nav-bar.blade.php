{{--
<div>
    Nothing in the world is as soft and yielding as water.
</div> --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">NavBar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item">
                    <a class="nav-link" wire:navigate href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" wire:navigate href="/registration">Registration</a>
                </li>
                @endguest @auth
                <li class="nav-item">
                    <a class="nav-link" wire:navigate href="/customers">Customers</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-danger" wire:click="logout">Logout</button>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>