<?php

namespace app\Containers\AppData\UI\API\Tests\Functional;

use App\Ship\Parents\Tests\PhpUnit\TestCase;

/**
 * Class GetCompanyInfoTest.
 *
 * @author  Johan Alvarez <llstarscreamll@hotmail.com>
 */
class GetCompanyInfoTest extends TestCase
{
    protected $endpoint = 'get@company-info';

    public function testGetCompanyInfo()
    {
        $user = $this->getTestingUser();

        // send the HTTP request
        $response = $this->makeCall();

        // assert response status is correct
        $this->assertEquals($response->getStatusCode(), '200');

        $responseObject = $this->getResponseContent($response);

        $data = [
            'object' => 'AppData',
            'fullname' => env('APP_FULNAME', 'Acme Inc.'),
            'short_name' => env('APP_SHORT_NAME', 'Acme'),
            'big_name' => env('APP_BIG_NAME', 'Acme'),
            'small_name' => env('APP_SMALL_NAME', 'Inc.'),
            'cc_year' => env('APP_CC_YEAR', date('Y')),
            'website' => env('APP_WEBSITE', 'www.google.com'),
        ];

        $this->assertEquals((object) $data, $responseObject->data);
    }
}
