<?php

namespace App\Containers\Company\UI\API\Tests\Functional;

use App\Containers\Company\Models\Application;
use App\Port\Tests\PHPUnit\Abstracts\TestCase;

/**
 * Class GetCompanyInfoTest
 *
 * @author  Johan Alvarez <llstarscreamll@hotmail.com>
 */
class GetCompanyInfoTest extends TestCase
{

    private $endpoint = '/company-info';

    public function testGetCompanyInfo_()
    {
        $user = $this->registerAndLoginTestingDeveloper();

        // send the HTTP request
        $response = $this->apiCall($this->endpoint, 'get');

        // assert response status is correct
        $this->assertEquals($response->getStatusCode(), '200');

        $responseObject = $this->getResponseObject($response);

        $data = [
            'object' => 'Company',
            'name' => 'Acme Inc.',
            'cc_year' => '2017',
            'website' => 'www.google.com',
        ];

        $this->assertEquals((object)$data, $responseObject->data);
    }

}
