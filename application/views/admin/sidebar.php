<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Image Server</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item <?php echo $menubrand;?>">
            <a href="/manage/brand" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>Brands</p>
            </a>
          </li>
          <li class="nav-item <?php echo $menucarousel;?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>Carousel</p>
            </a>
          </li>
          <li class="nav-item  <?php echo $activemenu['video'];?>">
            <a href="/manage/video" class="nav-link <?php echo $activemenu['video'];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>Video</p>
            </a>
          </li>
          <li class="nav-item  <?php echo $menusponsor;?>">
            <a href="/manage/brand" class="nav-link <?php echo $activesponsor[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>Brand Sponsor</p>
            </a>
          </li>
          <li class="nav-item  <?php echo $menuusers;?>">
            <a href="#" class="nav-link <?php echo $activeuser[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item  <?php echo $menuseqwences;?>">
            <a href="#" class="nav-link <?php echo $activeseqwence[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>Seqwences</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
