<?php

namespace App\Containers\AppData\UI\API\Transformers;

use App\Port\Transformer\Abstracts\Transformer;
use StdClass;

/**
 * Class CompanyTransformer.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class CompanyTransformer extends Transformer
{

    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * @param array $company
     *
     * @return  array
     */
    public function transform(StdClass $company)
    {
        return [
            'object'    => 'AppData',
            'fullname'  => $company->fullname,
            'short_name'=> $company->short_name,
            'small_name'=> $company->small_name,
            'big_name'  => $company->big_name,
            'cc_year'   => $company->cc_year,
            'website'   => $company->website,
        ];
    }
}
