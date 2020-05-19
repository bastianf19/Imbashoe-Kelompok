<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $this->url->getStatic('/css/admin.css') ?>" type="text/css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="/img/Logoimba.png" height="100px" alt="logo"/></a>
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="img/admin/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <h3>Halaman Admin</h3>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-envelope mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid full-side sidebar-fixed page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"/>
                  <span class="online-status online"></span> 
                </div>
                <div class="profile-name">
                  <p class="name">
                    <?= $this->session->get('auth')['nama'] ?>
                  </p>
                  <p class="designation">
                    <?= $this->session->get('auth')['peran'] ?>
                  </p>
                </div>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?= $this->url->get('/admin/editprofile/' . $this->session->get('auth')['id_user']) ?>"">
                <i class="fas fa-edit menu-icon"></i>
                <span class="menu-title">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $this->url->get('/admin') ?>"">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $this->url->get('/admin/listuser') ?>">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">List User</span>
                <span class="badge badge-warning"><?php echo $users->count(); ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?= $this->url->get('/admin/listproduk') ?>">
                <i class="fas fa-boxes menu-icon"></i>
                <span class="menu-title">List Produk</span>
                <span class="badge badge-warning"><?php echo $produk->count(); ?></span>
              </a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Tables</span>
                <span class="badge badge-info">4</span>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li> -->
            
            <br>
            <br>
            <li>
              <a type="button" class="btn btn-block btn-danger" href="<?= $this->url->get('Session/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <b><h1 class="card-title text-center">List Produk</h1></b>
                  <div class="d-flex table-responsive">
                    <div class="btn-group mr-2">
                      <a href="<?= $this->url->get('/admin/tambahproduk') ?>"><button class="btn btn-danger"><i class="fas fa-plus"></i> Add Produk</button></a>
                    </div>
                    <!-- <form method="POST" autocomplete="off" action="<?= $this->url->get('admin/cariuser') ?>"> -->
                      <div class="btn-group ml-auto mr-2 border-0">
                        <input type="text" class="form-control" id='nama' name='nama' placeholder="Cari User" aria-label="Cari User">
                      </div>
                    <!-- </form> -->
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th class="text-center"><b>ID Produk</b></th>
                          <th  class="text-center"><b>Gambar Produk</b></th>
                          <th  class="text-center"><b>Nama Produk</b></th>
                          <th  class="text-center"><b>Brand</b></th>
                          <th  class="text-center"><b>Deskrips Produk</b></th>
                          <th  ><b>Harga</b></th>
                          <th  class="text-center"><b>Status</b></th>
                          <th  class="text-center"><b>Actions</b></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($produk as $prod) { ?>
                        <tr>
                            <td  class="text-center"><?= $prod->id_produk ?></td>
                            <td><img src="<?= $this->url->get($prod->foto_produk) ?>" width="100px"></td>
                            <td><?= $prod->nama_produk ?></td>
                            <td><?= $prod->brand_produk ?></td>
                            <td width="450px" id="deskripsiproduk"><?= $prod->deskripsi_produk ?></td>
                            <td><?= $prod->harga_produk ?></td>
                            <td class="text-center"><?= $prod->status_produk ?></td>
                            <td><a href="<?= $this->url->get('admin/editproduk/' . $prod->id_produk) ?>" class='btn btn-outline-primary btn-block'>Edit</a><br>
                              <a href="<?= $this->url->get('produk/hapus/' . $prod->id_produk) ?>" class='btn btn-outline-danger btn-block'>Hapus</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                    <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                    <nav>
                      <ul class="pagination pagination-info mb-0">
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="#">Imbashoe.com</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/raphael/raphael.min.js"></script>
  <script src="node_modules/morris.js/morris.min.js"></script>
  <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

<!-- 
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href=""><img src="/img/Logoimba.png"
                                    style="max-height: 300px; max-width: 300px;"></a><br>Menu | <?= $this->session->get('auth')['nama'] ?> <?php echo $this->tag->linkTo(["Session/logout", "Logout", 'class' => 'btn btn-primary']); ?></h3>
                            <a href="<?= $this->url->get('/signup/list') ?>" class="btn btn-lg btn-outline-primary btn-block" role="button">All Users</a>
                            <a href="<?= $this->url->get('/produk/list') ?>" class="btn btn-lg btn-outline-primary btn-block" role="button">List Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html> -->
