<?php

namespace rocketfellows\PTVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class PTVatFormatValidatorTest extends TestCase
{
    /**
     * @var PTVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new PTVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'PT000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PT111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PT999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PT123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PT1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'PT12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Pt123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'pT123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'pt123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
