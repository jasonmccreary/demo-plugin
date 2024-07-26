<?php

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

function check_for_plugin_updates()
{
    PucFactory::buildUpdateChecker(
        'https://wppm.io/api/bundle/9c9d94f0-e3fd-4cb4-83a2-d9d8e55dc6f6',
        __DIR__ . '/demo-plugin.php',
        'demo-plugin'
    );
}

add_action('plugins_loaded', 'check_for_plugin_updates');
