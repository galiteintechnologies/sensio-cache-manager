<?php

namespace Sensio\Bundle\CacheBundle\Service;

use Doctrine\Common\Cache\FilesystemCache;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CacheHandler
{
    /* @var string /
    private $cacheDirectory;

    public function __construct($cacheDirectory)
    {
    $this->cacheDirectory = $cacheDirectory;
    }

    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        $cache = new FilesystemCache($this->cacheDirectory);
        if ($event->getRequest()->get('_route') == 'un_set') {
            $cache->save('is_managed_cache', false);
        }

        if (true === $cache->fetch('is_managed_cache')) {
            throw new NotFoundHttpException();
        }
    }
}