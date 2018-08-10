<?php
namespace prophet\http;

use prophet\core\GenericController;
use prophet\core\ParameterConfig;

abstract class HttpController implements GenericController
{
    function service(Request $request, Response $response) {
        dispatcherMethod($request, $response);
    }
    
    private function dispatcherMethod(HttpRequest $request, HttpResponse $response) {
        $method = ucfirst(strtolower($request->getMethod()));
        $callMethod = "do".$method;
        $callMethod($request, $response);
    }
    
    protected function doPost(RequestHttp $request, ResponseHttp $response): void
    {}
    
    protected function doGet(RequestHttp $request, ResponseHttp $response): void
    {}
    
    protected function doHead(RequestHttp $request, ResponseHttp $response): void
    {}
    
    protected function doDelete(RequestHttp $request, ResponseHttp $response): void
    {} 
    
    protected function doPut(RequestHttp $request, ResponseHttp $response): void
    {}
    
    protected function doTrance(RequestHttp $request, ResponseHttp $response): void
    {}
    
    protected function doOptions(RequestHttp $request, ResponseHttp $response): void
    {}
    
    public function init(ParameterConfig $config): void
    {}

    public function destroy(): void
    {}

}

