<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <br>
            Hi <b>{{ Auth::user()->name}}</b>
            <br>
            <b style="float:right; ">Total Users
                <span class="badge badge-danger">{{ count($users) }}</span>
            </b>
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <table class="table">   
                <thead>
                    <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}} </td>
                            <td>{{ Carbon\Carbon::parse($user -> created_at) -> diffForHumans()}} </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
