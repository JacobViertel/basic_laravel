@extends('admin.admin_master')
@section('admin')
 
 <div class="py-12">
        <div class="container">
            <div class="row">
                <h4>Home About</h4>
                <a href="{{route('add.about')}}"><button class="btn btn-info">Add Home About</button></a>
                <br>
                <br>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All About Data
                        </div>

                        <div class="container">
                            <div class="row">
                                <table class="table">   
                                    <thead>
                                        <tr>
                                            <th scope="col" width="5%">SL No</th>
                                            <th scope="col" width="15%">Home Title</th>
                                            <th scope="col" width="15%">Short Description</th>
                                            <th scope="col" width="25%">Long Description</th>
                                            <th scope="col" width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach($homeabout as $about)
                                            <tr>
                                                <td scope="row">{{ $i++}}</td>
                                                <td>{{ $about->title }}</td>
                                                <td>{{ $about->short_dis }}</td>
                                                <td>{{ $about->long_dis }}</td>
                                                <td>
                                                    <a href="{{ url('about/edit/'.$about->id)}}" class="btn btn-info">Edit</a>    
                                                    <a href="{{ url('about/delete/'.$about->id)}}" onclick="return confirm('are you sure')"class="btn btn-danger">Delete</a>  
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection