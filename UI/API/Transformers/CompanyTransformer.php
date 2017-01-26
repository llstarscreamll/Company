<?php

namespace App\Containers\Company\UI\API\Transformers;

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
            'object'    => 'Company',
            'name'      => $company->name,
            'cc_year'   => $company->cc_year,
            'website'   => $company->website,
        ];
    }
}
