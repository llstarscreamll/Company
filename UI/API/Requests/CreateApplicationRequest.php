<?php

namespace App\Containers\AppData\UI\API\Requests;

use App\Port\Request\Abstracts\Request;

/**
 * Class CreateApplicationRequest.
 *
 * @author Johan Alvarez <llstarscreamll@hotmail.com>
 */
class CreateApplicationRequest extends Request
{

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->user()->hasPermissionTo('create-applications');
    }
}
