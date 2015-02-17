<?php
/**
 * Peridot web-application's index.php
 */

// Relative paths to main folders
define('PERIDOT_PATH_DOCROOT', __DIR__);
define('PERIDOT_PATH_LOCALROOT', __DIR__.'/../');

// Associated names of the 4 conceptional folders
define('PERIDOT_DIR_APPS', 'apps');
define('PERIDOT_DIR_LIBS', 'libs');
define('PERIDOT_DIR_PUBLIC', 'public');
define('PERIDOT_DIR_SHARED', 'shared');

define('PERIDOT_DIR_LOCALROOT', realpath(PERIDOT_PATH_LOCALROOT));

if (!file_exists(PERIDOT_DIR_LOCALROOT.'/'.PERIDOT_DIR_LIBS)) {
    header('HTTP/1.1 503 Service Unavailable');
    echo '<html><head><style type="text/css">* { font-family: sans-serif; } code { font-family: monospace; background: #eee; padding: 3px; color: #666; }</style></head><body>';
    echo '<h1>Service Unavailable</h1>';
    echo '<p>This copy of <a href="https://github.com/assarte/peridot">Peridot</a> looks uninitialized and need to be configured in <code>composer.json</code>, then to do a <code>php composer.phar update</code> on the project root in console.</p>';
    echo '</body></html>';
}

require PERIDOT_DIR_LOCALROOT.'/'.PERIDOT_DIR_LIBS.'/autoload.php';
require PERIDOT_DIR_LOCALROOT.'/'.PERIDOT_DIR_SHARED.'/bootstrap.php';

if (defined('PERIDOT_EMPTY_BOOTSTRAP')) {
    header('HTTP/1.1 503 Service Unavailable');
    echo '<html><head><style type="text/css">* { font-family: sans-serif; } code { font-family: monospace; background: #eee; padding: 3px; color: #666; }</style></head><body>';
    echo '<h1>Service Unavailable</h1>';
    echo '<p>You may configured this copy of <a href="https://github.com/assarte/peridot">Peridot</a>, but it still looks weird because you didn\'t complete the <code>bootstrap.php</code> file found at <code>~/'.PERIDOT_DIR_SHARED.'</code>. Let\'s do it ASAP!</p>';
    echo '</body></html>';
}
