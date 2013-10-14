<?php

if (!file_exists('application')) {
    mkdir('application');
}

if (file_exists('vendor/pallo/cli/src/cli.php')) {
    copy('vendor/pallo/cli/src/cli.php', 'application/cli.php');
}