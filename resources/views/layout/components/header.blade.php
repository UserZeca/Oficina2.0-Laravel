
<nav class="header">
                
    <h1>Logo</h1>

    <div class="WrapperButton">
        
        <a class="buttonLink" href=@yield('urlLink1')>
            <button> @yield('nameLink1') </button>
        </a>
    
        <a class="buttonLink" href= @yield('urlLink2')>
            <button> @yield('nameLink2') </button>
        </a> 
    
    </div>

    <div class="WrapperMenuDropdown">
           
        <button class="dropbtn"> 
            <img src="<?php echo asset('asserts/icons/menuDropDown.svg')?>" alt="">
        </button>

        <div class="dropContent">
            <a href=@yield('urlLink1')> @yield('nameLink1')</a>
            <a href=@yield('urlLink2')> @yield('nameLink2')</a>
        </div>
     
    
    </div>


</nav>
