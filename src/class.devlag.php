<?php

class Devlag
{
    const BE = 'https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Belgium.svg';
    const DE = 'https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg';
    const FR = 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg';
    const LU = 'https://upload.wikimedia.org/wikipedia/commons/d/da/Flag_of_Luxembourg.svg';
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

    public function getContents()
    {
        $source = constant(get_class($this) . '::' . $this->source);

        $contents = file_get_contents($source);

        return $contents;
    }

    public function parse()
    {
        header('Content-Type: image/svg+xml');

        echo $this->getContents();
    }
}
