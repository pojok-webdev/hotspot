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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo $menubrand;?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Brands
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/brand/1" class="nav-link <?php echo $activebrand[1];?>">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Brand 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/brand/2" class="nav-link <?php echo $activebrand[2];?>">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Brand 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/brand/3" class="nav-link <?php echo $activebrand[3];?>">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Brand 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/brand/4" class="nav-link <?php echo $activebrand[4];?>">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Brand 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/brand/5" class="nav-link <?php echo $activebrand[5];?>">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Brand 5</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item <?php echo $menucarousel;?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Carousel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/carousel/1" class="nav-link <?php echo $activecarousel[1];?>">
                  <i class="far fa-snowflake nav-icon"></i>
                  <p>Carousel 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/carousel/2" class="nav-link <?php echo $activecarousel[2];?>">
                  <i class="far fa-snowflake nav-icon"></i>
                  <p>Carousel 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/carousel/3" class="nav-link <?php echo $activecarousel[3];?>">
                  <i class="far fa-snowflake nav-icon"></i>
                  <p>Carousel 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/carousel/4" class="nav-link <?php echo $activecarousel[4];?>">
                  <i class="far fa-snowflake nav-icon"></i>
                  <p>Carousel 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/manage/carousel/5" class="nav-link <?php echo $activecarousel[5];?>">
                  <i class="far fa-snowflake nav-icon"></i>
                  <p>Carousel 5</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item  <?php echo $menuvideo;?>">
            <a href="#" class="nav-link <?php echo $activevideo[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/video/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video 1</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item  <?php echo $menusponsor;?>">
            <a href="#" class="nav-link <?php echo $activesponsor[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Brand Sponsor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/sponsor/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sponsor 1</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item  <?php echo $menuusers;?>">
            <a href="#" class="nav-link <?php echo $activeuser[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/user/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User 1</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item  <?php echo $menuseqwences;?>">
            <a href="#" class="nav-link <?php echo $activeseqwence[1];?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Seqwences
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/manage/seqwence/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User 1</p>
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
