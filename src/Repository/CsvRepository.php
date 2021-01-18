<?php

namespace App\Repository;

use App\Entity\CsvEntity;

class CsvRepository
{
    public function getCsvContent(string $csvFile): ?CsvEntity
    {
        if (!file_exists($csvFile) || !is_readable($csvFile)) {
            return null;
        }

        $csvContent = array_map('str_getcsv', file($csvFile));

        foreach ($csvContent as $key => $row) {
            $csvContent[$key] = explode(';', $row[0]);
        }

        return new CsvEntity($csvContent[0], array_splice($csvContent, 1));
    }
}
