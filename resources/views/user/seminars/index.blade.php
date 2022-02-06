@extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} </h5>
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
                                <th>Date</th>
                                <th> Title</th>
                                <th>Location</th>
                                <th>Venue</th> 
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($seminars as $i=>$seminar)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ date('M-d Y', strtotime($seminar->seminar->date)) }}</td>
                                    <td>{{ $seminar->seminar->title }}</td>
                                    <td>{{ $seminar->seminar->location }}</td>
                                    <td>{{ $seminar->seminar->venue }}</td>
                                   
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
