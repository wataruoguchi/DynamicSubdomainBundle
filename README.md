# DynamicSubdomainBundle
The DynamicSubdomainBundle helps you to get subdomain in Symfony2.

### Why not [doing it in the routing](http://symfony.com/blog/new-in-symfony-2-2-url-host-support-in-the-routing) ?
Before go over, keep it in your mind that I am a new to Symfony2.

Reason why I built this is I wanted to have the configurable base domain name. Also, I may want to restrict/flexible the subdomain.

### Installation
1. Download this repository
2. Extract it
3. Save as `src/Wataru/DynamicSubdomainBundle`
4. Add this in `app/config/parameters.yml`
    ```yml
    parameters:
      :
      wataru_dynamic_subdomain.base_domain: basedomain.com
      :
    ```
5. Add this in `app/AppKernel.php`
    ```php
    $bundles = array(
      :
      new Wataru\DynamicSubdomainBundle\WataruDynamicSubdomainBundle(),
      :
    );
    ```

### Usage
You can get the subdomain like this below.

```php
$subdomain = $request->attributes->get("subdomain");
```

### Reference
Respectfully, there are many resources to make what I wanted.

* [Setting Locale based on URI & subdomain in Symfony2](http://maxvandervelde.com/blog/symfony2-subdomain-locale)
* [http://stackoverflow.com/questions/5366234/symfony2-routing-route-subdomains](http://stackoverflow.com/questions/5366234/symfony2-routing-route-subdomains)
* [netgusto/Symfony-DynamicSubdomainBundle](https://github.com/netgusto/Symfony-DynamicSubdomainBundle)
* [Best Practices for Reusable Bundles](http://symfony.com/doc/current/cookbook/bundles/best_practices.html)
