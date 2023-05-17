<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="row">
        <div class="col-md-12">
            <center><img class="img-fluid" src="{{URL::asset('storage/images/logo.png')}}"></center>
        </div>
        <div class="col-md-12 info">
            <br>
            <center>
            <a class="pushmenu no-link" data-widget="pushmenu" href="" role="button">
                <span class="material-symbols-outlined toogle-sidebar">
                    menu
                </span>
            </a>
            </center>
        </div>
    </div>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('storage/images/user-icon.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block username">Username</a>
        </div>
      </div>
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">


          <li class="nav-item sidebar-items">
            <a href="/admin" class="nav-link">
                <span class="nav-icon material-symbols-outlined">
                    home
                </span>
              <p class="sidebar-items">
                Home
              </p>
            </a>
          </li>

          <li class="nav-item sidebar-items">
            <a href="/admin/students" class="nav-link">
                <span class="nav-icon material-symbols-outlined">
                    sprint
                </span>
              <p class="sidebar-items">
                Alunos
              </p>
            </a>
          </li>

          <li class="nav-item sidebar-items">
            <a href="#" class="nav-link">
                <span class="nav-icon material-symbols-outlined">
                    cast
                </span>
              <p class="sidebar-items">
                Cursos
              </p>
            </a>
          </li>

          <li class="nav-item sidebar-items">
            <a href="#" class="nav-link">
                <span class="nav-icon material-symbols-outlined">
                    share
                </span>
              <p class="sidebar-items">
                Hotmart
              </p>
            </a>
          </li>

          <li class="nav-item sidebar-items">
            <a href="#" class="nav-link">
                <span class="nav-icon material-symbols-outlined">
                    no_food
                </span>
              <p class="sidebar-items">
                Dietas
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>