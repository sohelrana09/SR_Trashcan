<?php
class SR_Trashcan_Block_Adminhtml_Trashcan_Renderer_Action extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $deleteUrl = $this->getUrl('trashcan/adminhtml_trashcan/delete', array('id' => $row->getData('entity_id')));
        $restoreUrl = $this->getUrl('trashcan/adminhtml_trashcan/restore', array('id' => $row->getData('entity_id')));
        $select = '<select>';
        $select .= '<option></option>';
        $select .= '<option onclick="setLocation(\''.$deleteUrl.'\')">Delete</option>';
        $select .= '<option onclick="setLocation(\''.$restoreUrl.'\')">Restore</option>';
        $select .= '</select>';
        //$customer_id = $row->getData('customer_id');
        return $select;
    }
}