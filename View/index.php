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
        <form action="index.php" method="get">
            <label for="steuergrad">Steuere das Ruder</label>
            <input id="steuergrad" name="grad" placeholder="Gradzahl eingeben">
            <button type="submit">&Auml;ndere Kurs</button>
        </form>
    </div>
    <?php if($gradZahl != $alt): ?>
    <div class="grad">
        <span>Ruder wurde um <?php echo $kurs->getGrad(); ?> gedreht.</span>
    </div>
    <?php endif; ?>
</div>

<script type="text/javascript">

</script>
</body>
</html>
