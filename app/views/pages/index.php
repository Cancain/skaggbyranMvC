<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<div class="centerContent mt"><?php flash('loginSuccess'); ?></div>

      <!-- Top Container -->
      <section class="top-container">

        <header class="showcase">
          <h1 class="mainTitle">Välkommen till Skäggbyrån i Gävle</h1>
          <p>
            Vi levererar helhetslösningar för moderna hemsidor med stor variation av innehåll, som skräddarsydda filmer, illustrationer, smarta funktioner och effektiv design. Vi klarar det för att vi är en bred webbyrå.
          </p>
          <a href="#" class="btn">Läs Mer</a>
        </header>
        <div class="top-box top-box-a">
          <h4>Här finns vi!</h4>
          <p class="bigger">Gävle</p>
          <a target="_blank" href="https://www.google.com/maps/place/Atlasgatan+8,+802+86+G%C3%A4vle/@60.6777403,17.1761226,19z/data=!3m1!4b1!4m5!3m4!1s0x4660c68f3b24d4bb:0x38951b3d8d50f24c!8m2!3d60.6777403!4d17.1766698" class="btn">Hitta hit!</a>
        </div>
        <div class="top-box top-box-b">
          <h4>Följ oss!</h4>
          <div class="social">
          <ul>
            <li>
            <a href="https://sv-se.facebook.com/skaggbyran/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
            </li>
            <li>
            <a href="https://www.instagram.com/skaggbyran/?hl=sv" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            </li>
            <li>
            <a href="https://www.youtube.com/channel/UCZIEICe8S2xMw5l5rDf5X3A/featured" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
            </li>
          </ul>
        </div>  
        <div class="socialSm">
        <a href="https://sv-se.facebook.com/skaggbyran/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
        <a href="https://www.instagram.com/skaggbyran/?hl=sv" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
        <a href="https://www.youtube.com/channel/UCZIEICe8S2xMw5l5rDf5X3A/featured" target="_blank"><i class="fab fa-youtube fa-3x"></i></a>

        </div>
          
        </div>
      </section>

      <!-- Boxes Section  -->
      <section class="boxes">
        <!-- <div class="box">  -->
          <a href="<?php echo URLROOT ?>pages/arbetstraning" class="box"><i class="fas fa-briefcase fa-4x"></i>
          <p class="desc">Arbetsträning</p></a>
        <!-- </div> -->
          <div class="boximg">
        <img src="<?php echo URLROOT ?>img/code1.jpeg" alt="">
          </div>
        <!-- <div class="box"> -->
          <a href="<?php echo URLROOT ?>portfolios/portfolio" class="box"><i class="fas fa-archive fa-4x"></i>
          <p class="desc">Projekt</p></a>
        <!-- </div> -->
        <div class="boximg">
          <img src="<?php echo URLROOT ?>img/code2.jpeg" alt="">
            </div>
        <!-- <div class="box"> -->
          <a href="<?php echo URLROOT ?>pages/about" class="box"><i class="fas fa-info-circle fa-4x"></i>
          <p class="desc">Om oss</p></a>
        <!-- </div> -->
        <div class="boximg">
          <img src="<?php echo URLROOT ?>img/code3.jpg" alt="">
            </div>
        </section>
    

</div>
    <!-- Wrapper Ends -->
<?php require APPROOT . '/views/inc/footer.php'?>
