<style>
    #map {
        position: relative;
        width: 100%;
        height: 650px;
        border: 1px solid gray;
    }
</style>

Mapa Caldas

<div id="map"></div>

{{-- data --}}
<div id="muni" data-user=@json($muni)></div>
<div id="patients" data-user=@json($patients)></div>
{{-- <div id="user_data" data-user=@json($aspD)></div> --}}


<button class='flotante'  title="Opciones" id="flotante" onclick="menuMap()">
    <i class="fas fa-fw fa-cog rotate" style="margin-bottom:10px;" > </i>
</button>

{{-- {{$patients}} --}}

<form method="get" @if(Auth::user()->rol === 'Investigador') 
                        action="{{ route('grafico') }}"
                   @else
                        action="{{ route('graficoTwo') }}"
                   @endif>

<div class= "menuMapa" id="menuC">
    <div class='txtM'>

        <div class="title_M"> MENU MAPA </div>
        <hr>

        <div class="subt_M">
            Selecciona las subregiones a graficar
        </div>
        <div class="contet_M">
            <input type="radio" name="region" class='ali' value="st" id="subT" onclick="mapa(8)" required><label class='no_mar' for="subT">Seleccionar todo</label><br>
            <input type="radio" name="region" class='ali' value="mag" id="sub1" onclick="mapa(2)" required><label class='no_mar' for="sub1">Magdalena Caldense</label><br>
            <input type="radio" name="region" class='ali' value="alor" id="sub2" onclick="mapa(3)" required><label class='no_mar' for="sub2">Alto oriente</label><br>
            <input type="radio" name="region" class='ali' value="nor" id="sub3" onclick="mapa(4)" required><label class='no_mar' for="sub3">Norte</label><br>
            <input type="radio" name="region" class='ali' value="alocc" id="sub4" onclick="mapa(5)" required><label class='no_mar' for="sub4">Alto occidente</label><br>
            <input type="radio" name="region" class='ali' value="bjocc" id="sub5" onclick="mapa(6)" required><label class='no_mar' for="sub5">Bajo occidente</label><br>
            <input type="radio" name="region" class='ali' value="cs" id="sub6" onclick="mapa(7)" required><label class='no_mar' for="sub6">Centro sur</label>
        </div>
        <div class="subt_M">
            Aspecto a graficar
        </div>
        <div class="contet_M">
            <input type="radio" name="as"  id='socio' class='ali' onchange="javascript:showContent()" required><label for="socio"><b>Sociodemográfico</b></label><br>
            <div id="algode" class="opcion_gr">
                <div class="herm"><input type="radio" name="op_1" value="p1"  id='op_1_1' class='ali' required><label for="op_1_1" class='no_mar' >Distribución de edad por ciudad</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p2"  id='op_1_2' class='ali' required><label for="op_1_2" class='no_mar' >Estado civil</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p3"  id='op_1_3' class='ali' required><label for="op_1_3" class='no_mar' >Distribución de estado civil por gereno</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p4"  id='op_1_4' class='ali' required><label for="op_1_4" class='no_mar' >Estado civil por edad</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p5"  id='op_1_5' class='ali' required><label for="op_1_5" class='no_mar' >Nivel educativo</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p6"  id='op_1_6' class='ali' required><label for="op_1_6" class='no_mar' >Afiliación al sistema de seguridad social</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p7"  id='op_1_7' class='ali' required><label for="op_1_7" class='no_mar' >Estrato socioeconómico</label></div>
                <div class="herm"><input type="radio" name="op_1" value="p8"  id='op_1_8' class='ali' required><label for="op_1_8" class='no_mar' >Ingresos </label></div>
                <div class="herm"><input type="radio" name="op_1" value="p9"  id='op_1_9' class='ali' required><label for="op_1_9" class='no_mar' >Fuente de ingreso</label></div>
                {{-- <div class="herm"><input type="radio" name="op_1" value="p10"  id='op_1_10' class='ali' required><label for="op_1_10" class='no_mar' >Ocupación </label></div> --}}
            </div>
            <input type="radio" name="as" id='entS'class='ali' onchange="javascript:showContent2()" required><label for="entS"><b>Entorno Social</b></label><br>
            <div id="algode2" class="opcion_gr">

                <b>Condiciones del vecindario</b>
                <div class="herm"><input type="radio" name="op_1"  value="p11" id='op_2_1' class='ali' required><label for="op_2_1" class='no_mar' >Entorno construido</label></div>
                <div class="herm"><input type="radio" name="op_1"  value="p12" id='op_2_2' class='ali' required><label for="op_2_2" class='no_mar' >Problemas en el vecindario</label></div>
                {{-- <input type="radio" name="op_1"  id='op_2_3' class='ali' required><label for="op_2_3">opcion 3</label><br> --}}
                {{-- <input type="radio" name="op_1"  id='op_2_4' class='ali' required><label for="op_2_4">opcion 4</label><br> --}}
                <div class="herm"><input type="radio" name="op_1"  value="p13" id='op_2_5' class='ali' required><label for="op_2_5" class='no_mar' >Alcance funcional</label></div>
                <div class="herm"><input type="radio" name="op_1"  value="p14" id='op_2_6' class='ali' required><label for="op_2_6" class='no_mar' >Equilibrio</label></div>
                {{-- <input type="radio" name="op_1"  id='op_2_7' class='ali' required><label for="op_2_7">opcion 7</label><br> --}}
                {{-- <input type="radio" name="op_1"  id='op_2_8' class='ali' required><label for="op_2_8">opcion 8</label><br> --}}
                {{-- <input type="radio" name="op_1"  id='op_2_9' class='ali' required><label for="op_2_9">opcion 9</label><br> --}}
                <div class="herm"><input type="radio" name="op_1"  value="p15" id='op_2_10' class='ali' required><label for="op_2_10" class='no_mar' >Puntaje E-SPPB</label></div>
                {{-- <input type="radio" name="op_1"  id='op_2_11' class='ali' required><label for="op_2_11">opcion 11</label><br> --}}
                
                <b>Determinantes conductuales</b>
                {{-- <input type="radio" name="op_1"  id='op_2_12' class='ali' required><label for="op_2_12">Hábitos</label><br> --}}
                <div class="herm"><input type="radio" name="op_1"  value="p16" id='op_2_13' class='ali' required><label for="op_2_13" class='no_mar' >Fumadores por genero</label></div>
                {{-- <input type="radio" name="op_1"  id='op_2_14' ><label for="op_2_14">Fumadores por ??</label><br> --}}
                <div class="herm"><input type="radio" name="op_1"  value="p17" id='op_2_15' class='ali' required><label for="op_2_15" class='no_mar' >Consumo de licor por genero</label></div>
                <div class="herm"><input type="radio" name="op_1"  value="p18" id='op_2_16' class='ali' required><label for="op_2_16" class='no_mar' >Actividad física</label></div><br>


            </div>
        </div>

        

        {{-- <div class="contet_M"> --}}
            <button type="submit"  class="btn btn-success" style="max-height: 38px; overflow: hidden;" 
            {{-- data-toggle="modal" data-target="#modalGra" --}}
            >Aceptar</button>
        {{-- </div> --}}
    </div>
</div>
</form>

<!-- Map script  -->

<script src={{asset("/js/map.js")}}></script>
<script type="text/javascript">
    var band_1=true, band_2=true;
    var element_1 = document.getElementById("algode");
    var element_2 = document.getElementById("algode2");
    function showContent() {
        
        if (band_1) {
            element_1.style.display='block';
            band_1=false
            element_2.style.display='none';
            band_2=true
        }
        else {
            element_1.style.display='none';
            band_1=true
            element_2.style.display='block';
            band_2=false
        }
    }
    function showContent2() {
        
        if (band_2) {
            element_2.style.display='block';
            band_2=false
            element_1.style.display='none';
            band_1=true
        }
        else {
            element_2.style.display='none';
            band_2=true
            element_1.style.display='block';
            band_1=false
        }
    }
</script>