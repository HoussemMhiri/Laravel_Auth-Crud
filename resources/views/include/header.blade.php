
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('product.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.create')}}">Create</a>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div> 
      @auth 
      <div class="mx-3 fw-bold">
        <p>Welcome {{auth()->user()->name}} </p>
      </div>
          <div>
            <form action="{{route('logoutUser')}}" method="post">
              @csrf
            
             <button>
              Logout
             </button>
            </form>
          </div> 
       @else 

       <button class="mx-3">
        <a href="{{route('registration')}}">Register</a>
       </button>
       <button>
        <a href="{{route('login')}}">Login</a>
       </button>
      @endauth
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </nav>