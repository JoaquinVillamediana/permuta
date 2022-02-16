@extends('frontend/layouts.app')
@extends('frontend/layouts.header')
@section('content')
<!-- <link rel="stylesheet" href="/css/admin/products_edit.css"> -->

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
           
            <li class="breadcrumb-item active">Edici&oacute;n de perfil</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 margin-bottom-20" style="margin: 0 auto;">
                    <form method="POST" action="{{ route('store') }}" id="editForm">
          @csrf
          <div class="ind" data-type="1">

            
            <div class="form-row">
              <div class="col-md-6 col-12" id="name">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                  value="{{Auth::user()->name}}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>Campo obligatorio.</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-6 col-12" id="last_name">
                <label for="">Apellido</label>
                <input type="text" class="form-control" disabled value="{{Auth::user()->last_name}}">
              </div>
            </div>
         

          </div>
          <div class="form-row">
            <div class="col-md-6 col-12" id="email">
              <label for="">Email</label>
              <input type="email" class="form-control" disabled value="{{Auth::user()->email}}">
            </div>
            <div class="col-md-6 col-12" id="phone">
              <label for="">Tel&eacute;fono</label>
              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror"
                value="{{Auth::user()->phone}}">
              @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>Tel&eacute;fono inv&aacute;lido.</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 col-12" id="password">
              <label for="">Contraseña</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>M&iacute;nimo 8 car&aacute;cteres.</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-6 col-12" id="password_check">
              <label for="">Repetir contraseña</label>
              <input type="password" name="password_check"
                class="form-control @error('password_check') is-invalid @enderror">
              @error('password_check')
              <span class="invalid-feedback" role="alert">
                <strong>Las contraseñas deben coincidir.</strong>
              </span>
              @enderror
            </div>
          </div>

          <hr>
          <h2>Datos Adicionales</h2>

          <div class="form-row">
            <div class="col-md-6 col-12" id="address">
              <label for="">Dni</label>
              <input type="text" name="address" class="form-control" value="{{ Auth::user()->dni }}">
            </div>
           
          </div>
         
         

          <button class="btn btn-primary mt-4" type="submit">Editar</button>
        </form>
                        
                      
                            <div class="col  offset-md-10">
                                <a href="{{route('profile')}}" class=" btn btn-primary">Finalizar<i class="fas ml-1 fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <br /><br />
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->


   
</div>

<script type="text/javascript">
    function ShowHideDiv(btnPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = btnPassport.value == "Yes" ? "block" : "none";
    }
</script>

<script type="text/javascript">

    function openDelModal(id) {
        formId = id;
        $('#deleteModal').modal('show');
    }

</script>






    


<script src="/js/admin/image_preview.js"></script>
<script src="/js/admin/video_preview.js"></script>

@include('frontend/layouts.footer')
@endsection
