<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{config('app.name'), 'ULTERNATE'}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/services')}}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/posts')}}">Blog</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{url('/posts/create')}}">Create Post</a>
            </li>
        </ul>
    </div>
</nav>