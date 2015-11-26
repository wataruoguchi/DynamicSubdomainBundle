<?php
namespace Wataru\DynamicSubdomainBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;

class SubdomainListener
{
  private $base_domain;
  public function __construct($base_domain)
  {
    $this->base_domain = $base_domain;
  }
  public function onKernelRequest(Event $event)
  {
    $request = $event->getRequest();
    $host = $request->getHost();
    $subdomain = substr($host, 0, ((strlen($this->base_domain) + 1) * -1));

    $request->attributes->set(
      'subdomain', $subdomain
    );
  }
}
