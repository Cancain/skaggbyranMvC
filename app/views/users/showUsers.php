<?php require APPROOT . '/views/inc/header.php'?>

<div class="wrapper">
    <div class="fullContent">
    <?php foreach ($data as $user): ?>
    <a href="<?php echo URLROOT ?>users/editUser/<?php echo $user->id ?>"> <h3 class="userName"><?php echo $user->userName ?></h3></a>
    <p class="graySm"><?php echo $user->email ?></p>
    <p class="graySm"><?php echo $user->firstName ?></p>

    <?php endforeach ?>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>