<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Grocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">About us</a>
                </li>
            </ul>
            <a href="javascript:void(0)" class="btn btn-info cart">Cart(0)</a>
            @if (session()->has('profile'))
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ session('profile.name') }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Order History</a></li>
                        <li><a class="dropdown-item" href="#">Account Setting</a></li>
                        <li><a class="dropdown-item" href="logout">Logout</a></li>
                    </ul>
                </div>
            @else
                <a href="{{ url('user-login') }}" class="btn btn-danger">Login</a>
            @endif

        </div>
    </div>
</nav>
