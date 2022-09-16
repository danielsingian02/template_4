<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    wp_head();
    ?>
</head>
    <header class="template_4_head">
      <!-- navigation menu -->

      <nav class="navbar navbar-expand-lg navbar-light desktop">
  <div class="container-fluid">


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="template_4_header_menu">
      
        <?php wp_nav_menu('primary'); ?>
       
        </div>

    </div>
  </div>
</nav>
</header>
<header class="template_4_head_mobile">
<nav class="navbar bg-light mobile">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="cloese" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-sharp fa-solid fa-circle-xmark"></i></button>
      </div>
      <div class="offcanvas-body">
      <div class="template_4_header_menu">
      
      <?php wp_nav_menu('primary'); ?>
     
      </div>
      </div>
    </div>
  </div>
</nav>
</header>

    