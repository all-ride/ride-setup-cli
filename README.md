# Ride: CLI Setup

Installer hook to setup the Ride CLI through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _application_ exists
* copy _vendor/ride/cli/src/cli.php_ to _application/cli.php_