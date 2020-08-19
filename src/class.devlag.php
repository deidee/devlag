<?php

class Devlag
{
    public $source;

    public function __construct($id = 'NL')
    {
        $this->source = $id;
    }

    public function __toString()
    {
        return 'test';
    }

    public function getContents()
    {
    	$path = dirname(__DIR__) . '/node_modules/svg-country-flags/svg/' . strtolower($this->source) . '.svg';

        if(file_exists($path)) {
        	return file_get_contents($path);
        }

        return FALSE;
    }

    public function parse()
    {
    	if($this->getContents()) {

		    header('Content-Type: image/svg+xml');

		    echo $this->getContents();

	    } else {

		    http_response_code(404);

    		echo 'Not Found.';

	    }
    }
}
