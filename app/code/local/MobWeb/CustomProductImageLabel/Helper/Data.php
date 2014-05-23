<?php

class MobWeb_CustomProductImageLabel_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getCustomProductImageLabel($product)
	{
		// Do your magic here!
		return 'this is a custom title';

		// ...or fallback to the default image label
		return parent::getImageLabel();
	}
}