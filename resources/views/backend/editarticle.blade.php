@extends('backendLayouts.app')

@section('content')
<style>
.container {
    width: 840px;
}
</style>
<div class="container">
    <h4>Edit Article</h4>
  <form id="edit-article-form" action="{{ route('updateArticle') }}" method="POST">
  @csrf
  <input type="hidden"  name="id" value="{{ $article[0]->id}}">

  <div class="form-group">
    <label for="articleNameFormControlInput">Name</label>
    <input type="text" class="form-control" name="articleName" value="{{ $article[0]->article_name}}" id="articleNameFormControlInput" placeholder="Enter Article Name">
  </div>
  <div class="form-group">
    <label for="articleTypeFormControlSelect">Select Brand Type</label>
    <select class="form-control" name="articleType" id="articleTypeFormControlSelect">
    @foreach ($articleTypes as $articleType)
      <option value=" {{$articleType['id'] == $article[0]->article_type_id?$article[0]->article_type_id:$articleType['id']}}" {{$articleType['id'] == $article[0]->article_type_id?"selected":""}}>{{ $articleType['name'] }}</option>
      @endforeach
     
    </select>
  </div>
 
  <div class="form-group">
    <label for="priceFormControlNumber1">Price</label>
    <input type="number" class="form-control" value="{{$article[0]->price}}" name="price"id="priceFormControlNumber1" placeholder="Enter Article Price ">
  </div>
<div style="text-align:center">
  <button type="submit" class="btn btn-primary btn-lg">submit</button>
  </div>
</form>
</div>

@endsection

