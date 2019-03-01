@extends('layouts.blog')
@section('title-ftn', 'Edit')
@section('content') 
     <div class="content">
         @if (!isset($blog)) 
             404
         @else
         <form class="text-left" method='post' action="{{ route('blog.update') }}/{{ $blog->id }}" enctype="multipart/form-data">
         @csrf
        
             <div class="form-group">
                 <label for="inputTitle">Blog's title</label>
                 <input type="text"
                        class="form-control"
                        id="inputTitle"
                        name="inputTitle"
                        value="{{ $blog->title }}"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputContent">Blog's content</label>
                 <textarea class="form-control"
                           id="inputContent"
                           name="inputContent"
                           rows="3"
                           required>{{ $blog->content }}</textarea>
             </div>

             <div class="form-group">
                 <label for="inputCategory"></label>
                 <input type="text"
                        class="form-control"
                        id="inputCategory"
                        name="inputCategory"
                        value="{{ $blog->category }}"
                        />

             </div>
             <input type='text' name='_method' value='put' hidden/>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         @endif
         <hr>
         <a href="{{ route('blog.list') }}">< Back</a>
     </div>
 @endsection