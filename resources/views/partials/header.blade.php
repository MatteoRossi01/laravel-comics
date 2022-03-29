
<header>

    <div class="header-top">
        <div class="box-header-box">
          <span>DC Power&trade; Visa&reg; </span>
          <span>Additional Dc Sites &#9660;</span>
        </div>
    </div>
    
    <div class="container-header">

        <!-- Logo -->
        <div class="box-logo">
            <a href="#">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo-header">  
            </a>  
        </div>
        <!-- Logo -->

        <!-- Menù -->
        <div class="box-menu">

            <ul>
                @foreach ($menuLink as $link)
                    <li>
                        <a href="#">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>

            <div class="input-box">
                <input type="search" name="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>
        <!-- Menù -->

    </div>
</header>