<x-app-layout>
    
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
             <div class="row m-4">
                <h3 class="col-8 d-inline">Categories</h3>
                <a href="{{ route('category.create') }}" class="btn btn-success btn-xs text-right ml-auto d-inline col-3">Create Category</a>
            </div> 
        </div>
        <div class="panel-body bg-light text-dark">
            <table class="table table-hover">
                    <thead>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if($categories->count() > 0)
                            @foreach($categories as $cat)
                                <tr>
                                        <td>{{ $cat->name }}</td>
                                        <td><a href="{{ route('category.edit', ['id' => $cat->id]) }}"><i class="fas fa-pencil"></i></a></td>
                                        <td><a href="{{ route('category.delete', ['id' => $cat->id]) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <th colspan="5">- No Category -</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
       </div>
        
    </div>
</x-app-layout>