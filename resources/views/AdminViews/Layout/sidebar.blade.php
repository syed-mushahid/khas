
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
          <i class="bi bi-box-seam-fill"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('products_list')}}">
              <i class="bi bi-list-task"></i><span>Products List</span>
            </a>
          </li>
          <li>
            <a href="{{url('removed_product')}}">
              <i class="bi bi-trash2-fill"></i><span>Removed Products</span>
            </a>
          </li>
          <li>
            <li class="nav-item sub-menu-dropdown" id="ads-parent">
              <a class="nav-link collapsed" data-bs-target="#ads" data-bs-toggle="collapse" href="#">
                <i class="bi bi-badge-ad-fill"></i><span>Manage Ads</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="ads" class="nav-content collapse" data-bs-parent="#ads-parent">
               
                <li>
                  <a href="{{url('boot_products')}}">
                    <i class="bi bi-megaphone-fill"></i><span>Boost Product</span>
                  </a>
                </li>
                <li>
                  <a href="{{url('current_ads')}}">
                    <i class="bi bi-list-task"></i><span>Current Ads</span>
                  </a>
                </li>
         
              </ul>
            </li>
           
       
            <li class="nav-item sub-menu-dropdown" id="category-parent">
              <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
                <i class="bi bi-tag-fill"></i><span>Manage Categories</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="category" class="nav-content collapse" data-bs-parent="#category-parent">
               
                <li>
                  <a href="{{url('add_category')}}">
                    <i class="bi bi-file-plus-fill"></i><span>Add Category</span>
                  </a>
                </li>
                <li>
                  <a href="{{url('category_list')}}">
                    <i class="bi bi-list-task"></i><span>Category List</span>
                  </a>
                </li>
         
              </ul>
            </li>
            <li class="nav-item sub-menu-dropdown" id="brands-parent">
              <a class="nav-link collapsed" data-bs-target="#brands" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shop-window"></i><span>Manage Brands</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="brands" class="nav-content collapse" data-bs-parent="#brands-parent">
               
                <li>
                  <a href="{{url('add_brands')}}">
                    <i class="bi bi-bag-plus-fill"></i><span>Add Brands</span>
                  </a>
                </li>
                <li>
                  <a href="{{url('brands_list')}}">
                    <i class="bi bi-list-task"></i><span>Brands List</span>
                  </a>
                </li>
         
              </ul>
            </li>
            <li class="nav-item sub-menu-dropdown" id="inspection-parent">
              <a class="nav-link collapsed" data-bs-target="#inspection" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shop-window"></i><span>Manage Inspection</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="inspection" class="nav-content collapse" data-bs-parent="#inspection-parent">
               
                <li>
                  <a href="{{url('add_inspection')}}">
                    <i class="bi bi-shield-check"></i><span>Add inspection</span>
                  </a>
                </li>
                <li>
                  <a href="{{url('inspection_report')}}">
                    <i class="bi bi-shield-fill-check"></i><span>Inspection Report</span>
                  </a>
                </li>
         
              </ul>
            </li>

          <li>
            <a href="#">
              <i class="bi bi-pie-chart-fill"></i><span>Products Report</span>
            </a>
          </li>
        
        </ul>
      </li><!-- End Components Nav -->

 
    

    </ul>

  </aside><!-- End Sidebar-->
