<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desea Terminar la sesi&oacute;n ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Presione "Logout" si desea finalizar la sesi&oacute;n actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿ Desea eliminar el registro ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Eliminar" para borrar el registro permanentemente.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" onclick="document.getElementById('deleteForm_' + formId).submit();">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Custom Block Modal-->
<div class="modal fade" id="addCustomBlockModal" tabindex="-1" role="dialog" aria-labelledby="addCustomBlockLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCustomBlockLabel">Agregar Bloque</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="custom_block_modal_item" data-type="1" data-toggle="tooltip" data-placement="right" title="Texto">
                    <i class="fas fa-align-justify"></i>
                </div>

                <div class="custom_block_modal_item" data-type="2" data-toggle="tooltip" data-placement="right" title="Imagen">                 
                    <i class="far fa-image"></i>           
                </div>

                <div class="custom_block_modal_item" data-type="3" data-toggle="tooltip" data-placement="right" title="Video">       
                    <i class="fas fa-video"></i>       
                </div>

                <div class="custom_block_modal_item" data-type="4" data-toggle="tooltip" data-placement="right" title="Texto > Imagen">
                    <i class="fas fa-align-justify"></i><span class="divider"></span><i class="far fa-image"></i> 
                </div>

                <div class="custom_block_modal_item" data-type="5" data-toggle="tooltip" data-placement="right" title="Imagen > Texto">
                    <i class="far fa-image"></i><span class="divider"></span><i class="fas fa-align-justify"></i>
                </div>

                <div class="custom_block_modal_item" data-type="6" data-toggle="tooltip" data-placement="right" title="Texto > Video">
                    <i class="fas fa-align-justify"></i><span class="divider"></span><i class="fas fa-video"></i> 
                </div>

                <div class="custom_block_modal_item" data-type="7" data-toggle="tooltip" data-placement="right" title="Video > Texto">
                    <i class="fas fa-video"></i><span class="divider"></span><i class="fas fa-align-justify"></i>
                </div>

                <div class="custom_block_modal_item" data-type="8" data-toggle="tooltip" data-placement="right" title="Imagen > Video">
                    <i class="far fa-image"></i><span class="divider"></span><i class="fas fa-video"></i> 
                </div>

                <div class="custom_block_modal_item" data-type="9" data-toggle="tooltip" data-placement="right" title="Video > Imagen">
                    <i class="fas fa-video"></i><span class="divider"></span><i class="far fa-image"></i>
                </div>

                <div class="custom_block_modal_item" data-type="10" data-toggle="tooltip" data-placement="right" title="Imagen > Imagen">
                    <i class="far fa-image"></i><span class="divider"></span><i class="far fa-image"></i> 
                </div>

                <div class="custom_block_modal_item" data-type="11" data-toggle="tooltip" data-placement="right" title="Video > Video">
                    <i class="fas fa-video"></i><span class="divider"></span><i class="fas fa-video"></i>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteBlockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿ Desea eliminar el bloque ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Eliminar" para borrar el bloque permanentemente.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" onclick="deleteCustomBlock(delBlockButtonId);">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal-->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar foto de perfil</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mt-3">
                    <form method="POST" action="{{ route('addimage') }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" >
                    <input type="hidden" name="product_id" id="product_id" value="{{empty($product_id) ? '' : $product_id}}">
                    <input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image">
                    @if ($errors->has('image'))
                            <span id="image_error_lrv" class="invalid-feedback" role="alert" style="display:block;">
                                <strong>Debe cargar una imagen ( .jpeg, .jpg, .png, .gif ).</strong>
                            </span>
                            @endif
                            <span id="image_error" class="invalid-feedback" role="alert" style="display:none;">
                                <strong>Debe cargar una imagen ( .jpeg, .jpg, .png, .gif ).</strong>
                            </span>
                         
                            <div id="preview_image" class="mt-2" style=" display:none;"></div> 
                               
              
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="submit">Cargar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Image profile picturw Modal-->
<div class="modal fade" id="userprofilepictureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: transparent!important; border: none !important;">
            <div class="modal-header" style="background-color: transparent!important; border-bottom:none!important;">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Editar foto de perfil</h5> -->
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white !important;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <img  style="max-width: 100%;max-height:100vh;" src="@if(!empty($oUsers->profile_image))images/profile_pictures_users/{{$oUsers->profile_image}}@endif" alt="">
            </div>
           
    
        </div>
    </div>
</div>
<!-- Image profile picturw Modal-->
<div class="modal fade" id="randomuserprofilepictureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: transparent!important; border: none !important;">
            <div class="modal-header" style="background-color: transparent!important; border-bottom:none!important;">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Editar foto de perfil</h5> -->
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white !important;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <img style="max-width: 100%;max-height:100vh;" src="@if(!empty($oUserDates->profile_image)) {{ asset('/images/profile_pictures_users/'.$oUserDates->profile_image) }} @else  {{ asset('/images/logoreducido.png') }} @endif" alt="">
            </div>
           
    
        </div>
    </div>
</div>
<!-- Delete account -->
<div class="modal fade" id="deleteaccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar eliminación de cuenta</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Eliminar" para eliminar de forma <b class="text-danger">permanentemente</b>.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="document.getElementById('deleteForm2_' + formUserId).submit();">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete article  -->



<!-- Respuesta -->
<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Escribir respuesta</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Eliminar" para eliminar de forma <b class="text-danger">permanentemente</b>.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="document.getElementById('deleteForm2_' + formUserId).submit();">Eliminar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar foto de perfil</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mt-3">
                    <form method="POST" action="{{ route('addimage') }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" >
                    <input type="hidden" name="product_id" id="product_id" value="{{empty($product_id) ? '' : $product_id}}">
                    <input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image">
                    @if ($errors->has('image'))
                            <span id="image_error_lrv" class="invalid-feedback" role="alert" style="display:block;">
                                <strong>Debe cargar una imagen ( .jpeg, .jpg, .png, .gif ).</strong>
                            </span>
                            @endif
                            <span id="image_error" class="invalid-feedback" role="alert" style="display:none;">
                                <strong>Debe cargar una imagen ( .jpeg, .jpg, .png, .gif ).</strong>
                            </span>
                         
                            <div id="preview_image" class="mt-2" style=" display:none;"></div> 
                               
              
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="submit">Cargar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--  Respuesta-->



{{-- NotApply MODAL --}}

<div class="modal fade" id="CantApplyModal" tabindex="-1" role="dialog" aria-labelledby="CantApplyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="CantApplyModalLabel">Tienes que estar registrado para postularte a esta oferta.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a href="{{ route('register') }}" class="btn btn-tuproximo">Registrarme</a>
        </div>
      </div>
    </div>
  </div>


  <!-- DELETE JOB MODAL -->
<div class="modal fade" id="deleteJobModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Eliminar" para eliminar de forma <b class="text-danger">permanentemente</b> el registro.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="document.getElementById('deleteForm_' + formId).submit();">Eliminar</button>
            </div>
        </div>
    </div>
</div>