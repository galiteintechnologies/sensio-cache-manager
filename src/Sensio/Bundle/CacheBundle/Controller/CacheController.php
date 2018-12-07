<?php

namespace Sensio\Bundle\CacheBundle\Controller;

use Doctrine\Common\Cache\FilesystemCache;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CacheController extends Controller
{
    /**
     * @Route("/set-cache", name="set-cache")
     */
    public function setCacheAction()
    {
        $cacheDirectory = $this->getParameter('kernel.cache_dir');
        $cache = new FilesystemCache($cacheDirectory);
        $cache->save('is_managed_cache', true);

        return new Response('Cache Set');
    }

    /**
     * @Route("/un-set-cache", name="un-set-cache")
     */
    public function unSetCacheAction()
    {
        $cacheDirectory = $this->getParameter('kernel.cache_dir');
        $cache = new FilesystemCache($cacheDirectory);
        $cache->save('is_managed_cache', false);

        return new Response('Cache Removed');
    }
}
