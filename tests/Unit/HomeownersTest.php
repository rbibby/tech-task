<?php

namespace Tests\Unit;

use App\Homeowners;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class HomeownersTest extends TestCase
{
    #[Test]
    #[DataProvider('homeowners')]
    public function can_handle_a_single_homeowner($input, $expectation)
    {
        $homeowners = new Homeowners($input);
        $this->assertEquals($expectation, $homeowners->convertToPeople());
    }


    public static function homeowners()
    {
        return  [
            'single homeowner with initial' => [
                'Mr A Example',
                [
                    [
                        'title' => 'Mr',
                        'first_name' => null,
                        'initial' => 'A',
                        'last_name' => 'Example',
                    ],
                ],
            ],
            'single homeowner with initial and dot' => [
                'Mr A. Example',
                [
                    [
                        'title' => 'Mr',
                        'first_name' => null,
                        'initial' => 'A',
                        'last_name' => 'Example',
                    ],
                ],
            ],
            'single homeowner with name' => [
                'Mr Andrew Example',
                [
                    [
                        'title' => 'Mr',
                        'first_name' => 'Andrew',
                        'initial' => null,
                        'last_name' => 'Example',
                    ],
                ],
            ],
            'two homeowners both with names' => [
                'Mr Tom Staff and Mr John Doe',
                [
                    [
                        'title' => 'Mr',
                        'first_name' => 'Tom',
                        'initial' => null,
                        'last_name' => 'Staff',
                    ],
                    [
                        'title' => 'Mr',
                        'first_name' => 'John',
                        'initial' => null,
                        'last_name' => 'Doe',
                    ]
                ]
            ],
            'two homeowners neither with names' => [
                'Mr and Mrs Smith',
                [
                    [
                        'title' => 'Mr',
                        'first_name' => null,
                        'initial' => null,
                        'last_name' => 'Smith',
                    ],
                    [
                        'title' => 'Mrs',
                        'first_name' => null,
                        'initial' => null,
                        'last_name' => 'Smith',
                    ]
                ]
            ],
            'two homeowners one with name' => [
                'Dr & Mrs Joe Bloggs',
                [
                    [
                        'title' => 'Dr',
                        'first_name' => 'Joe',
                        'initial' => null,
                        'last_name' => 'Bloggs',
                    ],
                    [
                        'title' => 'Mrs',
                        'first_name' => null,
                        'initial' => null,
                        'last_name' => 'Bloggs',
                    ]
                ]
            ],
            'no homehowners' => [
                '',
                [
                ]
            ],
        ];
    }
}
