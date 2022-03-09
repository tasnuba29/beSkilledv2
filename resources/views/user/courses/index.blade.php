@extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }}</h5>
            </div>
            <div class="card-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Title</th>
                                <th>Batch</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>videos</th>
                                <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $i=>$course)

                        @if( $course->course && $course->course->type ==  $type )  
                            
                            <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $course->course->course_title }}</td>
                                    <td>
                                    @if( $course->batch)  
                                    {{ $course->batch->batch_name }} 
                                    @else
                                    Not Assigned
                                    @endif
                                
                                </td>
                                    <td>{{ number_format($course->price,'2') }}</td>
                                    <td>Paid</td>
                                    
                                    <td><a href="{{route('player.index')}}?id={{$course->course->id}}" class="btn btn-primary">
                                            {{ $course->course->courseVideo->count()}}
                                        </a> </td>

                                        
                                    <td>
                                    @if(   $type =="service" ) 
                                    <a href="{{url('single-services',$course->course->id)}}" class="btn btn-info">View</a> 
                                     
                                    @else   
                                    <a href="{{url('single-training',$course->course->id)}}" class="btn btn-info">View</a> 
                                      
                                    @endif
                                        <!-- | <a href="{{ route('chats.index') }}" class="btn btn-success">Chat Now</a> -->
                                     </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
