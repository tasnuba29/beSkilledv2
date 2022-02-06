@extends('user.includes.app')
@section('content')


<div class="container">

  <div class="row">
    <div class="col-md-12">





      <div class="col-md-12 col-sm-12 float-left" style="border-top: 1px solid blue">


        @foreach ($course->chapters as $chapter)
        <div id="accordion" class="bg-dark" style="border-top: 1px solid white" >
          <div class="card bg-dark">
            <div class="card-header  text-white bg-dark" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link text-white w-100" data-toggle="collapse" data-target="#collapse{{ $chapter->id }}" aria-expanded="true" aria-controls="collapseOne">
                  Chapter {{ $chapter->title}}
                </button>
              </h5>
            </div>

            <div id="collapse{{ $chapter->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">

                @foreach ($chapter->videos as $videos)
                <div class="mb-2">
                  <a class="text-white" href="{{ asset('course/video/'.$videos->video_link) }}">{{ $videos->video_title }}</a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>












    </div>

    <!-- <div class="col-md-8">

      <video id="example_video_1" class="video-js" controls preload="none" width="640" height="264"  data-setup="{}">
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
        <track kind="captions" src="../shared/example-captions.vtt" srclang="en" label="English">
        <track kind="subtitles" src="../shared/example-captions.vtt" srclang="en" label="English">
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
      </video>




    </div> -->


  </div>

</div>





@endsection