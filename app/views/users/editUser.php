<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
    <div class="fullContent">
    <form class="centerContent" action="" method="post">
    <div class="formBox">
        <label class="graySm" for="userName">Användar-id: </label>
        <input class="grayForm userField" type="text" name="userId" readonly value="<?php echo $data['userId'] ?>">       
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="userName">Användarnamn: </label>
        <input class="userField" type="text" name="userName" value="<?php echo $data['userName'] ?>">
        <?php if (!empty($data['userNameErr'])): ?>
            <span class="warning"><?php echo $data['userNameErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="firstName">Förnamn: </label>
        <input class="userField" type="text" name="firstName" value="<?php echo $data['firstName'] ?>">
        <?php if (!empty($data['firstNameErr'])): ?>
            <span class="warning"><?php echo $data['firstNameErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="lastName">Efternamn: </label>
        <input class="userField" type="text" name="lastName" value="<?php echo $data['lastName'] ?>">
        <?php if (!empty($data['lastNameErr'])): ?>
            <span class="warning"><?php echo $data['lastNameErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="email">Email: </label>
        <input class="userField" type="text" name="email" value="<?php echo $data['email'] ?>">
        <?php if (!empty($data['emailErr'])): ?>
            <span class="warning"><?php echo $data['emailErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="password">Ändra lösenord: </label>
        <input class="userField" type="password" name="password">
        <?php if (!empty($data['passwordErr'])): ?>
            <span class="warning"><?php echo $data['passwordErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm" for="confirmPassword">Bekräfta lösenord: </label>
        <input class="userField" type="password" name="confirmPassword">
        <?php if (!empty($data['confirmPasswordErr'])): ?>
            <span class="warning"><?php echo $data['confirmPasswordErr'] ?></span>
        <?php endif;?>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm">Kan editera</label>
        <input type="checkbox" name="isAdmin" value="true" <?php if($data['isAdmin']) echo 'checked' ?>>
    </div>
    <br>
    <div class="formBox">
        <label class="graySm">Kan ändra användare</label>
        <input type="checkbox" name="superAdmin" value="true" <?php if($data['superAdmin']) echo 'checked' ?>>        
    </div>
    
        <input class="formBtn" type="submit" value="Ändra">
        <input class="formBtn" type="button" value="Gå tillbaka"><br><br>
</form>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>