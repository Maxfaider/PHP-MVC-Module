<?php
namespace prophet\http;

use prophet\core\GenericController;
use prophet\core\ParameterConfig;
use prophet\core\GenericRequest;
use prophet\core\GenericResponse;

abstract class HttpController implements GenericController
{
    function service(GenericRequest $request, GenericResponse $response): void {
        dispatcherMethod($request, $response);
    }
    
    private function dispatcherMethod(HttpRequest $request, HttpResponse $response) {
        $method = ucfirst(strtolower($request->getMethod()));
        $callMethod = "do".$method;
        $callMethod($request, $response);
    }
    
    protected function doPost(HttpRequest $request, HttpResponse $response): void
    {}
    
    protected function doGet(HttpRequest $request, HttpResponse $response): void
    {}
    
    protected function doHead(HttpRequest $request, HttpResponse $response): void
    {}
    
    protected function doDelete(HttpRequest $request, HttpResponse $response): void
    {} 
    
    protected function doPut(HttpRequest $request, HttpResponse $response): void
    {}
    
    protected function doTrance(HttpRequest $request, HttpResponse $response): void
    {}
    
    protected function doOptions(HttpRequest $request, HttpResponse $response): void
    {}
    
    public function init(ParameterConfig $config): void
    {}

    public function destroy(): void
    {}

}

