<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center"><?= $message;?></h1>
		<h1>Los alumnos</h1>
		<h2><? if (isset($alumnos)) {
			var_dump($alumnos);
		}?></h2>
		<h1>El alumno número 1</h1>
		<h3 id="nombre"></h3>
		<input type="text" id="id_alumno">
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#id_alumno").keyup(function(){
					var id_alumno = $(this).val();
					console.log('el valor de id es ' + id_alumno);
					$.ajax({
						url: 'index.php/alumnos/getAlumno',
						type: 'POST',
						dataType: 'json',
						data: {id: id_alumno},
					})
					.done(function(data) {
						console.dir(data);
						$('#nombre').html(data[0].nombre);
						console.log("success");
					})
					.fail(function() {
						$('#nombre').html("No se encuentra");
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});
				});
			});
		</script>
	</body>
</html>