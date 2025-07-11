<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Edit category
        </div>
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" value="{{ $category->name }}" name="name" />
            </div>
            <div class="form-group">
                <x-danger-button class="text-centerbtn-info">Update Category </x-danger-button>
            </div>
        </form>
    </div>
</x-app-layout>