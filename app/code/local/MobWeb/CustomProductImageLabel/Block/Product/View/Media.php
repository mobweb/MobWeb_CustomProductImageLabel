<?php

class MobWeb_CustomProductImageLabel_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
	public function getImageLabel()
	{
		return Mage::helper('customproductimagelabel/data')->getCustomProductImageLabel($this->getProduct());
	}
}
