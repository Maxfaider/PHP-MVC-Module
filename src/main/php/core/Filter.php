<?php
namespace prophet\core;

interface Filter
{
    function doFilter(Request $request, Response $response);
}

