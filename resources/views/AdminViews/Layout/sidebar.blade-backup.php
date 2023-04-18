


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @foreach($modules as $module)

      @if($module->disabled==false)
      @if(count($module->subModules) <= 0)
      <li class="nav-item">
        <a class="nav-link " href="{{!empty($module->module_route)?route($module->module_route):'#'}}">
          <i class="{{$module->icon}}"></i>
          <span>{{$module->module_name}}</span>
        </a>
      </li>
      @else
      <li class="nav-item " style="cursor: pointer">
              <a class="nav-link collapsed"  data-bs-target="{{"#module_no".$module->id}}" data-bs-toggle="collapse" >
                <i class="{{$module->icon}}"></i><span>{{$module->module_name}}</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="{{"module_no".$module->id}}" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               @foreach($module->subModules as $submodule)
               @if($submodule->disabled==false)
                <li>
                  <a href="{{!empty($submodule->submodule_route)?route($submodule->submodule_route):'#'}}">
                    <i class="{{$submodule->icon}}"></i><span>{{$submodule->sub_module_name}}</span>
                  </a>
                </li>
                @endif
@endforeach
              </ul>
            @endif
            @endif
      @endforeach
      {{-- <li class="nav-item">
        <a class="nav-link " href="{{route('admin_dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('users.add')}}">
              <i class="bi bi-person-plus-fill"></i><span>Add User</span>
            </a>
          </li>
          <li>
            <a href="{{route('users.list')}}">
              <i class="bi bi-person-lines-fill"></i><span>User List</span>
            </a>
          </li>

       <li>
            <a href="{{route('users.report')}}">
              <i class="bi bi-pie-chart-fill"></i><span>Report</span>
            </a>
          </li>


        </ul>
      </li><!-- End Components Nav --> --}}



      {{-- Products Menue Starts --}}
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
                <i class="bi bi-badge-ad-fill"></i><span>Ads</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="ads" class="nav-content collapse" data-bs-parent="#ads-parent">

                <li>
                  <a href="{{url('boost_products')}}">
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
                <i class="bi bi-tag-fill"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
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
                <i class="bi bi-shop-window"></i><span>Brands</span><i class="bi bi-chevron-down ms-auto"></i>
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
                <i class="bi bi-shop-window"></i><span>Inspection</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="inspection" class="nav-content collapse" data-bs-parent="#inspection-parent">

                <li>
                  <a href="{{url('add_inspection')}}">
                    <i class="bi bi-shield-check"></i><span>Add inspection</span>
                  </a>
                </li>
                {{-- <li>
                  <a href="{{url('inspection_report')}}">
                    <i class="bi bi-shield-fill-check"></i><span>Inspection Report</span>
                  </a>
                </li> --}}

              </ul>
            </li>

          {{-- <li>
            <a href="{{url('product_report')}}">
              <i class="bi bi-pie-chart-fill"></i><span>Products Report</span>
            </a>
          </li> --}}

        </ul>
      </li><!-- End Products Nav -->
{{-- Start Sales Nav --}}

<li class="nav-item" id="sales-parent">
  <a class="nav-link collapsed" data-bs-target="#sales" data-bs-toggle="collapse" href="#">
    <i class="bi bi-cart-fill"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="sales" class="nav-content collapse" data-bs-parent="#sales-parent">

    <li>
      <a href="{{url('pending_sales')}}">
        <i class="bi bi-cart"></i><span>Pending Sales</span>
      </a>
    </li>
    <li>
      <a href="{{url('failed_sales')}}">
        <i class="bi bi-cart-x-fill"></i><span>Failed Sales</span>
      </a>
    </li>
    <li>
      <a href="{{url('completed_sales')}}">
        <i class="bi bi-cart-check-fill"></i><span>Completed Sales</span>
      </a>
    </li>
    {{-- <li>
      <a href="{{url('sales_report')}}">
        <i class="bi bi-pie-chart-fill"></i><span>Sales Report</span>
      </a>
    </li> --}}

  </ul>
</li>

{{-- End Sales Nav --}}

{{-- Finance Menu Start --}}

<li class="nav-item" id="finanace-parent">
  <a class="nav-link collapsed" data-bs-target="#finanace" data-bs-toggle="collapse" href="#">
    <i class="bi bi-bank2"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="finanace" class="nav-content collapse" data-bs-parent="#finanace-parent">

    <li>
      <a href="{{url('txn_ledger')}}">
        <i class="bi bi-file-earmark-ruled-fill"></i><span>TXN Ledger</span>
      </a>
    </li>
    <li>
      <a href="{{url('wallets')}}">
        <i class="bi bi-wallet2"></i><span>Wallets</span>
      </a>
    </li>
    <li>
      <a href="{{url('charges_and_discounts')}}">
        <i class="bi bi-receipt"></i><span>Charges And Discounts</span>
      </a>
    </li>
    <li>
      <a href="{{url('withdraw_requests')}}">
        <i class="bi bi-arrow-left-square-fill"></i><span>Withdraw Requests</span>
      </a>
    </li>
    <li>
      <a href="{{url('withdraw_history')}}">
        <i class="bi bi-clock-history"></i><span>Withdraw History</span>
      </a>
    </li>
    <li>
      <a href="{{url('pending_refunds')}}">
        <i class="bi bi-hourglass-split"></i><span>Pending Refunds</span>
      </a>
    </li>
    <li>
      <a href="{{url('approved_refunds')}}">
        <i class="bi bi-check-square-fill"></i><span>Approved Refunds</span>
      </a>
    </li>
    <li>
      <a href="{{url('deposits')}}">
        <i class="bi bi-cash-coin"></i><span>Deposits</span>
      </a>
    </li>
    {{-- <li>
      <a href="{{url('finance_report')}}">
        <i class="bi bi-pie-chart-fill"></i><span>Reports</span>
      </a>
    </li> --}}

  </ul>
</li>

{{-- Finance Menue Ends --}}



{{-- Hr Menu Starts --}}

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#HrManagment" data-bs-toggle="collapse" href="#">
    <i class="bi bi-person-gear"></i><span>HR Managment</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="HrManagment" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <li class="nav-item sub-menu-dropdown" id="employees-parent">
        <a class="nav-link collapsed" data-bs-target="#manageEmployees" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Manage Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="manageEmployees" class="nav-content collapse" data-bs-parent="#employees-parent">

          <li>
            <a href="{{url('add_employee')}}">
              <i class="bi bi-arrow-return-right"></i><span>Add Employee</span>
            </a>
          </li>
          <li>
            <a href="{{url('employee_list')}}">
              <i class="bi bi-arrow-return-right"></i><span>Employee List</span>
            </a>
          </li>
          <li>
            <a href="{{url('add_designation')}}">
              <i class="bi bi-arrow-return-right"></i><span>Add Designation</span>
            </a>
          </li>
          <li>
            <a href="{{url('designation_list')}}">
              <i class="bi bi-arrow-return-right"></i><span>Designation List</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item sub-menu-dropdown" id="attendance-parent">
        <a class="nav-link collapsed" data-bs-target="#manageAttendance" data-bs-toggle="collapse" href="#">
          <i class="bi bi-table"></i><span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="manageAttendance" class="nav-content collapse" data-bs-parent="#attendance-parent">

          <li>
            <a href="{{url('add_attendance')}}">
              <i class="bi bi-arrow-return-right"></i><span>Add Attendance</span>
            </a>
          </li>
          <li>
            <a href="{{url('manage_attendance')}}">
              <i class="bi bi-arrow-return-right"></i><span>Manage Attendance</span>
            </a>
          </li>
          <li>
            <a href="{{url('absents')}}">
              <i class="bi bi-arrow-return-right"></i><span>Absents</span>
            </a>
          </li>
          <li>
            <a href="{{url('on_leave')}}">
              <i class="bi bi-arrow-return-right"></i><span>On Leave</span>
            </a>
          </li>
          <li>
            <a href="{{url('issue_leave')}}">
              <i class="bi bi-arrow-return-right"></i><span>Issue Leave</span>
            </a>
          </li>
          <li>
            <a href="{{url('event_holidays')}}">
              <i class="bi bi-arrow-return-right"></i><span>Event Holidays</span>
            </a>
          </li>
          {{-- <li>
            <a href="{{url('attendance_report')}}">
              <i class="bi bi-arrow-return-right"></i><span>Report</span>
            </a>
          </li> --}}
          <li>

        </ul>
      </li>
      <li class="nav-item sub-menu-dropdown" id="salary-parent">
        <a class="nav-link collapsed" data-bs-target="#managesalary" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-stack"></i><span>Salary</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="managesalary" class="nav-content collapse" data-bs-parent="#salary-parent">

          <li>
            <a href="{{url('salary_settings')}}">
              <i class="bi bi-arrow-return-right"></i><span>Salary Settings</span>
            </a>
          </li>
          <li>
            <a href="{{url('salary_list')}}">
              <i class="bi bi-arrow-return-right"></i><span>Salary List</span>
            </a>
          </li>
          <li>
            <a href="{{url('benifits_and_deductions')}}">
              <i class="bi bi-arrow-return-right"></i><span>Benifits And Deductions</span>
            </a>
          </li>
          <li>
            <a href="{{url('generate_payroll')}}">
              <i class="bi bi-arrow-return-right"></i><span>Generate Payroll</span>
            </a>
          </li>
          <li>
            <a href="{{url('pay_salary')}}">
              <i class="bi bi-arrow-return-right"></i><span>Pay Salary</span>
            </a>
          </li>
          <li>
            <a href="{{url('salary_history')}}">
              <i class="bi bi-arrow-return-right"></i><span>Salary History</span>
            </a>
          </li>
          <li>
            {{-- <a href="{{url('salary_report')}}">
              <i class="bi bi-arrow-return-right"></i><span>Report</span>
            </a> --}}
          </li>
          <li>

        </ul>
      </li>

  </ul>
</li>

{{-- Hr Menu Ends --}}




{{-- Return Menu Start --}}

<li class="nav-item" id="returns-parent">
  <a class="nav-link collapsed" data-bs-target="#returns" data-bs-toggle="collapse" href="#">
    <i class="bi bi-arrow-repeat"></i><span>Returns</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="returns" class="nav-content collapse" data-bs-parent="#returns-parent">
    <li>
      <a href="{{url('add_return')}}">
        <i class="bi bi-reply-all-fill"></i><span>Add Return</span>
      </a>
    </li>
    <li>
      <a href="{{url('pending_returns')}}">
        <i class="bi bi-hourglass-bottom"></i><span>Pending Return</span>
      </a>
    </li>
    <li>
      <a href="{{url('completed_returns')}}">
        <i class="bi bi-check-square-fill"></i><span>Completed Return</span>
      </a>
    </li>
    {{-- <li>
      <a href="{{url('returns_report')}}">
        <i class="bi bi-pie-chart-fill"></i><span>Report</span>
      </a>
    </li> --}}

  </ul>
</li>

{{-- Return Menue Ends --}}

{{-- Roles Menu Start --}}

<li class="nav-item" id="roles-parent">
  <a class="nav-link collapsed" data-bs-target="#roles" data-bs-toggle="collapse" href="#">
    <i class="bi bi-award-fill"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="roles" class="nav-content collapse" data-bs-parent="#roles-parent">
    <li>
      <a href="{{route('role.add')}}">
        <i class="bi bi-node-plus-fill"></i><span>Add Role</span>
      </a>
    </li>
    <li>
      <a href="{{route('role.list')}}">
        <i class="bi bi-person-lines-fill"></i><span>Roles List</span>
      </a>
    </li>
    <li>
      <a href="{{route('admin.add')}}">
        <i class="bi bi-person-plus-fill"></i><span>Assign Roles</span>
      </a>
    </li>

  </ul>
</li>

{{-- Roles Menue Ends --}}
{{-- Modules Menu Start --}}

<li class="nav-item" id="Modules-parent">
  <a class="nav-link collapsed" data-bs-target="#Modules" data-bs-toggle="collapse" href="#">
    <i class="bi bi-box-fill"></i><span>Modules</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="Modules" class="nav-content collapse" data-bs-parent="#Modules-parent">
    <li>
      <a href="{{route('module.add')}}">
        <i class="bi bi-plus-square-fill"></i><span>Add Modules</span>
      </a>
    </li>
    <li>
      <a href="{{route('module.list')}}">
        <i class="bi bi-list-task"></i><span>Modules List</span>
      </a>
    </li>
  </ul>
</li>

{{-- Modules Menue Ends --}}


    </ul>

  </aside><!-- End Sidebar-->
