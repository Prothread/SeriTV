@extends('layouts.index')

@section('content')

    {{-- <div class="box"></div> --}}

<div class="seri-highlights">
    <div class="container">
        <div class="items">
            @for($i = 0; $i < 5; $i++)
                <div class="image" style="background-image: url('/img/{{$result[$i]['image']}}')" >
                    <div class="title textfit">{{ $result[$i]['name'] }}</div>
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="container">
    <div class="flex row">

        <div class="col-12">
            <h1>Anime series</h1>
        </div>

        @foreach($result as $item)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="item radiance" href="#">

                    <div class="flow">
                        <div class="head">
                            <span><i class="fa fa-angle-left"></i></span>
                            <span class="title">Fairy Tail</span>
                            <span class="fullscreen"><i class="fa fa-circle-o"></i></span>
                        </div>

                        <?php // @OPTIONAL Add slider images? ?>
                        <div class="images">
                            <div class="circle image" style="background-image: url('/img/{{$item['image']}}')" ></div>
                            <div class="radial"></div>
                            <div class="radial2"></div>
                            <div class="radial-cancel"></div>
                        </div>

                        <div class="item-overflow">
                            {{-- <div class="title textfit" title="{{ $item['name'] }}">{{ $item['name'] }}</div> --}}
                            <div class="description">{{ $item['description'] }}</div>
                            {{--
                            <div class="categories owl-carousel owl-theme">
                                @foreach($item['genres'] as $genre)
                                    <div class="slide">{{ $genre['genre'] }}</div>
                                @endforeach
                            </div>
                            --}}
                        </div>
                    </div>

                    <div class="go-to-item"><button class="btn btn-primary">Read more   <i class="fa fa-long-arrow-right"></i></button></div>
                </a>
            </div>
          @endforeach
    </div>
</div>
@endsection
