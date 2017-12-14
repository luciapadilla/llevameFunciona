@extends('layout')

@section('content')
<div class="container-feed">

  <div id= "perfil-id" class="contenedor-perfil-web">

           <form class="completar-perfil-web" action="perfil.php" method="post">

           <div class="formulario-perfil">
           <h1 class="h2-perfil">MI PERFIL</h1>

           <div class="completar-nombre">
           <input style="color: #00f07f" type="text" class="form-completar-perfil" id="nombre-completado-web" name="nombre" value="" placeholder="Nombre">
           </div>

           <div class="completar-apellido">
           <input style="color: #00f07f; font-weight:bold" type="text" class="form-completar-perfil" id="apellido-completado-web" name="apellido" value="" placeholder="Apellido">
           </div>


           <div class="subir-foto-usuario">
           <div id="circulo-perfil-foto-web"><input style="color: grey" type="text" name="foto-usuario" id="subir-foto-usuario" accept="image/png, image/jpeg" onfocus="(this.type='file')" onblur="if(!this.value)this.type='text" placeholder="Subir foto"></div>
           </div>

           <div class="boton-editar">
             <button type="button" id="boton-editar-perfil" name="button">Editar perfil</button>
             <a href="{{ url('/cuenta') }}"><img  id="imagen-editar-cuenta" src="imagenes/configuracion-cuenta.png" alt=""></a>
           </div>

           <h1 class="h1-perfil" id="informacion-personal">Información personal</h1>

           <div class="completar-trabajo">
           <img class="iconos-perfil" src="imagenes/icono-trabajo.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="lugar-trabajo" name="trabajo" value="" placeholder="Trabajo en ...">
           </div>

           <div class="completar-nacimiento">
           <img class="iconos-perfil" src="imagenes/icono-nacimiento.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="fecha-nacimiento" name="nacimiento" value="" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text" placeholder="Naci el ...">
           </div>

           <div class="completar-direccion">
           <img class="iconos-perfil" src="imagenes/icono-direccion.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="direccion" name="direccion" value="" placeholder="Vivo en ...">
           </div>

           <div class="completar-lugar-nac">
           <img class="iconos-perfil" src="imagenes/icono-lugar-nac.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="lugar-nac" name="lugar" value="" placeholder="Naci en ...">
           </div>

           <div class="completar-profesion">
           <img class="iconos-perfil" src="imagenes/icono-profesion.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="profesion" name="profesion" value="" placeholder="Soy ...">
           </div>

           <div class="completar-estudie-en">
           <img class="iconos-perfil" src="imagenes/icono-estudie.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="estudie-en" name="estudie" value="" placeholder="Estudie en ...">
           </div>

           <h1 class="h1-perfil" id="interes">Intereses</h1>

           <div class="completar-musica">
           <img class="iconos-perfil" src="imagenes/icono-musica.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="musica" name="musica" value="" placeholder="Mi música preferida es ...">
           </div>

           <div class="completar-hobbies">
           <img class="iconos-perfil" src="imagenes/icono-hobbie.png">
           <input style="color: grey" type="text" class="form-completar-datos" id="hobbies" name="hobbies" value="" placeholder="Mis hobbies son ...">
           </div>

           <button type="submit" name="usuario-datos-guardar">GUARDAR</button>

           </div>

           </form>

           </div>


      <div class="llevame-blanco" >

        <div class="llevame-botones">
           <a  type="button" class="b1" id="llevameButton">LLEVAME</a>
           <a  type="button" class="b2" id="llevarButton">LLEVAR</a>
       </div>

       <form class="buscar-web" action="buscar-mobile.php" method="get" >

          <div class="formulario-buscar-web">
           <div class="origen-buscar">
           <div class="origen-cuadrado-buscar">
           <img src="imagenes/origen.png">
           <input type="text" class="form-buscar" id="origen" name="origen" value="" placeholder="Origen">
           </div>
           </div>

           <div class="destino-buscar">
           <div class="destino-cuadrado-buscar">
           <img src="imagenes/destino.png">
           <input type="text" class="form-buscar" id="destino" name="destino" value="" placeholder="Destino">
           </div>
           </div>



           <div class="horario-buscar">
           <div class="horario-cuadrado-buscar">
               <img src="imagenes/horario.png">
               <input type="text" class="form-buscar" id="horario" name="horario" value=""
               placeholder="Horario" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text">
            </div>
            </div>


          <div class="fecha-buscar">
          <div class="fecha-cuadrado-buscar">
            <img src="imagenes/fecha.png">
            <input type="text" placeholder="Fecha" class="form-buscar" id="fecha" name="fecha" value=""
            onfocus="(this.type='date')" onblur="if(!this.value)this.type='text">
          </div>
          </div>

         <button type="submit" name="buscar-mobile"><i class="fa fa-search"></i></button>
        </div>
      </form>



      <article class="posteo llevame-section">
        <div class="fotoperfil">
          <img class="foto1"src="imagenes/foto-perfil.jpg" alt="">
        </div>

      <div class="info-Feed-misViajes">
          <div class="usuario">
            <p>Francisco Pascal. 12m</p>
          </div>
        <div class="fecha-hora">
            <p class="dia">MARTES 30 SEPT.// 22:40</p>
            <div class="posteo-icono">
                <img src="imagenes/posteo-icono.png" alt="">
            </div>
              <div class="origen">
                <p>Centro Av. 9 De Julio 534</p>
              </div>
              <div class="destino">
                <p>DOT Shopping</p>
              </div>
        </div>
        <div class="adicionales">
            <img src="imagenes/pasajeros.png" alt="">
            <p class="espacio-disponible">2 pasajeros disponibles</p>
            <p class="precio">80$ Por pasajero</p>
        </div>
      </div>

        <div class="opciones-Feed-misViajes">
          <img class="img1" src="imagenes/llevameposteoblanco.png" alt="">
        </div>
      </article>

     {{-- EMPIEZA DIV LLEVAR --}}
      <form class="llevar" id="llevar-section" action="llevar.php" method="post">

          <div class="formulario-llevar" >

          <div class="origen">
           <label for="origen" class="origen-titulo">Salgo de ...</label>

           <div class="origen-cuadrado">
           <img src="imagenes/origen.png">
           <input type="text" class="form-posteo" id="origen" name="origen" value="" placeholder="Origen">
           </div>
           </div>

           <div class="destino">
           <label for="destino" class="destino-titulo">Llevo a ...</label>
           <div class="destino-cuadrado">
           <img src="imagenes/destino.png">
           <input type="text" class="form-posteo" id="destino" name="destino" value="" placeholder="Destino">
           </div>
           </div>

           <div class="horario">
               <label for="horario" class="horario-titulo">A las ...</label>
               <div class="horario-cuadrado">
               <img src="imagenes/horario.png">
               <input type="text" class="form-posteo" id="horario" name="horario" value="" placeholder="Horario" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text">
            </div>
            </div>

            <div class="fecha">
                <label for="fecha" class="fecha-titulo">El día ...</label>
              <div class="fecha-cuadrado">
              <img src="imagenes/fecha.png">
              <input type="text" placeholder="Fecha" class="form-posteo" id="fecha" name="fecha" value="" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text">
            </div>
            </div>

            <div class="pasajeros">
                <label for="pasajeros" class="pasajeros-titulo">Pasajeros ...</label>
              <div class="pasajeros-cuadrado">
              <img src="imagenes/pasajeros.png">
              <input type="number" min="1" max="20" class="form-posteo" id="pasajeros" name="pasajeros" value="" placeholder="Cantidad de asientos">
           </div>
          </div>

          <div class="precio">
              <label for="precio" class="precio-titulo">Precio ...</label>
            <div class="precio-cuadrado">
            <img src="imagenes/pasajeros.png">
            <input type="number" min="1" max="20" class="form-posteo" id="precio" name="precio" value="" placeholder="Precio por pasajero">
         </div>
        </div>

         <button type="submit" name="Llevar">LLEVAR</button>
         </div>
         </form>
{{-- TERMINA form LLEVAR --}}
    </div>
        <div class="container-misViajes">
    <div class="form-misViajes">

      <div class="titulo-misViajes">
        <img src="imagenes/misviajesblne.png" alt="">
        <p>Mis Viajes</p>
      </div>

      <article class="posteo-misViajes">
       <div class="flecha-verde-gris">
              <img src="imagenes/flecha_misviajes.png" alt="">
       </div>
       <div class="info-Feed-misViajes">
       <div class="usuario">
           <p>Juan Perez. 12m</p>
        </div>

        <div class="fecha-hora-misViajes">
            <p class="dia">JUEVES 29 SEPT.// 10:30</p>
            <div class="misviajes-icono">
                <img src="imagenes/posteo-icono.png" alt="">
            </div>
                <div class="origen">
                    <p>Villa Crespo, Malabia 2435</p>
                </div>
                <div class="destino">
                    <p>Villa del Parque, Av. Triunbirato 6780</p>
                </div>
        </div>

        <div class="adicionales-misViajes">
              <img src="imagenes/pasajeros.png" alt="">
              <p class="espacio-disponible">1 asiento disponible</p>
              <p class="precio">120$ Por pasajero</p>
          </div>
      </div>

         <div class="opciones-Feed-misViajes">
                <img class="img1" src="imagenes/cancelarviaje.png" alt="">
          </div>

      </article>
    </div>

      <div class="form-misViajes-Realizados">
       <article class="posteo-misViajes">
         <div class="flecha-verde-gris">
              <img src="imagenes/flecha_misviajesGris.png" alt="">
         </div>
         <div class="info-Feed-misViajes">
              <div  class="usuario">
                <p>Carlos Gimenez. 18 sept.</p>
             </div>

             <div class="fecha-hora-misViajes">
              <p class="dia">MIERCOLES 19 SEPT.// 22:30</p>
              <div class="misviajes-icono">
                  <img src="imagenes/posteo-icono.png" alt="">
              </div>
                <div class="origen">
                  <p>Devoto, Bulnes 435</p>
                </div>
                <div class="destino">
                    <p>Lanus, Av Rivadavia 8094</p>
                </div>
             </div>

             <div class="adicionales-misViajes">
               <img src="imagenes/pasajeros.png" alt="">
               <p class="espacio-disponible">0 asiento disponible</p>
               <p id="adicional-status"class="precio">Viaje Realizado</p>
            </div>
         </div>

         <div class="opciones-Feed-misViajes">
                <img class="img1" src="imagenes/tickVerde.png" alt="">
                <img class="img4" src="imagenes/basurablanca.png" alt="">
        </div>

      </article>
    </div>
</div>

<div class="container-footer-interior">
       <div class="footer-interior">
         <article class="menu-links">
           <ul>
             <p><img src="imagenes/copyright.png" alt="">2017 Llevame</p>
             <a href="incio.php">Inicio</a>
             <a href="quienesSomos.php">Quienes Somos</a>
             <a href="f_q.php">FAQs
             <a href="ayuda.php">Ayuda</a>
             <a href="#">Facebook</a>
             <a href="#">Instagram</a>
             <a href="#">Desarrolladores</a>
             <a href="#">Contacto</a>
           </ul>
         </article>
         <article class="publicidad">
           <a href="#">Publicitar en Llevame</a>
         </article>
       </div>
     </div>

@endsection
