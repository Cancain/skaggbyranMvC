<meta charset="utf-8">
<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<?php if($data['user'] && $data['user']->isAdmin): ?>

<div class="right hideonSm"><a href="<?php echo URLROOT?>portfolios/add/"><button class="formBtn">Lägg till</button></a></div>
<div class="centerContent hideonLg"><a href="<?php echo URLROOT?>portfolios/add/"><button class="formBtn">Lägg till</button></a></div>

<?php endif; ?>
<?php flash('addPortfolioSuccess') ?>

<?php foreach ($data['portfolio'] as $post): ?>

 
<section class="portfolioContainer">
    <header class="content">
        <h1><?php echo utf8_encode($post->title); ?></h1>
       <p class="smaller"><?php echo utf8_encode($post->createdAt); ?></p>
        <p><?php echo utf8_encode($post->body); ?></p>
        <?php if($data['user'] && $data['user']->isAdmin): ?>
        
<div class="right">
<a href="<?php echo URLROOT?>portfolios/edit/<?php echo $post->id ?>">Ändra</a> |
<a href="<?php echo URLROOT?>portfolios/remove/<?php echo $post->id ?>">Ta bort</a>
</div>

<?php endif; ?>
</header>
</section>



<?php endforeach; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'?>