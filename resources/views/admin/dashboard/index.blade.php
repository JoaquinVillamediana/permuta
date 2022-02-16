@extends('frontend/layouts.app')
@extends('frontend/layouts.header')

@section('content')

<div class="container">
    <h1 class="title">Administradores</h1>

    <div class="row">
        <div class="card" style="width: 18rem;text-align:center;">
        <div class="card-body">
            <h5 class="card-title">{{$CantUsers}}</h5>
            <h6 class="card-subtitle mb-2 text-muted"style="color: red !important;">+0.0%</h6>
            <p class="card-text">Usuarios</p>
            <a href="#" class="card-link" >Ver usuarios</a>
            
        </div>
        </div>
        <div class="card" style="width: 18rem; text-align:center;">
        <div class="card-body">
            <h5 class="card-title">Soporte</h5>
            <h6 class="card-subtitle mb-2 text-muted" style="color: red !important;">SIN CONTESTAR: cantidad sin contestar</h6>
            <p class="card-text">Consultas</p>
           
            <a href="#" class="card-link">Ver consultas</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;text-align:center;">
        <div class="card-body">
            <h5 class="card-title">0</h5>
            <h6 class="card-subtitle mb-2 text-muted" style="color: red !important;">+0.0%</h6>
            <p class="card-text">Articulos</p>
          
            <a href="#" class="card-link">Ver artículos</a>
        </div>
        </div>
    </div>
<h1 class="title">USUARIOS</h1>
<div id="chartContainerUsers" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainerUsers", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: ""
	},
	axisY: {
		title: ""
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "",
		dataPoints: <?php echo json_encode($aDataGraph, JSON_NUMERIC_CHECK);?>
	}]
});


var chart3 = new CanvasJS.Chart("chartContainerProvincias", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: ""
	},
	axisY: {
		title: ""
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "",
		dataPoints: <?php echo json_encode($aDataGraphProv, JSON_NUMERIC_CHECK);?>
	}]
});


chart.render();
chart2.render();
chart3.render();
// chart4.render();
}
</script>

<style>
.container{
    /* margin-left: 10%!important;
    margin-right: 10%!important; */
}
.title{
    text-align: center;
    padding: 20px;
}
.card{
    margin:auto;
}
</style>  
@endsection