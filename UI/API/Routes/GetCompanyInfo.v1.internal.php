<?php

/*********************************************************************************
 * @apiGroup           Company
 * @apiName            getCompanyInfo
 * @api                {get} /company-info Give the app Company info
 * @apiDescription     Retrieves the app Company info
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiHeader          Accept application/json (required)
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
   "data":[
      {
         "object":"Company",
         "name":"ACME Inc.",
         "cc_year": "2017",
         "website": "www.acme-inc.com"
      }
      }
   ]
}
 */

$router->get('company-info', [
    'uses'       => 'Controller@getCompanyInfo',
]);
