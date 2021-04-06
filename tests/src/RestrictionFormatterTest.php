<?php


namespace Tingo\ews\Test;

use Tingo\ews\RestrictionFormatter;

class RestrictionFormatterTest extends BaseTestCase
{

    public function testFormatSimpleRestrictions()
    {
        $restriction = ['IsEqualTo' => ['DateTimeCreated' => 'test']];
        $formatted = RestrictionFormatter::format('message', $restriction);
        $expected = [
            'IsEqualTo' => [
                [
                    'FieldURI' => ['FieldURI' => 'item:DateTimeCreated'],
                    'FieldURIOrConstant' => ['Constant' => ['Value' => 'test']]
                ]
            ]
        ];

        $this->assertEquals($formatted, $expected);
    }

    public function testFormatAndOrRestrictions()
    {
        $restriction = [
            'Or' => [
                'IsGreaterThan' => ['DateTimeCreated' => 'test'],
                'And' => [
                    'IsEqualTo' => ['Subject' => 'test', 'IsRead' => false]
                ]
            ]
        ];
        $formatted = RestrictionFormatter::format('message', $restriction);
        $expected = [
            'Or' => [
                'IsGreaterThan' => [
                    [
                        'FieldURI' => ['FieldURI' => 'item:DateTimeCreated'],
                        'FieldURIOrConstant' => ['Constant' => ['Value' => 'test']]
                    ]
                ],
                'And' => [
                    'IsEqualTo' => [
                        [
                            'FieldURI' => ['FieldURI' => 'item:Subject'],
                            'FieldURIOrConstant' => ['Constant' => ['Value' => 'test']]
                        ],
                        [
                            'FieldURI' => ['FieldURI' => 'message:IsRead'],
                            'FieldURIOrConstant' => ['Constant' => ['Value' => 'false']]
                        ]
                    ],
                ]
            ]
        ];

        $this->assertEquals($formatted, $expected);
    }

    public function testOrOnSameProperty()
    {
        $restriction = [
            'Or' => [
                'IsEqualTo' => [
                    ['Subject' => 'test'],
                    ['Subject' => 'test2'],
                ]
            ]
        ];
        $expected = [
            'Or' => [
                'IsEqualTo' => [
                    [
                        'FieldURI' => ['FieldURI' => 'item:Subject'],
                        'FieldURIOrConstant' => ['Constant' => ['Value' => 'test']]
                    ],
                    [
                        'FieldURI' => ['FieldURI' => 'item:Subject'],
                        'FieldURIOrConstant' => ['Constant' => ['Value' => 'test2']]
                    ]
                ],
            ]
        ];

        $formatted = RestrictionFormatter::format('message', $restriction);
        $this->assertEquals($formatted, $expected);
    }
}
