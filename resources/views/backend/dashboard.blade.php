@extends('backendLayouts.app')

@section('content')
<style>

.container {
    width: 840px;
}
</style>
<div class="container">
    <h4>Articles</h4>
<table id="article-table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Article Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $articles as $article )
            <tr>
                <td>{{ $article->a_id }}</td>
                <td>{{ $article->article_name }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ number_format($article->price,2, '.', ',') }}</td>
                <td>{{ $article->created_at }}</td>
                <td>  
                    @if($article->is_active)
                        <a style="margin-left:5px" title="Click here to in-activate the article" href="{{ route('activationArticle', ['id' => $article->a_id,'status' => 0]) }}" >Active</a></td>
                    @else
                        <a style="margin-left:5px" title="Click here to activate the article" href="{{ route('activationArticle', ['id' => $article->a_id,'status' => 1]) }}" >In active</a></td>
                    @endif
                </td>
                <td><a href="{{ route('editArticle', ['id' => $article->a_id]) }}" ><span class="glyphicon glyphicon-edit"></span></a> 
                <a style="margin-left:5px" href="{{ route('deleteArticle', ['id' => $article->a_id]) }}" ><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>
            @endforeach
            
         
        </tbody>

    </table>
</div>
<script>
    $(document).ready(function() {
    $('#article-table').DataTable();
} );
    </script>
@endsection

