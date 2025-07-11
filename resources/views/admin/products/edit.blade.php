<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Edit Post: {{ $product->title }}
        </div>
        <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" value="{{ $product->title }}" name="title" />
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="20" rows="10">{{ $product->content }}</textarea>
            </div>
            <div class="form-group">
                <img src="{{ $product->featured }}" height="200px" width="200px" alt="{{ $product->slug }}" />
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" value="{{ $product->category_id }}" id="category">
                 
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}"
                        
                    @if($product->category->id == $cat->id)
                        selected
                    @endif
                    >{{ $cat->name }}</option>
                    
                @endforeach
                </select>
            </div>
             <div class="form-group">
                    <label for="tags" class="py-3">Select Tag:</label>
                    @foreach($tags as $tag)    
                        <div class="checkbox"><label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                        @foreach($product->tags as $t)
                            @if($tag->id == $t->id)
                                checked
                            @endif
                        @endforeach
                        > {{ $tag->tag }}</label></div>
                     @endforeach
            </div>
            <div class="form-group ml-auto pt-4">
                <button class="text-center btn btn-xs btn-info">Update Post </button>
                <a href="{{ route('products') }}" class="btn btn-xs text-center btn-danger">Cancel </a>
            </div>
        </form>
    </div>
</x-app-layout>