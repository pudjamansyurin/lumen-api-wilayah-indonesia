<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Request;
use App\Models\Wilayah;
use App\Http\Resources\WilayahResource;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function (Request $request) use ($router) {
    $mst_kode = $request->input('mst_kode_wilayah');
    
    $wilayah = Wilayah::where('MST_KODE_WILAYAH', $mst_kode)->get();

    return WilayahResource::collection($wilayah);
    // return $router->app->version();
});
