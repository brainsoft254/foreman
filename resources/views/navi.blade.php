  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-gears"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview sidebar-no-expand">
              <li class="nav-item">
                <a href="{{url('projects')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('cost center')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cost centers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('materials')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Materials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('labourers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Labourers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open sidebar-no-expand">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-gears"></i>
              <p>
                Transactions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('material')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material Check-out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('labour')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Labour Sheets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('equipment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipment Sheets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('subcontractor')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcontactor Sheets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('services')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services Sheets</p>
                </a>
</li>
              <li class="nav-item">
                <a href="{{url('vat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VAT Sheets</p>
                </a>
              </li>
            </ul>
            <!-- </li> -->
          <li class="nav-item has-treeview menu-open sidebar-no-expand">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-gears"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('Material Reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Job Reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job progress reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Labour Reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Labour reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Vat Reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VAT reports</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>