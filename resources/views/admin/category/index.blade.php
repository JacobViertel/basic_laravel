<x-app-layout>
    <x-slot name="header">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong> You can continue withyour work
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            All Category
                        </div>

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
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> Add Category

                        </div>
                        <div class="card-body">
                           <form action="{{ route('store.category') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="category_name" placeholder="New Cat Name">

                                @error('category_name')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                                
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        

    </div>

    
</x-app-layout>
