<meta charset="utf-8">

<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">
<div class="contactBg">
    <div class="contactBox">
    <h1>HTML Taggar</h1>
    <p class="gray">Använd gärna HTML taggar för formattering av er text. <br>
                    Nedan följer några exempel:</p>
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
    <form class="fullW" action="" method="post">
            <input type="hidden" name="name" value="<?php echo $data['name'] ?>">
            <label for="">Titel</label><br>
            <input class="editForm" type="text" name="headLine" value="<?php echo $data['headLine'] ?>"><br>
            <?php if(!empty($data['headLineErr'])):?>
            <span class="warning"><?php echo $data['headLineErr'] ?></span><br>
            <?php endif;?>

            <label for="">Editera</label><br>
            <textarea class="editForm" name="text" rows="10"><?php echo $data['text'] ?></textarea><br>
            <?php if(!empty($data['textErr'])):?>
            <span class="warning"><?php echo $data['textErr'] ?></span><br>
            <?php endif;?>

                <input class="formBtn" type="submit" value="Ändra">
                <button class="formBtn">Avsluta</button>
    </form>
    </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'?>
