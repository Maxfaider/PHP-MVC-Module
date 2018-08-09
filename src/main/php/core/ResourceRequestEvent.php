<?php
namespace prophet\core;

interface ResourceRequestEvent extends ActionEvent
{
    function contextRequest(Request $request): void;
}

