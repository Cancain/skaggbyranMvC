<meta charset="utf-8">

<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<form action="" method="post">
        <input type="hidden" name="name" value="<?php echo $data['name'] ?>">
        <label for="">Titel</label>
        <input type="text" name="headLine" value="<?php echo $data['headLine'] ?>">
        <span class="warning"><?php echo $data['headLineErr'] ?></span>
        <label for="">Editera</label>
        <textarea name="text" cols="30" rows="10"><?php echo $data['text'] ?></textarea>
        <span class="warning"><?php echo $data['textErr'] ?></span>
        <div class="formBox formCenter">
            <input type="submit" value="Ändra">
            <button>Avsluta</button>
</form>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>
