<?php require APPROOT . '/views/inc/header.php'?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="" method="post">
    <div class="formBox">
        <label>Användar-id:
            <?php echo $data->id ?></label><br>
    </div>
    <div class="formBox">
        <label for="userName">Användarnamn: </label>
        <input type="text" name="userName" value="<?php echo $data->userName ?>">
    </div>
    <div class="formBox">
        <label for="userName">Förnamn: </label>
        <input type="text" name="userName" value="<?php echo $data->firstName ?>">
    </div>
    <div class="formBox">
        <label for="userName">Efternamn: </label>
        <input type="text" name="userName" value="<?php echo $data->lastName ?>">
    </div>
    <div class="formBox">
        <label for="userName">Email: </label>
        <input type="text" name="userName" value="<?php echo $data->email ?>">
    </div>
    <div class="formBox">
        <label for="userName">Email: </label>
        <input type="text" name="userName" value="<?php echo $data->email ?>">
    </div>
    <div class="formBox">
        <label for="userName">Ändra lösenord: </label>
        <input type="password" name="password">
    </div>
    <div class="formBox">
        <label>Kan editera</label>
        <input type="checkbox" name="isAdmin" <?php if($user->isAdmin) echo 'checked' ?>>
    </div>
    <div class="formBox">
        <label>Kan ändra rättigheter</label>
        <input type="checkbox" name="superAdmin" <?php if($user->superAdmin) echo 'checked' ?>>
    </div>
</form>

<?php require APPROOT . '/views/inc/footer.php'?>