<?php
// Routes

$app->group('/', function () {
    new \InfernoSlimMvc\controllers\SiteController($this);
});

$app->group('/site', function () {
    new \InfernoSlimMvc\controllers\SiteController($this);
});
