<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
	<title>  Cómo Crear Claves Aleatorias usando PHP de forma Fácil :: Urian Viera</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cargando.css">
</head>
  <style>
  	span{
  		width: 100%;
  		padding: 15px 25px;
  		border-radius: 5px;
  		font-weight: 900;
  		font-size: 60px;
  		text-align: center;
  		color: green;
  		background-color: #cecece;
  	}
      h3{
          font-size: 35px;
          font-weight: 900;
          color: #ffa900;
          margin-top: 150px;
      }
  </style>
<body>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera </h5>
    </div>
</nav>


<div class="container mt-7">
<br><br>
<br><br>


<h3 class="text-center">
	Cómo Crear Claves Aleatorias usando PHP de forma Fácil
</h3>
<hr>


<?php
/**Demo 1***/
$logitudpass = 5;
$pass = substr( md5(microtime()), 1, $logitudpass);


/**Demo 2**/
function generateClave($length = 8) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$miClave  = generateClave();


/**Demo 3 **/
$longitudClave = "10";
  $miString = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789";
  $clave = "";
  for($i=0; $i<=$longitudClave; $i++) {
    $clave .= substr($miString,rand(0,62),1);
  }


?>


 <div class="row text-center">
    <div class="col-12 col-md-12">
    	<span>
			<?php 
        //echo $pass;

        //echo $miClave;

        echo $clave;

      ?>
		</span>
    </div>
  </div>


</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

	
</body>
</html>