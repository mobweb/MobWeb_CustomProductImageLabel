<?php

class MobWeb_CustomProductImageLabel_Block_Product_List extends Mage_Catalog_Block_Product_List
{
	public function getImageLabel($product)
	{
		return Mage::helper('customproductimagelabel/data')->getCustomProductImageLabel($product);
	}
}