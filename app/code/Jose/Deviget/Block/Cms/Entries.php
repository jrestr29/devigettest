<?php

namespace Jose\Deviget\Block\Cms;

use Magento\Framework\View\Element\Template;

class Entries extends Template
{
    protected $_template = "block/entry.phtml";

    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }
}