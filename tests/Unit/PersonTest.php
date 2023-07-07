<?php

namespace Tests\Unit;

use App\Person;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class PersonTest extends TestCase
{
    #[Test]
    public function can_handle_a_user_with_an_initial()
    {
        $person = new Person('Mr', 'H', 'Potter');
        $this->assertEquals([
            'title' => 'Mr',
            'first_name' => null,
            'initial' => 'H',
            'last_name' => 'Potter',
        ], $person->toArray());
    }

    #[Test]
    public function can_handle_a_user_with_a_first_name()
    {
        $person = new Person('Mr', 'Harry', 'Potter');
        $this->assertEquals([
            'title' => 'Mr',
            'first_name' => 'Harry',
            'initial' => null,
            'last_name' => 'Potter',
        ], $person->toArray());
    }

    #[Test]
    public function can_handle_a_user_with_no_initial_or_first_name()
    {
        $person = new Person('Mr', null, 'Potter');
        $this->assertEquals([
            'title' => 'Mr',
            'first_name' => null,
            'initial' => null,
            'last_name' => 'Potter',
        ], $person->toArray());
    }
}
