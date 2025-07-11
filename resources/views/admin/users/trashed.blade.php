<x-app-layout>
        
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row m-4">
                <h3 class="col-8 d-inline">All Trashed Users</h3>
                
            </div> 
        </div>
        <div class="panel-body bg-light text-dark">
           
            <table class="table table-hover">
                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Permisions</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if($users->count() > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td><img src="{{ $user->avater }}" width="100px" height="100px" alt="img" title="{{ $user->avater }}" /></td>
                                        <td><a href="/{{ $user->slug }}" class="">{{ $user->name }}</a></td>
                                        <td>{{ $user->about }}</td>
                                        <td><a href="{{ route('user.delete', ['id' => $user->id]) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <th colspan="5">- No Users -</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
       </div>
        
    </div>
</x-app-layout>