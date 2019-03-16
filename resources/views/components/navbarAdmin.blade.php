<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Gallory
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/form-album')}}">Add Gallory</a>
                        <a class="dropdown-item" href="{{url('/show-album')}}">See Gallory</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Article
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/form-article')}}">Add Article</a>
                        <a class="dropdown-item" href="{{url('/show-article')}}">See Article</a>
                    </div>
                </li>
            </ul>
         
        </div>
    </nav>
</div>
