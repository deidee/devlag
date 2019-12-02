<?php

class Devlag
{
    const NL = 'https://upload.wikimedia.org/wikipedia/commons/2/20/Flag_of_the_Netherlands.svg';

    public $source;

    public function __construct($id = 'NL')
    {
        $this->source = $id;
    }

    public function __toString()
    {
        return constant(get_class($this) . '::' . $this->source);
    }
}
