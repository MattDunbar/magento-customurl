<?php
/**
 * CustomURL Observer
 *
 * @author Matt Dunbar
 * @version 1.0.0
 */
class Mdunbar_Customurl_Model_Observer
{
	/**
	 * Observes catalog_controller_product_init and redirects products that have
	 * a custom_page_url attribute to the URL set within custom_page_url.
	 *
	 * @param Varien_Event_Observer $observer observer object
	 */
    public function catalog_controller_product_init(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $product = $event->getProduct();
        if($product->getCustomPageUrl()) {
            Mage::app()->getResponse()->setRedirect($product->getCustomPageUrl());
        }
    }
}