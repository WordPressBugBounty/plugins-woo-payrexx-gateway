<?php

class WC_Payrexx_Gateway_Invoice extends WC_Payrexx_Gateway_Base
{

    public function __construct()
    {
        $this->id = PAYREXX_PM_PREFIX . 'invoice';
        $this->method_title = __('Bill (manual)', 'woo-payrexx-gateway');

        parent::__construct();
    }
}
