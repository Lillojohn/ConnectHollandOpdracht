<?php

namespace App\Entity;

class CsvEntity
{
    /**
     * @var string[]
     */
    private array $header;

    /**
     * @var string[][]
     */
    private array $rows;

    /**
     * CsvEntity constructor.
     *
     * @param string[]   $header
     * @param string[][] $rows
     */
    public function __construct(array $header, array $rows)
    {
        $this->header = $header;
        $this->rows = $rows;
    }

    /**
     * @return array|string[]
     */
    public function getHeader(): array
    {
        return $this->header;
    }

    /**
     * @return array|string[][]
     */
    public function getRows(): array
    {
        return $this->rows;
    }
}
