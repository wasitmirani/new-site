@if(session()->has('message'))
 <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert"></button>
 {{session()->get('message')}}
   </div>
  @endif
<form action="{{ route('blog.create')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="input-group">
        <input type="text" class="form-control" id="title" placeholder="title" name="title" required="">
        <label for="title">Title</label>
    </div>


    <div class="input-group form-textarea">
        <textarea class="form-control" id="description" name="description"></textarea>
        <label for="message">description</label>
    </div>

    <div class="input-group">
        <input type="file" class="form-control" name="image">
        <label for="image">Image</label>
    </div>

    <div class="input-group">
        <input type="submit" class="btn btn-danger" value="submit">
    </div>
</form>
