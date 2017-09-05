<?php namespace Tukecx\Base\AssetsManagement\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Tukecx\Base\AssetsManagement\Facades\AssetsFacade;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../resources/public' => public_path(),
        ], 'tukecx-public-assets');
    }

    public function register()
    {
        load_module_helpers(__DIR__);

        AliasLoader::getInstance()->alias('Assets', AssetsFacade::class);

        $this->mergeConfigFrom(__DIR__ . '/../../config/tukecx-assets.php', 'tukecx-assets');
    }
}
