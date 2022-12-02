
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin_dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin/addUser')}}">
              <i class="bi bi-person-plus-fill"></i><span>Add User</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin/usersList')}}">
              <i class="bi bi-person-lines-fill"></i><span>User List</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-person-fill-lock"></i><span>Banned Users</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-pie-chart-fill"></i><span>Report</span>
            </a>
          </li>
        
   
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menue 1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menue 1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menue 1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menue 2</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menue 3</span>
            </a>
          </li>
        
   
        </ul>
      </li><!-- End Components Nav -->

 
    

    </ul>

  </aside><!-- End Sidebar-->
