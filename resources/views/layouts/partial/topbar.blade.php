 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
            


              <li class="nav-item">
                <a class="nav-link" href="#pablo">
         <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                  
                  </p>
                </a>
              </li>


              <li class="nav-item">
  <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onclick="return confirm('Are you sure want to logout?')">
                    <i class="material-icons" style="color: #000;">exit_to_app</i>
                    <p class="d-lg-none d-md-block">Logout</p>
               </a>
       <form id="logout-form" method="post" action="{{route('logout')}}"style="display: none;">
         {{csrf_field()}}
          </form>
              </li>

            </ul>
          </div>
        </div>
      </nav>