@extends('frontend/layouts.app')
@section('content')
@include('frontend/layouts.header')


<link rel="stylesheet" href="{{ asset("css/frontend/product.css") }}">
	<!-- Collapse button-->
 

	<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('profile') }}">Productos</a>
            </li>
            <li class="breadcrumb-item active">Publicar producto</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 margin-bottom-20" style="margin: 0 auto;">
                        <form method="POST" action="{{ route('publish_product') }}" role="form"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Categoria</label>
                                <select id="category_id" name="category_id"
                                    class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                    <option value="1" {{ (old("category_id") == 1 ? "selected":"") }}>Inmuebles</option>
                                    <option value="2" {{ (old("category_id") == 2 ? "selected":"") }}>Autos</option>
                                    <option value="3" {{ (old("category_id") == 3 ? "selected":"") }}>Electrónico</option>

                                </select>
                                @if ($errors->has('category_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>Debe seleccionar una categoría.</strong>
                                </span>
                                @endif
                            </div>

                            <div class="row">

                                <div class="form-group col-md">
                                    <label>Titulo</label>
                                    <input id="title" name="title" maxlength="60"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="Titulo" value="{{ old('title') }}">
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe ingresar un titulo.</strong>
                                    </span>
                                    @endif
                                </div>

                                <!-- <div class="form-group col-md">
                                    <label>Apellido</label>
                                    <input id="last_name" name="last_name" maxlength="60"
                                        class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                        placeholder="Apellido" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe ingresar un apellido.</strong>
                                    </span>
                                    @endif
                                </div> -->

                            </div>

                            <div class="form-group">
                                <label>Descripcion</label>
                                <input id="description" name="description" maxlength="60"
                                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                    placeholder="Descripción" value="{{ old('description') }}">
                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>Debe ingresar una Descripción.</strong>
                                </span>
                                @endif
                              
                            </div>

                            <div class="row">

                                <!-- <div class="form-group col-md">
                                    <label>Provincia</label>
                                    <select id="province_id" name="province_id"
                                        class="form-control{{ $errors->has('province_id') ? ' is-invalid' : '' }}"
                                        palceholder="Provincia" value="{{ old('province_id') }}">
                                        <option value="">Provincia</option>
                                        @if(!empty($aProvinces))
                                        @foreach($aProvinces as $province)
                                        <option value="{{$province->id}}"
                                            {{ (old('province_id') == $province->id ? "selected":"") }}>
                                            {{$province->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('province_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe seleccionar una provincia.</strong>
                                    </span>
                                    @endif
                                </div> -->

                                <!-- <div class="form-group col-md">
                                    <label>Ciudad</label>
                                    <select id="city_id" name="city_id" class="form-control{{ $errors->has('city_id') ? ' is-invalid' : '' }}">
                                        <option value="">Ciudad</option>                    
                                    </select>
                                    @if ($errors->has('city_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe seleccionar una ciudad.</strong>
                                    </span>
                                    @endif
                                </div> -->


                            </div>

                            <div class="row">



                                <div class="form-group col-md">
                                    <label>Precio</label>
                                    <input id="price" name="price" type="text" maxlength="60"
                                        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                        placeholder="Precio" value="{{ old('price') }}">
                                    @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe ingresar un precio.</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md">
                                    <label>Stock</label>
                                    <input id="stock" name="stock" type="number" maxlength="60"
                                        class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                        placeholder="Stock" value="{{ old('stock') }}">
                                    @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe ingresar el stock.</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row">

                                

                               


                            </div>


                           
                            

                            <button type="submit" class="btn btn-primary">Publicar producto</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <br /><br />
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright ©  2019</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>


</div>

<script src="/vendor/editable-select/jquery-editable-select.js"></script>
<link href="/vendor/editable-select/jquery-editable-select.css" rel="stylesheet" type="text/css">
<script>
    $(document).ready(function () {
        
        var provinceId = $('#province_id').val(); 

        if(provinceId > 0){
            setCityVal(provinceId, '#city_id', "{{ url('getCitiesByProvince')}}", "Ciudad", "{{ old('city_id') }}");       
        }
    });


    
    




    $('#province_id').change(function(){                      
        setCity($(this).val(), '#city_id', "{{ url('getCitiesByProvince')}}", "Ciudad");
    });

    
    function setCity(value, formSelect, url, defVal) { 

if(value < 1 || value == ""){
    $(formSelect).empty();
    $(formSelect).append("<option value=''>" + defVal + "</option>");
    $(formSelect).prop('disabled', true);
    return true;
}

$.get(url,
{ option: value },
function(data) {                     
        $(formSelect).empty();
        $(formSelect).prop('disabled', false);
        $(formSelect).append("<option value=''>" + defVal + "</option>");
        $.each(data, function(key, element) {
            $(formSelect).append("<option value='" + key + "'>" + element + "</option>");
        });
});
}

function setCityVal(value, formSelect, url, defVal, selectedItem){
        
if(value < 1){
    $(formSelect).empty();
    $(formSelect).append("<option value=''>" + defVal + "</option>");
    $(formSelect).prop('disabled', true);
    return true;
}

$.get(url,
{ option: value },
function(data) {                              
        $(formSelect).empty();
        $(formSelect).prop('disabled', false);
        $(formSelect).append("<option value=''>" + defVal + "</option>");
        $.each(data, function(key, element) {
            if(key == selectedItem){
                $(formSelect).append("<option selected value='" + key + "'>" + element + "</option>");
            }else{
                $(formSelect).append("<option value='" + key + "'>" + element + "</option>");
            }                             
        });
});
}


   
    
    $( "#name" ).keyup(function() {             
       setInitials();  
    });
    
    $( "#last_name" ).keyup(function() {             
       setInitials();  
    });
    
    function setInitials() {
        $( "#initials" ).val($('#name').val().charAt(0).toUpperCase() + $('#last_name').val().charAt(0).toUpperCase());
    }

</script>


@endsection