<x-app-layout>
        
    <div class="col-9 panel panel-default">
       <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row m-4">
                <h3 class="col-xs-5 col-sm-5 col-lg-7 col-md-7 d-inline">All Posts</h3>
                <div class=" text-right ml-auto d-inline col-xs-7 col-sm-7 col-lg-5 col-md-5 row">
                    <a href="{{ route('product.create') }}" class="col-5 mx-auto btn btn-success btn-xs">Create a Post</a>
                    <a href="{{ route('product.trashed') }}" class="col-5 mx-auto btn btn-warning btn-xs">View trashed</a>
                </div>
            </div> 
        </div>
        <div class="panel-body bg-light text-dark">
           
            <table class="table table-hover">
                    <thead>
                        <th>Image</th>
                        <th>Post Title</th>
                        <th>Content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                      
                        @if($posts->count() > 0)
                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="{{ $post->featured }}" width="100px" height="100px" alt="img" title="{{ $post->slug }}" /></td>
                                        <td><a href="/{{ $post->slug }}" class="">{{ $post->title }}</a></td>
                                        <td>{{ $post->content }}</td>
                                        <td><a href="{{ route('product.edit', ['id' => $post->id]) }}"><i class="fas fa-pencil"></i></a></td>
                                        <td><a href="{{ route('product.delete', ['id' => $post->id]) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                            
                        @else
                            <tr class="text-center">
                                <th colspan="5">-&nbsp;No Publshed post&nbsp;-</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
<div>{{ $posts->links() }}</div>
        </div>
       </div>
       
    </div>
</x-app-layout>