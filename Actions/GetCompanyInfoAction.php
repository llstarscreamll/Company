<?php

namespace App\Containers\AppData\Actions;

use App\Containers\AppData\Data\Repositories\ApplicationRepository;
use App\Ship\Parents\Actions\Action;

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
            'fullname' => env('APP_FULNAME', 'Acme Inc.'),
            'short_name' => env('APP_SHORT_NAME', 'Acme'),
            'big_name' => env('APP_BIG_NAME', 'Acme'),
            'small_name' => env('APP_SMALL_NAME', 'Inc.'),
            'cc_year' => env('APP_CC_YEAR', date('Y')),
            'website' => env('APP_WEBSITE', 'www.google.com'),
        ];

        return $data;
    }

}
