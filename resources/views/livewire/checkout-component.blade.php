<div>
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Checkout</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                <form action="" wire:submit.prevent="placeOrder">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Billing Address</h3>
                                <div class="billing-address">
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input id="lname" type="text" name="lname" value=""
                                            placeholder="Your last name"  wire:model="lastname">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input id="email" type="email" name="email" value=""
                                            placeholder="Type your email"  wire:model="email">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input id="phone" type="number" name="phone" value=""
                                            placeholder="10 digits format"  wire:model="mobile">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">line 1:</label>
                                        <input id="add" type="text" name="line1" value=""
                                            placeholder="Street at apartment number"  wire:model="line1">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">line 2</label>
                                        <input id="add" type="text" name="line2" value=""
                                            placeholder="Street at apartment number"  wire:model="line2">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input id="country" type="text" name="country" value=""
                                            placeholder="United States"  wire:model="country">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input id="zip-code" type="number" name="zip-code" value=""
                                            placeholder="Your postal code" wire:model="zipcode">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Province<span>*</span></label>
                                        <input id="city" type="text" name="province" value="" placeholder="City name"  wire:model="province">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Town / City<span>*</span></label>
                                        <input id="city" type="text" name="city" value="" placeholder="City name"  wire:model="city">
                                    </p>
                                    <p class="row-in-form fill-wife">
                                        <label class="checkbox-field">
                                            <input wire:model="ship_to_different" name="different-add" id="different-add" value="forever" type="checkbox">
                                            <span>Ship to a different address?</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
    
                        @if($ship_to_different)
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Shipping Address</h3>
                                <div class="billing-address">
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input id="lname" type="text" name="lname" value=""
                                            placeholder="Your last name"  wire:model="s_lastname">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input id="email" type="email" name="email" value=""
                                            placeholder="Type your email"  wire:model="s_email">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input id="phone" type="number" name="phone" value=""
                                            placeholder="10 digits format"  wire:model="s_mobile">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">line 1:</label>
                                        <input id="add" type="text" name="line1" value=""
                                            placeholder="Street at apartment number"  wire:model="s_line1">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">line 2</label>
                                        <input id="add" type="text" name="line2" value=""
                                            placeholder="Street at apartment number"  wire:model="s_line2">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input id="country" type="text" name="country" value=""
                                            placeholder="United States"  wire:model="s_country">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input id="zip-code" type="number" name="zip-code" value=""
                                            placeholder="Your postal code" wire:model="s_zipcode">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Province<span>*</span></label>
                                        <input id="city" type="text" name="province" value="" placeholder="City name"  wire:model="s_province">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Town / City<span>*</span></label>
                                        <input id="city" type="text" name="city" value="" placeholder="City name"  wire:model="s_city">
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
    
    
                    <div class="summary summary-checkout">
                        <div class="summary-item payment-method">
                            <h4 class="title-box">Payment Method</h4>
                            <p class="summary-info"><span class="title">Check / Money order</span></p>
                            <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                            <div class="choose-payment-methods">
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-bank" value="bank" type="radio" wire:model="paymentmode">
                                    <span>Cash On Delivery</span>
                                    <span class="payment-desc">Order Now Pay On Delivery</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-visa" value="visa" type="radio" wire:model="paymentmode">
                                    <span>Debit / Credit Card</span>
                                    <span class="payment-desc">There are many variations of passages of Lorem Ipsum
                                        available</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-paypal" value="paypal"
                                        type="radio" wire:model="paymentmode">
                                    <span>Paypal</span>
                                    <span class="payment-desc">You can pay with your credit</span>
                                    <span class="payment-desc">card if you don't have a paypal account</span>
                                </label>
                            </div>
                            @if(Session::has('checkout'))
                                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{ session()->get('checkout')['total'] }}</span></p>
                            @endif
                            <button class="btn btn-medium" type="submit">Place order now</button>
                        </div>
                        <div class="summary-item shipping-method">
                            <h4 class="title-box f-title">Shipping method</h4>
                            <p class="summary-info"><span class="title">Flat Rate</span></p>
                            <p class="summary-info"><span class="title">Fixed $0</span></p>
                        </div>
                    </div>
                </form>
            </div><!--end main content area-->
        </div><!--end container-->
    </main>
</div>
