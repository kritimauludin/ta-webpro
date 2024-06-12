 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/panel/dashboard">
            <div class="sidebar-brand-text mx-3">PMB Unpak<sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/panel/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>

        @if (auth()->user()->role_id == 1)
            
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="/panel/student">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Calon Mahasiswa</span></a>
        </li>
        @else
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="/panel/form">
                <i class="fas fa-fw fa-table"></i>
                <span>Formulir Pendaftaran</span></a>
        </li>
        @endif
        
         <!-- Divider -->
         <hr class="sidebar-divider">

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <form action="/auth/logout" method="POST">
                @csrf
                <li class="nav-item">
                    <button class="nav-link btn btn-outline-light" type="submit" onclick="return confirm('Ready to Leave?');">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Logout</span></button>
                    
                </li>
            </form>
        </li>

    </ul>
    <!-- End of Sidebar -->