<?php
namespace prophet\core\event;

use prophet\core\GenericRequest;

interface ResourceRequestEvent extends ActionEvent
{
    function contextRequest(GenericRequest $request): void;
}

