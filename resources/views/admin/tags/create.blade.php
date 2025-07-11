<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Create Tag
        </div>
        <form action="{{ route('tag.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" id="tag" name="tag" />
            </div>
            <div class="form-group">
                <x-primary-button class="text-center">Create Tag </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>