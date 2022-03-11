@extends('base')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach ($posts as $item)
                <div class="post-preview">
                    <a href="{{URL::to('/view/posts/'.$item->id)}}">
                        <h2 class="post-title">{{$item->title}}</h2>
                        <h3 class="post-subtitle"> {!!substr($item->details, 0, 100).'....'!!}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">{{$item->author}}</a>
                        on {{$item->created_at}}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            @endforeach  
            
            {{$posts->links()}}
          
        
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection