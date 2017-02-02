<?php

namespace App\Containers\AppData\UI\API\Controllers;

use App\Port\Controller\Abstracts\PortApiController;
use App\Containers\AppData\Actions\GetCompanyInfoAction;
use App\Containers\AppData\UI\API\Transformers\CompanyTransformer;

/**
 * Class Controller.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class Controller extends PortApiController
{
    /**
     * @param \App\Containers\AppData\Actions\ListAllAppsAction $action
     *
     * @return  \Dingo\Api\Http\Response
     */
    public function getCompanyInfo(GetCompanyInfoAction $action)
    {
        $companyInfo = $action->run();
        
        return $this->response->item($companyInfo, new CompanyTransformer());
    }

}
