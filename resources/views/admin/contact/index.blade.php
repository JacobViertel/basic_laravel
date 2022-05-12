@extends('admin.admin_master')
@section('admin')
 
 <div class="py-12">
        <div class="container">
            <div class="row">
                <h4>Contact Page</h4>
                <a href="{{route('add.contact')}}"><button class="btn btn-info">Add Contact</button></a>
                <br>
                <br>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Contact Data
                        </div>

                        <div class="container">
                            <div class="row">
                                <table class="table">   
                                    <thead>
                                        <tr>
                                            <th scope="col" width="5%">SL No</th>
                                            <th scope="col" width="15%">Address</th>
                                            <th scope="col" width="15%">E-Mail</th>
                                            <th scope="col" width="25%">Phone</th>
                                            <th scope="col" width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td scope="row">{{ $i++}}</td>
                                                <td>{{ $contact->address }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>
                                                    <a href="{{ url('about/edit/'.$contact->id)}}" class="btn btn-info">Edit</a>    
                                                    <a href="{{ url('about/delete/'.$contact->id)}}" onclick="return confirm('are you sure')"class="btn btn-danger">Delete</a>  
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