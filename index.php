<?php 
if ($_POST['refresh'] == "1") {
    header('Location:index.php');exit;
}

function zahlEn($zahl) {
    $zahl = str_replace('.', '', $zahl);
    $zahl = str_replace(',', '.', $zahl);
    return $zahl;
}

?>
<!doctype html>
<html>
<head>
<title>Weight Watchers Punkte-Berechnung</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="pure-min.css">
<script src="jquery/jquery-1.12.3.min.js"></script>
<script src="jquery/jQuery-Validation-Engine-2.6.2/js/jquery.validationEngine.js"></script>
<script src="jquery/jQuery-Validation-Engine-2.6.2/js/languages/jquery.validationEngine-de.js"></script>
<link rel="stylesheet" href="jquery/jQuery-Validation-Engine-2.6.2/css/validationEngine.jquery.css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<style>
body {
    padding: 20px;
    font-family: 'PT Sans', sans-serif;
}
.button-success {
    background-color: rgba(100,200,100,0.8);
}
.button-warning {
    background-color: rgba(2014,112,19,0.5);
}
label {
    font-weight: bold;
}
input.angaben {
    margin-bottom: 10px !important;
}
h1 {
    margin-top: 0;
    font-size: 1.3rem;
}
h2 {
    font-size: 1.2rem;
}
</style>
<script>
$(document).ready(function() {
	$('form.math').validationEngine({
		autoHidePrompt: true,
		autoHideDelay: 1500
	});
});
</script>
</head>
<body>
<h1>Berechnung Weight Watchers Punkte</h1>
<form action="" method="post" class="math pure-form pure-form-stacked">
<label>Etikett-Angaben in g</label>
<input type="text" name="angaben" class="angaben validate[required, custom[number], min[1]" value="<?php echo empty($_POST['angaben']) ? 100 : $_POST['angaben']; ?>">
<label>Fett in %</label>
<input type="text" name="fett" class="angaben validate[required, custom[number]]" value="<?php echo $_POST['fett']?>">
<label>Kalorien</label>
<input type="text" name="cal" class="angaben validate[required, custom[number]]" value="<?php echo $_POST['cal']?>">
<label>Berechnen für g:</label>
<input type="text" name="mathFor" class="angaben validate[custom[number]]" value="<?php echo empty($_POST['mathFor']) ? 10 : $_POST['mathFor']; ?>">
<button class="pure-button button-success" name="calc">Berechne</button> 
<button class="button-warning pure-button" name="refresh" value="1">Neu berechnen</button>
</form>

<?php
###print_r($_POST);
if ($_POST['angaben']) {
    $fett = zahlEn($_POST['fett']);
    $cal = zahlEn($_POST['cal']);
    $angaben = zahlEn($_POST['angaben']);
    $mathFor = zahlEn($_POST['mathFor']);
    $punkte = round(($fett / 9 + $cal / 60) / $angaben,3);
    echo '<h2>Ergebnis</h2>';
    echo '<p>'.number_format($punkte,3, ',', '.').' Punkte/g</p>';
    if (!empty($_POST['mathFor'])) {
        echo number_format(round($punkte * $mathFor,1),1, ',', '.') .' Punkte f&uuml;r '.$_POST['mathFor'].' g</p>';
    }
}
?>
</body>
</html>
