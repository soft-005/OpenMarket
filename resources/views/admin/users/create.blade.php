<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Create User
        </div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" id="user" name="name" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <div class="form-group text-center">
                <x-primary-button class="text-center">Create User</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>