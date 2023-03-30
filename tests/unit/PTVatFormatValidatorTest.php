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
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
