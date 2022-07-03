<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-light" style="background-color: #001f00;">
    <div class="container" style="height: 50px">
      <a href="/" class="logo"><img src="LOGO-BUMJ.png" alt="logo BUMJ" style="width: 50px; padding-right: 5px"></a>
      <a class="navbar-brand" href="/">Jimmonshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title) === 'Home' ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link {{ ($title) === 'Products' ? 'active' : '' }}" href="/products">Products</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link {{ ($title) === 'Events' ? 'active' : '' }}" href="/events">Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link {{ ($title) === 'About Us' ? 'active' : '' }}" href="/about+us">About Us</a>
          </li>
        </ul>
        <form class="d-flex" style="padding-right: 10px;">
            <button class="btn btn-outline-success" type="submit" style=" color: #52457e; background-color: #fff;"><strong>Login</strong></button>
        </form>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit" style="background-color: #52457e; color: white"><strong>Sign Up</strong></button>
        </form>
      </div>
    </div>
  </nav>
