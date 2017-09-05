<?php namespace Tukecx\Base\AssetsManagement\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\AssetsManagement\Assets;

class AssetsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Assets::class;
    }
}
