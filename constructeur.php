<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" initial-scale="1" charset="utf-8">
	<title>liste des constructeur</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="aliment.css">

</head>
<body class="doudou" style="background: url(image/c6.jpg);">
	<header>
		<div>
			<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collspase" data-target="#monMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> mon site</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="construction.php">accueil</a></li>
					<li><a href="terrain.php">terrain disponible</a></li>
					<li><a href="financeur.php">financeurs</a></li>
					<li><a href="vendeur.php">vendeurs</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right"><a  href="#"><span class="glyphicon glyphicon-log-in">login</span></a></ul>
			</div>
			
		</div>
	</nav>
		</div>
	</header><br><br><br><br>
	<div class="container">
		<marquee bgcolor="white"><h1 style="color: blue">	CHOISIS TON CONSTRUCTEUR ICI !!!</h1></marquee><br><br>
		<div class="papou">
			<button type="submit" onclick="func1()" style="background-color: yellow;">MR MARDOCHEE</button>
			<button type="submit" onclick="func2()" style="background-color: yellow;" >MR KOUAKOU</button>
			<button type="submit" onclick="func3()" style="background-color: yellow;">MR OSCAR SANDE</button>
			<button type="submit" onclick="func4()" style="background-color: yellow;">MR LUCKYBOY</button>
			<button type="submit" onclick="func5()" style="background-color: yellow;">MR KACOU KRA</button>
		</div><br><br>
		<div id="change" >
			<div class="row">
			<div class="ma" class="col-sm-4 col-md-4 col-lg-4" >
					<img src="image/m11.png" id="im1">
					<p ><strong><h4 id="p1"> MR MARDOCHEE</h4></strong></p>
			</div>
			<div class="ma" class="col-sm-4 col-md-4 col-lg-4">
					<img src="image/m2.png" id="im2">
					<p><strong><h4 id="p2">MR KOUAKOU</h4></strong></p>
			</div>
			<div class="ma" class="col-sm-4 col-md-4 col-lg-4">
				<img src="image/m3.png" id="im3">
					<p><strong><h4 id="p3">MR LUCKY BOY</h4>
					</strong> </p>
			</div>
				
			
		</div>
		
		</div><br><br><br>
		<p><h1 style="color: yellow"> merci de contacter ici un constructeur</h1></p>
		
	</div>
		
	<script type="text/javascript">

		var image1 = document.getElementById('im1');
		var image2 = document.getElementById('im2');
		var image3 = document.getElementById('im3');
		var p1= document.getElementById('p1');
		var p2= document.getElementById('p2');
		var p3= document.getElementById('p3');
		
		function func1(){
			image1.src="image/mardo1.jpeg";
			image2.src="image/mardo2.jpeg";
			image3.src="image/mardo3.jpeg";
			p1.innerHTML="les carots a votre disposition";
			p2.innerHTML="les choux a votre disposition";
			p3.innerHTML="les tomates a votre disposition";
			
		}
		function func2(){
			image1.src="image/kou1.jpg";
			image2.src="image/kou2.jpg";
			image3.src="image/kou3.jpg";
			p1.innerHTML="la premiere construction de mr KOUAKOU";
			p2.innerHTML="la deuxieme construction de mr KOUAKOU";
			p3.innerHTML="la troisieme construction de mr KOUAKOU";
			
		}
		function func3(){
			image1.src="coq.jpg";
			image2.src="lapin.jpg";
			image3.src="im3.jpg";
			p1.innerHTML="les vrais coqs a votre disposition";
			p2.innerHTML="de jolis lapins a votre disposition";
			p3.innerHTML="les pintades a votre disposition";
			
		}
		function func5(){
			image1.src="serpent1.jpg";
			image2.src="serpent2.jpg";
			image3.src="serpent3.jpg";
			p1.innerHTML="les concombres a votre disposition";
			p2.innerHTML="les concombres a votre disposition";
			p3.innerHTML="les concombres a votre disposition";
			
		}
	</script>

</body>
</html>