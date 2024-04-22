<div>
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Order Item
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.orders') }}" class="btn btn-success pull-right">All order</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                @foreach($orders->orderItems as $item)
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" alt=""></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product" href="">{{ $item->product->name }}</a>
                                        </div>
                                        <div class="price-field produtc-price">
                                            <p class="price">${{ $item->product->regular_price }}</p>
                                        </div>
                                        <div class="quantity">
                                            <p>{{ $item->quantity }}</p>
                                        </div>
                                        <div class="price-field sub-total">
                                            <p class="price">${{ $item->quantity * $item->product->regular_price }}.00</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">
                                    Order Summary
                                </h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{ $orders->subtotal }}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">${{ $orders->tax }}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">${{ $orders->total }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td>{{ $orders->first_name }}</td>
                                <th>Last Name</th>
                                <td>{{ $orders->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $orders->mobile }}</td>
                                <th>Email</th>
                                <td>{{ $orders->email }}</td>
                            </tr>
                            <tr>
                                <th>Line 1</th>
                                <td>{{ $orders->line1 }}</td>
                                <th>Line 2</th>
                                <td>{{ $orders->line2 }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $orders->city }}</td>
                                <th>Province</th>
                                <td>{{ $orders->province }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $orders->country }}</td>
                                <th>Zip Code</th>
                                <td>{{ $orders->zipcode }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if($orders->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shipping Details
                        </div>
                        <div class="panel-body">
                            <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td>{{ $orders->shipping->first_name }}</td>
                                <th>Last Name</th>
                                <td>{{ $orders->shipping->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $orders->shipping->mobile }}</td>
                                <th>Email</th>
                                <td>{{ $orders->shipping->email }}</td>
                            </tr>
                            <tr>
                                <th>Line 1</th>
                                <td>{{ $orders->shipping->line1 }}</td>
                                <th>Line 2</th>
                                <td>{{ $orders->shipping->line2 }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $orders->shipping->city }}</td>
                                <th>Province</th>
                                <td>{{ $orders->shipping->province }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $orders->shipping->country }}</td>
                                <th>Zip Code</th>
                                <td>{{ $orders->shipping->zipcode }}</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

