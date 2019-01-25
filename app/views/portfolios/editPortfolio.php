<?php require APPROOT . '/views/inc/header.php'?>
<form action="" method="post">
    <?php flash('addPortfolioSuccess') ?>
    <div class="formBox">
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $data['title'] ?>">

        <?php if($data['titleErr']): ?>
        <span class="warning">
            <?php if($data['titleErr']) echo $data['titleErr'] ?></span>
        <?php endif ?>
    </div>

    <div class="formBox">
        <label for="body"></label>
        <textarea name="body" id="" cols="30" rows="10"><?php echo $data['body'] ?></textarea>
        <input type="submit" value="Ändra">

        <?php if($data['bodyErr']): ?>
        <span class="warning">
            <?php echo $data['bodyErr'] ?></span>
        <?php endif; ?>
    </div>

</form>


<?php require APPROOT . '/views/inc/footer.php'?>