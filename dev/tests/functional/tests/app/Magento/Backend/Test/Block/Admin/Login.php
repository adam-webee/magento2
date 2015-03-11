<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Backend\Test\Block\Admin;

use Magento\Mtf\Block\Form;
use Magento\Mtf\Client\Locator;

/**
 * Class Login
 * Login form for backend user
 *
 */
class Login extends Form
{
    /**
     * 'Log in' button
     *
     * @var string
     */
    protected $submit = '.action-login';

    /**
     * Submit login form
     */
    public function submit()
    {
        $this->_rootElement->find($this->submit, Locator::SELECTOR_CSS)->click();
    }
}
