<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  

  <div class="col">
    <form method="POST" action="{{ url('produk/update/' ~ session.get('auth')['id_produk']) }}" autocomplete="off" class="form-signin">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <!-- <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                      </div>
                    </div>
                  </div> -->
                  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                      <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ session.get('auth')['nama'] }}</h4>
                      <p class="mb-0">{{ session.get('auth')['username'] }}</p>
                      <div class="mt-2">
                        <!-- <button class="btn btn-primary" type="button">
                          <i class="fa fa-fw fa-camera"></i>
                          <span>Change Photo</span>
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="text-center text-sm-right">
                      <span class="badge badge-secondary">administrator</span>
                      <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                    </div> -->
                  </div>
                </div>
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="" class="active nav-link">Edit Profile</a></li>
                </ul>
                <div class="tab-content pt-3">
                  <div class="tab-pane active">
                    <form class="form" novalidate="">
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="{{user.nama}}">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="{{user.username}}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="{{user.email}}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone" type="text" value="{{user.no_hp}}"></input>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" type="text" value="{{user.alamat}}"></input>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                          <!-- <div class="mb-2"><b>Change Password</b></div> -->
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="pass" placeholder="Password Anda" required>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" name="newpass" placeholder="New Password">
                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                <input class="form-control" type="password" placeholder="••••••"></div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                      <div class="row">
                        <div class="col d-flex justify-content-end">
                          <button  class="btn btn-primary" type="submit">Save Changes</button>
                          <!-- <button class="btn btn-primary" type="submit"></button> -->
                        </div>
                      </div>
                    </form>
                    <!-- method="post" action="{{ url('signUp/update/' ~ user.id_user) }}" -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
          <div class="card mb-3">
            <div class="card-body">
              <div class="px-xl-3">
                <a type="button" class="btn btn-block btn-secondary" href="{{url('Session/logout')}}"></a>
                  <i class="fa fa-sign-out"></i>
                  <span>Apayaaa</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

</div>
</div>