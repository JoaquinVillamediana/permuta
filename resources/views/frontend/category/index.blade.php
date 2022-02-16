@extends('frontend/layouts.app')
@extends('frontend/layouts.header')
@section('content')
@if(!empty($aProducts))

<!-- @foreach($aProducts as $product)



    <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        
                        <img class="" src="/images/publish/{{$product->image}}" alt="Card image cap">
                     
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->title }} </h4>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            <!-- </div>
        </div>
    </div>
</div>


@endforeach
@endif  -->

<div class="products">
	  			
			    <div class="row">

@if(!empty($aProducts))	
						@foreach($aProducts as $oProducts)
							<!-- <div  class="col-sm-12 col-md-6 col-lg-4 mt-6">
								<div class="view overlay hm-black-light m-b-2">
									<a  href="{{ route('product',$oProducts->id) }}">
										<img id="product" src="img/frontend/home/laptop-img.png" class="img-fluid " alt="">
									</a>
								</div>
							</div>	 -->
							<div class="box_main">
                                 <h4 class="shirt_text">{{$oProducts->title}}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ {{$oProducts->price}}</span></p>
                           
								 <div class="tshirt_img"><img src="/images/publish/{{$product->image}}"></div>
								
								 
                                 <div class="btn_main">
								 	@if(empty(Auth::user()->id))

									 	<div class="buy_bt"><a class="boton_contacto" href="{{ route('login') }}">Contactar</a></div>
									 @else
									 <form method="POST" action="{{ route('contact',$oProducts->id) }}" role="form"
										enctype="multipart/form-data">
										<!-- {{ csrf_field() }} -->
										<div class="buy_bt"><button class="boton_contacto"type="submit" >Contactar</button></div>
										</form>
									 		<!-- <div class="buy_bt"><a href="#">Contact</a></div> -->
									 @endif
                                    
                                    <div class="seemore_bt"><a href="{{ route('product',$oProducts->id) }}">See More</a></div>
                                 </div>
                              </div>
						@endforeach
					@endif		</div></div>
@include('frontend/layouts.footer')
@endsection

<style>
    .products{
      margin-top:4%;
      text-align:center;
      margin-left:10%;
      margin-right:10%;
      margin-bottom:4%;
	  
    } 
	.box_main {
		width: 30%;
		background-color: #ffffff;
		height: auto;
		padding: 20px;
		box-shadow: 0px 0 30px 10px #f0f0f0;
		margin-bottom: 20px;
		margin-left: 10px;
		margin-right: 10px;
	}
	.shirt_text {
		width: 100%;
		font-size: 20px;
		color: #30302e;
		text-align: center;
		font-weight: bold;
		padding-bottom: 5px;
	}
	.price_text {
		width: 100%;
		font-size: 16px;
		color: #f26522;
		text-align: center;
		margin: 0px;
	}
	.boton_contacto{
		width: 100%;
    letter-spacing: -0.5px;
    height: 100%;
    background-color: #FBB03B;
    padding: 10px 15px;
    font-size: 10px;
    font-weight: bold;
    border-radius: 25px;
    text-transform: uppercase;
	}
	
	img{
		width: inherit;
	}
	.tshirt_img {
		width: 100%;
		text-align: center;
		margin: 50px 0px;
		min-height: 370px;
	}
	.btn_main {
		width: 100%;
		display: flex;
	}
	
	.buy_bt {
		float: left;
		width: 100%;
	}
	
	.buy_bt a {
		width: 100%;
		font-size: 16px;
		color: #f26522;
		background-color: transparent;
		text-align: right;
		font-weight: bold;
	}
	
	.buy_bt a:hover {
		background-color: transparent;
		color: #262626;
	}
	
	.seemore_bt {
		width: 100%;
		float: right;
		text-align: right;
	}
	
	.seemore_bt a {
		width: 100%;
		font-size: 16px;
		color: #262626;
		background-color: transparent;
		text-align: right;
	}
	
	.seemore_bt a:hover {
		background-color: transparent;
		color: #f26522;
	}
	@media only screen and (max-width: 450px) {


	.box_main {
		width: 95%;
		background-color: #ffffff;
		height: auto;
		padding: 20px;
		box-shadow: 0px 0 30px 10px #f0f0f0;
		margin-bottom: 20px;
		margin-left: 10px;
		margin-right: 10px;
	}
}
</style>