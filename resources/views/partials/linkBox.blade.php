<div class="container-link-box">

    <div class="link-box">
        @foreach ($linkBox as $link)
        <a href="#" class="link-card">
            <div class="box-img-link">
                <img src="{{$link['src']}}" alt="link-img">
            </div>
            <div class="box-txt">
                <span>{{$link['text']}}</span>
            </div>
        </a> 
        @endforeach
    </div>

</div>