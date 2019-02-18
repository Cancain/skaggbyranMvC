<?php require APPROOT . '/views/inc/header.php'?>

<div class="wrapper">
    <div class="fullContent pt">
        <div class="centerContent pb">
    <?php foreach ($data['users'] as $user): ?>
    <?php if ($data['currentUser']->superAdmin): ?>
        <a href="<?php echo URLROOT ?>users/editUser/<?php echo $user->id ?>"> <h3 class="userName"><?php echo $user->userName ?></h3></a>
    <?php endif; ?>
    <?php if (!$data['currentUser']->superAdmin): ?>
        <h3 class="userName"><?php echo $user->userName ?></h3>
    <?php endif; ?>
    <p class="graySm"><?php echo $user->email ?></p>
    <p class="graySm"><?php echo $user->firstName ?></p>

    <?php endforeach ?>
    </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>