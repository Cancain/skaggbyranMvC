<?php require APPROOT . '/views/inc/header.php'?>


<?php foreach ($data as $user): ?>
<a href="<?php echo URLROOT ?>users/editUser/<?php echo $user->id ?>"> <h3><?php echo $user->userName ?></h3></a>
<p><?php echo $user->email ?></p>
<p><?php echo $user->firstName ?></p>

<?php endforeach ?>


<?php require APPROOT . '/views/inc/footer.php'?>