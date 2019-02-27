<section id="navBgLg">
    <div class="grid">
    <div class="userBox">
      <?php if($_SESSION):?>
      
        <ul id="userMenu">
          <a href="<?php echo URLROOT ?>users/profile">
            <li class="navH"><?php echo $_SESSION['userName']?></li>
          </a>
          <a href="<?php echo URLROOT ?>users/logout">
            <li id="logOutBtn" class="navH">Logga ut</li>
          </a>
          </ul>
      <?php endif; ?>

        
      </div>

      <!-- Logo -->
      <div class="box1"><a href="<?php echo URLROOT?>pages/index"><img id="logo" src="<?php echo URLROOT; ?>/img/1x/sblogo.png" alt="" /></a></div>

      <!-- Menu for large screens -->
      <div class="box2">
        <nav id="navLg">
          <ul id="menuLg">
            <a href="<?php echo URLROOT?>pages/index">
              <li id="homeBtnLg" class="navH">Hem</li>
            </a>
            <a href="<?php echo URLROOT?>pages/about">
              <li id="aboutBtnLg" class="navH">
                Om<span id="spacing"> </span>Oss
              </li>
            </a>
            <li id="contactBtnLg" class="navH">Kontakt</li>
            <a href="<?php echo URLROOT ?>portfolios/portfolio">
              <li id="portfolioBtnLg" class="navH">Portfolio</li>
            </a>
            <a href="<?php echo URLROOT?>pages/arbetstraning">
              <li id="workBtnLg" class="navH">Arbetsträning</li>
            </a>
          </ul>
        </nav>

        <!-- Menu for small screens -->
        <nav id="navSm">
          <a href="#">
            <img id="hambBtn" src="<?php echo URLROOT; ?>/img/1x/HambMenu.png" alt="" />
          </a>
        </nav>
      </div>
    </div>
  </section>
  <div class="hidden" id="dropDownMenuSm">
    <ul id="menuSm">
      <a href="index.php">
        <li id="homeBtnSm" class="navV">Hem</li>
      </a>
      <li id="userBtnSm" class="">Användare</li>
      <div id="dropDownMenuUserSm" class="hidden">
        <?php if(!$_SESSION): ?>
        <ul class="subMenu">
          <a href="<?php echo URLROOT?>users/login">
            <li class="subItem"><span class="subText">Logga in</span></li>
          </a>
          <a href="<?php echo URLROOT?>users/register">
            <li class="subItem"><span class="subText">Registrera</span></li>
          </a>
        </ul>
        <?php else: ?>
        <ul class="subMenu">
          <a href="<?php echo URLROOT?>users/profile">
            <li class="subItem"><span class="subText">Din profil</span></li>
          </a>
          <a href="<?php echo URLROOT?>users/logout">
            <li class="subItem"><span class="subText">Logga ut</span></li>
          </a>
        </ul>
        <?php endif; ?>
      </div>
      <a href="<?php echo URLROOT?>pages/about">
        <li id="aboutBtnSm" class="navV">Om Oss</li>
      </a>
      <li id="contactBtnSm" class="">Kontakt</li>
      <div id="dropDownMenuContactSm" class="hidden">
        <ul class="subMenu">
          <a href="<?php echo URLROOT?>pages/book">
            <li class="subItem"><span class="subText">Boka tid</span></li>
          </a>
          <a href="<?php echo URLROOT?>pages/contact">
            <li class="subItem"><span class="subText">Skicka meddelande</span></li>
          </a>
        </ul>
      </div>
      <a href="<?php echo URLROOT?>portfolios/portfolio">
        <li id="portfolioBtnSm" class="navV">Portfolio</li>
      </a>
      <a href="<?php echo URLROOT?>pages/arbetstraning">
        <li id="workBtnSm" class="navV">Arbetsträning</li>
      </a>
    </ul>
  </div>

  <!-- Dropdownmenu for contacts (large screen) -->
  <div id="dropDownMenuContact" class="hidden">
    <ul>
      <a href="<?php echo URLROOT?>pages/book">
        <li>Boka tid</li>
      </a>
      <a href="<?php echo URLROOT?>pages/contact">
        <li>Skicka meddelande</li>
      </a></header>
</section>
    </ul>
  </div>