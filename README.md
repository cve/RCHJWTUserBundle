[![SensioLabsInsight](https://insight.sensiolabs.com/projects/2fee6932-fec3-4556-b8d9-cbad0f8aceef/mini.png)](https://insight.sensiolabs.com/projects/2fee6932-fec3-4556-b8d9-cbad0f8aceef)

RCH/JWTUserBundle
=================

Manages users through JSON Web Token in your REST Api.

What's inside
-------------

- [__FOSUserBundle__](https://github.com/FriendsOfSymfony/FOSUserBundle)
- [__FOSRestBundle__](https://github.com/FriendsOfSymfony/FOSRestBundle)
- [__LexikJWTAuthenticationBundle__](https://github.com/lexik/LexikJWTAuthenticationBundle)
- [__GesdinetRefreshTokenBundle__](https://github.com/gesdinet/JWTRefreshTokenBundle)
- [__JMSSerializerBundle__](https://github.com/schmittjoh/JMSSerializerBundle)

Installation
------------

#### Step 1: Download the Bundle


Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require chalasr/jwt-user-bundle dev-master
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

#### Step 2: Enable the Bundle

> __Note:__ This bundle requires 3rd party bundles that need to be registered too.

Then, enable the bundles by adding them to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
// app/AppKernel.php

<?php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new RCH\JWTUserBundle\RCHJWTUserBundle(),
            new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),
            new Gesdinet\JWTRefreshTokenBundle\GesdinetJWTRefreshTokenBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
        );

        // ...
    }

    // ...
}
```

#### Step 3: Configure the Bundle

Generate the RSA keys used by LexikJWTAuthenticationBundle :

```bash
$ php app/console rch:jwt:generate-keys
```


Contributing
------------

See the contribution guidelines in the [CONTRIBUTING.md](CONTRIBUTING.md) distributed file.

License
-------

The code is released under the GPL-3.0 license.

For the whole copyright, see the [LICENSE](LICENSE) file.
