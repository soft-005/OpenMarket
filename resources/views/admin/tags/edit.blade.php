<x-app-layout>
    
    <div class="col-9 panel panel-default">
     @include('layouts.error')

        <div class="panel-heading">
            Edit Tag : {{ $tag->tag }}
        </div>
        <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tag">tag</label>
                <input type="text" id="tag" value="{{ $tag->tag }}" name="tag" />
            </div>
            <div class="form-group">
                <x-primary-button class="text-center">Save Tag </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>