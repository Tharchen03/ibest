<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                @guest
                    <li class="nav-item">
                        <a wire:navigate class="nav-link" href="/login">login</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link" href="/register">Register</a>
                    </li>
                @endguest

                @auth
                    <a class="navbar-brand" href="#">##</a>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active" aria-current="page" href="/customers">customers</a>
                    </li>

                    <li class="nav-item">
                        <a wire:click="logout" class="nav-link active" aria-current="page">Logout</a>
                    </li>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                @endauth
            </ul>

        </div>
    </div>
</nav>
