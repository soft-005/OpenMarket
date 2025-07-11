<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Create Category
        </div>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="categoory" name="name" />
            </div>
            <div class="form-group">
                <x-primary-button class="text-center">Store Category </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>