@extends('layouts.blog')
@section('title-ftn', 'delete')
@section('content')
 <div class="flex-center position-ref full-height">


         @if (!isset($blog)) 
             404
         @else
         <div class="content">
         <form class="text-left" method='post' action="{{ route('blog.destroy', $blog->id) }}" enctype="multipart/form-data">
         @csrf
             Do you want to delete {{ $blog->title }}
             <input type='text' name='_method' value='delete' hidden/>
             <input type='text' name='id' value='{{ $blog->id }}' hidden/>
             <div>
             <button type="submit" class="btn btn-primary">Delete</button>
             </div>
         </form>
         <hr>
         
     </div>
         @endif
         <a href="{{ route('blog.modify') }}">< Back</a>

 </div>
@endsection