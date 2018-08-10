<?php
namespace prophet\http\event;

use prophet\core\event\ActionEvent;

interface NewSessionEvent extends ActionEvent
{
    function contextSession(HttpSession $session): void;
}

