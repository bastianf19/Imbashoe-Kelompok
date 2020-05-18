<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <?= $this->assets->outputCss() ?>	 -->
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/material-design-iconic-font.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/signup.css') ?>" type="text/css">
    <!-- <link rel="stylesheet" href="<?= $this->url->getStatic('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') ?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    

</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <div class="alert alert-<?php echo $success === true ? 'success' : 'danger'; ?>">
                            <?php echo $message; ?>
                        </div>
                        
                        <a href="<?= $this->url->get('/') ?>" class="btn btn-lg btn-primary btn-block text-uppercase" role="button"> ke Home</a>
                    </div>
                    <div class="signup-image">
                        <img src="/img/Logoimba.png" id="logoimba">
                        <figure><img src="/img/signup-image.jpg" alt="sing up image"></figure>
                       
                        <label class="form-check-label" for="name"></label>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
