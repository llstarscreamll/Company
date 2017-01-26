<?php

namespace App\Containers\Company\Actions;

use App\Containers\Company\Data\Repositories\ApplicationRepository;
use App\Port\Action\Abstracts\Action;
use App\Port\Criterias\Eloquent\OrderByCreationDateDescendingCriteria;
use App\Port\Criterias\Eloquent\ThisUserCriteria;

/**
 * Class ListAllAppsAction.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class GetCompanyInfoAction extends Action
{
    /**
     * @return  mixed
     */
    public function run()
    {
        $data = (object)[
            'name' => 'Acme Inc.',
            'cc_year' => '2017',
            'website' => 'www.google.com',
        ];

        return $data;
    }

}
