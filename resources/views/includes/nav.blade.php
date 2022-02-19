@php
$navTrainngs = App\Models\course::where('type','training')->orderBy('serial')->get()->take(6);
$navServices = App\Models\course::where('type','service')->orderBy('serial')->get()->take(6);

@endphp



<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="#">Company Profile</a>
            <ul>
                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ (request()-> is('ourTeam')) ? 'active' : '' }}"><a href="{{route('ourTeam')}}">Our Team</a></li>

                <li class="{{ (request()-> is('officies')) ? 'active' : '' }}"><a href="{{route('officies')}}">Our Offices</a></li>

            </ul>
        </li>



        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="#">Academic courses</a>
            <ul>
                @foreach($navServices as $navService)


                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{url('single-services',$navService->id)}}">{{$navService->course_title}}</a></li>

                @endforeach
                <a href="{{route('services')}}" class="font-weight-bold font-italic">More >> </a>




            </ul>
        </li>



        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="#"> skill development courses</a>
            <ul>


                @foreach($navTrainngs as $navTrainng)


                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('singleTrainings',$navTrainng->id)}}">{{$navTrainng->course_title}}</a></li>

              

                @endforeach

                <a href="{{route('trainings')}}" class=" font-weight-bold font-italic">More >> </a>


            </ul>
        </li>


 
     

        <li class="{{ (request()-> is('seminar')) ? 'active' : '' }}"><a href="{{route('seminar')}}">Seminar</a></li>
        <li class="{{ (request()-> is('support')) ? 'active' : '' }}"><a href="{{route('support')}}">Support</a></li>
        <!-- <li class="{{ (request()-> is('marketplace')) ? 'active' : '' }}"><a href="{{ route('marketplace') }}">Marketplace</a></li> -->


    </ul>
</nav><!-- .nav-menu -->