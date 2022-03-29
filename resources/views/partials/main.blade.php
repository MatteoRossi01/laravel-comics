<main>
    <div class="container-main">

      <div class="box-img"></div>

      <div class="box-series">

        <span class="current">CURRENT SERIES</span>

        @foreach ($comics as $comic)
        <div class="card-series"> 
            
                <img class="img-series" src="{{$comic['thumb']}}">
                
                
                <div class="box-text-series">
                    <span class="title-series">{{$comic['title']}}</span>
                </div>
  
        </div>  
        @endforeach

        <a class="load-more" href="">LOAD MORE</a>
      </div>

    </div>
  </main>