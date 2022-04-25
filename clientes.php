<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion sobre nuestros servicios</title>

    <style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html, body{
			scroll-behavior: smooth;
			background-color: white;
		}


		.container-clientes{
			width: 100%;
			height: 950px;
			background-color: black;
			
		}


		.container-clientes img{
			width: 100%;
			height: 934px;
			opacity: 0.3;
		}


		.texto-servicios{
			width: 100%;
			height: 20%;
			position: relative;
			top: -850px;
			display: flex;
			justify-content: center;
			align-content: center;
		}


		.texto-servicios h1{
			font-family: sans-serif;
			text-transform: uppercase;
			color: white;
		}


		/*.box-images-clientes{
			width: 100%;
			height: 80%;
			position: relative;
			top: -1000px;
			display: flex;
			justify-content: center;
			align-items: center;
		}*/


		/*.animation-slide{
			width: 35%;
			height: 90%;
			display: flex;
			justify-content: center;
			align-items: center;
			box-shadow: 0px 0px 4px white;
			position: relative;
			
			border-radius: 5px;
			border: 5px red solid;
		}


		.box-animation-clientes{
			width: 400%;
			height: 100%;
			display: flex;
			background-color: black;
			box-shadow: 0px 0px 5px white;
			position: relative;
			display: flex;

		}




		.left-icon i{
			font-size: 140px;
			color: white;
			cursor: pointer;
		}


		.right-icon i{
			font-size: 140px;
			color: white;
			cursor: pointer;
		}


		.box-dedicado{
			position: relative;
			width:100%;
			height: 100%;
			background-color: black;
			position: relative;
			left: 0px;

			}


		.box-dedicado img{
			width: 100%;
			height: 100%;
		}


		.texto-internet-dedicado{
			width: 100%;
			position: relative;
			top: -500px;
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.texto-internet-dedicado h1{
			color: white;
			font-family: sans-serif;
		}


		.detalhes-dedicado{
			width: 100%;
			position: relative;
			top: -450px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.detalhes-dedicado p{
			color: white;
			width: 50%;
			text-align: justify;
			font-size: 18px;
		}

		.box-simetrico{
			position: relative;
			width: 100%;
			height: 100%;
			background-color: black;
			position: relative;
			left: 0px;
		}



		.texto-internet-simetrico{
			width: 100%;
			position: relative;
			top: -500px;
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.texto-internet-simetrico h1{
			color: white;
			font-family: sans-serif;
		}


		.detalhes-simetrico{
			width: 100%;
			position: relative;
			top: -450px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.detalhes-simetrico p{
			color: white;
			width: 50%;
			text-align: justify;
			font-size: 18px;
		}


		.box-simetrico img{
			width: 100%;
			height: 100%;
		}


		.box-nube{
			position: relative;
			width: 100%;
			height: 100%;
			background-color: black;
			position: relative;
			left: 0px;
		}


		.box-nube img{
			width: 100%;
			height: 100%;
		}



		.texto-internet-nube{
			width: 100%;
			position: relative;
			top: -500px;
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.texto-internet-nube h1{
			color: white;
			font-family: sans-serif;
		}


		.detalhes-nube{
			width: 100%;
			position: relative;
			top: -450px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.detalhes-nube p{
			color: white;
			width: 50%;
			text-align: justify;
			font-size: 18px;
		}


		.box-consultoria{
			position: relative;
			width: 100%;
			height: 100%;
			background-color: black;
			position: relative;
			left: 0px;
		}


		.box-consultoria img{
			width: 100%;
			height: 100%;
		}


		.texto-internet-consultoria{
			width: 100%;
			position: relative;
			top: -500px;
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.texto-internet-consultoria h1{
			color: white;
			font-family: sans-serif;
		}


		.detalhes-consultoria{
			width: 100%;
			position: relative;
			top: -450px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.detalhes-consultoria p{
			color: white;
			width: 50%;
			text-align: justify;
			font-size: 18px;
		}*/


		.all-animation{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			top: -950px;
		}


		/*.animation-images{
			width: 25%;
			overflow: hidden;
			box-shadow: 0px 0px 4px white;
			
		}*/


		.animation-images{
			width: 100%;
			overflow: hidden;
			box-shadow: 0px 0px 4px white;
			
		}


		/*.box-images-animation{
			width: 400%;
			height: 650px;
			display: flex;

		}*/


		.box-images-animation{
			width: 100%;
			height: 650px;
			display: flex;
			background-color: black;

		}


		.box-images-animation>div img:hover{
			transform: scale(1.5);
			transition: 0.9s;
		}


		.box-images-animation>div{
			width: 100%;
			height: 100%;
			position: relative;
			left: 0px;
		}


		.box-images-animation>div img{
			width: 100%;
			height: 100%;
			position: relative;
		}


		.box-images-animation>div h1{
			position: relative;
			top: -550px;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: sans-serif;
			color: white;
		}


		.box-images-animation>div p{
			position: relative;
			top: -450px;
			color: white;
			font-size: 15px;
			font-family: sans-serif;
			font-weight: normal;
			width: 65%;
			text-align: justify;
		}


		.detalhes-dedicado{
			display: flex;
			justify-content: center;
			align-items: center;
		}


		/*.left-icon i{
			font-size: 140px;
			color: white;
			cursor: pointer;
		}


		.right-icon i{
			font-size: 140px;
			color: white;
			cursor: pointer;
			position: relative;
			top: 200px;
		}*/

	</style>

</head>


<body>
    
    <div class="container-clientes">

		<img src="imaje/image-building.jpg">

		<div class="texto-servicios">
			<h1>más informaciones SOBRE NUESTROS SERVICIOS</h1>
		</div>

		

		<!--<div class="box-images-clientes">
			
			<div class="left-icon">
				<i class="fa fa-angle-left iconleft"></i>
			</div>

			<div class="animation-slide">

			<div class="box-animation-clientes">
				
				<div class="box-dedicado">
					<img src="imaje/internetdedicado.jpg">

					<div class="texto-internet-dedicado">
						<h1>INTERNET DEDICADO</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							El internet dedicado consiste en un servicio de enlace de internet dedicado para cada cliente,
							esto significa que no se comparte con otros usuarios y que opera en forma continua.
							Esto garantiza un enlace mas confiable y en muchos casos simétrico, es decir, misma
							velocidad de subida y de bajada. Es bien sabido que a ciertas horas del día el tráfico
							compartido se congela debido a la gran cantidad de otros clientes conectados al mismo
							enlace, por lo que con un enlace dedicado, nos ahorraremos estos inconvenientes y
							podremos navegar a la misma velocidad garantizada por el proveedor.
						</p>
					</div>
				</div>

				<div class="box-simetrico">
					<img src="imaje/internetsimetrico.jpg">

					<div class="texto-internet-dedicado">
						<h1>INTERNET SIMETRICO</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							Una conexión simétrica de Internet es aquella que tiene la capacidad de enviar y recibir
							información al mismo tiempo y a la misma velocidad, sin afectar a la eficacia de la señal de
							conexión: tanto la descarga como la subida de datos se realizan a la misma velocidad, sin
							que esto interfiera entre ellas.
							Este tipo de conexión permite el uso de varios dispositivos en simultáneo con excelente
							calidad en las videoconferencias, conexión a juegos online para jugar en tiempo real,
							streaming de audio y video sin cortes y uso intensivo de la nube, pudiendo subir gran
							cantidad de documentos, fotografías, e incluso vídeos, además de publicar todo tipo de
							material a las redes sociales disfrutando al máximo de Internet con la misma velocidad de
							subida y de descarga.
						</p>
					</div>

				</div>


				<div class="box-nube">
					<img src="imaje/nube.jpg">

					<div class="texto-internet-dedicado">
						<h1>SERVICIO EN LA NUBE</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							Los servicios de nube son infraestructuras, plataformas o sistemas de software que alojan los proveedores externos y que se ponen a disposición de los usuarios a través de Internet. 

							Facilitan el flujo de datos de los usuarios a través de Internet, desde los clientes frontend (p. ej., los servidores, las tabletas y las computadoras portátiles o de escritorio; es decir, cualquier sistema en el extremo del usuario) hasta los sistemas de los proveedores, y viceversa. Para acceder a los servicios de nube, los usuarios solo necesitan una computadora, un sistema operativo, y conexión a Internet o una red privada virtual (VPN).
						</p>
					</div>

				</div>

				<div class="box-consultoria">
					<img src="imaje/consultoria.jpg" class="icon-left">


					<div class="texto-internet-dedicado">
						<h1>CONSULTORIA</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							La consultoría ayuda a investigar y analizar el mercado y el producto de la empresa o servicio. A partir de este informe se obtienen datos para ayudar a identificar los problemas, minimizar los riegos, respaldar las decisiones y comprobar si el negocio funciona correctamente
						</p>
					</div>

				</div>

			</div>

		</div>-->


		<div class="all-animation">
		<div class="left-icon">
				<i class="fa fa-angle-left iconleft"></i>
			</div>

			<div class="animation-images">
				<div class="box-images-animation">



					<div class="image-1 image">
				
					<img src="imaje/internetdedicado.jpg">

					<div class="texto-internet-dedicado">
						<h1>INTERNET DEDICADO</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							El internet dedicado consiste en un servicio de enlace de internet dedicado para cada cliente,
							esto significa que no se comparte con otros usuarios y que opera en forma continua.
							Esto garantiza un enlace mas confiable y en muchos casos simétrico, es decir, misma
							velocidad de subida y de bajada. Es bien sabido que a ciertas horas del día el tráfico
							compartido se congela debido a la gran cantidad de otros clientes conectados al mismo
							enlace, por lo que con un enlace dedicado, nos ahorraremos estos inconvenientes y
							podremos navegar a la misma velocidad garantizada por el proveedor.
						</p>
					</div>
				</div>
				





					<div class="image-2 image">
						<img src="imaje/internetsimetrico.jpg">

					<div class="texto-internet-dedicado">
						<h1>INTERNET SIMETRICO</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							Una conexión simétrica de Internet es aquella que tiene la capacidad de enviar y recibir
							información al mismo tiempo y a la misma velocidad, sin afectar a la eficacia de la señal de
							conexión: tanto la descarga como la subida de datos se realizan a la misma velocidad, sin
							que esto interfiera entre ellas.
							Este tipo de conexión permite el uso de varios dispositivos en simultáneo con excelente
							calidad en las videoconferencias, conexión a juegos online para jugar en tiempo real,
							streaming de audio y video sin cortes y uso intensivo de la nube, pudiendo subir gran
							cantidad de documentos, fotografías, e incluso vídeos, además de publicar todo tipo de
							material a las redes sociales disfrutando al máximo de Internet con la misma velocidad de
							subida y de descarga.
						</p>
					</div>
					</div>






					<div class="image-3  image">
						<img src="imaje/nube.jpg">

					<div class="texto-internet-dedicado">
						<h1>SERVICIO EN LA NUBE</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							Los servicios de nube son infraestructuras, plataformas o sistemas de software que alojan los proveedores externos y que se ponen a disposición de los usuarios a través de Internet. 

							Facilitan el flujo de datos de los usuarios a través de Internet, desde los clientes frontend (p. ej., los servidores, las tabletas y las computadoras portátiles o de escritorio; es decir, cualquier sistema en el extremo del usuario) hasta los sistemas de los proveedores, y viceversa. Para acceder a los servicios de nube, los usuarios solo necesitan una computadora, un sistema operativo, y conexión a Internet o una red privada virtual (VPN).
						</p>
					</div>
					</div>





					<div class="image-4 image">
						<img src="imaje/consultoria.jpg" class="icon-left">


					<div class="texto-internet-dedicado">
						<h1>CONSULTORIA</h1>
					</div>

					<div class="detalhes-dedicado">
						<p>
							La consultoría ayuda a investigar y analizar el mercado y el producto de la empresa o servicio. A partir de este informe se obtienen datos para ayudar a identificar los problemas, minimizar los riegos, respaldar las decisiones y comprobar si el negocio funciona correctamente
						</p>
					</div>
					</div>


				</div>
			</div>

			<div class="right-icon">
				<i class="fa fa-angle-right iconright"></i>
			</div>

		</div>




	</div>

	</div>

</body>

/*let iconLeft=document.querySelector(".iconleft");
	let iconRight=document.querySelector(".iconright");
	let image1=document.querySelector(".image-1");
	let image2=document.querySelector(".image-2");
	let image3=document.querySelector(".image-3");
	let image4=document.querySelector(".image-4");
	let image=document.querySelectorAll(".image");
	let boxImages=document.querySelector(".box-images-animation");
	


	iconLeft.onclick=function(){
		image1.style="left:0px";
		//boxConsultoria.style="left:-400px";
	}



iconRight.onclick=function(){
	for (i=0; i<image.length; i++) {

		if (image1.style="left:0px"){
			image1.style="left:-1000px";
			image2.style="left:-475px";
		}else if(image1.style="left:0px") {
	}
}*/
</html>