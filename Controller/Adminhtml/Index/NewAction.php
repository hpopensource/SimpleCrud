<?php
namespace Weborion\SimpleCrud\Controller\Adminhtml\Index;

use Magento\Cms\Controller\Adminhtml\Block;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

class NewAction extends Block
{
    const ADMIN_RESOURCE = 'Weborion_SimpleCrud::review';

    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
