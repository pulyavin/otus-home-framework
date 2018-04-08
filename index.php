<?php

require_once(__DIR__ . '/bootstrap/autoload.php');

$requestBuilder = $container->get(Otus\Interfaces\RequestBuilderInterface::class);

$request = $requestBuilder->getRequest($_GET, $_POST);

$controllerFactory = $container->get(Otus\Interfaces\ControllerFactoryInterface::class);

try {
    $controller = $controllerFactory->getController($request);
} catch (Otus\Exceptions\ControllerNotFoundException $e) {
    header('HTTP/1.1 404 Not Found');
    print('404 Not Found');
    exit;
}

$response = $controller->execute($request);

echo $response->getResponse();
