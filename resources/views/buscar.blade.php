@extends('layout')
@section('content')
     <div id= "llevame" class="contenedor-buscar-mobile">

    <form class="buscar-mobile" action="buscar-mobile.php" method="get">

       <div class="formulario-buscar">
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
            <input type="text" class="form-buscar" id="horario" name="horario" value="" placeholder="Horario" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text">
         </div>
         </div>


                     <div class="fecha-buscar">
                     <div class="fecha-cuadrado-buscar">
                     <img src="imagenes/fecha.png">
                     <input type="text" placeholder="Fecha" class="form-buscar" id="fecha" name="fecha" value="" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text">
                     </div>
                     </div>

                <button type="submit" name="buscar-mobile"><span class="boton-span">BUSCAR</span></button>
                       </div>
           </form>
</div>
@endsection