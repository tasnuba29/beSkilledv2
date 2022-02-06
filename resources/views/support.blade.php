@extends('includes.app')


@section('css')
<style> 
 #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(7)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
  }
 

  .icon{
    display: none  !important;
  }

  .showhoverhide{
display: block;
  }

  .hidehovershow{
    display:none;
  }

  .singlesupport:hover .hidehovershow{
    display: block;
  }.singlesupport:hover .showhoverhide{
    display: none;
  }

   .boxxx{
    padding-top: 20px;
  }
  

  .featured-services2 .support-link {
    display: block;
    padding: 10px 30px;
}
</style>
@endsection

@section('hero')
{{---
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <!-- <h1>Welcome to Medilab</h1> -->
    <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
    <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
  </div>
</section><!-- End Hero -->

--}}
<section id="pageHero" class="supportHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
          <h1>&nbsp;&nbsp;</h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')


{{-- <header class="section-header2">
    <!-- <h2>Our Values</h2> -->
    <p class="section--header"> &nbsp; </p>
</header> --}}
<!-- ======= Seminar table ======= -->

    <!-- ======= Support Section ======= -->
    <section id="featured-services" class="featured-services2">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col">
            <strong>{{App\Models\additionalSetting::find(8)->value }}</strong>
          </div>
        </div>
        <div class="row text-center">

            @foreach ($support as $support)
                <div class=" singlesupport col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box boxxx" data-aos="fade-up" data-aos-delay="100">
                        <a href="mailto:{{ $support -> email }}" class="support-link">
                        <span class="showhoverhide">
                            <div class="image">
                                <img src="{{ asset('theme/frontend/assets/img/support-icon-image.png') }}" alt=""></i>
                            </div>
                        </span>
                            <h4 class="title">{{ $support -> title }}</h4>
                            <span class="hidehovershow">
                            <p class="small text-white"> Phone : {{ $support -> phone }}</p>
                            <p class="small  text-white"> Mail : {{ $support -> email }}</p>
                            <p class="small  text-white"> <a href="{{ $support -> facebook }}"><i class="bx bxl-facebook text-white" style="
    /* height: 120px; */
    font-size: 25px;
    border: 1px solid white;
"></i></a></p>
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

      </div>
    </section><!-- Support Section -->

@endsection
