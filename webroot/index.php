<?php
if (preg_match('/^\/(css|fonts|img|js)\//', $_SERVER["REQUEST_URI"])) {
    return false;
}

require dirname(__DIR__) . '/src/bootstrap.php';

$di = new Xhgui_ServiceContainer();

$app = $di['app'];

require XHGUI_ROOT_DIR . '/src/routes.php';

$app->run();
