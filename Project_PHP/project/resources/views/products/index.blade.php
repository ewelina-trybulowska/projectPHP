<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SHOES STORE</title>

    <link href="{{URL::asset("css/products_index.css")}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cinzel&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'Cinzel', serif;
            font-size: 20px;
            font-style: oblique;

        }

    </style>
    <script>
/*
        $("#size").empty();
*/
    </script>
</head>

<body>
<div class="main">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline"><img style="width: 60px; height: 60px"
                                                                                       src="https://media.istockphoto.com/vectors/shopping-cart-line-icon-fast-buy-vector-logo-vector-id1184670036?k=20&m=1184670036&s=612x612&w=0&h=FpKQukhJ4X8WQkucHPbCqANJROKYB2v3k9ov3x-3vdI="
                                                                                       alt="Shop"/></a>
        </div>
    @endif
    <div id="header">
        <div class="start_menu">
            <div>
                <a href="{{ route('mainpage') }}"><img style=" display: block;margin: 10px auto 30px auto;"
                                                       src="{{URL::asset('Images/LOGO.png')}}"
                                                       alt="Shop"/></a>
            </div>
        </div>
    </div>
    <hr/>
    <div class="flex-parent jc-center">
        <a class="button" href="{{route('products.women')}}">Women</a>
        <a class="button2" href="{{route('products.men')}}">Men</a>
    </div>
    <hr/>
    <h3 style="text-align: center; font-size: small">{{$products->count()}} products are available</h3>
    <hr style="width: 100%"/>

        {{--  FILTER PANEL --}}
        <form method="post" action="{{ route('products.search') }}">
            @csrf
{{--
            <div class="wrapper" style="overflow: hidden">
--}}
                <div class="card" style="border-width: 3px; width:250px; float: left; margin-right: 80px;">
                    <article class="card-group-item" style="background-color: lavenderblush">
                        <header class="card-header">
                            <h3 class="title">FILTER</h3>
                        </header>
                    </article>
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Type</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="brand" value="lasocki">
                                    <span class="form-check-label">
			    Lasocki
			  </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="brand" value="deezee">
                                    <span class="form-check-label">
			    Deezee
			  </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="brand" value="nike">
                                    <span class="form-check-label">
			    Nike
			  </span>
                                </label>
                            </div>
                        </div>
                    </article>

                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Type</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="boots">
                                    <span class="form-check-label">
			    Boots
			  </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="sneakers">
                                    <span class="form-check-label">
			    Sneakers
			  </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="high-heels">
                                    <span class="form-check-label">
			    Elegant
			  </span>
                                </label>
                            </div>
                        </div>
                    </article>
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Size</h6>
                        </header>
                        <div class="filter-content">

                                <label for="#size">
                                    <select class="custom-select mr-sm-2 sm:rounded-lg" name="size"
                                            style="border-width: 2px; margin: 20px 65px">
                                        <option selected>Choose</option>
                                        <option name="size" value="37">37</option>
                                        <option name="size" value="38">38</option>
                                        <option name="size" value="39">39</option>
                                        <option name="size" value="40">40</option>
                                        <option name="size" value="41">41</option>
                                        <option name="size" value="42">42</option>
                                    </select>
                                </label>

                        </div>
                    </article>
                    <div class="submit" style="margin: 20px 50px">
                        <button id="but">SEARCH</button>
                    </div>



            </div>
        </form>


        {{-- PRODUCT --}}

        <div class="container shadow sm:rounded-lg border-gray-100" style="float: left">

            <div class="clearfix">
                @if($products)
                    @foreach($products as $product)
                        <div class="img-container">

                        <img src="{{ url('/') }}{{ $product->image->file_name}}"
                                 style="width: 380px; height: 300px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>

                            <div class="details" style="margin-top: 20px">
                                <h3>{{ $product->brand . ' ' . $product->model }}</h3>
                                <p>PRICE: {{$product->price }}$</p>
                                <a href="{{ route('products.show',$product)}}" style="color: #4a5568">Details</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

</body>
