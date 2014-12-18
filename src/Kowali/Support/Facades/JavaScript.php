<?php namespace Kowali\I18n;

use Illuminate\Support\Facades\Facade;

class JavaScript extends Facade {

	/**
     * Return the name of the IOC biding behind the facade
	 *
	 * @return string
	 */
    protected static function getFacadeAccessor()
    {
        return 'kowali.javascript';
    }

}
