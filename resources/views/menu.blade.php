
@extends('layouts.main')
@include('partials.head-home')
{{-- <title>MakanYuk | {{ 'Menu' }}</title> --}}
@section("isiWeb")
@include('partials.cssmenu')
    <h1 style="text-align: center; margin: 50px 100px 50px 100px; font-family: Outfit, sans-serif;">
        MENU LIST
    </h1>

    <div style="margin-left: 18%;" class="container">
        <form action="/action_page.php">
            <!-- <input type="date"/> -->
            <input style="margin-left: 8%;" name="somedate" type="date">
            <!-- <input min=""  class="calendar" type="date" id="datepicker" name="datepicker"> -->
        </form>
    </div>

    <div class="container">
        <div style="margin-left: 12%;" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($menu as $m)
            <div class="col mb-5">
                <div class="containermenu">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/300x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <a href="{{ url('menu/product/'.$m->ID_MENU) }}"
                            class="fw-bolder"><h5 style="color: black">{{ $m -> NAMA_MENU}}</h5></a>
                            <!-- Product price-->
                            {{ $m -> HARGA_MENU}}
                        </div>
                        <!-- Add to favourite -->
                        <div style="text-align: right;">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <script>
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        var tmr = tomorrow.toISOString().split('T')[0];

        document.getElementsByName("somedate")[0].setAttribute('min', tmr);
    </script>

@endsection
