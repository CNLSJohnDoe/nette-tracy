<?php

namespace Tracy;

use ErrorException;

class TracyErrorException extends ErrorException
{
    public $context;
    public $skippable;
}