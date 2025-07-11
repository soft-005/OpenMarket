<x-app-layout>
    <x-slot:styles>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    </x-slot>
   
    

    <div class="col-9 panel panel-default">
        @if(count($errors) > 0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <div class="panel-heading">
            <h2 class="panel-title">{{ __('Create a Post') }}</h2>
            <p class="text-muted">{{ __('Create a new post for your blog') }}</p>
        </div>
        <div class="panel-body p-3 rounded">
            <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="form-group mt-4">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ old('title') }}">
                </div>
                <div class="form-group mt-4">
                    <label for="featured">Featured</label>    
                    <input type="file" accept="*" id="featured" name="featured">
                 </div>
                 <div class="form-group mt-4">
                    <label for="category">Pick a Category</label>
                    <select name="category_id" id="category">
                        @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags" class="py-3">Select Tag:</label>
                    @foreach($tags as $tag)    
                        <div class="checkbox"><label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }}</label></div>
                    @endforeach
                </div>
                <div class="form-group mt-4">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="10" cols="5"></textarea>
                </div>
                <div class="form-group ml-auto pt-4 text-center">
                    <button class="text-center btn btn-xs btn-info">Store Post</button>
                    <a href="{{ route('products') }}" class="btn btn-xs text-center btn-danger">Cancel </a>
                </div>
        
            </form>
        </div>
    </div>

     <x-slot:scripts>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script> 
        <script>
            $(document).ready(function() {
                $('#content').summernote();
            });
        </script>

    </x-slot>
</x-app-layout>