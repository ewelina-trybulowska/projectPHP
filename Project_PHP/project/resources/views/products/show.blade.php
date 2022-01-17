<head>
    <link href="{{URL::asset("css/products_index.css")}}" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cinzel&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cinzel', serif;
            font-size: 20px;
            font-style: oblique;
        }
    </style>

    <style>
        .main {
            margin-left: 5px;
        }

        .counter {
            width: 45px;
            border-radius: 0px !important;
            text-align: center;
        }

        .up_count {
            margin-bottom: 10px;
            margin-left: -4px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .down_count {
            margin-bottom: 10px;
            margin-right: -4px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }



    </style>

    <style>
        .button-53 {   background-color: #3DD1E7;
            border: 0 solid #E5E7EB;
            box-sizing: border-box;
            color: #000000;
            display: flex;
            font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size: 1rem;   font-weight: 700;   justify-content: center;   line-height: 1.75rem;
            padding: .75rem 1.65rem;   position: relative;   text-align: center;
            text-decoration: none #000000 solid;   text-decoration-thickness: auto;   width: 100%;   max-width: 460px;   position: relative;   cursor: pointer;   transform: rotate(-2deg);   user-select: none;   -webkit-user-select: none;   touch-action: manipulation; }
        .button-53:focus {   outline: 0; }  .button-53:after {   content: '';   position: absolute;   border: 1px solid #000000;   bottom: 4px;   left: 4px;   width: calc(100% - 1px);
                                                height: calc(100% - 1px); }  .button-53:hover:after {   bottom: 2px;   left: 2px; }  @media (min-width: 768px) {   .button-53 { padding: .75rem 3rem;     font-size: 1.25rem;}}
    </style>



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


    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <img src="{{ url('/') }}{{ $product->image->file_name}}"  style="width: 380px; height: 300px; float: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
            <div class="description" style="float: left; margin: 30px;" >
                <h2>{{ $product->brand . ' ' . $product->model }}</h2>
                <h5 style="font-family: Apple,serif">${{$product->price }}</h5>
               {{-- <p>Quantity available: {{$product->amount}}</p>--}}
                {{-- <p>Size: {{$product->size}}</p>--}}
                <hr>
                <h4>PRODUCT INFO</h4>
                <h6 style="font-size: small">{{ $product->description }}</h6>



                <br>
                <label class='muted'>Wybierz ilość :</label>
                <div class="input-amount">
                    <input class="amount" type="number" name="quantity" value="1"  min="1" max="10" style="background-color: rgba(208, 111, 206, 0.72);">
                </div>

                <br>
                <label class='muted'>Wybierz rozmiar :</label>
                <br>
                <div class="custom-select" style="width:200px;">
                    <select style="background-color: rgba(208, 111, 206, 0.72);">
                        <option value="0" >Select your size:</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                    </select>
                </div>
                <br>
            </div>
            <div class="Cart">
                {{-- <button class="button-53" role="button" href="{{route('koszyk.show')}}">Dodaj do koszyka</button>--}}
                <button class="button-53" role="button">Dodaj do koszyka</button>
            </div>
            <br>
            <br>

        </div>


    </div>

</div>

</body>
