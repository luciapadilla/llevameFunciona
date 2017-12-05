window.addEventListener('load',function () {

	var llevarButton = document.querySelector('#llevarButton');
	var llevameButton = document.querySelector('#llevameButton');

	var divLlevame = document.querySelector('.llevame-section');
	var divLlevar = document.querySelector('#llevar-section');
	var buscador = document.querySelector('.buscar-web');

	if (divLlevar) {
		
		console.log(divLlevar)
			divLlevar.style.display = 'none';
			llevarButton.addEventListener('click',function() {
			divLlevame.style.display = 'none';
			buscador.style.display = 'none';
			divLlevar.style.display = 'inline-block';
		});

		console.log(window.innerWidth);

		llevameButton.addEventListener('click',function () {
			divLlevame.style.display = 'inline-block'	
			divLlevar.style.display = 'none';
				
			if (window.innerWidth >= 960){

				if (buscador.style.display == 'none'){
					buscador.style.display = 'inline-block';
				};
		
			}
		});
	}

	var botonIngresar = document.getElementById('botonIngresar');
	var divLogin = document.querySelector('.form-login');
	var divRegistrarse = document.querySelector('div.form-registrarse');
	var botonCrearCuenta = document.querySelector('#crear_cuenta')
	var botonCruz = document.querySelectorAll('.fa.fa-times');

	if(divLogin){
		console.log(botonIngresar);

		divLogin.style.display = 'none';
		divRegistrarse.style.display = 'none';


		botonCruz.forEach(function (elem) {
			elem.addEventListener('click',function () {
				divLogin.style.display = 'none';
				divRegistrarse.style.display = 'none';
			})
		})

		botonIngresar.addEventListener('click',function (event) {
			console.log(botonIngresar);
			event.preventDefault();
			divLogin.style.display = 'inline';

			botonCrearCuenta.addEventListener('click', function () {
				divLogin.style.display = 'none';
				divRegistrarse.style.display = 'inline-block';
				// document.body.addEventListener('click',function (argument) {
				// 	divLogin.style.display = 'none';
				// 	divRegistrarse.style.display = 'none';
				// })
			})
		});


	}

});