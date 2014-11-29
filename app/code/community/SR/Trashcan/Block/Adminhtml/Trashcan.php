<?php
class SR_Trashcan_Block_Adminhtml_Trashcan extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_trashcan';
        $this->_blockGroup = 'trashcan';
        $this->_headerText = Mage::helper('trashcan')->__('Trashcan Manager');
        parent::__construct();
        $this->_removeButton('add');
    }
}