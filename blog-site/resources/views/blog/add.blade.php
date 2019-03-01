@extends('layouts.blog')
@section('title')
    @parent - Add new
@endsection
@section('content')
     <div class="content"  style="width: 60%">

         <form class="text-left" method='post' action="{{ route('blog.store') }}" enctype="multipart/form-data" >
         @csrf
        
             <div class="form-group">
                 <label for="inputTitle">Blog's title</label>
                 <input type="text"
                        class="form-control"
                        id="inputTitle"
                        name="inputTitle"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputContent">Blog's content</label>
                 <textarea class="form-control"
                           id="inputContent"
                           name="inputContent"
                           rows="3"
                           required></textarea>
             </div>

             <div class="form-group">
                 <label for="inputCategory"></label>
                 <input type="text"
                        class="form-control"
                        id="inputCategory"
                        name="inputCategory">

             </div>
             <input type='text' name='_method' value='put' hidden/>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <hr>
         <a href="{{ route('blog.index') }}">< Back</a>
     </div>
@endsection