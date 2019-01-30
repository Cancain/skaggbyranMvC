<?php require APPROOT . '/views/inc/header.php'?>

<div class="wrapper">
        <div class="profile">
        <div class="profileBox hideonSm">
        <h1 class="currentUser"><?php echo $data->firstName . ' ' . $data->lastName ?></h1>
        <p class="graySm">Användarnamn: <?php echo $data->userName?></p>
        <p class="graySm">Email: <?php echo $data->email ?></p>
        </div>
        <div class="profileBox hideonLg">
        <h1 class="currentUser"><?php echo $data->firstName . ' ' . $data->lastName ?></h1>
        <p class="graySm">Användarnamn:<br> <?php echo $data->userName?></p> <br>
        <p class="graySm">Email: <br> <?php echo $data->email ?></p>
        </div>
        <div class="profileBox">
        <i class="fas fa-users-cog fa-5x"></i>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'?>