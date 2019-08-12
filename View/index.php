<?php
$gradZahl = $kurs->getGrad();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Das Traumschiff</title>
</head>
<body>
<header style="width:200px;text-align:center;color:red;background:beige;"><h2>Der Schiffskompass</h2></header>
<div class="wrapper">
    <div class="steuern">
        <label for="steuergrad">Steuere das Ruder</label>
        <input id="steuergrad" name="grad" placeholder="Gradzahl eingeben">
    </div>
    <div class="kurs-aenderung">
    <?php if($gradZahl != $alt): ?>
        <span>Ruder wurde um <?php echo $kurs->getGrad(); ?> gedreht.</span>
    <?php endif; ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $('input#steuergrad').onkeyup(function () {
        var input = [];
        input[$(this).attr('name')] = $(this).val();
        send_post(input);
      });
    });

    function send_post(value){
      $.post({'grad': value}, function (succeed, status) {
        var data = succeed.split('\\;');
        if(status){
          for(var i = 0; data.length > i; i++) {
            if(data[i].search('TRUE') !== -1){
              neuen_kurs_anzeigen(data[i+1])
            }
          }
        }
      });
    }

    function neuen_kurs_anzeigen(data){
      var output = '<p>Ruder wurde um ' + data[1] + ' gedreht.</p>';
      $('.kurs-aenderung').append(output);
    }
</script>
</body>
</html>
