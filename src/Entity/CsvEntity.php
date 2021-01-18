<?php

namespace App\Entity;

class CsvEntity
{
    private array $header;
    private array $rows;

    public function __construct($header, $rows)
    {
        $this->header = $header;
        $this->rows = $rows;
    }

    public function getHeader(){
        return $this->header;
    }

    public function getRows(){
        return $this->rows;
    }
}