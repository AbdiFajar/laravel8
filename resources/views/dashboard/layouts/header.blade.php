<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/posts"><button class="btn btn-primary">Look All Posts</button></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
                @csrf
                <a href="/posts/login" class="text-decoration-none"><button type="sudmit" class="nav-link px-3 bg-dark border-0 text-decoration-none"> Logout <span data-feather="log-out"></span></button></a>
        </form> 
    </div>
  </div>
</header>