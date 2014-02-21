<?php

if (!file_exists('application')) {
    mkdir('application');
}

if (file_exists('vendor/ride/cli/src/cli.php')) {
    copy('vendor/ride/cli/src/cli.php', 'application/cli.php');
}