@section('navbar')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand "><h2>Acme</h2></a>
        <button class="navbar-toggler" data-target="#Nav" data-toggle="collapse"><i class="navbar-toggler-icon"></i></button>
        <div class="collapse navbar-collapse" id="Nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link {{Request::is('/')? 'active': ''}}">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link {{Request::is('about')? 'active': ''}}">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link {{Request::is('contact')? 'active': ''}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>