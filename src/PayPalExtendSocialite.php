<?php
namespace SocialiteProviders\PayPal;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PayPalExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('paypal', __NAMESPACE__.'\Provider');
    }
}
