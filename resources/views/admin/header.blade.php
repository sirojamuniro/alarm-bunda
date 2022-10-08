<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Halo, {{ strtoupper(auth()->user()->name) }}</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <div class="hometext">
      <a href="{{route('logout')}}"   style="color: red !important;" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Logout </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      <span class="caret"></span>
  </ul>
</nav>
