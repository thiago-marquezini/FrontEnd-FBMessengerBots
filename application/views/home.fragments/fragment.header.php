<!-- header -->
<header class="site-header">
   <nav class="navbar navbar-expand-lg center-brand static-nav">
      <div class="container">
         <a class="navbar-brand" href="http://www.themesindustry.com/html/xeone/index.html">
         <img src="http://www.themesindustry.com/html/xeone/images/logo-transparent.png" alt="logo" class="logo-default">
         <img src="http://www.themesindustry.com/html/xeone/images/logo-dark.png" alt="logo" class="logo-scrolled">
         </a>
         <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
            <span> </span>
            <span> </span>
            <span> </span>
         </button>
         <div class="collapse navbar-collapse" id="xenav">
            <ul class="navbar-nav" id="container">
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#banner-main">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-process">Features</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-team">Team</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#portfolio_top">Portfolio</a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-pricings">Packages</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-testimonial">Clients</a>
               </li>

               <? if (!($Loggined)) { ?>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-blog">Login</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#contactus">Registre-se</a>
               </li>
               <? } else { ?>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-blog">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#contactus">Account</a>
               </li>
               <? } ?>
            </ul>
         </div>
      </div>

      <!--side menu open button-->
      <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
          <span></span> <span></span> <span></span>
       </a>
   </nav>

   <!-- side menu -->
   <div class="side-menu">
      <div class="inner-wrapper">
         <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
         <nav class="side-nav w-100">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link active" href="#banner-main">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-process">Funcionalidades</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-team">Como Usar</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#portfolio_top">Portfolio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-pricings">Packages</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-testimonial">Clients</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#our-blog">Blog</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pagescroll" href="#contactus">contact</a>
               </li>
            </ul>
         </nav>

         <div class="side-footer w-100">
            <ul class="social-icons-simple white top40">
               <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
            </ul>
            <p class="whitecolor">&copy; 2018 XeOne. Made With Love by themesindustry</p>
         </div>
      </div>
   </div>
   <a id="close_side_menu" href="javascript:void(0);"></a>
   <!-- End side menu -->
</header>
<!-- header -->