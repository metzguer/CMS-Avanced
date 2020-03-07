<nav class="navbar navbar-expand-md navbar-dark text-white bg-dark shadow-sm">
    <div class="container font-weight-bormal">
        
         @include("layouts.partials.item-title")

         @include("layouts.partials.item-toggle")

        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">
               
                <li class="nav-item" >
                    <a href="" class="nav-link text-white">Carousels </a>
                </li>   
                 <li class="nav-item ">
                    <a href="" class="nav-link text-white">Publicaciones </a>
                </li>
                 <li class="nav-item">
                    <a href="" class="nav-link text-white">Navegacion </a>
                </li>
                 <li class="nav-item">
                    <a href="" class="nav-link text-white">Paginas </a>
                </li>
     
                <!-- Authentication Links -->
                @guest
                    @include("layouts.partials.item-login")
                @else
                    @include("layouts.partials.item-logout")
                @endguest
            </ul>
        </div>
    </div>
</nav>
