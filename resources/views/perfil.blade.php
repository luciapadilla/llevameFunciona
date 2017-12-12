@extends('layout')
@section('content')
<div id= "perfil-id" class="contenedor-perfil">

         <form class="completar-perfil" action="perfil.php" method="post">

         <div class="formulario-perfil">
         <h1 class="h2-perfil">MI PERFIL</h1>

         <div class="completar-nombre">
         <input style="color: #00f07f" type="text" class="form-completar-perfil" id="nombre-completado" name="nombre" value="" placeholder="Nombre">
         </div>

         <div class="completar-apellido">
         <input style="color: #00f07f; font-weight:bold" type="text" class="form-completar-perfil" id="apellido-completado" name="apellido" value="" placeholder="Apellido">
         </div>


         <div class="subir-foto-usuario">
         <div id="circulo-perfil-foto"><input style="color: grey" type="text" name="foto-usuario" id="subir-foto-usuario" accept="image/png, image/jpeg" onfocus="(this.type='file')" onblur="if(!this.value)this.type='text" placeholder="Subir foto"></div>
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
@endsection
