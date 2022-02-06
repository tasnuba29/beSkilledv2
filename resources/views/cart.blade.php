@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("{{ asset('theme/frontend/assets/img/single_service_header.jpg') }}") center center;
  }

  #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(6)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
  }
 

</style>
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->

<section id="pageHero" class="singleServiceHero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color: white;">&nbsp;&nbsp; </h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->


@endsection

@section('content')




<!-- ======= Values Section ======= -->
<div class="container">



  <section id="singleService">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="content">
            <h2> Shopping Cart </h2>
           <br>
           <br>
           <br>


 
            @foreach(Auth::user()->cart as $cart)
              
            @if(  $cart -> course)
              <div class="media">
                <img src="{{  asset('course/images/'.$cart->course->image) }}" class="mr-3" alt="{{ $cart->course->image}}" width="150px">
                <div class="media-body">
                  <h5 class="mt-0">{{ $cart->course->course_title}}</h5> <br>
                  <p> TK {{ $cart->course->price}}
               
                  <a href=""><button type="submit" class=" btn appointment-btn scrollto  ">Pay now</button>  </a>
                    <a href="{{ route('carts.show',$cart->id)}}"><button type="submit" class=" btn appointment-btn scrollto btn-danger bg-danger  ">remove</button>  </a>
  

                    </p>

                </div>
              </div>
              @else
         

              <div class="media">
                <img src="{{ asset('seminar/images/'.$cart->seminar->breadcrumb_image) }}" class="mr-3" alt="{{ $cart->seminar->image}}" width="150px">
                <div class="media-body">
                  <h5 class="mt-0">{{ $cart->seminar->title}}</h5>
                  <p> TK {{ $cart->seminar->price}} 
                    
                  <a href=""><button type="submit" class=" btn appointment-btn scrollto  ">Pay now</button>  </a>
                    <a href="{{ route('carts.show',$cart->id)}}"><button type="submit" class=" btn appointment-btn scrollto btn-danger bg-danger  ">remove</button>  </a>
                  
                  </p>

                </div>
              </div>
              @endif

            <br>
            <hr>

            @endforeach


          </div>
        </div>




      </div>
    </div>
  </section>
</div>








@endsection