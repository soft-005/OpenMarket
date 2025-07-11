<x-app-layout>
    
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
           <div class="row m-4">
                <h3 class="col-8 d-inline">All Tags</h3>
                <a href="{{ route('tag.create') }}" class="btn btn-success btn-xs text-right ml-auto d-inline col-3">Create a Tag</a>
            </div> 
        </div>
        <div class="panel-body bg-light text-dark">
            <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if($tags->count() > 0)
                            @foreach($tags as $tag)
                                <tr>
                                        <td>{{ $tag->tag }}</td>
                                        <td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}"><i class="fas fa-pencil"></i></a></td>
                                        <td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <th colspan="5">- No Tag -</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
       </div>
        
    </div>
</x-app-layout>