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
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <b><h1 class="card-title text-center">List Produk</h1></b>
                  <h5 class="card-title text-center">Cari Produk | '<?php echo $nama_prod; ?>'</h5>
                  <div class="d-flex table-responsive">
                    <div class="btn-group mr-2">
                      <a href="{{url('/admin/tambah')}}"><button class="btn btn-lg btn-danger"><i class="fas fa-plus"></i> Add Produk</button></a>
                    </div>
                    <form method="POST" autocomplete="off" action="{{url('admin/cariproduk')}}">
                    
                      <div class="input-group mb-4">
                        <input type="text" class="form-control" id='nama' name='nama' placeholder="Cari Produk" aria-label="Cari Produk">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary btn-block" type="submit">Cari</button>
                        </div>
                      </div>
                    </form>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th class="text-center"><b>ID Produk</b></th>
                          <th class="text-center"><b>Gambar Produk</b></th>
                          <th class="text-center"><b>Nama Produk</b></th>
                          <th class="text-center"><b>Brand</b></th>
                          <th class="text-center"><b>Deskrips Produk</b></th>
                          <th><b>Harga</b></th>
                          <th class="text-center"><b>Status</b></th>
                          <th class="text-center"><b>Actions</b></th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for prod in cari %}
                        <tr>
                          <td class="text-center">{{ prod.id_produk }}</td>
                          <td><img src="{{url(prod.foto_produk)}}" width="100px"></td>
                          <td>{{ prod.nama_produk }}</td>
                          <td>{{ prod.brand_produk }}</td>
                          <td width="450px" id="deskripsiproduk">{{ prod.deskripsi_produk }}</td>
                          <td>{{ prod.harga_produk }}</td>
                          <td class="text-center">{{ prod.status_produk }}</td>
                          <td><a href="{{ url('admin/editproduk/' ~ prod.id_produk) }}" class='btn btn-outline-primary btn-block'>Edit</a><br>
                            <a href="{{ url('admin/hapusproduk/' ~ prod.id_produk) }}" class='btn btn-outline-danger btn-block'>Hapus</a></td>
                        </tr>
                        {% endfor %}
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
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Monthly Analytics</h6>
                  <p class="card-description">Products that are creating the most revenue and their sales throughout the year and the variation in behavior of sales.</p>
                  <div id="js-legend" class="chartjs-legend mt-4 mb-5"></div>
                  <div class="demo-chart">
                    <canvas id="dashboard-monthly-analytics"></canvas>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h6 class="card-title">Activity</h6>
                  </div>
                  <p class="card-description">What's people doing right now</p>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0"><b>Dobrick </b>posted in Material</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-clock text-muted mr-1"></i>
                          <p class="mb-0">Awesome!</p>
                        </div>
                        <small class="text-muted ml-auto">2 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0"><b>Stella </b>posted in Material</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-clock text-muted mr-1"></i>
                          <p class="mb-0">Awesome!</p>
                        </div>
                        <small class="text-muted ml-auto">3 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0"><b>Peter </b>posted in Material</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-clock text-muted mr-1"></i>
                          <p class="mb-0">Great!</p>
                        </div>
                        <small class="text-muted ml-auto">1 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center pt-3">
                    <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0"><b>Nateila </b>posted in Material</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-clock text-muted mr-1"></i>
                          <p class="mb-0">Awesome!</p>
                        </div>
                        <small class="text-muted ml-auto">1 hours ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Sales Difference</h6>
                  <p>Sales difference with last year</p>
                </div>
                <div id="morris-area-example"></div>
              </div>
            </div>
            <div class="col-12 col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Sales Chart</h6>
                  <p class="card-description">Based on last month analytics.</p>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-secondary">2015</button>
                    <button type="button" class="btn btn-outline-secondary">2016</button>
                  </div>
                  <div id="morris-dashboard-bar-chart" style="height:250px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <h6 class="card-title">Reviews</h6>
                  <div class="row">
                    <div class="col-12">
                      <div class="wrapper border-bottom py-2">
                        <div class="d-flex">
                          <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                          <div class="wrapper ml-4">
                            <p class="mb-0">Sarah Graves</p>
                            <small class="text-muted mb-0">Awesome!!! Highly recommend</small>
                          </div>
                          <div class="rating ml-auto d-flex align-items-center">
                            <select id="dashboard-rating-2" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="wrapper border-bottom py-2">
                        <div class="d-flex">
                          <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                          <div class="wrapper ml-4">
                            <p class="mb-0">David Grey</p>
                            <small class="text-muted mb-0">Not satisfied with the service.</small>
                          </div>
                          <div class="rating ml-auto d-flex align-items-center">
                            <select id="dashboard-rating-1" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="wrapper border-bottom py-2">
                        <div class="d-flex">
                          <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                          <div class="wrapper ml-4">
                            <p class="mb-0">Burno mars</p>
                            <small class="text-muted mb-0">Great!! It's the best</small>
                          </div>
                          <div class="rating ml-auto d-flex align-items-center">
                            <select id="dashboard-rating-3" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="wrapper py-2">
                        <div class="d-flex">
                          <img class="img-sm rounded-circle" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                          <div class="wrapper ml-4">
                            <p class="mb-0">Dobrick</p>
                            <small class="text-muted mb-0">Not worth the money.</small>
                          </div>
                          <div class="rating ml-auto d-flex align-items-center">
                            <select id="dashboard-rating-4" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card">
              <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title mb-0">Statistics</h6>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                          <div class="d-lg-flex">
                            <h2 class="mb-0">$10,200</h2>
                            <div class="d-flex align-items-center ml-lg-2">
                              <i class="mdi mdi-clock text-muted"></i>
                              <small class="ml-1 mb-0">Updated: 9:10am</small>
                            </div>
                          </div>
                          <small class="text-gray">Raised from 89 orders.</small>
                        </div>
                        <div class="d-inline-block">
                          <div class="bg-success px-3 px-md-4 py-2 rounded">
                            <i class="mdi mdi-buffer text-white icon-lg"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title mb-0">Daily Order</h6>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                          <div class="d-lg-flex">
                            <h2 class="mb-0">$2256</h2>
                            <div class="d-flex align-items-center ml-lg-2">
                              <i class="mdi mdi-clock text-muted"></i>
                              <small class="ml-1 mb-0">Updated: 05:42pm</small>
                            </div>
                          </div>
                          <small class="text-gray">hey, let’s have lunch together</small>
                        </div>
                        <div class="d-inline-block">
                          <div class="bg-warning px-3 px-md-4 py-2 rounded">
                            <i class="mdi mdi-wallet text-white icon-lg"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-facebook icon-lg text-facebook"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-facebook mb-0 font-weight-medium">15k Likes</p>
                      <small class="text-muted mb-0">You main list growing !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-twitter icon-lg text-twitter"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-twitter mb-0 font-weight-medium">18k followers</p>
                      <small class="text-muted mb-0">There you are !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-linkedin icon-lg text-linkedin"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-linkedin mb-0 font-weight-medium">5k connections</p>
                      <small class="text-muted mb-0">Going good !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">Tim Cook</p>
                      <small class="text-muted mb-0">timcook@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">Sarah Graves</p>
                      <small class="text-muted mb-0">Sarahgraves@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">David Grey</p>
                      <small class="text-muted mb-0">David@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Support Lead</p>
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

<!-- 
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href=""><img src="/img/Logoimba.png"
                                    style="max-height: 300px; max-width: 300px;"></a><br>Menu | {{ session.get('auth')['nama'] }} <?php echo $this->tag->linkTo(["Session/logout", "Logout", 'class' => 'btn btn-primary']); ?></h3>
                            <a href="{{url('/signup/list')}}" class="btn btn-lg btn-outline-primary btn-block" role="button">All Users</a>
                            <a href="{{url('/produk/list')}}" class="btn btn-lg btn-outline-primary btn-block" role="button">List Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html> -->
