

<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('backend/img/sidebar-1.jpg')}}">
   
      <div class="logo">
        <a href="{{url('/admin/dashboard')}}" class="simple-text logo-normal">
     <img src="{{asset('backend/img/Admin.png')}}" style="width: 100px;height: 100px;">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('admin/dashboard*')?'active':''}}">
            <a class="nav-link" href="{{url('/admin/dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>




      <li class="{{Request::is('admin/slider*')?'active':''}}">
            <a class="nav-link" href="{{route('slider.index')}}">
              <i class="material-icons">slideshow</i>
              <p>All slider</p>
            </a>
          </li>



      <li class="{{Request::is('admin/category*')?'active':''}}">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="material-icons">content_paste</i>
              <p>All Category</p>
            </a>
          </li>


      <li class="{{Request::is('admin/item*')?'active':''}}">
            <a class="nav-link" href="{{route('item.index')}}">
              <i class="material-icons">library_books</i>
              <p>All item</p>
            </a>
          </li>
       
          <li class="{{Request::is('admin/reservation*')?'active':''}}">
            <a class="nav-link" href="{{route('reservation.index')}}">
              <i class="material-icons">chrome_reader_mode</i>
              <p>All reservation</p>
            </a>
          </li>
          


      <li class="{{Request::is('admin/contact*')?'active':''}}">
            <a class="nav-link" href="{{route('contact.index')}}">
              <i class="material-icons">location_ons</i>
              <p>All contact</p>
            </a>
          </li>
          



          <li class="nav-item ">
            <a class="nav-link" href="{{Request::is('admin/contact*')?'active':''}}">
              <i class="material-icons">notifications</i>
              <p>Message(<?php 
              $data=DB::table('contacts')->get();
                   ?>
              <?php echo count($data);?>)
              </p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>