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
    echo '<h1>Service Unavailable</h1>';
    echo '<p>This copy of <a href="https://github.com/assarte/peridot">Peridot</a> looks uninitialized and need to be configured in <pre>composer.json</pre>, then to do a <pre>php composer.phar update</pre> on the project root in console.</p>';
}

require PERIDOT_DIR_LOCALROOT.'/'.PERIDOT_DIR_LIBS.'/autoload.php';
require PERIDOT_DIR_LOCALROOT.'/'.PERIDOT_DIR_SHARED.'/bootstrap.php';

if (defined('PERIDOT_EMPTY_BOOTSTRAP')) {
    header('HTTP/1.1 503 Service Unavailable');
    echo '<h1>Service Unavailable</h1>';
    echo '<p>You may configured this copy of <a href="https://github.com/assarte/peridot">Peridot</a>, but it still looks weird because you didn\'t complete the <pre>bootstrap.php</pre> file found at <pre>~/'.PERIDOT_DIR_SHARED.'</pre>. Let\'s do it ASAP!</p>';
}
