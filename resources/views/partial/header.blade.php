<header class="dark-bb">
    <nav class="navbar navbar-expand-lg px-3 flex-column">
        <a class="navbar-brand" href="/">Mekaniko Web Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
                aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="navbar-nav ml-auto text-light d-flex align-items-center">
                @if(request()->session()->get('token') !== null and request()->session()->get('token') !== '')
                    <a href="/signout" class="btn-2 text-decoration-none">Sign Out</a>
                @endif
            </ul>
        </div>
    </nav>
</header>
