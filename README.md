# Pallo: CLI Setup

Installer hook to setup the Pallo CLI through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _application_ exists
* copy _vendor/pallo/cli/src/cli.php_ to _application/cli.php_