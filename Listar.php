<!DOCTYPE html>
<html>
  <head>
	<?php
		$assunto = $_POST['assunto'];
		include "Matriz_norse.inc";
		echo "<title>" .$assunto. "</title>";
	?>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="stylesheet.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
     <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="shortcut icon" href="img/b.jpg" />
  </head>
  <style>
		body {
			background-image: url("img/bg2.jpg");
			background-size: cover;
		}
		#cont{
				background-image: linear-gradient(to bottom right, blue , steelblue);
				
			}
	</style>
  <body>
    <div class="container m-4 p-2 mx-auto" id="cont">
        <br />
		<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
		  <ol class="carousel-indicators">
			
			<?php
				$assunto = $_POST['assunto'];
				$num=0;
				$j=0;
				include "Matriz_norse.inc";
        
				for ($i=0; $i<count($matriz_norse);$i++){
					
					if( $matriz_norse[$i][0] == $assunto ){
						if($j==0){
							echo "<li data-target='#carousel-example-2' data-slide-to='0' class='active'></li>";
							$j++;
						}else{
							echo"<li data-target='#carousel-example-2' data-slide-to='".$j."'></li>";
							$j++;
						}
					}
				}
			
				echo "</ol>
				<div class='carousel-inner' role='listbox'>";
        
				for ($i=0; $i<count($matriz_norse);$i++){
					if ( $matriz_norse[$i][0] == $assunto ){
						if($num==0){
							echo "<div class='carousel-item active'>
									  <div class='view'>
										<img class='d-block w-100' src='" .$matriz_norse[$i][3]. "'
										  alt='" .$matriz_norse[$i][1]. "'>
										  <div class='mask rgba-black-strong'></div>
									  </div>
									  <div class='carousel-caption'>
										<h3 class='h3-responsive' style='text-shadow: 2px 2px 4px #000000;font-family:norseregular;font-size: 50px;'><a href='Detalhes.php?i=$i' style='color:white;'> " .$matriz_norse[$i][1]. "</a></h3>
										<p style='text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;'>" .$matriz_norse[$i][2]. "</p>
									  </div>
								  </div>"; 
							$num++;
						}else{
							echo "<div class='carousel-item'>
									  <div class='view'>
										<img class='d-block w-100' src='" .$matriz_norse[$i][3]. "'
										  alt='" .$matriz_norse[$i][1]. "'>
										  <div class='mask rgba-black-strong'></div>
									  </div>
									  <div class='carousel-caption'>
										<h3 class='h3-responsive' style='text-shadow: 2px 2px 4px #000000;font-family:norseregular;font-size: 50px;'><a href='Detalhes.php?i=$i' style='color:white;'>" .$matriz_norse[$i][1]. "</a></h3>
										<p style='color: white;text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;'>" .$matriz_norse[$i][2]. "</p>
									  </div>
								  </div>";
						}
					}
				}  
			?>
		  </div>
		  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		<br/>
        <input type="submit" style="font-family:'norseregular';" class="btn btn-info" value="Voltar" onclick="history.go(-1)" />
    </div>
  </body>
</html>




