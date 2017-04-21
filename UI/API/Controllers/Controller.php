<?php

namespace App\Containers\AppData\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppData\Actions\GetCompanyInfoAction;
use App\Containers\AppData\UI\API\Transformers\CompanyTransformer;

/**
 * Class Controller.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class Controller extends ApiController
{
    /**
     * @param \App\Containers\AppData\Actions\ListAllAppsAction $action
     *
     * @return  \Dingo\Api\Http\Response
     */
    public function getCompanyInfo(GetCompanyInfoAction $action)
    {
        $companyInfo = $action->run();
        
        return $this->transform($companyInfo, new CompanyTransformer());
    }

}
