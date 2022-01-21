<x-shop>

    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <h3 style="text-align: center">
                CART
            </h3>
            <hr class="lav">

            @if(!count($products))

                <h5 style="text-align: center">
                    Cart is currently empty
                </h5>
            @else

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
            @endif
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
          {{--  <table>--}}
            @if (!\Session::has('success'))
                <form method="post" action="{{ route('carts.update', $cart) }}">
                    @csrf
                    @method("PUT")
                    <table>
                    <tr>
                     <td class="px-6 py-4 whitespace-nowrap">
                        <label for="discount">Discount Code:</label>
                        <input type="text" id="discount" name="discount" style="border-width: 2px; " placeholder="Enter..." >
                     </td>
                     <td>
                     <td>
                        <input type="submit" value="Submit" >
                     </td>
                    </tr>
                    </table>
                </form>
            @endif


                    <div class="px-6 py-4 whitespace-nowrap">
                            <a class="button" href="{{route("carts.show",$cart)}}">Order</a>
                    </div>



            <div class="error" style="background: #d34343; color: white">
                @if($errors->any())
                    <p>{{$errors->first()}}</p>
                @endif
            </div>
           {{-- <div class="message" style="background: #0c8433 ; color: white">
                @if($messages->any())
                    <p>{{$messages->first()}}</p>
                @endif
            </div>--}}
            @if (\Session::has('success'))
                <div class="alert alert-success">

                        {!! \Session::get('success') !!}

                </div>
            @endif
        </div>
    </div>

</x-shop>

