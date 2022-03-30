<footer>

    <div class="footer-top">
        <div class="footer-left">

            
            <div class="col">
                <h2>DC COMICS</h2>
                @foreach ($comicsLink as $link) 
                <span>
                    <a href="#">{{$link['text']}}</a>
                </span>     
                @endforeach
            </div>

            <div class="col">
                <h2>SHOP</h2>
                @foreach ($shopLink as $link)
                <span>
                    <a href="#">{{$link['text']}}</a>
                </span>     
                @endforeach
            </div>

            <div class="col">
                <h2>DC</h2>
                @foreach ($dcLink as $link)  
                <span>
                    <a href="#">{{$link['text']}}</a>
                </span>     
                @endforeach
            </div>

            <div class="col">
                <h2>SITES</h2>
                @foreach ($siteLink as $link) 
                <span>
                    <a href="#">{{$link['text']}}</a>
                </span>     
                @endforeach
            </div>
            

        </div>

        <div class="footer-right"> 
            <img src="http://127.0.0.1:8000/images/dc-logo-bg.png" alt="footer-logo">
        </div>
    </div>

    <div class="footer-down">
        <div class="footer-btn">
            <a href="#">SIGN-UP NOW!</a>
        </div>
        <span class="follow">FOLLOW US</span>
        @foreach ($socialLink as $link)
        <div class="footer-social">
            <a href="">
                <img class="img-social" src="{{$link['src']}}" alt="">
            </a>
        </div>
        @endforeach 
    </div>

</footer>