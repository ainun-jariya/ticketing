<nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUTINhE1AFghzL1kRF8Rgs_rX3y6sKX3VO1w&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Ticketing
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="/control">Dashboard</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        @endif
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" disabled>
        <button class="btn btn-outline-success" type="submit" disabled>Search</button>
      </form>
    </div>
  </div>
</nav>