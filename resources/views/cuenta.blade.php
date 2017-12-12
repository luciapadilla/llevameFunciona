@extends('layout')
@section('content')

<div id= "cuenta-id" class="contenedor-cuenta">

           <form class="editar-cuenta" action="cuenta.php" method="post">

           <div class="formulario-cuenta">
           <h1 class="h2-cuenta">MI CUENTA</h1>

           <h1 class="h1-cuenta" id="cambiar-contraseña">Cambiar contraseña</h1>

           <div class="contraseña-actual">
           <input style="color: white" type="password" class="form-editar-cuenta" id="contraseña-actual" name="contraseña-actual" value="" placeholder="Contraseña actual">
           </div>

           <div class="contraseña-nueva">
           <input style="color: white" type="password" class="form-editar-cuenta" id="contraseña-nueva" name="contraseña-nueva" value="" placeholder="Contraseña nueva">
           </div>

           <div class="confirmar-nueva">
           <input style="color: white" type="password" class="form-editar-cuenta" id="confirmar-nueva" name="confirmar-nueva" value="" placeholder="Confirmar contraseña nueva">
           </div>

           <h1 class="h1-cuenta" id="cambiar-mail">Cambiar mail</h1>

           <div class="mail-actual">
           <input style="color: white" type="text" class="form-editar-cuenta" id="mail-actual" name="mail-actual" value="" placeholder="Mail actual">
           </div>

           <div class="mail-nuevo">
           <input style="color: white" type="text" class="form-editar-cuenta" id="mail-nuevo" name="mail-nuevo" value="" placeholder="Mail nuevo">
           </div>

           <div class="confirmar-nuevo">
           <input style="color: white" type="text" class="form-editar-cuenta" id="confirmar-nuevo" name="confirmar-nuevo" value="" placeholder="Confirmar mail nuevo">
           </div>

           <button type="submit" name="cuenta-datos-confirmar">CONFIRMAR</button>

           </div>

           <div class="boton-cerrar-sesion">
           <button type="text" name="cerrar-sesion" id="cerrar-sesion">Cerrar sesión</button>
          </div>

            <div class="boton-cerrar-cuenta">
            <button type="text" name="cerrar-cuenta" id="cerrar-cuenta">Eliminar mi cuenta</button>
           </div>

           </form>

           </div>
@endsection
