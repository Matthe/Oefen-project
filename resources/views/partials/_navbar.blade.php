<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Mijn site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="{{Request::is('/') ? 'active' : ''}}">
          <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
        </li>
        <li class="{{Request::is('posts') ? 'active' : ''}}">
          <a class="nav-link" href="/posts">Posts</a>
        </li>
        <li class="{{Request::is('about') ? 'active' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="{{Request::is('contact') ? 'active' : ''}}">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
      <form class="form-inline" my-2 my-md-0>
        <ul class="navbar-nav">
          @if( auth()->check())
            <li class="nav-item" >
              <a class="nav-link" href="/profile">{{ auth()->user()->name}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Log Out</a>
            </li>
          @else
            <li class="{{Request::is('login') ? 'active' : ''}}" >
              <a class="nav-link" href="/login">Log In</a>
            </li>
            <li class="{{Request::is('register') ? 'active' : ''}}">
              <a class="nav-link" href="/register">Register</a>
            </li>
          @endif
        </ul>
      </form>
    </div>
  </div>
</nav>