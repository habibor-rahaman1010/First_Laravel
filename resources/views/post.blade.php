@extends('base')

@section('content')
     <!-- Post Content-->
     <article class="mb-4">
        <div class="container px-4 px-lg-5">


              <!-- Main Content-->
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <p>Here you can write you favorite post!</p>
                            <div class="my-5">
                                
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                                <form action="{{route('upload')}}" method="POST" >
                                    @csrf
                                    <div class="form-floating">
                                        <input class="form-control" id="name" type="text" placeholder="Title" data-sb-validations="required" name="title" />
                                        <label for="name">Title</label>
                                    </div>
                                    

                                    <div class="form-floating"> 
                                        <input class="form-control" id="author" type="text" placeholder="Category" data-sb-validations="required" name="category"/>
                                        <label for="Autor Name">Category</label>
                                    </div>

                                    
                                    <div class="form-floating"> 
                                        <input class="form-control" id="author" type="text" placeholder="Author" data-sb-validations="required" name="author" />
                                        <label for="Autor Name">Author Name</label>
                                    </div> <br>

                                    <div class="form-floating">
                                        <p>Details</p>
                                        <textarea class="form-control" id="editor" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required" name="details"> 
                                        </textarea>
                                        
                                    </div>
                                    <br /> 
                                    <!-- Submit Button-->
                                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
            <script>
                 CKEDITOR.replace( 'editor' );
            </script>
@endsection