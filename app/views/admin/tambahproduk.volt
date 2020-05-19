<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ static_url('/css/admin.css') }}" type="text/css">
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
                    {{ session.get('auth')['nama'] }}
                  </p>
                  <p class="designation">
                    {{ session.get('auth')['peran'] }}
                  </p>
                </div>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin/editprofile/' ~ session.get('auth')['id_user']) }}"">
                <i class="fas fa-edit menu-icon"></i>
                <span class="menu-title">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin') }}"">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/listuser')}}">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">List User</span>
                <span class="badge badge-warning"><?php echo $users->count(); ?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('/admin/listproduk')}}">
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
              <a type="button" class="btn btn-block btn-danger" href="{{url('Session/logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row user-profile">
            
            <div class="col-lg-12 side-right stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title mb-0"></h4>
                    
                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                      <!-- <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" role="tab" aria-controls="info" aria-expanded="true">Edit Profile</a>
                      </li> -->
                      
                      <!-- <li class="nav-item">
                        <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Avatar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                      </li> -->
                    </ul>
                  </div>
                  <div class="wrapper">
                    <h1 class="text-center">Tambah Produk</h1>
                    <br>
                    <!-- <img src="../../images/faces/face6.jpg" alt="">
                      <h3 class="name text-center">{{ session.get('auth')['nama'] }}</h3>
                      <a class="d-block text-center text-dark">{{ session.get('auth')['peran'] }}</a>
                      <a class="d-block text-center text-dark" >{{ session.get('auth')['no_hp'] }}</a>
                    <hr> -->
                    
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                        <form method="POST" autocomplete="off" action="{{url('produk/tambah')}}" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="nama_produk" font-size="30px">Nama Produk</label>
                            <input class="form-control" type="text" id="nama_produk" name="nama_produk" placeholder="Nama Produk" required
                            autofocus>
                          </div>
                          <div class="form-group">
                            <label for="brand_produk">Brand</label>
                            <input class="form-control" type="text" id="brand_produk" name="brand_produk" placeholder="Brand Produk" required
                            autofocus>
                          </div>
                          <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi Produk</label>
                            <textarea class="form-control" type="text" id="deskripsi_produk" name="deskripsi_produk" placeholder="Deskripsi Produk" rows="10" required
                            autofocus></textarea>
                          </div>
                          <div class="form-group">
                            <label for="harga_produk">Harga Produk</label>
                            <input class="form-control" type="text" id="harga_produk" name="harga_produk" placeholder="Harga Produk" required
                            autofocus>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input class="form-control" type="text" id="kategori" name="kategori" placeholder="Kategori" required
                            autofocus>
                            <p>(Pilihan : Man, Woman, Kids</p>
                            <!-- <select class="form-control form-control-lg" id="kategori_produk" name="kategori_produk" required
                            autofocus>
                              <option>Man</option>
                              <option>Woman</option>
                              <option>Kids</option>
                            </select> -->
                          </div>
                          <div class="form-group">
                            <label for="status_produk">Status Produk </label>
                            <input class="form-control" type="text" id="status_produk" name="status_produk" placeholder="Status Produk" required
                            autofocus>
                            <p>(0:Kosong, 1:Tersedia)</p>
                          </div>
                          <!-- TAMBAH FOTO PRODUK -->
                          
                            <div class="form-group">
                              <label for="harga_produk">Foto Produk</label>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_produk" name="foto_produk">
                                <label class="custom-file-label" for="foto_produk">Pilih File</label>
                              </div>
                            </div>
                            
                            <div class="wrapper mb-3 mt-0">
                              <span class="badge badge-warning text-white">Note : </span>
                              <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                            </div>
                          <div class="form-group mt-5">
                            <button  class="btn btn-lg btn-primary" type="submit">Tambah Produk</button>
                            <button class="btn btn-lg btn-outline-danger">Batal</button>
                          </div>
                        </form>
                      </div><!-- tab content ends -->
                      <!-- TAMBAH GAMBAR -->
                      <!-- <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                          <span class="badge badge-warning text-white">Note : </span>
                          <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                        </div>
                        <form action="#">
                          <input type="file" class="dropify" data-max-file-size="1mb" data-default-file="../../images/faces/face6.jpg"/>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div> -->
                      <!-- GANTI PASSWORD -->
                      <!-- <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <form action="#">
                          <div class="form-group">
                            <label for="change-password">Change password</label>
                            <input type="password" class="form-control" id="change-password" placeholder="Enter you current password">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" id="new-password" placeholder="Enter you new password">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div> -->
                    </div>
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
