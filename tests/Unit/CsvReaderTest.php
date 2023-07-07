<?php

namespace Tests\Unit;

use App\CsvReader;
use App\Person;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CsvReaderTest extends TestCase
{
    #[Test]
    public function can_read_csv_files()
    {
        $csvReader = CsvReader::forFilePath(base_path('tests/Resources/mock-homeowners.csv'));
        $this->assertEquals([
            'Mr John Smith',
            'Mr F. Fredrickson',
        ], $csvReader->getLines());
    }
}
