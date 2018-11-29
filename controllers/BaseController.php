<?php

namespace InfernoSlimMvc\controllers;

use Slim\App;
use Slim\Http\Response;

abstract class BaseController
{
    public $layout = 'main.php';
    public $title = '';
    /**
     * @var App
     */
    protected $app;

    /**
     * SiteController constructor.
     * @param App $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    protected function render(Response $response, $viewPath, array $args)
    {
        return $this->app->getContainer()->renderer->render(
            $response,
            'layouts/' . $this->layout,
            [
                'content' => $this->app->getContainer()->renderer->fetch($viewPath, $args),
                'title' => $this->title
            ]
        );
    }
}
