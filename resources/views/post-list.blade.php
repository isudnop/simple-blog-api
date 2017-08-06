@include('partials.header')
<div class="container content-center">
    <div class="col-md-8 col-md-offset-2">
        <section>
            <div class="panel panel-default top login-radius">
                <div class="panel-body">
                    <h3 class="text-center">Post list</h3>
                    <div class="row">
                        <div class="col-sm-1">ID</div>
                        <div class="col-sm-3">Title</div>
                        <div class="col-sm-5">Body</div>
                        <div class="col-sm-3">Create time</div>
                    </div>
                    @foreach($posts as $post)
                        <div class="row">
                            <div class="col-sm-1">{{ $post->id }}</div>
                            <div class="col-sm-3">{{ $post->title }}</div>
                            <div class="col-sm-5">{{ $post->body }}</div>
                            <div class="col-sm-3">{{ $post->created_at }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</div>
@include('partials.footer')
