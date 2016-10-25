<?php

namespace Humble\Errors;

class Exception
{
	private $debug;

	private $exceptions;

    public function __construct($debug = false)
    {
    	$this->debug = $debug;
    }

    public function register(\Exception $e)
    {
    	$this->exceptions[] = $e;
    }

    public function throw()
    {
    	foreach ($this->exceptions as $exception) {
    		print_r($exception->getMessage());
    	}
    }
}
