<!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>List Tasks</title>
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
     <!-- CSS -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
 </head>
 <body>
 <div class="flex-center position-ref full-height">
     <div class="content">
         <div class="title m-b-md">
             Add new Blog
         </div>
         <form class="text-left" method='post' action="{{ route('blog.store') }}" enctype="multipart/form-data">
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
 </div>
 <!-- Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
         crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
         integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
         integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
         crossorigin="anonymous"></script>
 </body>
 </html>