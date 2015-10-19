<?php

class shopTocheckoutPlugin extends shopPlugin
{
    public function frontendHead() {
        $settings = $this->getSettings();
        if ($settings['enable'] && $settings['enable'] == 1) {
            $view = waSystem::getInstance()->getView();
            $this->addJs('js/tocheckout.js');

            switch ($settings['redirect']) {
                case 'checkout':
                    $redirect_url = wa()->getRouteUrl('/frontend/checkout');
                    break;
                case 'cart':
                    $redirect_url = wa()->getRouteUrl('/frontend/cart');
                    break;
                default:
                    $redirect_url = wa()->getRouteUrl('/frontend/checkout');
            }
            $view->assign('redirect_url', $redirect_url);
            return $view->fetch($this->path . '/templates/head.html');
        }
    }
}
