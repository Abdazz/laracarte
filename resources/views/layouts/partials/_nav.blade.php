
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="{{ route('home') }}" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="{{ route('about') }}" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >Planet</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Laravel.com</a>
                <a class="dropdown-item" href="#">Laravel.io</a>
                <a class="dropdown-item" href="#">Laracasts</a>

                <a class="dropdown-item" href="#">Larajobs</a>

                <a class="dropdown-item" href="#">Laravel News</a>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contact</a>
          </li>
        </ul>

        <div class="d-flex flex-column flex-md-row align-items-center">
            <nav class="my-2 my-md-0 mr-md-3">
              <a class="p-2 text-white" href="#">Login</a>
            </nav>
            <a class="btn btn-outline-primary" href="#">Register</a>
          </div>
      </div>
    </nav>
