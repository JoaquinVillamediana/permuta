@extends('frontend/layouts.app')
@extends('frontend/layouts.header')
@section('content')
<link rel="stylesheet" href="/css/frontend/product.css">

<div class="mt-5 pb-5 container-fluid">
@if(!empty($aProduct))
      
@foreach($aProduct as $product)
 <div class="container">
		<button type="button" class="btn btn-light"> <a href=""> <i class="fas fa-long-arrow-alt-left" style="font-size:larger;"></i> </a></button>

  <div class="row">
    <div class="col-md-1 col-12">
    
      <div class="row">
        @foreach ($aImages as $image)
        @if ($image->type==0)
          <div class="col-md-12 col mt-2">
            <!-- <img class="d-block w-100 small-image" onclick="changeMainImage('{{$image->image}}','image')" style="width: 100%;height:50px;object-fit:cover" src="/images/publish/{{$image->image}}" alt="First slide"> -->
            <img class="d-block w-100 small-image" onclick="changeMainImage('{{$image->image}}','image')" style="width: 100%;height:50px;object-fit:cover" src="{{ asset('/imgs/450_1000.jpeg') }}" alt="First slide">
            
          </div>
        @else
          <div class="col-md-12 col mt-2">
          <video class="d-block w-100 small-image" onclick="changeMainImage('{{$image->image}}','video')" style="width:100%;height:50px;object-fit:cover" src="/images/publish/{{$image->image}}" loop muted >
          Your browser does not support HTML5 video.
          </video>
        </div>
        @endif
      @endforeach 
      </div>
      
    </div>

    <div class="col-md-6 col-12">
      @foreach ($aImages as $image)
        @if ($image == $aImages[0])
          <div class="col-12 mt-2 div-main-image">
            <!-- <img class=" w-100 main-image"  style="width: 100%;max-height:600px;object-fit:cover" src="/images/publish/{{$image->image}}" > -->
            <img class=" w-100 main-image"  style="width: 100%;max-height:600px;object-fit:cover" src="/images/publish/{{$image->image}}" >

            <video  class=" w-100 main-video" style="width: 100%;max-height:600px;object-fit:cover;display:none"  loop muted autoplay src="">Your browser does not support HTML5 video.</video>
          </div>
        @endif
      @endforeach 
      
    </div>

    <div class="col-md-5 col-12">
      <div class="row mt-2 mt-md-0">
    
        <div class="col-12 mt-3">
          <h5 class="product-title">{{$product->title}}</h5>
        </div>
        <div class="col-12">
          {!! $product->description !!}
        </div>
        <div class="col-12 mt-2">
  
              <p class="card-text product-price" style="color:#000;">${{$product->price}}</p>
           
        </div>
      
       <form style="display: contents;" action="">
        <!-- <div class="col-4 mt-3  text-center" style="margin-right:75%;">
          <p class="mb-0 text-black text-center" style="font-size: 15px">Cantidad</p>
        </div>
        <div  style="height: 45px" class=" col-lg-4 col-10 mt-2"  >
          <input id="quantity" @if(!empty($aCart))disabled @endif name="quantity" type="number" value="1" min="1" max="{{$product->stock}}" step="1" />
        </div> -->

        <div style="height: 45px"  class="col-lg-6 mt-2  col-10 ">
         
          <button  type="submit"  class="d-inline btn btn-add-cart">Contactar</button>
           
         
          
        </div>
        <div style="height: 45px"  class="col-2 col-fav mt-2">
          <button id="favBtn_{{$product->id}}" style="@if(empty($product->favoritos)) display:block; @else display:none; @endif" class="favBtn"  onclick="setFavoriteProduct({{$product->id}})"><i  class="far fa-heart float-right" style="font-size: 25px"></i></button>

          <button id="favBtnActive_{{$product->id}}" style="@if(!empty($product->favoritos)) display:block; @else display:none; @endif" class="favBtnActive" onclick="setFavoriteProduct({{$product->id}})"><i  class="fas fa-heart float-right " style="font-size: 25px"></i></button>
        </div>
      </form>
      <div class="col-12">
          <div class="container mt-4 mb-4 p-3 d-flex justify-content-left" style="padding-left:0!important;">
            <div class="card p-4">
              <div class=" image d-flex flex-column justify-content-center align-items-center"> <img src="/images/users/user.png" height="100" width="100" /> <span class="name mt-3">{{$product->user_name}} {{$product->last_name}}</span>
                <!-- <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span> </div> -->
                  <div class=" d-flex mt-2">  <button  type="submit"  class="d-inline btn btn-add-cart"> <a href="{{ route('user_profile',$product->user_id) }}">Ver Perfil</a></button> </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>


 </div>






@endforeach
    @endif

<style>

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn2 {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
</style>

<script>

function changeMainImage(id,type){
  if(type == 'image')
  {
    url = "/images/publish/"+id;
    $('.main-image').attr('src',url);
    $('.main-video').attr('src','');
    $('.main-video').css('display','none');
    $('.main-image').css('display','block');
  }
  else
  {
    url = "/images/publish/"+id;
    $('.main-video').attr('src',url);
    $('.main-image').attr('src','');
    $('.main-video').css('display','block');
    $('.main-image').css('display','none');
  }
  
}

  
</script>



<script type="text/javascript">


  
  function setFavoriteProduct(productId) {
      
      event.preventDefault();
     
      
      var params = new Object();
      params._token = "{{ csrf_token() }}";
      params.productId = productId;
      
    
  }
  
  function setFavoriteProductResponse(data) {
    
      if(data.favorite > 0) {
          $('#favBtnActive_'+data.productId).css('display', 'block');
          $('#favBtn_'+data.productId).css('display', 'none');
          
      } 
      else{
        $('#favBtnActive_'+data.productId).css('display', 'none');
        $('#favBtn_'+data.productId).css('display', 'block');
      }
  }
  
  function ajaxRequest(type, url, params, callBack) {

      jQuery.support.cors = true;
      params = JSON.stringify(params);

      $.ajax({
          type: type,
          url: url,
          data: params,
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          beforeSend: function () {
              //$('#ajaxLoader').show();
          },
          complete: function () {
              //$('#ajaxLoader').hide();
          },
          success: function (data) {
             //console.log("REQUEST [ " + type + " ] [ " + url + " ] SUCCESS");
             //console.log(data);
              window[callBack](data);
          },
          error: function (msg, url, line) {
             //console.log('ERROR !!! msg = ' + msg + ', url = ' + url + ', line = ' + line);
          }
      });
  }



</script>
<script src="/vendor/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>

@include('frontend/layouts.footer')  
@endsection

