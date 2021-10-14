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
            <a href="javascript:void(0)" class="btn btn-info">Cart(0)</a>
            <a href="{{ url('authenticate') }}" class="btn btn-danger">Login</a>
        </div>
    </div>
</nav>
