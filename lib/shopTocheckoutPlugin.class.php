<?php

class shopTocheckoutPlugin extends shopPlugin
{
    public function frontendHead() {
        $settings = $this->getSettings();
        if ($settings['enable'] && $settings['enable'] == 1) {
            $view = waSystem::getInstance()->getView();
            $this->addJs('js/tocheckout.js');
            $checkout_url = wa()->getRouteUrl('/frontend/checkout', array('step' => 'contactinfo'));
            $view->assign('checkout_url', $checkout_url);
            return $view->fetch($this->path . '/templates/head.html');
        }
    }
}
