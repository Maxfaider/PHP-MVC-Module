<?php
namespace prophet\core;

interface Controller
{
    function service(Request $request, Response $response);
}

