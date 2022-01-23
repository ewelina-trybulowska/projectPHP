<x-shop>
    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <h3 style="text-align: center">
                THANKS FOR BUYING!
            </h3>
            <hr>


            <h5>Your order number is: {{$order->id}}</h5>
            Hi !
            <div class="details_order">
            Thank you for the order. The order is suspended until the payment is credited.

            <hr>
                <table>
                    <tr>
                        <td style="font-size: 22px; font-weight: bold; color: blueviolet">Bank: </td>
                        <td>ES BANK Bank Spółdzielczy</td>
                    </tr>
                    <tr>
                        <td style="font-size: 22px; font-weight: bold; color: blueviolet">Account number:</td>
                        <td>61 8933 3333 2046 0085 9190 0004</td>
                    </tr>
                </table>
            </div>


        </div>
        <div class="backside" style="background:#E6E6FA;padding: 10px 30px; width: 300px;">
            <a href="{{ route('carts.edit',$products[0])}}">Complete your transaction!</a>
        </div>

{{--
Nie wiadomo jeszcze czy dziala
--}}
      {{--  @if (Auth::check())
        <div class="backside" style="background:#E6E6FA;padding: 10px 30px; width: 300px;">
            <a href="{{ route('dashboard')}}">Go to your account!</a>
        </div>
        @endif--}}


    </div>
</x-shop>
