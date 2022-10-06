@extends('backendLayouts.app')

@section('content')
<style>

.container {
    width: 840px;
}
</style>
<div class="container">
    <h4>Add Articles</h4>
  <form id="add-article-form" action="{{ route('storeNewArticle') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="articleNameFormControlInput">Name</label>
    <input type="text" class="form-control" name="articleName"id="articleNameFormControlInput" placeholder="Enter Article Name">
  </div>
  <div class="form-group">
    <label for="articleTypeFormControlSelect">Select Brand Type</label>
    <select class="form-control" name="articleType" id="articleTypeFormControlSelect">
    @foreach ($articleTypes as $articleType)
      <option value="{{ $articleType['id'] }}">{{ $articleType['name'] }}</option>
      @endforeach

    </select>
  </div>
 
  <div class="form-group">
    <label for="priceFormControlNumber1">Price</label>
    <input type="number" class="form-control" name="price"id="priceFormControlNumber1" placeholder="Enter Article Price">
  </div>
<div style="text-align:center">

  <button type="submit" class="btn btn-primary btn-lg">submit</button>
  </div>
</form>
</div>

@endsection

