<nav class="navbar navbar-expand-sm bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            {{--<img src="https://corepay.co.zw/wp-content/uploads/2023/08/cropped-Email-Logo-300x85.png" width="auto" height="45">--}}
            <img src="{{ asset('/images/logo.svg') }}" width="auto" height="45">

        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('item.index') }}">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('payment.index') }}">Payments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.index') }}">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">User Management</a>
                </li>
                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>--}}
            </ul>
            <form method="post" action="{{ route('logout') }}" class="d-flex">
                {{ csrf_field() }}
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logged in as: {{Auth::user()->name }} {{Auth::user()->surname }}</a>
                <button class="btn btn-outline-success" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>