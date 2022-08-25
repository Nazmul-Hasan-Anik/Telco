<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="#" class="simple-text logo-normal">
      Telco
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('categories') ? 'active':'' }} ">
        <a class="nav-link" href="{{ url('categories') }}">
          <i class="material-icons">person</i>
          <p>Outlet</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-categories') ? 'active':'' }} ">
        <a class="nav-link" href="{{ url('add-categories') }}">
          <i class="material-icons">person</i>
          <p>Add Outlet</p>
        </a>
      </li>
    <li class="nav-item {{ Request::is('logout') ? 'active':'' }} ">
         <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          {{-- <i class="material-icons">person</i>
          <p>Add Outlet</p> --}}
        </a>
      </li>
      
    </ul>
  </div>
</div>