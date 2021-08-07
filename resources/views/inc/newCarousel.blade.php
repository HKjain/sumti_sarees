@section('newCarousel')

  <div id="smallCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#smallCarousel" data-slide-to="0" class="active" style="border-radius: 50%;width: 10px;height: 10px;"></li>
      <li data-target="#smallCarousel" data-slide-to="1" style="border-radius: 50%;width: 10px;height: 10px;"></li>
      <li data-target="#smallCarousel" data-slide-to="2" style="border-radius: 50%;width: 10px;height: 10px;"></li>
      <li data-target="#smallCarousel" data-slide-to="3" style="border-radius: 50%;width: 10px;height: 10px;"></li>
      <li data-target="#smallCarousel" data-slide-to="4" style="border-radius: 50%;width: 10px;height: 10px;"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL::asset('/images/cover4.jpg')}}"  class="w-100" style="max-width: 850px;max-height: 400px;" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('/images/cover5.jpg')}}"  class="w-100" style="max-width: 850px;max-height: 400px;" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('/images/cover2.jpg')}}"  class="w-100" style="max-width: 850px;max-height: 400px;" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('/images/cover7.jpg')}}"  class="w-100" style="max-width: 850px;max-height: 400px;" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('/images/cover9.jpg')}}"  class="w-100" style="max-width: 850px;max-height: 400px;" alt="...">
        
      </div>
    </div>
    <a class="carousel-control-prev" href="#smallCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#smallCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  @show