<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
    

      <!-- Top Container -->
      <section class="content-container">
        <header class="content">
          <h1><?php echo $data['aboutHeadLine'] ?></h1>
          <p><?php echo $data['aboutText'] ?></p>
          <?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>
          <a href="<?php echo URLROOT?>pages/editText/aboutMain">Redigera text</a>
          <?php endif; ?>
        
        </header>
        <div class="contentBox contentBoxA">
          <p><?php echo $data['aboutSubLeft'] ?></p>
          <?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>
          <a href="<?php echo URLROOT?>pages/editText/aboutSubLeft">Redigera text</a>
          <?php endif; ?>
        </div>
        <div class="contentBox contentBoxB">
          <p><?php echo $data['aboutSubRight'] ?></p>
          <?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>
          <a href="<?php echo URLROOT?>pages/editText/aboutSubRight">Redigera text</a>
          <?php endif; ?>
        </div>
      </section>



</div>
<?php require APPROOT . '/views/inc/footer.php'?>