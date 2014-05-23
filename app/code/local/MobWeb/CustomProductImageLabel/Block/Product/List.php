<?php

class MobWeb_CustomProductImageLabel_Block_Product_List extends Mage_Catalog_Block_Product_List
{
	public function getImageLabel()
	{
		return Mage::helper('customproductimagelabel/data')->getCustomProductImageLabel($this->getProduct());
	}
}