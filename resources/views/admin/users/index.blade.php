<x-app-layout>
        
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row m-4">
                <h3 class="col-8 d-inline">All Users</h3>
                <div class=" text-right ml-auto d-inline col-3 row">
                    <a href="{{ route('user.create') }}" class="col-5 mx-auto btn btn-success btn-xs">Create User</a>
                    <a href="{{ route('user.trashed') }}" class="col-5 mx-auto btn btn-warning btn-xs">View trashed</a>
                </div>
            </div> 
        </div>
        <div class="panel-body bg-light text-dark">
           
            <table class="table table-hover">
                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>About</th>
                        <th>Roles</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if($users->count() > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td><img src="{{ $user->profile->avater }}" width="100px" height="100px" alt="img" title="{{ $user->name }}" /></td>
                                        <td><a href="/{{ $user->name }}" class="">{{ $user->name }}</a></td>
                                        <td>{{ $user->profile->about }}</td>
                                        <td>
                                            @if(!empty($user->admin) && strlen($user->admin) > 10)
                                                <!-- <label><input type="checkbox" name="" checked> Admin</label> -->
                                                @if($authUser->email !== $user->email)
                                                    <a href="{{  route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-warning">Remove permisions</a>
                                                @endif
                                            @else
                                                @if($authUser->email !== $user->email)
                                                     <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success">Make admin</a>
                                                @endif
                                            @endif
                                        </td>
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