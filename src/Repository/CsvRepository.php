<?php

namespace App\Repository;

class CsvRepository
{
    /**
     * @return string[][]
     */
    public function getCsvContent(string $csvFile): array
    {
        if (!file_exists($csvFile) || !is_readable($csvFile)) {
            return [];
        }

        $csvContent = array_map('str_getcsv', file($csvFile));

        foreach ($csvContent as $key => $row) {
            $csvContent[$key] = explode(';', $row[0]);
        }

        return $csvContent;
    }
}
