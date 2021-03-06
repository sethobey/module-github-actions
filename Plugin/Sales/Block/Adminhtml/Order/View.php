<?php
/**
 * Taxjar_SalesTax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Taxjar
 * @package    Taxjar_SalesTax
 * @copyright  Copyright (c) 2020 TaxJar. TaxJar is a trademark of TPS Unlimited, Inc. (http://www.taxjar.com)
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace Sobey\GithubActions\Plugin\Sales\Block\Adminhtml\Order;

class View
{
    /**
     * @param \Magento\Sales\Block\Adminhtml\Order\View $subject
     */
    public function beforeSetLayout(\Magento\Sales\Block\Adminhtml\Order\View $subject)
    {
        if ($subject->getOrder()) {
            $subject->addButton('taxjar_sync', [
                'label' => __('I am a button!'),
                'class' => 'primary',
            ]);
        }
    }
}
