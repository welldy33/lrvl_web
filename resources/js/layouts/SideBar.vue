<template>
   <div id="sidebar">
    <aside class="main-sidebar sidebar-dark-primary elevation-4" >
      <!-- Brand Logo -->
      <router-link :to="{name: 'Home'}" class="brand-link">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </router-link>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
 
          <div class="info">
            <router-link to="/" class="d-block">Welldy Rosman  
            </router-link>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <router-link :to="{name: 'Home'}" class="nav-link">
                <i class="fas fa-Home nav-icon"></i>
                <p>Registration</p>
              </router-link>
            </li>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Pendaftaran
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link :to="{name: 'About'}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran Baru</p>
                  </router-link>
                </li>
                 <li class="nav-item">
                  <router-link :to="{name: 'About'}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran</p>
                  </router-link>
                </li>
                 <li class="nav-item">
                  <router-link :to="{name: 'About'}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembayaran</p>
                  </router-link>
                </li>
                 <li class="nav-item">
                  <router-link :to="{name: 'About'}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Anggota</p>
                  </router-link>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    
  </div>
</template>