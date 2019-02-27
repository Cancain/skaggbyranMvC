<?php require APPROOT . '/views/inc/header.php'?>
<div class="wrapper">

<div class="contactBg">
  <div class="contactBox">
  <h1>Boka tid!</h1>
<p class="gray bgsc">Använd formuläret till höger för att boka en tid för möte med oss.</p>
<p class="gray smsc">Använd formuläret nedan för att boka en tid för möte med oss.</p>
<p class="gray">Vänligen observera att din tidsbokning är en förfrågan eller förslag på tid.</p>
<p class="gray">Vi återkopplar med bekräftelse så snart vi kan.</p>
<div class="icon"><i class="fas fa-clipboard-list fa-5x"></i></div>
  </div>
  <div>
  <form class="fullW" action="" autocomplete="off" method="POST">
        <label for="">Namn</label><br />
        <input class="formField" type="text" name="name"
        value="<?php echo $data['name']?>" />

        <label for="">Datum</label><br />
        <input class="formField" type="text" name="date" id="date" 
        value="<?php echo $data['date']?>" />

        <label for="">Email</label><br />
        <input class="formField" type="email" name="email"
        value="<?php echo $data['email']?>"/>

        <label for="">Meddelande</label><br />
        <textarea class="formMsg" name="message" id="" cols="30" rows="8"><?php echo $data['message']?></textarea><br />
        <button class="formBtn" type="submit" name="submit">Skicka</button>
      <div class="errorMsg">
      <?php if(!empty($data['errMsg'])) : ?>
      <span class="warning"><?php echo $data['errMsg'] ?></span>      
      <?php endif; ?>
      </div>
    </form>
</div>
</div>
<script src='<?php echo URLROOT ?>js/js-datepicker/dist/datepicker.min.js'></script>
<script src="<?php echo URLROOT; ?>js/calendar.js"></script>

<?php require APPROOT . '/views/inc/footer.php'?>


