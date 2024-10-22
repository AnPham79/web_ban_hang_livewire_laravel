<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Order
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert aler-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-triped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Sub Total</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Zip Code</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th>Action</th>
                                    <th col-span="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>${{ $item->subtotal }}</td>
                                        <td>${{ $item->discount }}</td>
                                        <td>${{ $item->tax }}</td>
                                        <td>${{ $item->total }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->zipcode }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><a href="{{ route('admin.orderdetails', ['order_id' => $item->id]) }}" class='btn btn-info btn-sm'>Detail</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" type="button">Status
                                                    <span class="caret">
                                                        
                                                    </span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" wire:click.prevent="updateOrderStatus({{ $item->id }}, 'delivered')">Delivered</a></li>
                                                    <li><a href="#" wire:click.prevent="updateOrderStatus({{ $item->id }}, 'canceled')">Canceled</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $order->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
