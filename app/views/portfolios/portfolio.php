<meta charset="utf-8">
<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<?php if($data['user'] && $data['user']->isAdmin): ?>
<a href="<?php echo URLROOT?>portfolios/add/"><button class="formBtn">Lägg till</button></a>

<?php endif; ?>

<?php foreach ($data['portfolio'] as $post): ?>

 
<section class="portfolioContainer">
    <header class="content">
        <h1><?php echo utf8_encode($post->title); ?></h1>
       <p class="smaller"><?php echo utf8_encode($post->createdAt); ?></p>
        <p><?php echo utf8_encode($post->body); ?></p>
        <?php if($data['user'] && $data['user']->isAdmin): ?>
<a href="<?php echo URLROOT?>portfolios/remove/<?php echo $post->id ?>"><button class="formBtn">Ta bort</button></a>
<a href="<?php echo URLROOT?>portfolios/edit/<?php echo $post->id ?>"><button class="formBtn">Ändra</button></a>

<?php endif; ?>
    </header>

</section>

<?php endforeach; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'?>