# Ride: CLI Setup

Installer hook to setup the Ride CLI through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _application_ exists
* copy _vendor/ride/cli/src/cli.php_ to _application/cli.php_

## Related Modules

- [ride/cli](https://github.com/all-ride/ride-cli)
- [ride/setup](https://github.com/all-ride/ride-setup-app)
- [ride/setup-app](https://github.com/all-ride/ride-setup-app)
- [ride/setup-base](https://github.com/all-ride/ride-setup-base)
- [ride/setup-cms](https://github.com/all-ride/ride-setup-cms)
- [ride/setup-web](https://github.com/all-ride/ride-setup-web)

## Installation

You can use [Composer](http://getcomposer.org) to install this application.

```
composer require ride/setup-cli
```
