<x-shop>

    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <h3 style="text-align: center">
                CART
            </h3>
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
                    <a class="button" href="{{route("carts.show",$cart)}}">Order</a>
                </td>
                </tr>

            </table>
        </div>

    </div>



</x-shop>

