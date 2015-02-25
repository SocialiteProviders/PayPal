<?php
namespace SocialiteProviders\PayPal;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PayPalExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'paypal', __NAMESPACE__.'\Provider'
        );
    }
}
