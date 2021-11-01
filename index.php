<?php
$presentTime = new DateTime('now');
$destinationTime = new DateTime('2015-10-21 16:29');
$destYear = $destinationTime->format('Y');
$destMonth = substr($destinationTime->format('F'), 0, 3);
$destDay = $destinationTime->format('d');
$destHour = $destinationTime->format('h');
$destMin = $destinationTime->format('i');
$presYear = $presentTime->format('Y');
$presMonth = substr($presentTime->format('F'), 0, 3);
$presDay = $presentTime->format('d');
$presHour = $presentTime->format('h');
$presMin = $presentTime->format('i');
$diffDate = date_diff($presentTime, $destinationTime);
$diffMin = $diffDate->days * 24 * 60 + $diffDate->i;
$literFuel = $diffMin / 10000;
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Retour vers le futur</title>
</head>
<body>
<h1>Calcul entre deux périodes et nombres de litres pour y accéder</h1>
<div class="container">
	<div class="row">
		<div class="col-2">
			<h3>Month</h3>
			<p><?= strtoupper($destMonth) ?></p>
		</div>
		<div class="col-2">
			<h3>Day</h3>
			<p><?= $destDay ?></p>
		</div>
		<div class="col-2">
			<h3>Year</h3>
			<p><?= $destYear ?></p>
		</div>
		<div class="col-2">
            <h3>AM</h3>
            <p class="circle">
                <i class="far fa-circle"></i>
            </p>
            <h3>PM</h3>
            <p class="circle">
                <i class="fas fa-circle"></i>
            </p>
		</div>
		<div class="col-2">
			<h3>Hour</h3>
			<p><?= $destHour ?></p>
		</div>
		<div class="col-2">
			<h3>Min</h3>
			<p><?= $destMin ?></p>
		</div>
	</div>
    <div class="row"><h2>Destination Time</h2></div>
    <div class="row-separator"></div>
    <div class="row">
        <div class="col-2">
            <h3>Month</h3>
            <p><?= strtoupper($presMonth) ?></p>
        </div>
        <div class="col-2">
            <h3>Day</h3>
            <p><?= $presDay ?></p>
        </div>
        <div class="col-2">
            <h3>Year</h3>
            <p><?= $presYear ?></p>
        </div>
        <div class="col-2">
            <h3>AM</h3>
            <p class="circle">
                <i class="fas fa-circle"></i>
            </p>
            <h3>PM</h3>
            <p class="circle">
                <i class="far fa-circle"></i>
            </p>
        </div>
        <div class="col-2">
            <h3>Hour</h3>
            <p><?= $presHour ?></p>
        </div>
        <div class="col-2">
            <h3>Min</h3>
            <p><?= $presMin ?></p>
        </div>
    </div>
    <div class="row"><h2>Present Time</h2></div>
    <div class="row-separator"></div>
    <div class="row">
        <h4>
            La différence entre les deux dates est de : <?= $diffDate->y ?> Années, <?= $diffDate->m ?> mois,
			<?= $diffDate->d ?> jours, <?= $diffDate->h ?> heures et <?= $diffDate->i ?> minutes.
        </h4>
    </div>
    <div class="row-separator"></div>
    <div class="row">
        <h4>
            Il lui faut <?= number_format($literFuel, 2) ?> litres pour pouvoir accéder à cette date.
        </h4>
    </div>
</div>
</body>
</html>
