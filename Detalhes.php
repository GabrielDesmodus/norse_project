<!DOCTYPE html>
<html>
  <head>
	 <?php
        $i = $_GET['i'];
        include "Matriz_norse.inc";
		echo "<title>".$matriz_norse[$i][1]."</title>";
	 ?>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="stylesheet.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="shortcut icon" href="img/c.jpg" />
	   <style>
			body {
				background-image: url("img/bg3.jpg");
				background-size: cover;
			}
			#cont{
				background-image: url("img/bg4.jpg");
				background-size: cover;
			}
		</style>
  </head>
  <body>
    <div class="container m-4 p-2 mx-auto" id="cont">
    <br />
		
    <?php
        $i = $_GET['i'];
        include "Matriz_norse.inc";
        echo "<div class='container w-75'>
              <div class='row'>
                <div class='col text-center'> 
                    <p class='font-weight-bold text-uppercase'><h1 style='font-family:norseregular;font-size: 60px;'>". $matriz_norse[$i][1] ."</h1> </p>
                    <img class='img-thumbnail' src='". $matriz_norse[$i][3] ."' alt='". $matriz_norse[$i][1] ."' /> 
                    <p class='text-justify' style='font-size: 20px;'>". $matriz_norse[$i][4] ."</p>
                </div>
              </div>
            </div>";
    ?>
	<br/><br/>
    <input type="submit" value="Voltar" class="btn btn-secondary" style="font-family:'norseregular';" onclick="history.go(-1)" />    
    </div>
  </body>
</html>



