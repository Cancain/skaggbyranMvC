<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
    <div class="centerContent">
<form action="" method="post">
    <?php flash('addPortfolioSuccess') ?>
    <div class="formBox formCenter">
        <label for="title">Title</label>
        <input class="formField" type="text" name="title" value="<?php echo $data['title'] ?>">

        <?php if($data['titleErr']): ?>
        <span class="warning">
            <?php if($data['titleErr']) echo $data['titleErr'] ?></span>
        <?php endif ?>
    </div>

    <div class="formBox">
        <label for="body">Content</label>
        <textarea class="formMsg" name="body" id="" cols="30" rows="10"><?php echo $data['body'] ?></textarea>
        <input class="formBtn" type="submit" value="Ändra">

        <?php if($data['bodyErr']): ?>
        <span class="warning">
            <?php echo $data['bodyErr'] ?></span>
        <?php endif; ?>
    </div>

</form>
</div>

</div>
<?php require APPROOT . '/views/inc/footer.php'?>