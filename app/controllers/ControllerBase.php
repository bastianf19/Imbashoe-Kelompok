<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    // Implement common logic
    public function onConstruct()
    {
        $this->ses = $this->session->has('auth');

        $this->assets->addCss("css/bootstrap.css"); 
        // $this->assets->addCss("css/all.css"); 
        $this->assets->addCss("css/fontawesome.min.css"); 
        $this->assets->addCss("css/magnific-popup.min.css");
        // $this->assets->addCss("css/signin.css"); 
        $this->assets->addCss("css/owl-carousel.css"); 
        $this->assets->addCss("css/css/jquery.fancybox.min.css"); 
        // $this->assets->addCss("css/themify-icons.css"); 
        $this->assets->addCss("css/niceselect.css"); 
        $this->assets->addCss("css/animate.css"); 
        $this->assets->addCss("css/flex-slider.min.css"); 
        $this->assets->addCss("css/slicknav.min.css"); 
        $this->assets->addCss("css/nice-select.css"); 
        $this->assets->addCss("css/reset.css"); 
        $this->assets->addCss("css/responsive.css"); 
        $this->assets->addCss("css/bootstrap.css"); 
        $this->assets->addCss("css/style.css");

        

        $this->assets->addCss("css/themify-icons.css"); 
        $this->assets->addJs("js/active.js");
        $this->assets->addJs("js/bootstrap.min.sj");
        $this->assets->addJs("js/easing.js");
        $this->assets->addJs("js/facnybox.min.js");
        $this->assets->addJs("js/finalcountdown.min.js");
        $this->assets->addJs("js/flex-slider.js");
        $this->assets->addJs("js/gmap.min.js");
        $this->assets->addJs("js/jquery-migrate-3.0.0.js");
        $this->assets->addJs("js/jquery-ui.min.js");
        $this->assets->addJs("js/jquery.min.js");
        $this->assets->addJs("js/magnific-popup.js");
        $this->assets->addJs("js/map-script.js");
        $this->assets->addJs("js/nicesellect.js");
        $this->assets->addJs("js/onepage-nav.min.js");
        $this->assets->addJs("js/owl-carousel.js");
        $this->assets->addJs("js/popper.min.js");
        $this->assets->addJs("js/scrollup.js");
        $this->assets->addJs("js/slicknav.min.js");
        $this->assets->addJs("js/waypoints.min.js");
        $this->assets->addJs("js/ytplayer.min.js");

    
    }
    
}
