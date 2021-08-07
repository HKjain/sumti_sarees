@extends('layouts.app')

@section('title','Sumti Fashion')

@section('content')
        <center>
            <div id="wrapper" class="mb-3">
                @include('inc.carousel')    
            </div>
            <div class="container mb-3">
                @include('inc.newCarousel')                
            </div>
        </center>


{{-- Arrivals Banner     --}}
<div class="container mt-5">
    <hr color="white">
    <div class="pl-5 pr-5 pt-3 pb-3 mt-3"  data-aos="fade-in">
    <a href="{{ url('contact') }}" style="text-decoration: none;color: white;">
        <h1 class="text-center" style="font-size: 70px;font-weight: 1000;">NEW ARRIVALS</h1>
        <h6 class="text-center" style="font-size: 30px;font-weight: 1000;">AT SHOP, NOW</h6>
    </a>
    </div>
    <hr color="white">
</div>

{{--  --}}
    
@include('inc.festiveOffers')



    {{-- <main class="container"> --}}
<div class="container">
  

        <h1 class="myWhiteText text-center mt-3 mb-3">SHOP BY CATEGORY</h1>

      <section class="cardc" data-aos="fade-right">
        <img src="https://i.ibb.co/VvC0vpN/paint-1.png" alt="" />
        <div>
          <h3>Chiffon</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.

          </p>
          <a href="#" class="btnB">Buy Now</a>
          
        </div>
       
      </section>

      <section class="cardc" data-aos="fade-left">
        <img src="https://i.ibb.co/3NHjDcW/paint-2.png" alt="" />
        <div>
          <h3>Crap</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          <a href="#" class="btnB">Buy Now</a>
        </div>
      </section>

      <section class="cardc" data-aos="fade-right">
        <img src="https://i.ibb.co/0VywMkW/paint-3.png" alt="" />
        <div>
          <h3>Braso</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          <a href="#" class="btnB">Buy Now</a>
        </div>
      </section>

       
 {{--    </main> --}}

</div>
@endsection
