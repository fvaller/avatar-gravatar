<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gravatar</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			body {
				background: #EFEEEE;
				padding: 20px;
			}
			.container {
				background: #FFF;
				padding: 20px;
				border-radius: 5px;
			}		
		</style>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<h1>Gravatar</h1>
			<h4>Obter imagem de Usuários pelo serviço Gravata</h4>
			<hr>

			<div class="row">
				<div class="col-sm-6">

					<form action="" class="form-inline">
						<div class="form-group">
							<label for=""></label>
							<input type="email" class="form-control input-lg" id="email" size="40" placeholder="Informe email">	
						</div>
						<button class="btn btn-primary btn-lg">Obter</button>
					</form>					
				</div>
				<div class="col-sm-6 text-center" id="avatar">
					
				</div>
			</div>

			

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
			$(document).on('submit', 'form', function(event) {
				event.preventDefault();
				var email = $('#email').val();
				$.get('avatar.php', {email:email}, function(data) {
					$('#avatar').html(data);
				});
			});
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
	</body>
</html>