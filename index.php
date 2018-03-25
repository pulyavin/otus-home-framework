<?php

require_once(__DIR__ . '/bootstrap/autoload.php');

$requestBuilder = $container->get(Otus\Interfaces\RequestBuilderInterface::class);

$request = $requestBuilder->getRequest($_GET, $_POST);

$controllerFactory = $container->get(Otus\Interfaces\ControllerFactoryInterface::class);

$controller = $controllerFactory->getController($request);

$response = $controller->execute($request);

echo $response->getResponse();
