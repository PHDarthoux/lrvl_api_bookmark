<?php

use App\Http\Controllers\Api\BookmarkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum') : Cela définit une route en utilisant le middleware d'authentification Sanctum. Cela signifie que seuls les utilisateurs authentifiés pourront accéder à cette route.
->get('/user', function (Request $request) : Cela indique que la route répondra à une requête HTTP GET vers "/user". La fonction anonyme prend en argument un objet Request, qui permet d'accéder aux données de la requête.
return $request->user(); : C'est le corps de la fonction. Il renvoie l'utilisateur actuellement authentifié. Dans Laravel, l'utilisateur actuellement authentifié est stocké dans l'objet Request sous la forme d'une instance de la classe User.
Dans le cas de cette API il n'y aura pas d'authentification.
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', BookmarkController::class);