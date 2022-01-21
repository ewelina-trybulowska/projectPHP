<head>
    <style>
        hr.lav {
            color: lavenderblush;
        }
        .header_text {
            font-family: 'Cinzel', serif;
            font-size: 30px;

        }
    </style>
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

    <hr/>


    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <div class="header_text">
                CART
            </div>
            <hr class="lav">
            <table class="min-w-full bg-white divide-y divide-gray-200">

                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Brand:
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Type:
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total price:
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total amount:
                    </th>
                </tr>

            @foreach($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $product->brand }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $product->type }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $product->pivot->total_product_price }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $product->pivot->total_product_amount }}</div>
                    </td>
                </tr>
            @endforeach
            </table>

            <table >
                <tr >
                    <td  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total price of items:
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap" >
                        <div  class="min-w-full bg-white divide-y divide-gray-200" >{{ $cart->total_price }}</div>
                    </td>

                    <td  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total amount of items:
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div  class="min-w-full bg-white divide-y divide-gray-200">{{ $cart->total_amount }}</div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Discount code:
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" id="discount" name="discount" style="border-width: 2px" placeholder="Enter your dicount code...">
                    </td>
                </tr>

                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a class="button" href="">Order</a>
                </td>
                </tr>

            </table>
        </div>

    </div>

</div>

</body>

