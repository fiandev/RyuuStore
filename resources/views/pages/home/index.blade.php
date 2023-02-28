@extends("layouts.main")

@section("content")
  <section id="home">
    <div id="carousel" class="relative overflow-hidden" data-te-carousel-init data-te-carousel-slide>
      <div class="aspect-video lg:h-[60vh] relative h-full w-full flex basis-full items-center overflow-y-hidden overflow-x-scroll">
       
        <div class="carousel-item group/corousel-item" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
          <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" class="block w-full" alt="..." />
          <div class="absolute inset-x-[15%] bottom-5 group-hover/corousel-item:block hidden py-5 text-center text-white md:block">
            <h5 class="text-sm">First slide label</h5>
            <p class="text-xs">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item group/corousel-item" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
          <img src="https://images.unsplash.com/photo-1574217013471-c32c6846cef7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Zm90b3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=700&q=60" class="block w-full" alt="..." />
          <div class="absolute inset-x-[15%] bottom-5 group-hover/corousel-item:block hidden py-5 text-center text-white md:block">
            <h5 class="text-sm">First slide label</h5>
            <p class="text-xs">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item group/corousel-item" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
          <img src="https://images.unsplash.com/photo-1594130383459-8e55317a76bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm90b3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=700&q=60" class="block w-full" alt="..." />
          <div class="absolute inset-x-[15%] bottom-5 group-hover/corousel-item:block hidden py-5 text-center text-white md:block">
            <h5 class="text-sm">First slide label</h5>
            <p class="text-xs">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        
      </div>
      
      <button id="carousel-previous" class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
        <i class="fa fa-arrow-left w-8 h-8"></i>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
      </button>
      <button id="carousel-next" class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
        <i class="fa fa-arrow-right w-8 h-8"></i>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
      </button>
      
      <div id="line-controller" class="line-controller" data-te-carousel-indicators></div>
    </div>
    
  </section>
@endsection