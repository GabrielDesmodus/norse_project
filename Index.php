<!DOCTYPE html>
<html>
  <head>
     <title>Mitologia Nórdica</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="stylesheet" type="text/css" href="stylesheet.css">
	 <link rel="shortcut icon" href="img/a.jpg" />
	 <script>
		$(document).ready(function() {
			$('.mdb-select').materialSelect();
		});
	 </script>
	 <style>
		body {
			background-image: url("img/bg.jpg");
			background-size: cover;
		}
		div {
			background-color: lemonchiffon;
		}
	 </style>
  </head>
  <body>
    <div class="container border m-4 p-2 mx-auto">
        <h1 class='p-2 m-2 bg-success text-white text-center animated fadeIn' style="font-family:'norseregular';">Mitologia Nórdica</h1>
        <br/>
        <form action="Listar.php" method="post">
            <h3 class="p-2 m-2" style="font-family:'norseregular';">Assunto:</h3>
            <select class="browser-default custom-select custom-select-lg mb-3" name="assunto" required>
			    <option value="" disabled selected>Selecione...</option>
                <option value="Mundos">Mundos</option>
                <option value="Deuses">Deuses</option>
                <option value="Völuspá">Völuspá</option>
            </select>
            <p class="p-2 m-2" style="font-family:'norseregular';"><input type="submit"  class="btn btn-success" value="Procurar" /></p>
        </form> 
    </div>
  </body>
</html>





