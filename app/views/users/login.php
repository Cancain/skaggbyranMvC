<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
    <div class="contactBg">
        <div class="contactBox">
        <h1>Logga in!</h1>
        <p class="gray">Välkommen in i stugvärmen.</p>
        <div class="icon"><i class="fas fa-sign-in-alt fa-5x"></i></div>
        </div>

        <div>
        <form action="" method="post">
            <div class="formBox">
                <label for="user">Användarnamn</label><br>
                <input type="text" class="formField" name="user">        
            </div>
            <div class="formBox">
                <label for="password">Lösenord</label><br>
                <input type="password" class="formField" name="password"><br>
                <input type="submit" class="formBtn" value="Logga in"><br>
            </div>
           <p class="reginfo"> <a href="<?php echo URLROOT ?>users/register">Har du inget konto? Registrera här</a></p>
            <?php if(!empty($data['userErr'])):?>
                <span class="warning"><?php echo $data['userErr'] ?></span>
            <?php endif;?>
        </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>