<?php

namespace InfernoSlimMvc\controllers;

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

class SiteController extends BaseController
{
    /**
     * SiteController constructor.
     * @param App $app
     */
    public function __construct($app)
    {
        parent::__construct($app);
        $this->app->map(['GET', 'POST'], '', [$this, 'index']);
        $this->app->map(['GET', 'POST'], '/index', [$this, 'index']);
    }

    public function index(Request $request, Response $response, array $args)
    {
        // Render index view
        $this->title = 'Home';
        return $this->render($response, 'site/index.php', $args);
    }
}
