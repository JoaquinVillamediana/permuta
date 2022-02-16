@extends('frontend/layouts.app')
@extends('frontend/layouts.header')

@section('content')


<link rel="stylesheet" href="{{ asset("css/frontend/profile.css") }}">
	<!-- Collapse button-->
  
 	<main>
		<div class="container">
		<button type="button" class="btn btn-light"> <a href=""> <i class="fas fa-long-arrow-alt-left" style="font-size:larger;"></i> </a></button>
			
			<section id="data">
			<div class="row m-b-r m-t-3">
				<div class="col-md-2 offset-md-1">
					<img src="/images/users/user.png" id="profile"alt="" class="img-circle img-fluid">
				</div>
				<div class="col-md-9 p-t-2">

				@if(!empty($aUsers))
				@foreach($aUsers as $u)
					<h2 class="h2-responsive">{{ $u->name }} </h2>
					<p><i class="fas fa-envelope"></i> E-mail: {{ $u->email }} </p>
					<p><i class="fas fa-phone"></i> Teléfono: {{ $u->phone }} </p>
					<ul class="flex-menu">
						<li><strong>{{ $products }}</strong> Publicaciones</li>
						<li><strong>2k</strong> Permutas</li>
						<li><strong>20</strong> opiniones</li>
					</ul>
				@endforeach
				@endif
				</div>
			</div>
			</section>
			<hr>
			
      		<div class="products">
	  			<h2 class="publications_title">Productos</h2>
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
                                 @if(!empty($aImages))
								 @foreach($aImages as $oImages)
								 
								 @if($oImages->product_id == $oProducts->id)
								 <div class="tshirt_img"><img src="/images/publish/{{$oImages->image}}"></div>
								

								 
								 @endif
								 @endforeach
								 @else
								 <div class="tshirt_img"><img src="/images/users/user.png"></div>
								@endif
								 
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="{{ route('product',$oProducts->id) }}">See More</a></div>
                                 </div>
                              </div>
						@endforeach
					@endif		
      			</div>		
			</div>
		</div>
	</main>

@include('frontend/layouts.footer')
@endsection