<?php

namespace Jose\Deviget\Block\Cms\Widget;

class Block extends \Magento\Cms\Block\Widget\Block
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