<?php

namespace Example\ProductOption\Block\Product\View;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Registry;

/**
 * Class GeographicAvailability
 * @package Example\ProductOption\Block\Product\View
 */
class GeographicAvailability extends Template
{

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * GeographicAvailability constructor.
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getGeographicAvailability()
    {
        /** @var \Magento\Catalog\Model\Product $currentProduct */
        $currentProduct = $this->registry->registry('current_product');
        if ($currentProduct && $currentProduct->getId()) {
            return $currentProduct->getGeographicAvailability();
        }
        return '';
    }
}
