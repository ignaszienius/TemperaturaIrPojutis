<!DOCTYPE html>
<html>
<head>
	<title>Temperatūra ir pojūtis</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row head bg-warning">
		<h1>Temperatūra ir pojūtis</h1>
	</div>
	<div class="row">
		<div class="col-6">
			<table class="table table-inverse">
				  <thead>
				    <tr>
				      <th>Temperatūra</th>
				      <th>Pojūtis</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
				  for ($i= -30; $i <= 35 ; $i = $i +3) { 
				  	if ( $i <= -20) {
				  		echo '<tr><td>' . $i . '</td><td>' . "Labai šalta" . '</td> </tr>';
				  	} elseif ($i <= 5 && -20 < $i) {
				  		echo '<tr><td>' . $i . '</td><td>' . "Šalta" . '</td> </tr>';
				  	} elseif ($i <= 20 && 5 < $i) {
				  		echo '<tr><td>' . $i . '</td><td>' . "Šilta" . '</td> </tr>';
				  	} elseif ($i <= 25 && 20 < $i) {
				  		echo '<tr><td>' . $i . '</td><td>' . "Karšta" . '</td> </tr>';
				  	} elseif ($i > 25) {
				  		echo '<tr><td>' . $i . '</td><td>' . "Labai karšta" . '</td> </tr>';
				  	}
				  }
				  ?>
				  </tbody>
			</table>
		</div>	
		<div class="col-6">
		<ul class="list-group">
		  <li class="list-group-item">Temperatūros pateikiamos kas 3C intervale -30 ... +35</li>
		  <li class="list-group-item">Jeigu temperatūra mažesnė arba lygi -20 - labai šalta</li>
		  <li class="list-group-item">Jeigu temperatūra mažesnė arba lygi +5 - šalta</li>
		  <li class="list-group-item">Jeigu temperatūra mažesnė arba lygi +20 - šilta</li>
		  <li class="list-group-item">Jeigu temperatūra mažesnė arba lygi +25 - karšta</li>
		  <li class="list-group-item">Jeigu temperatūra didesnė +25 - labai karšta</li>
		</ul>
		</div>
		
	</div>

</body>
</html>
