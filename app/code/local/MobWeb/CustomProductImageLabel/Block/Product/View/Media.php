<?php

class MobWeb_CustomProductImageLabel_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    public function getImageLabel()
    {
    	// Do your magic here!
    	return 'this is a custom title';

    	// ...or fallback to the default image label
    	return parent::getImageLabel();
    }
}
