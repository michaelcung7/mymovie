@extends('homepage')

@section('content')

  <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <?php
                            
                            $sliders = DB::table('sliders')->get();
                            ?>
                        @foreach($sliders as $index=>$slider)


                                    <div class="item @if($index==0){{"active"}} @endif">
                                        <a href="{{$slider->linked}}">
                                        <img class="img-responsive img-full" src="{{$slider->poster}}" alt="">
                                        </a>
                                    </div>


                          @endforeach
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Movie Night</h1>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Featured Films
                        <strong>worth watching</strong>
                    </h2>
                    <hr>
                    <!-- get movies from database -->
                    <?php
                            
                            $movies = DB::table('movies')->where('wishlist','=','0')->paginate(8);
                            ?>
                            
                   <div class="row">
            <div class="box">
              @foreach($movies as $movie)
              <div class="col-sm-3 text-center">
                   <div class="overlay">
                    <a href="/movies/{{$movie->id}}">
                     <img class="img-responsive" src="{{$movie->poster_path}}" alt="">
                     </a>
                    <h3>
                        
                    </h3>  
                   </div>
                    
                </div>
               @endforeach
             <div class="clearfix"></div>
            </div>
        </div>
               </div>
                </div>
           
        </div>

        
                    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tmdb Suggested Us
                        <strong>To Upload these!</strong>
                    </h2>
                    <hr>
                    
                   <div class="row">
            <div class="box">
             
             @foreach($popular_movies as $image=>$title)
              <div class="col-sm-3 text-center">
                    <img class="img-responsive" src="https://image.tmdb.org/t/p/w185/{{$image}}" alt="">
                    <h3>{{$title}}
                        
                    </h3>
                </div>
                @endforeach
               
                
               
                <div class="clearfix"></div>
            </div>
        </div>
               </div>
                </div>
           
        </div>




@endsection





