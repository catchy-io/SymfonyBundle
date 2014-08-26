Description
===========

This is the Symfony bundle for catchy.io services.

Install
=======

In your `app/config/config.yml` file, add the following part:

    services:
        kernel.listener.catchy.io:
            class: CatchyIO\Symfony\Listener\RouterListener
            tags:
                - { name: kernel.event_listener, event: kernel.request, method: onKernelRequest }
