<?php

namespace Jose\Deviget\Block\Cms\Widget;

use Magento\Cms\Block\Widget\Block as WidgetBlock;

class Block extends WidgetBlock
{
    public function getTitle()
    {
        $blockId = $this->getData('block_id');
        $title = "";

        if ($blockId) {
            $storeId = $this->_storeManager->getStore()->getId();
            $block = $this->_blockFactory->create();
            $block->setStoreId($storeId)->load($blockId);
            $title = $block->getTitle();
        }

        return $title;
    }

    protected function _toHtml()
    {
        $this->setModuleName($this->extractModuleName('Magento\Cms\Block\Widget\Block'));
        return parent::_toHtml();
    }
}