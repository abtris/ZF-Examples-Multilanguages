<?php
/**
 * Description of LangSelector
 *
 */
class ZFCore_Controller_Plugin_LangSelector
    extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
	$lang = $request->getParam('lang','');
	
	if ($lang !== 'en' && $lang !== 'cs')
	    $request->setParam('lang','en');
	
	$lang = $request->getParam('lang');
	if ($lang == 'en')
        $locale = 'en_UK';
	else
        $locale = 'cs_CZ';

	$zl = new Zend_Locale();
	$zl->setLocale($locale);
	Zend_Registry::set('Zend_Locale', $zl);
	
	$translate = new Zend_Translate('csv', APPLICATION_PATH . '/configs/lang/'. $lang . '.csv' , $lang);
	Zend_Registry::set('Zend_Translate', $translate);

    }

}
