<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aiso de Privacidad</title>

    <style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html{
			scroll-behavior: smooth;
		}

		body{
			background-color: white;
			background-image: url("../../media/imaje/privacidad.jpg");
		}

		

		.container{
			width: 100%;
			height: 100vh;
			box-sizing: border-box;
			background-color: black;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
			grid-template-areas: "icones icones icones icones" "menu menu menu menu" "fundo fundo fundo fundo" "clientes clientes clientes clientes" "servicios servicios servicios servicios"
			"certificados certificados certificados certificados" "actualidad actualidad actualidad actualidad" "footer footer footer footer";
			grid-template-rows: 80px 80px 695px 100px 920px 920px 920px;
			grid-gap: 10px;

		}

		.div-logo-icones{
			background-color: #FFCD01;
			grid-area: icones;
			display: flex;
			transition: 0.7s;
			top: 0;
			position: fixed;
			z-index: 1500;
		}


		.abajo1{
			background-color: #FFCD01;
		}

		

		.div-logo-icones .logo{
			width: 40%;
			height: 100%;
			display: flex;
			justify-content: right;
			align-items: center;
		}

		.div-logo-icones .logo .image-logo{
			width: 20%;
			height: 100%;
		}

		.div-icones{
			width: 60%;
			height: 100%;
			position: relative;
			top: 20px;
		}

		.div-icones .number-escritorio{
			width: 100%;
			height: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: sans-serif;
			font-size: 20px;
			color: #06b6ff;;
		}

		.div-icones .icones{
			width: 100%;
			height: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			top: 10px;
		}

		.div-icones .div-facebook{
			width: 5%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.div-icones .icones .facebook-icon{
			font-size: 20px;
			color: #06b6ff;
		}


		.div-icones .div-facebook:hover{
			color: white;
		}

		.div-icones .icones .facebook-icon:hover{
			color: white;
		}

		.div-icones .div-instagram{
			width: 5%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.div-icones .icones .instagram-icon{
			font-size: 20px;
			color: #06b6ff;
		}


		.div-icones .div-instagram:hover{
			color: white;
		}

		.div-icones .icones .instagram-icon:hover{
			color: white;
		}

		.div-icones .div-whatsapp{
			width: 5%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.div-icones .icones .whatsapp-icon{
			font-size: 20px;
			color: #06b6ff;
		}


		.div-icones .div-whatsapp:hover{
			color: white;
		}

		.div-icones .icones .whatsapp-icon:hover{
			color: white;
		}


		.div-icones .div-email{
			width: 5%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.div-icones .icones .email-icon{
			font-size: 20px;
			color: #06b6ff;
		}


		.div-icones .div-email:hover{
			color: white;
		}

		.div-icones .icones .email-icon:hover{
			color: white;
		}


		.div-menu{
			background-color: #000099;
			grid-area: menu;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.menu{
			width: 100%;
			height: 102px;
			position: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #000099;
			transition: 0.7s;
			top: 100;
			left: 0;
			z-index: 1000;
		}


		.abajomenu{
			background-color: #000099;
		}

		.div-menu .menu li{
			display: inline-block;
			list-style: none;
			margin: 15px;
		}

		.div-menu .menu li a{
			text-decoration: none;
			font-size: 17px;
			font-family: sans-serif;
			color: white;
			cursor: pointer;
		}


		.div-menu .menu li a:hover{
			color: #FFCD01;
		}


		.div-menu .icon-menu{
			font-size: 50px;
			color: white;
			padding-right: 5px;
			display: none;
			cursor: pointer;
		}


		

		.div-formulario{
			width: 100%;
			height: 100%;
			position: absolute;
			background-color: black;
		}


		.div-formulario img{
			width: 100%;
			height: 99%;
			opacity: 0.3;
		}

		.box-text-formulario-aviso{
			width: 100%;
			height: 100vh;
			position: absolute;
			top: 180px;
			/*left: 400px;
			background-color: red;*/
		}



		.box-text-formulario-aviso iframe{
			width: 100%;
			height: 100%;
			border: none;
		}


		


		.div-pop-mensage{
			width: 100%;
			height: 200px;
			position: absolute;
			top:600px;
			display: flex;
			justify-content: right;
			align-items: center;
			z-index: 1000000;
			padding-right: 10px;
		}


		.box-pop-mensages{
			width: 4%;
			height: 100%;
			display: block;
			position: fixed;
			z-index: 5000;
		}

		.pop-whatsapp{
			width: 60px;
			height: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: black;
			border-radius: 50%;
			opacity: 0;
		}


		.pop-whatsapp i{
			font-size: 40px;
			cursor: pointer;
			color: white;
		}


		.pop-email{
			width: 60px;
			height: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: black;
			border-radius: 50%;
			opacity: 0;
			position: relative;
			top: 20px;
		}


		.pop-email i{
			font-size: 35px;
			cursor: pointer;
			color: white;
		}


		.pop-phone{
			width: 60px;
			height: 60px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: black;
			border-radius: 50%;
			opacity: 0;
			position: relative;
			top: 40px;

		}


		.pop-phone i{
			font-size: 40px;
			cursor: pointer;
			color: white;
		}


		.pop-headphones{
			width: 60px;
			height: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: orange;
			border-radius: 50%;
			z-index: 3000;
			position: relative;
			top: 80px;
			opacity: 1;
			overflow: hidden;
		}


		.pop-headphones img{
			width: 120px;
			cursor: pointer;
			color: black;
			z-index: 1000;
			position: relative;
		}


		.pop-close{
			width: 60px;
			height: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			top: 20px;
			border-radius: 50%;
			background-color: orange;
			opacity: 0;
		}


		.pop-close i{
			font-size: 40px;
			cursor: pointer;
			color: black;
		}


		.action-pop-icones{
			opacity: 1;
			transition: 1s;
		}


		.action-pop-icones-close{
			opacity: 0;
		}


		.headphone-close{
			opacity: 0;
		}


		.headphone-open{
			opacity: 1;
		}



		.action-open{
			display: block;
			position: relative;
			top: 75px;
			display: flex;
			justify-content: center;
			align-items: center;
			opacity: 1;
		}


		.action-close{
			opacity: 0;
		}
		

	</style>

</head>


<body>
    
    <div class="container">
		<div class="div-logo-icones">
			<div class="logo">
				<img class="image-logo" src="logo/mie_logo.png">
			</div>

			<div class="div-icones">
				<div class="number-escritorio">664-391-1254</div>

				<div class="icones">
					<div class="div-facebook">
						<a href="#"><i class='fa fa-facebook facebook-icon'></i></a>
					</div>

					<div class="div-instagram">
						<a href="#"><i class="fa fa-instagram instagram-icon" aria-hidden="true"></i></a>
					</div>

					<div class="div-whatsapp">
						<a href="#"><i class="fa fa-whatsapp whatsapp-icon" aria-hidden="true"></i></a>
					</div>

					<div class="div-email">
						<a href="#"><i class="fa fa-envelope email-icon"></i></a>
					</div>
				</div>
			</div>
		</div>


		<div class="div-menu">
				<ul class="menu">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="direccion.html">Direccion Disponibilidad</a></li>
					<li><a href="sobre.html">Sobre Nosotros</a></li>
					<li><a href="tecnologia.html">Nuestra Tecnologia</a></li>
					<li><a href="aviso.html">Aviso de Privacidad</a></li>
					
					<li><a href="contacto.html">Contacto</a></li>
				</ul>

				<i class="fa fa-bars icon-menu"></i>

		</div>


		<div class="div-formulario">

		<img src="imaje/privacidad.jpg">

		<div class="box-text-formulario-aviso">

			<iframe src="imaje/aviso.pdf"></iframe>
		</div>

		

	</div>



	<div class="div-pop-mensage">
				<div class="box-pop-mensages">
					
					<div class="pop-whatsapp">
						<a href="#"><i class="fa fa-whatsapp pop-icon-whatsapp"></i></a>
					</div>

					
					<div class="pop-email">
						<a href="#"><i class="fa fa-envelope pop-icon-email"></i></a>
					</div>


					<div class="pop-phone">
						<a href="#"><i class="fa fa-phone pop-icon-phone"></i></a>
					</div>


					<div class="pop-headphones">
						<img src="imaje/headset.png">
					</div>

					<div class="pop-close">
						<a href="#"><i class="fa fa-close pop-icon-close"></i></a>
					</div>


				</div>
			</div>



	</div>


	

	<!--<div class="div-footer">
		fghgfhfhfghfghf
	</div>-->

</div>

</body>

<script type="text/javascript">
	
    let popHeadphone=document.querySelector(".pop-headphones");
    let popClose=document.querySelector(".pop-close");
    let popWhatsapp=document.querySelector(".pop-whatsapp");
    let popEmail=document.querySelector(".pop-email");
    let popPhone=document.querySelector(".pop-phone");
    
    
    
    popHeadphone.onclick=function() {
            popWhatsapp.style="opacity:1;transition:1s";
            popEmail.style="opacity:1;transition:1s";
            popPhone.style="opacity:1;transition:1s";
            popClose.style="opacity:1;top:80px";
            popHeadphone.style="display:none";
    }
    
    
    popClose.onclick=function(){
        popWhatsapp.style="opacity:0;transition:1s";
        popEmail.style="opacity:0;transition:1s";
        popPhone.style="opacity:0;transition:1s";
        popClose.style="display:none";
        popHeadphone.style="display;flex;justify-content:center;align-items:center;zIndex:7000";	
    }
    </script>
    

</html>