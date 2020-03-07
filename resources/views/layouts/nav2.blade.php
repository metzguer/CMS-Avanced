<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        
         @include("layouts.partials.item-title")

         @include("layouts.partials.item-toggle")

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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