<x-app-layout>
        
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Posts
        </div>
        <div class="panel-body bg-light text-dark">
            <table class="table table-hover">
                    <thead>
                        <th>Image</th>
                        <th>Post Title</th>
                        <th>Content</th>
                        <th>Deleted at</th>
                        <th>Restore</th>
                        <th>Destroy</th>
                    </thead>
                    <tbody>
                        @if($trash->count() > 0)
                            @foreach($trash as $product)
                                <tr>
                                    <td><img src="{{ $product->featured }}" alt="img" title="{{ $product->slug }}" /></td>
                                        <td><a href="/{{ $product->slug }}" class="">{{ $product->title }}</a></td>
                                        <td>{{ $product->content }}</td>
                                        <td>{{ $product->deleted_at }}</td>
                                        <td><a class="btn btn-xs btn-success" href="{{ route('product.restore', ['id' => $product->id]) }}"><i class="">Restore</i></a></td>
                                        <td><a href="{{ route('product.kill', ['id' => $product->id]) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <th colspan="5">- No trashed post -</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
       </div>
        
    </div>
</x-app-layout>