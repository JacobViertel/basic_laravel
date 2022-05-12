@extends('admin.admin_master')
@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <br>
            <br>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Message Data
                    </div>

                    <div class="container">
                        <div class="row">
                            <table class="table">   
                                <thead>
                                    <tr>
                                        <th scope="col" width="5%">SL No</th>
                                        <th scope="col" width="15%">Name</th>
                                        <th scope="col" width="15%">E-Mail</th>
                                        <th scope="col" width="25%">Subject</th>
                                        <th scope="col" width="15%">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach($messages as $message)
                                        <tr>
                                            <td scope="row">{{ $i++}}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>  
                                                <a href="{{ url('about/delete/'.$message->id)}}" onclick="return confirm('are you sure')"class="btn btn-danger">Delete</a>  
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