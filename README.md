Pantarei\Bundle\UserBundle
============================

[![Build
Status](https://travis-ci.org/pantarei/user-bundle.png?branch=master)](https://travis-ci.org/pantarei/user-bundle)
[![Coverage
Status](https://coveralls.io/repos/pantarei/user-bundle/badge.png?branch=master)](https://coveralls.io/r/pantarei/user-bundle)
[![Latest Stable
Version](https://poser.pugx.org/pantarei/user-bundle/v/stable.png)](https://packagist.org/packages/pantarei/user-bundle)
[![Total
Downloads](https://poser.pugx.org/pantarei/user-bundle/downloads.png)](https://packagist.org/packages/pantarei/user-bundle)

[Pantarei\Bundle\UserBundle](https://github.com/pantarei/user-bundle)
is a Symfony2 Bundle, which integrate
[Pantarei\User](https://github.com/pantarei/user) as easy as
possible into your [Symfony2](http://www.symfony.com) Project.

Installation
------------

First you need to add `pantarei/user-bundle` to `composer.json`:

    {
      "require": {
        "pantarei/user-bundle": "1.0.*@dev"
      }
    }

You also have to add `UserBundle` to your `AppKernel.php`:

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                new Pantarei\Bundle\UserBundle\PantareiUserBundle()
            );
            return $bundles;
        }
    }

Continuous Integration
----------------------

This project is coverage with phpunit test cases, where CI result can be
found from https://travis-ci.org/pantarei/user-bundle.

Code coverage CI result can be found from
https://coveralls.io/r/pantarei/user-bundle.

If you hope to run the test cases locally, please execute
`phpunit -c phpunit.xml.dist`. Coverage report can be found from
`build/logs/html` folder.

References
----------

-   http://pantarei.github.io/user-bundle/
-   https://coveralls.io/r/pantarei/user-bundle
-   https://github.com/pantarei/user-bundle
-   https://packagist.org/packages/pantarei/user-bundle
-   https://travis-ci.org/pantarei/user-bundle

License
-------

-   The bundle is licensed under the [MIT
    License](http://opensource.org/licenses/MIT)

