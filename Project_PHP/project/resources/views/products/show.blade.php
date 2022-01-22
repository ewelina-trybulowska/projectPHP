<x-shop>
    <div class="col-sm-6 container shadow sm:rounded-lg border-gray-100" style="padding: 20px;">

        <div class="clearfix" >

            <img src="{{ asset( 'storage/images/' . $product->image->file_name) }}" style="width: 380px; height: 300px; float: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
            <div class="description" style="float: left; margin: 30px;" >
                <h2>{{ $product->brand . ' ' . $product->model }}</h2>
                <h5 style="font-family: Apple,serif">${{$product->price }}</h5>
               {{-- <p>Quantity available: {{$product->amount}}</p>--}}
                {{-- <p>Size: {{$product->size}}</p>--}}
                <hr>
                <h4>PRODUCT INFO</h4>
                <h6 style="font-size: small">{{ $product->description }}</h6>



                <br>
                <label class='muted'>Quantity:</label>
                <div class="input-amount">
                    <input class="amount" type="number" name="quantity" value="1"  min="1" max="10" style="background-color:#f6d8df;">
                </div>

                <br>
                <label class='muted'>Select your size: :</label>
                <br>
                <div class="custom-select" style="width:200px;">
                    <select style="background-color:#f6d8df;">
                        <option value="0" >Select:</option>

                        @foreach( \App\Models\Shelf::where('product_id', $product->id)->get() as $row)
                            <option name="size" value="{{$row->size}}">{{$row->size}}</option>
                        @endforeach



                    </select>
                </div>
                <br>
                <br>

                <a href="{{ route('products.reviews.index', $product)}}" style="color: #4a5568; background-color:#d4a8ec; padding: 10px 30px;">SEE OPINIONS</a>
                <br>
                <br>

                <a href="{{ url()->previous() }}" style="background:#E6E6FA;padding: 10px 30px; width: 600px;">Return to products list</a>

            </div>


            <div class="Cart">
                {{-- <button class="button-53" role="button" href="{{route('koszyk.show')}}">Dodaj do koszyka</button>--}}
                <button class="button-53" role="button">ADD TO CARD</button>
            </div>
            <br>
            <br>

        </div>


    </div>

</x-shop>
