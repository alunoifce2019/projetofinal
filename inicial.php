<?php
echo "
  <!--==========================
  Header
  ============================-->
  <header id='header' class='fixed-top'>
    <div class='container'>
      <div class='logo float-left'>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class='text-light'><a href='#header'><span>GlFashion</span></a></h1> -->
        <a href='#intro' class='scrollto'><img src='img/logo.png' alt='' class='img-fluid'></a>
      </div>
      <nav class='main-nav float-right d-none d-lg-block'>
        <ul>
          <li class='active'><a href='#intro'>Inicial</a></li>
          <li><a href='#about'>Quem Somos</a></li>
          <li><a href='#services'>Produtos</a></li>
          <li><a href='#portfolio'>Time</a></li>
          
          <li class='drop-down'><a href=''>Drop Down</a>
            <ul>
              <li><a href='#'>Drop Down 1</a></li>
              <li class='drop-down'><a href='#'>Drop Down 2</a>
                <ul>
                  <li><a href='#'>Deep Drop Down 1</a></li>
                  <li><a href='#'>Deep Drop Down 2</a></li>
                  <li><a href='#'>Deep Drop Down 3</a></li>
                  <li><a href='#'>Deep Drop Down 4</a></li>
                  <li><a href='#'>Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href='#'>Drop Down 3</a></li>
              <li><a href='#'>Drop Down 4</a></li>
              <li><a href='#'>Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href='#contact'>Contatos</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <!--==========================
    Intro Section
  ============================-->
  <section id='intro' class='clearfix'>
    <div class='container'>
      <div class='intro-img'>
        <img src='img/intro-img.svg' alt='' class='img-fluid'>
      </div>
      <div class='intro-info'>
        <h2>Aqui você<br><span>é fashion</span></h2>
        <div>
          <a href='#about' class='btn-get-started scrollto'>Get Started</a>
          <a href='#services' class='btn-services scrollto'>Our Services</a>
        </div>
      </div>
    </div>
  </section><!-- #intro -->
  ";
  ?>