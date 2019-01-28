<?php require APPROOT . '/views/inc/header.php'?>

<div class="wrapper">
    <div class="fullContent">
        <div class="centerContent">
    <?php foreach ($data as $user): ?>
    <?php if ($_SESSION['superAdmin']): ?>
        <a href="<?php echo URLROOT ?>users/editUser/<?php echo $user->id ?>"> <h3 class="userName"><?php echo $user->userName ?></h3></a>
    <?php endif; ?>
    <?php if (!$_SESSION['superAdmin']): ?>
        <h3 class="userName"><?php echo $user->userName ?></h3>
    <?php endif; ?>
    <p class="graySm"><?php echo $user->email ?></p>
    <p class="graySm"><?php echo $user->firstName ?></p>

    <?php endforeach ?>
    </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>