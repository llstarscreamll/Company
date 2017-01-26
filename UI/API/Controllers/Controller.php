<?php

namespace App\Containers\Company\UI\API\Controllers;

use App\Port\Controller\Abstracts\PortApiController;
use App\Containers\Company\Actions\GetCompanyInfoAction;
use App\Containers\Company\UI\API\Transformers\CompanyTransformer;

/**
 * Class Controller.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class Controller extends PortApiController
{
    /**
     * @param \App\Containers\Company\Actions\ListAllAppsAction $action
     *
     * @return  \Dingo\Api\Http\Response
     */
    public function getCompanyInfo(GetCompanyInfoAction $action)
    {
        $companyInfo = $action->run();
        
        return $this->response->item($companyInfo, new CompanyTransformer());
    }

}
