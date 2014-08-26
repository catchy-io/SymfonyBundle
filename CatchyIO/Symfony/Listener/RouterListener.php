<?php

namespace CatchyIO\Symfony\Listener;

use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RouterListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        if ($event->getRequestType() != HttpKernel::MASTER_REQUEST) {
            return;
        }

        $GLOBALS["catchy.io"]["framework"] = "Symfony2";
        $GLOBALS["catchy.io"]["route"] = $event->getRequest()->get("_route");
        $GLOBALS["catchy.io"]["controller"] = $event->getRequest()->get("_controller");
    }
}
