<?php namespace Kowali\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Content extends Facade {

	/**
     * Return the name of the IOC biding behind the facade
	 *
	 * @return string
	 */
    protected static function getFacadeAccessor()
    {
        return 'kowali.contents';
    }

}
