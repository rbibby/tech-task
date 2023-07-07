<?php

namespace App;

use League\Flysystem\UnableToReadFile;

class CsvReader
{
    protected array $lines = [];

    public static function forFilePath($filePath): static
    {
        $contents = file_get_contents($filePath);
        if (!$contents) {
            throw new UnableToReadFile();
        }

        $contents = rtrim($contents, ",\r\n"); // remove blank lines at end of CSV

        $csvReader = new static;
        $csvReader->lines = explode(",\r\n", $contents);

        array_shift($csvReader->lines); // remove header row

        return $csvReader;
    }

    public function getLines(): array
    {
        return $this->lines;
    }
}
