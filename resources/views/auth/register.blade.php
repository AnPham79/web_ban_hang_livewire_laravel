<x-base-layout>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <form class="form-stl" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="name">Name*</label>
                                        <input type="text" id="name" name="name" placeholder="Name*" required>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="email">Email Address*</label>
                                        <input type="email" id="email" name="email" placeholder="Email address" required>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="password">Password *</label>
                                        <input type="password" id="password" name="password" placeholder="Password" required>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="password_confirmation">Confirm Password *</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                                    </fieldset>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <fieldset class="wrap-functions ">
                                        <label class="remember-field">
                                            <input name="terms" id="terms" type="checkbox" required>
                                            <span>I agree to the <a target="_blank" href="{{ route('terms.show') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" href="{{ route('policy.show') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a></span>
                                        </label>
                                    </fieldset>
                                    @endif
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </main>
</x-base-layout>

