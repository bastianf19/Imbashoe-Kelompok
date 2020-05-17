<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- {{ assets.outputCss() }}	 -->
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ static_url('css/material-design-iconic-font.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ static_url('css/signup.css') }}" type="text/css">
    <!-- <link rel="stylesheet" href="{{ static_url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" class="register-form" id="register-form" autocomplete="off" action="{{url('signup/register')}}">
                            <div class="form-group">
                                <label for="username"><img src="SVG/at.svg" width="15px"></label>
                                <input type="text" name="username" id="username" placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><img src="SVG/user.svg" width="15px"></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><img src="SVG/email.svg" width="15px"></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="no_hp"><i class="fa fa-phone" aria-hidden="true"></i></label>
                                <input type="no_hp" name="no_hp" id="no_hp" placeholder="Nomor Handphone"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                <input type="alamat" name="alamat" id="alamat" placeholder="Alamat Lengkap"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><img src="SVG/lock.svg" width="15px"></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>

                            <div class="custom-control custom-checkbox" id="checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" value="Register">Submit</button>
                                <!-- <p class="punyaakun">Saya sudah memiliki akun. <a href="#" class="signup-image-link" id="punyaakun">Login disini</a></p> -->
                                <p class="punyaakun">Saya sudah memiliki akun. <a href="/"> Login disini</a></p>
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <img src="img/Logoimba.png" id="logoimba">
                        <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                       
                        <label class="form-check-label" for="name"></label>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>