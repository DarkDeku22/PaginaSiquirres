<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<nav class="header-nav ms-auto">


    <ul class="d-flex align-items-center">

        <div id="loading-spinner" class="spinner-border mx-3" role="status" style="display: none; color: #114e8f;">
            <span class="visually-hidden">Loading...</span>
        </div>

        <li class="nav-item dropdown pe-3">

            @php
                $user = Auth::user();
            @endphp

            @if ($user)
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"
                    style="color: #114e8f">
                    @if ($user->id_role === 1)
                        <img src="/logos/admin.png" alt="Profile" class="rounded-circle">
                    @else
                        <img src="/logos/usuario.png" alt="Profile" class="rounded-circle">
                    @endif
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header mb-2">
                        <h5>{{ $user->rol }}</h5>
                        <h6>{{ $user->fullName }}</h6>
                        <span>{{ $user->email }}</span>
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="">
                            <i class="bi bi-person"></i>
                            <span>Perfil</span>
                        </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center"
                                style="background: none; border: none; cursor: pointer;">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Salir...</span>
                            </button>
                        </form>
                    </li>
                </ul><!-- End Profile Dropdown Items -->
            @endif
        </li><!-- End Profile Nav -->


    </ul>
</nav><!-- End Icons Navigation -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>