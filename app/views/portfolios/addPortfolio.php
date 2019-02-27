<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<div class="contactBg">
    <div class="contactBox">
    <h1>HTML</h1>
    <p class="graySm">Använd gärna HTML för formattering av er text. <br>
                    De flesta HTML-element består av en start- respektive sluttagg, exempelvis: <br>
                    &lt;b&gt;<b>Bold text</b>&lt;/b&gt; <br> <br>
                    Nedan följer några exempel på vanliga taggar. <br>
                    </p>
&lt;br&gt; - Radbryt <br>
&lt;b&gt; - <b>Bold text</b> <br>
&lt;i&gt; - <i>Italic text</i> <br>
&lt;em&gt; - <em>Emphasized text</em> <br>
&lt;mark&gt; - <mark>Marked text</mark> <br>
&lt;small&gt; - <small>Small text</small> <br>
&lt;del&gt; - <del>Deleted text</del> <br>
&lt;u&gt; - <u>Underline text</u> <br>
    </div>
    <div>
<form  class="fullW" action="" method="post">
        <label for="title">Title</label><br>
        <input  class="formField" type="text" name="title" value="<?php echo $data['title'] ?>">

        <?php if($data['titleErr']): ?>
        <span class="warning">
            <?php if($data['titleErr']) echo $data['titleErr'] ?></span>
        <?php endif ?>

        <label for="body">Content</label><br>
        <textarea class="formMsg" name="body" id="" cols="30" rows="10"><?php echo $data['body'] ?></textarea><br>
        <input class="formBtn" type="submit" value="Lägg till">

        <?php if($data['bodyErr']): ?>
        <span class="warning">
            <?php echo $data['bodyErr'] ?></span>
        <?php endif; ?>

</form>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>