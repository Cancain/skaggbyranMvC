<meta charset="utf-8">

<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
    

      <!-- Top Container -->
      <section class="content-container">
        <header class="content">
          <h1><?php echo $data['arbetstraningHeadLine'] ?></h1>
          <p><?php echo $data['arbetstraningText'] ?></p>

<?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>

<a href="<?php echo URLROOT?>pages/editText/arbetstraningMain">Redigera text</a>

<?php endif; ?>
          
        </header>
        <div class="contentBox contentBoxA">
          <p><?php echo $data['arbetstraningSubLeft'] ?></p>

<?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>

<a href="<?php echo URLROOT?>pages/editText/arbetstraningSubLeft">Redigera text</a>

<?php endif; ?>
        </div>
        <div class="contentBox contentBoxB">
          <p> <p><?php echo $data['arbetstraningSubRight'] ?></p></p>

<?php if($data['currentUser'] && $data['currentUser']->isAdmin): ?>
<a href="<?php echo URLROOT?>pages/editText/arbetstraningSubRight">Redigera text</a>
<?php endif; ?>

        </div>

        
      </section>



</div>
<?php require APPROOT . '/views/inc/footer.php'?>