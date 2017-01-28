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
            'fullname' => 'Acme Inc.',
            'short_name' => 'Acme',
            'big_name' => 'Acme',
            'small_name' => 'Inc.',
            'cc_year' => '2017',
            'website' => 'www.acmeinc.com',
        ];

        return $data;
    }

}
