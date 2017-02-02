<?php

namespace app\Containers\AppData\UI\API\Tests\Functional;

use App\Port\Tests\PHPUnit\Abstracts\TestCase;

/**
 * Class GetCompanyInfoTest.
 *
 * @author  Johan Alvarez <llstarscreamll@hotmail.com>
 */
class GetCompanyInfoTest extends TestCase
{
    private $endpoint = '/company-info';

    public function testGetCompanyInfo()
    {
        $user = $this->registerAndLoginTestingDeveloper();

        // send the HTTP request
        $response = $this->apiCall($this->endpoint, 'get');

        // assert response status is correct
        $this->assertEquals($response->getStatusCode(), '200');

        $responseObject = $this->getResponseObject($response);

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
