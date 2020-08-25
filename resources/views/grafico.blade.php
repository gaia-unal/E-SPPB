<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!-- Custom styles for this template-->
        <link href={{asset("/css/all.min.css")}} rel="stylesheet">
        <link href={{asset("/css/sb-admin-2.min.css")}} rel="stylesheet">

        <!-- Custom styles for table -->
        <link href={{asset("/css/dataTables.bootstrap4.min.css")}} rel="stylesheet">

        <link href={{asset("/css/style.css")}} rel="stylesheet">
        <link rel="icon"  href={{asset("/img/fav7.ico")}}>

        <script src={{asset("/highcharts/highcharts.js")}}></script>
        <script src={{asset("/highcharts/variable-pie.js")}}></script>
        <script src={{asset("/highcharts/exporting.js")}}></script>
        <script src={{asset("/highcharts/export-data.js")}}></script>
        {{-- <script src="/highcharts/accessibility.js"></script> --}}

        <script src={{asset("/highcharts/data.js")}}></script>
        <script src={{asset("/highcharts/drilldown.js")}}></script>

        <title >E-SPPB+</title>
    </head>

<body id="page-top">
<div id="wrapper">
<div class="container-fluid">
<div class="row">
    <!-- Bar column Chart -->
    <div class="col-xl-12 col-lg-12">
        <center>
            <!-- Bar row Chart -->
            <div class="card  mb-4">
                <div class="pt-2 pr-1">
                    <center>
                        @if ($grafico==1)
                        <div id="gra_1" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==2)
                        <div id="gra_2" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==3)
                        <div id="gra_3" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==4)
                        <div id="gra_4" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==5)
                        <div id="gra_5" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==6)
                        <div id="gra_6" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==7)
                        <div id="gra_7" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==8)
                        <div id="gra_8" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==9)
                        <div id="gra_9" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==10)
                        <div id="gra_10" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==11)
                        <div id="gra_11" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==12)
                        <div id="gra_12" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==13)
                        <div id="gra_13" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==14)
                        <div id="gra_14" style="height: 500px; max-width:1295px;"></div>
                        
                        @else
                        @if ($grafico==15)
                        <div id="gra_15" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==16)
                        <div id="gra_16" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==17)
                        <div id="gra_17" style="height: 500px; max-width:1295px;"></div>
                        @else
                        @if ($grafico==18)
                        <div id="gra_18" style="height: 500px; max-width:1295px;"></div>
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                        @endif
                    </center>
                </div>
            </div>
        </center>
    </div>
</div>

<center>
<a  href="{{ route('map') }}">
    <button  class="btn btn-blue" >Regresar</button> 
</a> 
</center>

<br>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up" style=" line-height: 40px;" aria-labelledby="descriptionClose"></i>
    <div id="descriptionClose" style="display: none;">Este icono permite ir al encabezado del sitio web</div>
</a>

</div>
</div>


<script type="text/javascript">

//-------------------------------------GRAFICO 1---------------------------------------------------------

    if(document.getElementById('gra_1')){
    var user = <?php echo json_encode($consulta_1 ?? '') ?>;var ciudades =[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],
    [0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],
    [0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]];for (let i in user) {if (user[i]['city']=='Filadelfia') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[0][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[0][1]++;}else if (user[i]['age']>=80) {ciudades[0][2]++;}}else if (user[i]['city']=='La Merced') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[1][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[1][1]++;}else if (user[i]['age']>=80) {ciudades[1][2]++;}}else if (user[i]['city']=='Marmato') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[2][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[2][1]++;}else if (user[i]['age']>=80) {ciudades[2][2]++;}}else if (user[i]['city']=='Riosucio') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[3][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[3][1]++;}else if (user[i]['age']>=80) {ciudades[3][2]++;}}else if (user[i]['city']=='SUPIA') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[4][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[4][1]++;}else if (user[i]['age']>=80) {ciudades[4][2]++;}}else if (user[i]['city']=='Manzanares') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[5][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[5][1]++;}else if (user[i]['age']>=80) {ciudades[5][2]++;}}else if (user[i]['city']=='Marquetalia') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[6][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[6][1]++;}else if (user[i]['age']>=80) {ciudades[6][2]++;}}else if (user[i]['city']=='Marulanda') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[7][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[7][1]++;}else if (user[i]['age']>=80) {ciudades[7][2]++;}}else if (user[i]['city']=='Pensilvania') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[8][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[8][1]++;}else if (user[i]['age']>=80) {ciudades[8][2]++;}}else if (user[i]['city']=='Anserma') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[9][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[9][1]++;}else if (user[i]['age']>=80) {ciudades[9][2]++;}}else if (user[i]['city']=='Belalcázar') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[10][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[10][1]++;}else if (user[i]['age']>=80) {ciudades[10][2]++;}}else if (user[i]['city']=='Risaralda') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[11][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[11][1]++;}else if (user[i]['age']>=80) {ciudades[11][2]++;}}else if (user[i]['city']=='San José') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[12][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[12][1]++;}else if (user[i]['age']>=80) {ciudades[12][2]++;}}else if (user[i]['city']=='Viterbo') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[13][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[13][1]++;}else if (user[i]['age']>=80) {ciudades[13][2]++;}}else if (user[i]['city']=='Chinchiná') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[14][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[14][1]++;}else if (user[i]['age']>=80) {ciudades[14][2]++;}}else if (user[i]['city']=='Manizales') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[15][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[15][1]++;}else if (user[i]['age']>=80) {ciudades[15][2]++;}}else if (user[i]['city']=='Neira') {if (user[i]['age']>=55 && user[i]['age']<=64) {
    ciudades[16][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[16][1]++;}else if (user[i]['age']>=80) {
    ciudades[16][2]++;}}else if (user[i]['city']=='Palestina') {if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[17][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[17][1]++;}else if (user[i]['age']>=80) {ciudades[17][2]++;}}else if (user[i]['city']=='Villamaría') {if (user[i]['age']>=55 && user[i]['age']<=64) {
    ciudades[18][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[18][1]++;}else if (user[i]['age']>=80) {
    ciudades[18][2]++;}}else if (user[i]['city']=='La Dorada') {if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[19][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[19][1]++;}else if (user[i]['age']>=80) {ciudades[19][2]++;}}else if (user[i]['city']=='Norcasia') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[20][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[20][1]++;}else if (user[i]['age']>=80) {ciudades[20][2]++;}}else if (user[i]['city']=='Samaná') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[21][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {
    ciudades[21][1]++;}else if (user[i]['age']>=80) {ciudades[21][2]++;}}else if (user[i]['city']=='Victoria') {
    if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[22][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[22][1]++;
    }else if (user[i]['age']>=80) {ciudades[22][2]++;}}else if (user[i]['city']=='Aguadas') {if (user[i]['age']>=55 && user[i]['age']<=64) {ciudades[23][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[23][1]++;
    }else if (user[i]['age']>=80) {ciudades[23][2]++;}}else if (user[i]['city']=='Aranzazu') {if (user[i]['age']>=55 && user[i]['age']<=64) {
    ciudades[24][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[24][1]++;}else if (user[i]['age']>=80) {
    ciudades[24][2]++;}}else if (user[i]['city']=='Pácora') {if (user[i]['age']>=55 && user[i]['age']<=64) {
    ciudades[25][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[25][1]++;}else if (user[i]['age']>=80) {
    ciudades[25][2]++;}}else if (user[i]['city']=='Salamina') {if (user[i]['age']>=55 && user[i]['age']<=64) {
    ciudades[26][0]++;}else if (user[i]['age']>=65 && user[i]['age']<=79) {ciudades[26][1]++;
    }else if (user[i]['age']>=80) {ciudades[26][2]++;}}}var totales=[];for (let i = 0; i < ciudades.length; i++) {
    totales[i]=ciudades[i][0]+ciudades[i][1]+ciudades[i][2];}var sumT=0;for (let i = 0; i < totales.length; i++) {
    sumT+=totales[i];}Highcharts.chart('gra_1', {chart: {backgroundColor: 'white',type: 'column'},title: {
    useHTML: true,text: 'Edad',style: {color: 'white','background-color': 'royalblue',padding: '5px 30% 5px 30%',zIndex:'0',borderRadius:'5px 5px',
    font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
    }},lang: {contextButtonTitle: 'Menu',},navigation: {buttonOptions: {height: 37,width: 30,symbolSize: 18,
    symbolX: 15,symbolY: 18,y:-4,x:5,vertical:'top',symbolStroke: 'white',symbolStrokeWidth: 3,theme: {
    fill: 'royalblue',r: 5,states: {hover: {fill: '#1cc88a',cursor: 'pointer'},select: {fill: '#1cc88a'}}}}},xAxis: {
    type: 'category'},yAxis: {title: {text: 'Total de edades en cada rango'}},legend: {enabled: false},
    plotOptions: {series: {borderWidth: 0,dataLabels: {enabled: true,format: '{point.z:.1f}%'}}},tooltip: {
    headerFormat: '',pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
    'Cantidad: <b>{point.y}</b><br/>' +'Porcentaje: <b>{point.z: .1f}%</b><br/>'},series: [{name: "Ciudades",
    colorByPoint: true,data: [{name: "Filadelfia",color: '#2f54b4',y: totales[0],z:totales[0]/sumT*100,drilldown: "Filadelfia"},{
    name: "La Merced",color: '#2f54b4',y: totales[1],z:totales[1]/sumT*100,drilldown: "La Merced"},{
    name: "Marmato",y: totales[2],z:totales[2]/sumT*100,drilldown: "Marmato"},{
    name: "Riosucio",color: '#2f54b4',y: totales[3],z:totales[3]/sumT*100,drilldown: "Riosucio"},{
    name: "Supía",color: '#2f54b4',y: totales[4],z:totales[4]/sumT*100,drilldown: "Supía"},{
    name: "Manzanares",color: '#2f54b4',y: totales[5],z:totales[5]/sumT*100,drilldown: "Manzanares"},{
    name: "Marquetalia",color: '#2f54b4',y: totales[6],z:totales[6]/sumT*100,drilldown: "Marquetalia"},{
    name: "Marulanda",color: '#2f54b4',y: totales[7],z:totales[7]/sumT*100,drilldown: "Marulanda"},{
    name: "Pensilvania",color: '#2f54b4',y: totales[8],z:totales[8]/sumT*100,drilldown: "Pensilvania"},{
    name: "Anserma",color: '#2f54b4',y: totales[9],z:totales[9]/sumT*100,drilldown: "Anserma"},{
    name: "Belalcázar",color: '#2f54b4',y: totales[10],z:totales[10]/sumT*100,drilldown: "Belalcázar"},{
    name: "Risaralda",color: '#2f54b4',y: totales[11],z:totales[11]/sumT*100,drilldown: "Risaralda"},{
    name: "San José",color: '#2f54b4',y: totales[12],z:totales[12]/sumT*100,drilldown: "San José"},{
    name: "Viterbo",color: '#2f54b4',y: totales[13],z:totales[13]/sumT*100,drilldown: "Viterbo"},{
    name: "Chinchiná",color: '#2f54b4',y: totales[14],z:totales[14]/sumT*100,drilldown: "Chinchiná"},{
    name: "Manizales",color: '#2f54b4',y: totales[15],z:totales[15]/sumT*100,drilldown: "Manizales"},{
    name: "Neira",color: '#2f54b4',y: totales[16],z:totales[16]/sumT*100, drilldown: "Neira"},{
    name: "Palestina",color: '#2f54b4',y: totales[17],z:totales[17]/sumT*100,drilldown: "Palestina"},{
    name: "Villamaría",color: '#2f54b4',y: totales[18],z:totales[18]/sumT*100,drilldown: "Villamaría"},{
    name: "La Dorada",color: '#2f54b4',y: totales[19],z:totales[19]/sumT*100,drilldown: "La Dorada"},{
    name: "Norcasia",color: '#2f54b4',y: totales[20],z:totales[20]/sumT*100,drilldown: "Norcasia"},{
    name: "Samaná",color: '#2f54b4',y: totales[21],z:totales[21]/sumT*100,drilldown: "Samaná"},{
    name: "Victoria",color: '#2f54b4',y: totales[22],z:totales[22]/sumT*100,drilldown: "Victoria"},{
    name: "Aguadas",color: '#2f54b4',y: totales[23],z:totales[23]/sumT*100,drilldown: "Aguadas"},{
    name: "Aranzazu",color: '#2f54b4',y: totales[24],z:totales[24]/sumT*100,drilldown: "Aranzazu"},{
    name: "Pácora",color: '#2f54b4',y: totales[25],z:totales[25]/sumT*100,drilldown: "Pácora"},{
    name: "Salamina",color: '#2f54b4',y: totales[26],z:totales[26]/sumT*100,drilldown: "Salamina"}]}],
    drilldown: {series: [{id: 'Filadelfia',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[0][0],z:ciudades[0][0]/totales[0]*100,color: '#466fda',drilldown: "PrevejezF"},
    {name: "Vejez (65-79 años)",y: ciudades[0][1],z:ciudades[0][1]/totales[0]*100,color: '#1e4fd1',drilldown: "VejezF"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[0][2],z:ciudades[0][2]/totales[0]*100,color: '#103bae',drilldown: "AncianidadF"}
    ]}, {id: 'La Merced',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[1][0],z:ciudades[1][0]/totales[1]*100,color: '#466fda',drilldown: "PrevejezLM"},
    {name: "Vejez (65-79 años)",y: ciudades[1][1],z:ciudades[1][1]/totales[1]*100,color: '#1e4fd1',drilldown: "VejezLM"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[1][2],z:ciudades[1][2]/totales[1]*100,color: '#103bae',drilldown: "AncianidadLM"}]},{
    id: 'Marmato',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[2][0],z:ciudades[2][0]/totales[2]*100,color: '#466fda',drilldown: "PrevejezMAR"},
    {name: "Vejez (65-79 años)",y: ciudades[2][1],z:ciudades[2][1]/totales[2]*100,color: '#1e4fd1',drilldown: "VejezMAR"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[2][2],z:ciudades[2][2]/totales[2]*100,color: '#103bae',drilldown: "AncianidadMAR"}]},{
    id: 'Riosucio',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[3][0],z:ciudades[3][0]/totales[3]*100,color: '#466fda',drilldown: "PrevejezRIO"},
    {name: "Vejez (65-79 años)",y: ciudades[3][1],z:ciudades[3][1]/totales[3]*100,color: '#1e4fd1',drilldown: "VejezRIO"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[3][2],z:ciudades[3][2]/totales[3]*100,color: '#103bae',drilldown: "AncianidadRIO"}]},{
    id: 'SUPIA',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[4][0],z:ciudades[4][0]/totales[4]*100,color: '#466fda',drilldown: "PrevejezSU"},
    {name: "Vejez (65-79 años)",y: ciudades[4][1],z:ciudades[4][1]/totales[4]*100,color: '#1e4fd1',drilldown: "VejezSU"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[4][2],z:ciudades[4][2]/totales[4]*100,color: '#103bae',drilldown: "AncianidadSU"}
    ]},{id: 'Manzanares',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[5][0],z:ciudades[5][0]/totales[5]*100,color: '#466fda',drilldown: "PrevejezMAN"},
    {name: "Vejez (65-79 años)",y: ciudades[5][1],z:ciudades[5][1]/totales[5]*100,color: '#1e4fd1',drilldown: "VejezMAN"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[5][2],z:ciudades[5][2]/totales[5]*100,color: '#103bae',drilldown: "AncianidadMAN"}
    ]},{id: 'Marquetalia',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[6][0],z:ciudades[6][0]/totales[6]*100,color: '#466fda',drilldown: "PrevejezMARQ"},
    {name: "Vejez (65-79 años)",y: ciudades[6][1],z:ciudades[6][1]/totales[6]*100,color: '#1e4fd1',drilldown: "VejezMARQ"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[6][2],z:ciudades[6][2]/totales[6]*100,color: '#103bae',drilldown: "AncianidadMARQ"}
    ]},{id: 'Marulanda',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[7][0],z:ciudades[7][0]/totales[7]*100,color: '#466fda',drilldown: "PrevejezMARU"},
    {name: "Vejez (65-79 años)",y: ciudades[7][1],z:ciudades[7][1]/totales[7]*100,color: '#1e4fd1',drilldown: "VejezMARU"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[7][2],z:ciudades[7][2]/totales[7]*100,color: '#103bae',drilldown: "AncianidadMARU"}]},{
    id: 'Pensilvania',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[8][0],z:ciudades[8][0]/totales[8]*100,color: '#466fda',drilldown: "PrevejezPEN"},
    {name: "Vejez (65-79 años)",y: ciudades[8][1],z:ciudades[8][1]/totales[8]*100,color: '#1e4fd1',drilldown: "VejezPEN"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[8][2],z:ciudades[8][2]/totales[9]*100,color: '#103bae',drilldown: "AncianidadPEN"}]},{
    id: 'Anserma',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[9][0],z:ciudades[9][0]/totales[9]*100,color: '#466fda',drilldown: "PrevejezANS"},
    {name: "Vejez (65-79 años)",y: ciudades[9][1],z:ciudades[9][1]/totales[9]*100,color: '#1e4fd1',drilldown: "VejezANS"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[9][2],z:ciudades[9][2]/totales[9]*100,color: '#103bae',drilldown: "AncianidadANS"}]},{
    id: 'Belalcázar',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[10][0],z:ciudades[10][0]/totales[10]*100,color: '#466fda',drilldown: "PrevejezBEL"},
    {name: "Vejez (65-79 años)",y: ciudades[10][1],z:ciudades[10][1]/totales[10]*100,color: '#1e4fd1',drilldown: "VejezBEL"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[10][2],z:ciudades[10][2]/totales[10]*100,color: '#103bae',drilldown: "AncianidadBEL"}
    ]},{id: 'Risaralda',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[11][0],z:ciudades[11][0]/totales[11]*100,color: '#466fda',drilldown: "PrevejezRIS"},
    {name: "Vejez (65-79 años)",y: ciudades[11][1],z:ciudades[11][1]/totales[11]*100,color: '#1e4fd1',drilldown: "VejezRIS"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[11][2],z:ciudades[11][2]/totales[11]*100,color: '#103bae',drilldown: "AncianidadRIS"}
    ]},{id: 'San José',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[12][0],z:ciudades[12][0]/totales[12]*100,color: '#466fda',drilldown: "PrevejezSAN"},
    {name: "Vejez (65-79 años)",y: ciudades[12][1],z:ciudades[12][1]/totales[12]*100,color: '#1e4fd1',drilldown: "VejezSAN"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[12][2],z:ciudades[12][2]/totales[12]*100,color: '#103bae',drilldown: "AncianidadSAN"}
    ]},{id: 'Viterbo',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[13][0],z:ciudades[13][0]/totales[13]*100,color: '#466fda',drilldown: "PrevejezVIT"},
    {name: "Vejez (65-79 años)",y: ciudades[13][1],z:ciudades[13][1]/totales[13]*100,color: '#1e4fd1',drilldown: "VejezVIT"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[13][2],z:ciudades[13][2]/totales[13]*100,color: '#103bae',drilldown: "AncianidadVIT"}
    ]},{id: 'Chinchiná',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[14][0],z:ciudades[14][0]/totales[14]*100,color: '#466fda',drilldown: "PrevejezCHI"},
    {name: "Vejez (65-79 años)",y: ciudades[14][1],z:ciudades[14][1]/totales[14]*100,color: '#1e4fd1',drilldown: "VejezCHI"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[14][2],z:ciudades[14][2]/totales[14]*100,color: '#103bae',drilldown: "AncianidadCHI"}
    ]},{id: 'Manizales',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[15][0],z:ciudades[15][0]/totales[15]*100,color: '#466fda',drilldown: "PrevejezMANI"},
    {name: "Vejez (65-79 años)",y: ciudades[15][1],z:ciudades[15][1]/totales[15]*100,color: '#1e4fd1',drilldown: "VejezMANI"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[15][2],z:ciudades[15][2]/totales[15]*100,color: '#103bae',drilldown: "AncianidadMANI"}
    ]},{id: 'Neira',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[16][0],z:ciudades[16][0]/totales[16]*100,color: '#466fda',drilldown: "PrevejezNEI"},
    {name: "Vejez (65-79 años)",y: ciudades[16][1],z:ciudades[16][1]/totales[16]*100,color: '#1e4fd1',drilldown: "VejezNEI"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[16][2],z:ciudades[16][2]/totales[16]*100,color: '#103bae',drilldown: "AncianidadNEI"}
    ]},{id: 'Palestina',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[17][0],z:ciudades[17][0]/totales[17]*100,color: '#466fda',drilldown: "PrevejezPAL"},
    {name: "Vejez (65-79 años)",y: ciudades[17][1],z:ciudades[17][1]/totales[17]*100,color: '#1e4fd1',drilldown: "VejezPAL"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[17][2],z:ciudades[17][2]/totales[17]*100,color: '#103bae',drilldown: "AncianidadPAL"}
    ]},{id: 'Villamaría',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[18][0],z:ciudades[18][0]/totales[18]*100,color: '#466fda',drilldown: "PrevejezVIL"},
    {name: "Vejez (65-79 años)",y: ciudades[18][1],z:ciudades[18][1]/totales[18]*100,color: '#1e4fd1',drilldown: "VejezVIL"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[18][2],z:ciudades[18][2]/totales[18]*100,color: '#103bae',drilldown: "AncianidadVIL"}
    ]},{id: 'La Dorada',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[19][0],z:ciudades[19][0]/totales[19]*100,color: '#466fda',drilldown: "PrevejezLAD"},
    {name: "Vejez (65-79 años)",y: ciudades[19][1],z:ciudades[19][1]/totales[19]*100,color: '#1e4fd1',drilldown: "VejezLAD"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[19][2],z:ciudades[19][2]/totales[19]*100,color: '#103bae',drilldown: "AncianidadLAD"}
    ]},{id: 'Norcasia',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[20][0],z:ciudades[20][0]/totales[20]*100,color: '#466fda',drilldown: "PrevejezNOR"},
    {name: "Vejez (65-79 años)",y: ciudades[20][1],z:ciudades[20][1]/totales[20]*100,color: '#1e4fd1',drilldown: "VejezNOR"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[20][2],z:ciudades[20][2]/totales[20]*100,color: '#103bae',drilldown: "AncianidadNOR"}
    ]},{id: 'Samaná',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[21][0],z:ciudades[21][0]/totales[21]*100,color: '#466fda',drilldown: "PrevejezSAM"},
    {name: "Vejez (65-79 años)",y: ciudades[21][1],z:ciudades[21][1]/totales[21]*100,color: '#1e4fd1',drilldown: "VejezSAM"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[21][2],z:ciudades[21][2]/totales[21]*100,color: '#103bae',drilldown: "AncianidadSAM"}
    ]},{id: 'Victoria',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[22][0],z:ciudades[22][0]/totales[22]*100,color: '#466fda',drilldown: "PrevejezVIC"},
    {name: "Vejez (65-79 años)",y: ciudades[22][1],z:ciudades[22][1]/totales[22]*100,color: '#1e4fd1',drilldown: "VejezVIC"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[22][2],z:ciudades[22][2]/totales[22]*100,color: '#103bae',drilldown: "AncianidadVIC"}
    ]},{id: 'Aguadas',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[23][0],z:ciudades[23][0]/totales[23]*100,color: '#466fda',drilldown: "PrevejezAGU"},
    {name: "Vejez (65-79 años)",y: ciudades[23][1],z:ciudades[23][1]/totales[23]*100,color: '#1e4fd1',drilldown: "VejezAGU"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[23][2],z:ciudades[23][2]/totales[23]*100,color: '#103bae',drilldown: "AncianidadAGU"}
    ]},{id: 'Aranzazu',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[24][0],z:ciudades[24][0]/totales[24]*100,color: '#466fda',drilldown: "PrevejezARA"},
    {name: "Vejez (65-79 años)",y: ciudades[24][1],z:ciudades[24][1]/totales[24]*100,color: '#1e4fd1',drilldown: "VejezARA"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[24][2],z:ciudades[24][2]/totales[24]*100,color: '#103bae',drilldown: "AncianidadARA"}
    ]},{id: 'Pácora',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[25][0],z:ciudades[25][0]/totales[25]*100,color: '#466fda',drilldown: "PrevejezPAC"},
    {name: "Vejez (65-79 años)",y: ciudades[25][1],z:ciudades[25][1]/totales[25]*100,color: '#1e4fd1',drilldown: "VejezPAC"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[25][2],z:ciudades[25][2]/totales[25]*100,color: '#103bae',drilldown: "AncianidadPAC"}
    ]},{id: 'Salamina',name: 'Rangos de edades',data: [
    {name: "Prevejez (55-64 años)",y: ciudades[26][0],z:ciudades[26][0]/totales[26]*100,color: '#466fda',drilldown: "PrevejezSAL"},
    {name: "Vejez (65-79 años)",y: ciudades[26][1],z:ciudades[26][1]/totales[26]*100,color: '#1e4fd1',drilldown: "VejezSAL"},
    {name: "Ancianidad (80 años en adelante)",y: ciudades[26][2],z:ciudades[26][2]/totales[26]*100,color: '#103bae',drilldown: "AncianidadSAL"}]}]}});
    }

//-------------------------------------GRAFICO 2---------------------------------------------------------

    else if(document.getElementById('gra_2')){
    var con_2 = <?php echo json_encode($consulta_2 ?? '') ?>;var estC_1 = 0;var estC_2 = 0;var estC_3 = 0;var estC_4 = 0;
    var estC_5 = 0;for (let i in con_2) {if (con_2[i]['civil_status'] == 'Casado' || con_2[i]['civil_status'] == 'Casada') {
    estC_1++;} else if (con_2[i]['civil_status'] == 'Soltero' || con_2[i]['civil_status'] == 'Soltera') {estC_2++;
    }else if (con_2[i]['civil_status'] == 'Viudo' || con_2[i]['civil_status'] == 'Viuda') {estC_3++;
    }else if (con_2[i]['civil_status'] == 'Separado' || con_2[i]['civil_status'] == 'Separada') {estC_4++;}else if (con_2[i]['civil_status'] == 'Religioso') {estC_5++;}}
    Highcharts.chart('gra_2', {chart: {plotBackgroundColor: null,plotBorderWidth: 1, plotShadow: null,backgroundColor: 'white',
    type: 'variablepie'},accessibility: {description: 'NONE'},title: {useHTML: true,text: 'Estado civil',style: {
    color: 'white','background-color': 'royalblue',padding: '5px 20% 5px 20%',borderRadius:'5px 5px',
    font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
    }},lang: {contextButtonTitle: 'Menu',},navigation: {buttonOptions: {height: 37,width: 30,symbolSize: 18,symbolX: 15,
    symbolY: 18,y:-4,x:5,vertical:'top',symbolStroke: 'white',symbolStrokeWidth: 3,theme: {fill: 'royalblue',
    r: 5,states: {hover: {fill: '#1cc88a',cursor: 'pointer'},select: {fill: '#1cc88a'}}}}},tooltip: {
    headerFormat: '',pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
    'Cantidad: <b>{point.y}</b><br/>' +'Porcentaje: <b>{point.percentage: .1f}%</b><br/>'},plotOptions: {
    variablepie: {allowPointSelect: true,cursor: 'pointer',dataLabels: {enabled: true},showInLegend: true}},series: [{
    minPointSize: 10,innerSize: '20%',zMin: 0,name: 'Estado civil',data: [{
    name: 'Casado(a)',y: estC_1,z: 220}, {name: 'Soltero(a)',color: '#103bae',y: estC_2,z: 180}, {name: 'Viudo(a)',color: '#4D7EFA',
    y: estC_3,z: 140}, {name: 'Separado(a) / Divorciado(a)',color: '#3352A3',y: estC_4,z: 100}, {name: 'Religioso',color: '#4D7EFA',y: estC_5,z: 60}]}]});
    }
//-------------------------------------GRAFICO 3---------------------------------------------------------

else if(document.getElementById('gra_3')){
var con_3 = <?php echo json_encode($consulta_3 ?? '') ?>



var estC_1 = [0,0];
var estC_2 = [0,0];
var estC_3 = [0,0];
var estC_4 = [0,0];
var estC_5 = [0,0];

var mas = 0;
var fem = 0;
var tolGen=0;

for (let i in con_3) {
if (con_3[i]['gender'] == 'Masculino') {
if (con_3[i]['civil_status'] == 'Casado' || con_3[i]['civil_status'] == 'Casada') {
estC_1[0]++;
} else if (con_3[i]['civil_status'] == 'Soltero' || con_3[i]['civil_status'] == 'Soltera') {
estC_2[0]++;
}else if (con_3[i]['civil_status'] == 'Viudo' || con_3[i]['civil_status'] == 'Viuda') {
estC_3[0]++;
}else if (con_3[i]['civil_status'] == 'Separado' || con_3[i]['civil_status'] == 'Separada') {
estC_4[0]++;
}else if (con_3[i]['civil_status'] == 'Religioso') {
estC_5[0]++;
}
mas++;
} else if (con_3[i]['gender'] == 'Femenino') {
if (con_3[i]['civil_status'] == 'Casado' || con_3[i]['civil_status'] == 'Casada') {
estC_1[1]++;
} else if (con_3[i]['civil_status'] == 'Soltero' || con_3[i]['civil_status'] == 'Soltera') {
estC_2[1]++;
}else if (con_3[i]['civil_status'] == 'Viudo' || con_3[i]['civil_status'] == 'Viuda') {
estC_3[1]++;
}else if (con_3[i]['civil_status'] == 'Separado' || con_3[i]['civil_status'] == 'Separada') {
estC_4[1]++;
}else if (con_3[i]['civil_status'] == 'Religioso') {
estC_5[1]++;
}
fem++;
}
tolGen++;
}


Highcharts.chart('gra_3', {
chart: {
backgroundColor: 'white',
type: 'column'

},
title: {

useHTML: true,
text: 'Estado civil por genero',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 30% 5px 30%',
zIndex:'0',
borderRadius:'5px 5px',
font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'

}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
type: 'category'
},
yAxis: {
title: {
text: 'Total de edades en cada rango'
}

},
legend: {
enabled: false

},
plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.z:.1f}%'
}
}
},

tooltip: {
headerFormat: '',

pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.z: .1f}%</b><br/>'
},

series: [
{
name: "Genero",
colorByPoint: true,
data: [
{
name: "Masculino",
y: mas,
z:mas/tolGen*100,
color: '#3f62bd',
drilldown: "Masculino"
},
{
name: "Femenino",
y: fem,
z:fem/tolGen*100,
color: '#4D7EFA',
drilldown: "Femenino"
}
]
}
],
drilldown: {
series: [
{
name: "Masculino",
id: "Masculino",
data: [
{
name: "Casado / Union libre",
y: estC_1[0],
z: estC_1[0]/mas*100

},
{
name: "Soltero",
y: estC_2[0],
z: estC_2[0]/mas*100
},
{
name: "Viudo",
y: estC_3[0],
z: estC_3[0]/mas*100
},
{
name:"Separado / Divorciado",
y: estC_4[0],
z: estC_4[0]/mas*100
},
{
name:"Religioso",
y: estC_5[0],
z: estC_5[0]/mas*100
}
]
},
{
name: "Femenino",
id: "Femenino",
data: [
{
name:"Casada / Union libre",
y: estC_1[1],
z: estC_1[1]/fem*100
},
{
name:"Soltera",
y: estC_2[1],
z: estC_2[1]/fem*100
},
{
name:"Viuda",
y: estC_3[1],
z: estC_3[1]/fem*100
},
{
name:"Separada / Divorciada",
y: estC_4[1],
z: estC_4[1]/fem*100
},
{
name:"Religiosa",
y: estC_5[1],
z: estC_5[1]/fem*100
}
]
}

]
}
});
}

//-------------------------------------GRAFICO 4---------------------------------------------------------

else if(document.getElementById('gra_4')){

var con_4 = <?php echo json_encode($consulta_4 ?? '') ?>

var r1 = 0;
var r2 = 0;
var r3 = 0;

var estC_1 = [0,0,0];
var estC_2 = [0,0,0];
var estC_3 = [0,0,0];
var estC_4 = [0,0,0];
var estC_5 = [0,0,0];

for (let i in con_4) {

if (con_4[i]['age']>=55 && con_4[i]['age']<=64) {
if (con_4[i]['civil_status'] == 'Casado' || con_4[i]['civil_status'] == 'Casada') {
estC_1[0]++;
} else if (con_4[i]['civil_status'] == 'Soltero' || con_4[i]['civil_status'] == 'Soltera') {
estC_2[0]++;
}else if (con_4[i]['civil_status'] == 'Viudo' || con_4[i]['civil_status'] == 'Viuda') {
estC_3[0]++;
}else if (con_4[i]['civil_status'] == 'Separado' || con_4[i]['civil_status'] == 'Separada') {
estC_4[0]++;
}else if (con_4[i]['civil_status'] == 'Religioso') {
estC_5[0]++;
}
r1++;

} else if (con_4[i]['age']>=65 && con_4[i]['age']<=79) {
if (con_4[i]['civil_status'] == 'Casado' || con_4[i]['civil_status'] == 'Casada') {
estC_1[1]++;
} else if (con_4[i]['civil_status'] == 'Soltero' || con_4[i]['civil_status'] == 'Soltera') {
estC_2[1]++;
}else if (con_4[i]['civil_status'] == 'Viudo' || con_4[i]['civil_status'] == 'Viuda') {
estC_3[1]++;
}else if (con_4[i]['civil_status'] == 'Separado' || con_4[i]['civil_status'] == 'Separada') {
estC_4[1]++;
}else if (con_4[i]['civil_status'] == 'Religioso') {
estC_5[1]++;
}
r2++;

}else if (con_4[i]['age']>=80) {
if (con_4[i]['civil_status'] == 'Casado' || con_4[i]['civil_status'] == 'Casada') {
estC_1[2]++;
} else if (con_4[i]['civil_status'] == 'Soltero' || con_4[i]['civil_status'] == 'Soltera') {
estC_2[2]++;
}else if (con_4[i]['civil_status'] == 'Viudo' || con_4[i]['civil_status'] == 'Viuda') {
estC_3[2]++;
}else if (con_4[i]['civil_status'] == 'Separado' || con_4[i]['civil_status'] == 'Separada') {
estC_4[2]++;
}else if (con_4[i]['civil_status'] == 'Religioso') {
estC_5[2]++;
}
r3++;

}
}
var tr=r1+r2+r3;

Highcharts.chart('gra_4', {
chart: {
backgroundColor: 'white',
type: 'column'

},
title: {

useHTML: true,
text: 'Estado civil por edad',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 30% 5px 30%',
zIndex:'0',
borderRadius:'5px 5px',
font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'

}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},

xAxis: {
type: 'category'
},
yAxis: {
title: {
text: 'Total de edades en cada rango'
}

},
legend: {
enabled: false

},
plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.z:.1f}%'
}
}
},

tooltip: {
headerFormat: '',
// pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.z: .1f}%</b><br/>'
},

series: [
{
name: "Rangos de edades",
colorByPoint: true,
data: [
{
name: "Prevejez (55-64 años)",
y: r1,
z:r1/tr*100,
color: '#99B5FB',
drilldown: "Prevejez"
},
{
name: "Vejez (65-79 años)",
y: r2,
z:r2/tr*100,
color: '#4D7EFA',
drilldown: "Vejez"
},
{
name: "Ancianidad (80 años en adelante)",
y: r3,
z:r3/tr*100,
color: '#3352A3',
drilldown: "Ancianidad"
}
]
}
],
drilldown: {
series: [
{
name: "Prevejez",
id: "Prevejez",
data: [
{
name:"Casado(a) / Union libre",
y: estC_1[0],
z: estC_1[0]/r1*100
},
{
name:"Soltero(a)",
y: estC_2[0],
z: estC_2[0]/r1*100
},
{
name:"Viudo(a)",
y: estC_3[0],
z: estC_3[0]/r1*100
},
{
name:"Separado(a) / Divorciado(a)",
y: estC_4[0],
z: estC_4[0]/r1*100
},
{
name:"Religioso(a)",
y: estC_5[0],
z: estC_5[0]/r1*100
}
]
},
{
name: "Vejez",
id: "Vejez",
data: [
{
name:"Casado(a) / Union libre",
y: estC_1[1],
z: estC_1[1]/r2*100
},
{
name:"Soltero(a)",
y: estC_2[1],
z: estC_2[1]/r2*100
},
{
name:"Viudo(a)",
y: estC_3[1],
z: estC_3[1]/r2*100
},
{
name:"Separado(a) / Divorciado(a)",
y: estC_4[1],
z: estC_4[1]/r2*100
},
{
name:"Religioso(a)",
y: estC_5[1],
z: estC_5[1]/r2*100
}
]
},
{
name: "Ancianidad",
id: "Ancianidad",
data: [
{
name:"Casado(a) / Union libre",
y: estC_1[2],
z: estC_1[2]/r3*100
},
{
name:"Soltero(a)",
y: estC_2[2],
z: estC_2[2]/r3*100
},
{
name:"Viudo(a)",
y: estC_3[2],
z: estC_3[2]/r3*100
},
{
name:"Separado(a) / Divorciado(a)",
y: estC_4[2],
z: estC_4[2]/r3*100
},
{
name:"Religioso(a)",
y: estC_5[2],
z: estC_5[2]/r3*100
}
]
}

]
}
});
}

//-------------------------------------GRAFICO 5---------------------------------------------------------

else if(document.getElementById('gra_5')){
var con_5 = <?php echo json_encode($consulta_5 ?? '') ?>



var levelEdu=[0,0,0,0,0,0,0];
var totalEdu=0;

for (let i in con_5) {
if (con_5[i]['educational_level'] == 'Analfabeta') {
levelEdu[0]++;
}else if (con_5[i]['educational_level'] == 'Solamente aprendió a leer y escribir') {
levelEdu[1]++;
}else if (con_5[i]['educational_level'] == 'Primaria incompleta') {
levelEdu[2]++;
}else if (con_5[i]['educational_level'] == 'Primaria completa') {
levelEdu[3]++;
}else if (con_5[i]['educational_level'] == 'Secundaria incompleta') {
levelEdu[4]++;
}else if (con_5[i]['educational_level'] == 'Secundaria completa') {
levelEdu[5]++;
}else if (con_5[i]['educational_level'] == 'Universidad o equivalente') {
levelEdu[6]++;
}
totalEdu++;
}


Highcharts.chart('gra_5', {
chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Educación',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: ['Analfabeta', 
'Solamente aprendió a leer y escribir',
'Primaria incompleta', 
'Primaria completa', 
'Secundaria incompleta',
'Secundaria completa',
'Universidad o equivalente'
],
title: {
text: null
}
},
yAxis: {
min: 0,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}
},
// tooltip: {
//     valueSuffix: 'Personas'
// },
plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: true,
enabled: false
},
credits: {
enabled: false
},
plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.z:.1f}%'
}
}
},

tooltip: {
headerFormat: '',
// pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.z: .1f}%</b><br/>'
},
series: [{
name: 'Cantidad',
data: [
{ name:'Analfabeta', 
y: levelEdu[0], z:levelEdu[0]/totalEdu*100, color: '#99B5FB' },
{ name:'Solamente aprendió a leer y escribir', 
y: levelEdu[1], z:levelEdu[1]/totalEdu*100, color: '#4D7EFA' },
{ name:'Primaria incompleta', 
y: levelEdu[2], z:levelEdu[2]/totalEdu*100, color: '#4F6BB1' },
{ name:'Primaria completa', 
y: levelEdu[3], z:levelEdu[3]/totalEdu*100, color: '#3352A3' },
{ name:'Secundaria incompleta', 
y: levelEdu[4], z:levelEdu[4]/totalEdu*100, color: '#99B5FB' },
{ name:'Secundaria completa', 
y: levelEdu[5], z:levelEdu[5]/totalEdu*100, color: '#4D7EFA' },
{ name:'Universidad o equivalente', 
y: levelEdu[6], z:levelEdu[6]/totalEdu*100, color: '#4F6BB1' }  
]
// color:'#2BD85D'
}]
});
}

//-------------------------------------GRAFICO 6---------------------------------------------------------

else if(document.getElementById('gra_6')){
var con_6 = <?php echo json_encode($consulta_6 ?? '') ?>

var estC_1 = 0;
var estC_2 = 0;
var estC_3 = 0;



for (let i in con_6) {
if (con_6[i]['affiliation_type'] == 'Contributivo' ) {
estC_1++;
} else if (con_6[i]['affiliation_type'] == 'Subsidiado' ) {
estC_2++;
}else if (con_6[i]['affiliation_type'] == 'Vinculado' ) {
estC_3++;
}

}

Highcharts.chart('gra_6', {
chart: {
plotBackgroundColor: null,
plotBorderWidth: 1, //null,
plotShadow: null,
backgroundColor: 'white',
type: 'variablepie'
},
accessibility: {
description: 'none'
},
title: {
useHTML: true,
text: 'Afiliación al sistema de seguridad social',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
// zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
tooltip: {
headerFormat: '',
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.percentage: .1f}%</b><br/>'
},
plotOptions: {
variablepie: {
allowPointSelect: true,
cursor: 'pointer',
dataLabels: {
enabled: true
},
showInLegend: true
}
},
series: [{


minPointSize: 10,
innerSize: '20%',
zMin: 0,
name: 'Afiliación al sistema de seguridad social',
data: [{
name: 'Contributivo',
color: '#99B5FB',
y: estC_1,
z: 220

}, {
name: 'Subsidiado',
color: '#4D7EFA',
y: estC_2,
z: 180

}, {
name: 'Vinculado',
color: '#4F6BB1',
y: estC_3,
z: 140

}]
}]
});
}

//-------------------------------------GRAFICO 7---------------------------------------------------------

else if(document.getElementById('gra_7')){

var con_7 = <?php echo json_encode($consulta_7 ?? '') ?>


var stratum = [0,0,0,0,0,0];


for (let i in con_7) {
if (con_7[i]['stratum'] == 1 ) {
stratum[0]++;
} else if (con_7[i]['stratum'] == 2 ) {
stratum[1]++;
}else if (con_7[i]['stratum'] == 3 ) {
stratum[2]++;
}else if (con_7[i]['stratum'] == 4 ) {
stratum[3]++;
}else if (con_7[i]['stratum'] == 5 ) {
stratum[4]++;
}else if (con_7[i]['stratum'] == 6 ) {
stratum[5]++;
}

}

Highcharts.chart('gra_7', {
chart: {
plotBackgroundColor: null,
plotBorderWidth: 1, //null,
plotShadow: null,
backgroundColor: 'white',
type: 'variablepie'
},
accessibility: {
description: 'none'
},
title: {
useHTML: true,
text: 'Estrato Socioeconómico',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
// zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
tooltip: {
headerFormat: '',
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.percentage: .1f}%</b><br/>'
},
plotOptions: {
variablepie: {
allowPointSelect: true,
cursor: 'pointer',
dataLabels: {
enabled: true
},
showInLegend: true
}
},
series: [{


minPointSize: 10,
innerSize: '20%',
zMin: 0,
name: 'Estrato Socioeconómico',
data: [{
name: 'Estrato 1',
color: '#99B5FB',
y: stratum[0],
z: 40

}, {
name: 'Estrato 2',
color: '#4D7EFA',
y: stratum[1],
z: 80

}, {
name: 'Estrato 3',
color: '#4F6BB1',
y: stratum[2],
z: 120

}, {
name: 'Estrato 4',
color: '#3352A3',
y: stratum[3],
z: 160

}, {
name: 'Estrato 5',
color: '#99B5FB',
y: stratum[4],
z: 200

}, {
name: 'Estrato 6',
color: '#4D7EFA',
y: stratum[5],
z: 240

}]
}]
});
}

//-------------------------------------GRAFICO 8---------------------------------------------------------

else if(document.getElementById('gra_8')){

var con_8 = <?php echo json_encode($consulta_8 ?? '') ?>


var levelEdu=[0,0,0,0];
var totalEdu=0;

for (let i in con_8) {
if (con_8[i]['monthly_income'] == 'Menos de un SMLV') {
levelEdu[0]++;
}else if (con_8[i]['monthly_income'] == 'Un SMLV') {
levelEdu[1]++;
}else if (con_8[i]['monthly_income'] == 'Entre uno y dos SMLV') {
levelEdu[2]++;
}else if (con_8[i]['monthly_income'] == 'Más de tres SMLV') {
levelEdu[3]++;
}
totalEdu++;
}

Highcharts.chart('gra_8', {
chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Nivel de ingreso',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: ['Menos de un SMLV', 
'Un SMLV',
'Entre uno y tres SMLV', 
'Más de tres SMLV'
],
title: {
text: null
}
},
yAxis: {
min: 0,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}
},
// tooltip: {
//     valueSuffix: 'Personas'
// },
plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: true,
enabled: false
},
credits: {
enabled: false
},
plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.z:.1f}%'
}
}
},

tooltip: {
headerFormat: '',
// pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.z: .1f}%</b><br/>'
},
series: [{
name: 'Cantidad',
data: [
{ name:'Menos de un SMLV', 
y: levelEdu[0], z:levelEdu[0]/totalEdu*100, color: '#99B5FB' },
{ name:'Un SMLV',
y: levelEdu[1], z:levelEdu[1]/totalEdu*100, color: '#4D7EFA' },
{ name:'Entre uno y tres SMLV', 
y: levelEdu[2], z:levelEdu[2]/totalEdu*100, color: '#4F6BB1' },
{ name:'Más de tres SMLV',
y: levelEdu[3], z:levelEdu[3]/totalEdu*100, color: '#3352A3' }


]
// color:'#2BD85D'
}]
});
}

//-------------------------------------GRAFICO 9---------------------------------------------------------

else if(document.getElementById('gra_9')){

var con_9 = <?php echo json_encode($consulta_9 ?? '') ?>

var levelEdu=[0,0,0,0,0,0,0,0,0,0];
var totalEdu=0;

for (let i in con_9) {
if (con_9[i]['source_income'] == 'Trabajo actual') {
levelEdu[0]++;
}else if (con_9[i]['source_income'] == 'Retiro o pensión') {
levelEdu[1]++;
}else if (con_9[i]['source_income'] == 'Ayuda de familiares (extranjero)') {
levelEdu[2]++;
}else if (con_9[i]['source_income'] == 'Ayuda de familiares (Colombia)') {
levelEdu[3]++;
}else if (con_9[i]['source_income'] == 'Rentas') {
levelEdu[4]++;
}else if (con_9[i]['source_income'] == 'Subsidios de gobierno') {
levelEdu[5]++;
}else if (con_9[i]['source_income'] == 'Otro') {
levelEdu[6]++;
}else if (con_9[i]['source_income'] == 'No recibe ingresos') {
levelEdu[7]++;
}else if (con_9[i]['source_income'] == 'No sabe') {
levelEdu[8]++;
}else if (con_9[i]['source_income'] == 'No responde') {
levelEdu[9]++;
}

totalEdu++;
}

Highcharts.chart('gra_9', {
chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Fuente de ingreso',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: [
'Trabajo actual',
'Retiro o pensión',
'Ayuda de familiares (Extranjero) ',
'Ayuda de familiares (Colombia) ',
'Rentas',
'Subsidios de gobierno',
'Otro',
'No recibe ingresos',
'No sabe',
'No responde'
],
title: {
text: null
}
},
yAxis: {
min: 0,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}
},
// tooltip: {
//     valueSuffix: 'Personas'
// },
plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: true,
enabled: false
},
credits: {
enabled: false
},
plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.z:.1f}%'
}
}
},

tooltip: {
headerFormat: '',
// pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
'Cantidad: <b>{point.y}</b><br/>' +
'Porcentaje: <b>{point.z: .1f}%</b><br/>'
},
series: [{
name: 'Cantidad',
data: [
{ name: 'Trabajo actual',
y: levelEdu[0], z:levelEdu[0]/totalEdu*100, color: '#99B5FB' },
{ name: 'Retiro o pensión',
y: levelEdu[1], z:levelEdu[1]/totalEdu*100, color: '#4D7EFA' },
{ name: 'Ayuda de familiares (Extranjero) ',
y: levelEdu[2], z:levelEdu[2]/totalEdu*100, color: '#4F6BB1' },
{ name: 'Ayuda de familiares (Colombia) ',
y: levelEdu[3], z:levelEdu[3]/totalEdu*100, color: '#3352A3' },
{ name: 'Rentas',
y: levelEdu[4], z:levelEdu[4]/totalEdu*100, color: '#99B5FB' },
{ name: 'Subsidios de gobierno',
y: levelEdu[5], z:levelEdu[5]/totalEdu*100, color: '#4D7EFA' },
{ name: 'Otro',
y: levelEdu[6], z:levelEdu[6]/totalEdu*100, color: '#4F6BB1' },
{ name: 'No recibe ingresos',
y: levelEdu[7], z:levelEdu[7]/totalEdu*100, color: '#3352A3' },
{ name: 'No sabe',
y: levelEdu[8], z:levelEdu[8]/totalEdu*100, color: '#99B5FB' },
{ name: 'No responde',
y: levelEdu[9], z:levelEdu[9]/totalEdu*100, color: '#4D7EFA' }

]

// color:'#2BD85D'
}]
});
}

//-------------------------------------GRAFICO 10---------------------------------------------------------

//-------------------------------------GRAFICO 11---------------------------------------------------------

else if(document.getElementById('gra_11')){
var g_buE = <?php echo json_encode($consulta_11 ?? '') ?>

var row_3 = Highcharts.chart('gra_11', {


tooltip: {
formatter: function () {
return '<b>'+(this.x)+'</b><br/>' +
'Respuesta: <b>'+this.series.name+'</b><br>'+
'Personas: <b>'+this.y+'</b><br/>';
}
},

chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Entorno construido',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 10% 5px 10%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},

subtitle: {
text: 'En qué medida su barrio tiene…'
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
title: {
text: null
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Persona',
align: 'high'
},
labels: {
overflow: 'justify'
}
},

plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},
legend: {
layout: 'horizontal',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: false
// enabled: false
},
credits: {
enabled: false
},
series: [{
name: 'Muchos',
// data: [3, 18, 5, 10, 21, 12,7],
color:'#99B5FB'
},{
name: 'Algunos',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#4D7EFA'
},{
name: 'Ninguno',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#4F6BB1'
},{
name: 'No sabe',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#3352A3'
}]
});






var q1=[],q2=[],q3=[],q4=[];

for (let index = 0; index <7; index++) {
q1[index]=0;
q2[index]=0;
q3[index]=0;
q4[index]=0;
}
for (let i in g_buE) {
if (g_buE[i]['name'] == 'question_have') {
if (g_buE[i]['id'] == 1) {
if(g_buE[i]['answer']=='Muchos'){q1[0]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[0]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[0]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[0]++;}

}else if (g_buE[i]['id'] == 2) {
if(g_buE[i]['answer']=='Muchos'){q1[1]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[1]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[1]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[1]++;}

}else if (g_buE[i]['id'] == 3) {
if(g_buE[i]['answer']=='Muchos'){q1[2]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[2]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[2]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[2]++;}

}else if (g_buE[i]['id'] == 4) {
if(g_buE[i]['answer']=='Muchos'){q1[3]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[3]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[3]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[3]++;}

}else if (g_buE[i]['id'] == 5) {
if(g_buE[i]['answer']=='Muchos'){q1[4]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[4]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[4]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[4]++;}

}else if (g_buE[i]['id'] == 6) {
if(g_buE[i]['answer']=='Muchos'){q1[5]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[5]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[5]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[5]++;}

}else if (g_buE[i]['id'] == 7) {
if(g_buE[i]['answer']=='Muchos'){q1[6]++;}
else if(g_buE[i]['answer']=='Algunos'){q2[6]++;}
else if(g_buE[i]['answer']=='Ninguno'){q3[6]++;}
else if(g_buE[i]['answer']=='No sabe'){q4[6]++;}

}
} 
}


row_3.series[0].setData(q1);
row_3.series[1].setData(q2);
row_3.series[2].setData(q3);
row_3.series[3].setData(q4);
row_3.xAxis[0].setCategories([
'Aceras o andenes irregulares.',
'Parques o áreas para caminar de fácil acceso.',
'Parques y áreas para caminar seguro.',
'Sitios para sentarse y descansar en las paradas del bus o parques.',
'Transporte público cerca a su casa.',
'Transporte público para personas con discapacidad.',
'Parqueaderos adecuados para personas con discapacidad.'
]);
}

//-------------------------------------GRAFICO 12---------------------------------------------------------

else if(document.getElementById('gra_12')){

var con_12 = <?php echo json_encode($consulta_12 ?? '') ?>

var row_3 = Highcharts.chart('gra_12', {


tooltip: {
formatter: function () {
return '<b>'+(this.x)+'</b><br/>' +
'Respuesta: <b>'+this.series.name+'</b><br>'+
'Personas: <b>'+this.y+'</b><br/>';
}
},

chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Problemas en el vecindario',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 10% 5px 10%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},

subtitle: {
text: 'De las siguientes situaciones ¿qué tanto es un problema en su barrio?'
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
title: {
text: null
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Persona',
align: 'high'

},
labels: {
overflow: 'justify'
}
},

plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},
legend: {
layout: 'horizontal',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 15,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'transparent',
shadow: false
// enabled: false
},
credits: {
enabled: false
},
series: [{
name: 'Muchos problemas',
// data: [3, 18, 5, 10, 21, 12,7],
color:'#99B5FB'
},{
name: 'Pocos Problemas',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#4D7EFA'
},{
name: 'No es un problema',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#4F6BB1'
},{
name: 'No sabe',
// data: [4, 19, 15, 8, 15, 12,9],
color: '#3352A3'
}]
});

var q1=[],q2=[],q3=[],q4=[];

for (let index = 0; index <10; index++) {
q1[index]=0;
q2[index]=0;
q3[index]=0;
q4[index]=0;
}
for (let i in con_12) {
if (con_12[i]['name'] == 'question_problem') {
if (con_12[i]['id'] == 8) {
if(con_12[i]['answer']=='Muchos problemas'){q1[0]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[0]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[0]++;}
else if(con_12[i]['answer']=='No sabe'){q4[0]++;}

}else if (con_12[i]['id'] == 9) {
if(con_12[i]['answer']=='Muchos problemas'){q1[1]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[1]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[1]++;}
else if(con_12[i]['answer']=='No sabe'){q4[1]++;}

}else if (con_12[i]['id'] == 10) {
if(con_12[i]['answer']=='Muchos problemas'){q1[2]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[2]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[2]++;}
else if(con_12[i]['answer']=='No sabe'){q4[2]++;}

}else if (con_12[i]['id'] == 11) {
if(con_12[i]['answer']=='Muchos problemas'){q1[3]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[3]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[3]++;}
else if(con_12[i]['answer']=='No sabe'){q4[3]++;}

}else if (con_12[i]['id'] == 12) {
if(con_12[i]['answer']=='Muchos problemas'){q1[4]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[4]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[4]++;}
else if(con_12[i]['answer']=='No sabe'){q4[4]++;}

}else if (con_12[i]['id'] == 13) {
if(con_12[i]['answer']=='Muchos problemas'){q1[5]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[5]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[5]++;}
else if(con_12[i]['answer']=='No sabe'){q4[5]++;}

}else if (con_12[i]['id'] == 14) {
if(con_12[i]['answer']=='Muchos problemas'){q1[6]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[6]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[6]++;}
else if(con_12[i]['answer']=='No sabe'){q4[6]++;}

}else if (con_12[i]['id'] == 15) {
if(con_12[i]['answer']=='Muchos problemas'){q1[7]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[7]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[7]++;}
else if(con_12[i]['answer']=='No sabe'){q4[7]++;}

}else if (con_12[i]['id'] == 16) {
if(con_12[i]['answer']=='Muchos problemas'){q1[8]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[8]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[8]++;}
else if(con_12[i]['answer']=='No sabe'){q4[8]++;}

}else if (con_12[i]['id'] == 17) {
if(con_12[i]['answer']=='Muchos problemas'){q1[9]++;}
else if(con_12[i]['answer']=='Pocos problemas'){q2[9]++;}
else if(con_12[i]['answer']=='No es un problema'){q3[9]++;}
else if(con_12[i]['answer']=='No sabe'){q4[9]++;}

}
} 
}


row_3.series[0].setData(q1);
row_3.series[1].setData(q2);
row_3.series[2].setData(q3);
row_3.series[3].setData(q4);
row_3.xAxis[0].setCategories([
'Tensiones entre los diferentes grupos raciales, étnicos o Religiosos.',
'Basuras, desperdicios o botellas en la calle, en los andenes o en los jardines.',
'Ventas o usos de drogas.',
'Abuso de alcohol en las calles y sitios públicos.',
'Pandillas.',
'Iluminación inadecuada.',
'Delincuencia - delitos.',
'Ruido excesivo.',
'Tráfico pesado.',
'Casas o edificios abandonados.'
]);
}


//-------------------------------------GRAFICO 13---------------------------------------------------------

else if(document.getElementById('gra_13')){

var con_13 = <?php echo json_encode($consulta_13 ?? '') ?>


var row_2 = Highcharts.chart('gra_13', {


tooltip: {
formatter: function () {
return '<b>'+this.series.name+'</b><br>'+
'Paciente: <b>'+(this.x)+'</b><br/>' +
'Centimetros: <b>'+this.y+' cm</b><br/>';
}
},

chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Alcance funcional',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 10% 5px 10%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
subtitle: {
text: 'Mayor distancia recorrida'
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
// min: 0,
pointStart: 1,
tickInterval: 1,
title: {
text: 'Paciente'
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Centimetros (cm)',
align: 'high'
},
labels: {
overflow: 'justify'
}
},

plotOptions: {
bar: {
dataLabels: {
enabled: true
}
},
series: {
label: {
connectorAllowed: false
},
pointStart: 1
}
},
legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: false,
enabled: false
},
credits: {
enabled: false
},
series: [{
name: 'Mayor distancia recorrida',
// data: [3,4,2,5,3,6,4],
color:'#3352A3'
}]
});
var centimetros= [];
var cm;
for (var i in con_13) {

cm=parseInt(con_13[i]['mayor_distance']);
centimetros.push(cm);
}
row_2.series[0].setData(centimetros);
}

//-------------------------------------GRAFICO 14---------------------------------------------------------

else if(document.getElementById('gra_14')){

var con_14 = <?php echo json_encode($consulta_14 ?? '') ?>;

var dispe_3=Highcharts.chart('gra_14', {
chart: {
type: 'scatter',
zoomType: 'xy'
},
accessibility: {
description: 'none'
},

title: {
useHTML: true,
text: 'Equilibrio',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 3% 5px 3%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},

// subtitle: {
//     text: '(Peso - Estatura)'
// },
xAxis: {
title: {
enabled: true,
text: 'Persona'
},
startOnTick: true,
endOnTick: true,
showLastLabel: true,
// max:35,
// min:50,
// tickInterval: 5

},
yAxis: {
title: {
text: 'Puntaje'
},

// tickInterval: 10
},
legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'top',
x: 55,
y: 70,
floating: true,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'rgb(255,255,255,.6)',
shadow: true,
borderWidth: 0,
enabled: false
},
plotOptions: {
scatter: {
marker: {
radius: 5,
states: {
hover: {
enabled: true,
lineColor: 'rgb(100,100,100)'
}
}
},
states: {
hover: {
marker: {
enabled: false
}
}
},
tooltip: {
headerFormat: '<b>{series.name}</b><br>',
pointFormat: 
'Persona: <b>{point.x} </b><br/>'+
'Puntaje: <b>{point.y} </b><br/>'

}
}
},
series: [{
name: 'Equilibrio',
color: '#3352A3'
}]
});




var imc= [];

var a;
var cont=1;

for (var i in con_14) {
a=parseInt(con_14[i]['final_score']);
imc.push([cont,a]);      
cont++;
}

dispe_3.series[0].setData(imc);
}

//-------------------------------------GRAFICO 15---------------------------------------------------------

else if(document.getElementById('gra_15')){

var con_15 = <?php echo json_encode($consulta_15 ?? '') ?>;
var dispe_4=Highcharts.chart('gra_15', {
chart: {
type: 'scatter',
zoomType: 'xy'
},
accessibility: {
description: 'none'
},

title: {
useHTML: true,
text: 'Puntaje E-SPPB',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 3% 5px 3%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},

// subtitle: {
//     text: '(Peso - Estatura)'
// },
xAxis: {
title: {
enabled: true,
text: 'Persona'
},
startOnTick: true,
endOnTick: true,
showLastLabel: true,
// max:35,
// min:50,
// tickInterval: 5

},
yAxis: {
title: {
text: 'Puntaje'
},

// tickInterval: 10
},
legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'top',
x: 55,
y: 70,
floating: true,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'rgb(255,255,255,.6)',
shadow: true,
borderWidth: 0,
enabled: false
},
plotOptions: {
scatter: {
marker: {
radius: 5,
states: {
hover: {
enabled: true,
lineColor: 'rgb(100,100,100)'
}
}
},
states: {
hover: {
marker: {
enabled: false
}
}
},
tooltip: {
headerFormat: '<b>{series.name}</b><br>',
pointFormat: 
'Persona: <b>{point.x} </b><br/>'+
'Puntaje: <b>{point.y} </b><br/>'

}
}
},
series: [{
name: 'Puntaje E-SPPB',
color: '#3352A3'

}]
});

var imc= [];

var a;
var cont=1;

for (var i in con_15) {
a=parseInt(con_15[i]['score']);
imc.push([cont,a]);      
cont++;
}

dispe_4.series[0].setData(imc);
}


//-------------------------------------GRAFICO 16---------------------------------------------------------

else if(document.getElementById('gra_16')){


var con_16 = <?php echo json_encode($consulta_16 ?? '') ?>

var siC=[0,0];
var noC=[0,0];


for (var i in con_16) {
if (con_16[i]['gender'] == 'Masculino') {
if (con_16[i]['cigarettes'] == 'Si') {
siC[0]++;
}else if (con_16[i]['cigarettes'] == 'No') {
noC[0]++;
}


}else if (con_16[i]['gender'] == 'Femenino') {
if (con_16[i]['cigarettes'] == 'Si') {
siC[1]++;
}else if (con_16[i]['cigarettes'] == 'No') {
noC[1]++;
}

}
}


Highcharts.chart('gra_16', {
chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Consumo de cigarrillo',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: ['Si consume', 
'No consume'
],
title: {
text: null
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}

},
// tooltip: {
//     valueSuffix: 'Personas'
// },
plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: true
},
credits: {
enabled: false
},
series: [{
name: 'Hombres',
data: [siC[0], noC[0]],
color:'#3352A3'
},{
name: 'Mujeres',
data: [siC[1], noC[1]],
color: '#99B5FB'
}]
});
}

//-------------------------------------GRAFICO 17---------------------------------------------------------

else if(document.getElementById('gra_17')){

var con_17 = <?php echo json_encode($consulta_17 ?? '') ?>;


var siC=[0,0];
var noC=[0,0];


for (var i in con_17) {
if (con_17[i]['gender'] == 'Masculino') {
if (con_17[i]['alcohol_last_month'] == 'Si') {
siC[0]++;
}else if (con_17[i]['alcohol_last_month'] == 'No') {
noC[0]++;
}


}else if (con_17[i]['gender'] == 'Femenino') {
if (con_17[i]['alcohol_last_month'] == 'Si') {
siC[1]++;
}else if (con_17[i]['alcohol_last_month'] == 'No') {
noC[1]++;
}

}
}


Highcharts.chart('gra_17', {
chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Consumo de alcohol',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 20% 5px 20%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},
lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: ['Si consume', 
'No consume'
],
title: {
text: null
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}

},
// tooltip: {
//     valueSuffix: 'Personas'
// },
plotOptions: {
bar: {
dataLabels: {
enabled: true
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: true
},
credits: {
enabled: false
},
series: [{
name: 'Hombres',
data: [siC[0], noC[0]],
color:'#3352A3'
},{
name: 'Mujeres',
data: [siC[1], noC[1]],
color: '#99B5FB'
}]
});
}

//-------------------------------------GRAFICO 18---------------------------------------------------------

else if(document.getElementById('gra_18')){

var con_18 = <?php echo json_encode($consulta_18 ?? '') ?>


var SiRitmos=[0,0,0,0,0];


for (var i in con_18) {

if(con_18[i]['speed']=='Ritmo muy lento'){
SiRitmos[0]++;            
}else if(con_18[i]['speed']=='Ritmo lento'){
SiRitmos[1]++;        
}else if(con_18[i]['speed']=='Ritmo ligero'){
SiRitmos[2]++;        
}else if(con_18[i]['speed']=='Ritmo moderado'){
SiRitmos[3]++;        
}else if(con_18[i]['speed']=='Ritmo rapido'){
SiRitmos[4]++;        
}

}

Highcharts.chart('gra_18', {

chart: {
backgroundColor: 'white',
type: 'bar'
},
title: {
useHTML: true,
text: 'Actividad fisica',
style: {
color: 'white',
'background-color': 'royalblue',
padding: '5px 10% 5px 10%',
zIndex:'0',
borderRadius:'5px 5px',

font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
}
},

lang: {
contextButtonTitle: 'Menu',
},
navigation: {
buttonOptions: {
height: 37,

width: 30,
symbolSize: 18,
symbolX: 15,
symbolY: 18,
y:-4,
x:5,
vertical:'top',
symbolStroke: 'white',
symbolStrokeWidth: 3,
theme: {
fill: 'royalblue',
r: 5,
states: {
hover: {
fill: '#1cc88a',
cursor: 'pointer'
},
select: {
// stroke: 'green',
fill: '#1cc88a'
}
}
}
}
},
xAxis: {
categories: [   'Camina a ritmo muy lento', 
'Camina a ritmo Lento',
'Camina a ritmo ligero', 
'Camina a ritmo moderado', 
'Camina a ritmo rápido'

],
title: {
text: null
}
},
yAxis: {
min: 0,
tickInterval: 1,
title: {
text: 'Personas',
align: 'high'
},
labels: {
overflow: 'justify'
}
},

plotOptions: {
bar: {
dataLabels: {
enabled: true
}
},
series: {
label: {
connectorAllowed: false
}
}
},

legend: {
layout: 'vertical',
align: 'left',
verticalAlign: 'bottom',
x: 0,
y: 0,
floating: true,
borderWidth: 0,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || 'white',
shadow: false,
enabled: false
},
credits: {
enabled: false},
series: [{
name: 'Cantidad',
data: [SiRitmos[0],SiRitmos[1],SiRitmos[2],SiRitmos[3],SiRitmos[4]],
color:'#99B5FB'
}]});
}

</script>
@extends('layouts.footer')