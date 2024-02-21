<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Base\CreateController as BaseCreateController;
use App\Http\Controllers\Base\DestroyController as BaseDestroyController;
use App\Http\Controllers\Base\EditController as BaseEditController;
use App\Http\Controllers\Base\IndexController as BaseIndexController;
use App\Http\Controllers\Base\ShowController as BaseShowController;
use App\Http\Controllers\Base\StoreController as BaseStoreController;
use App\Http\Controllers\Base\UpdateController as BaseUpdateController;
use App\Http\Controllers\FlowerGarden\CreateController as FlowerGardenCreateController;
use App\Http\Controllers\FlowerGarden\DestroyController as FlowerGardenDestroyController;
use App\Http\Controllers\FlowerGarden\EditController as FlowerGardenEditController;
use App\Http\Controllers\FlowerGarden\IndexController as FlowerGardenIndexController;
use App\Http\Controllers\FlowerGarden\ShowController as FlowerGardenShowController;
use App\Http\Controllers\FlowerGarden\StoreController as FlowerGardenStoreController;
use App\Http\Controllers\FlowerGarden\UpdateController as FlowerGardenUpdateController;
use App\Http\Controllers\Installation\CreateController as InstallationCreateController;
use App\Http\Controllers\Installation\DestroyController as InstallationDestroyController;
use App\Http\Controllers\Installation\EditController as InstallationEditController;
use App\Http\Controllers\Installation\IndexController as InstallationIndexController;
use App\Http\Controllers\Installation\ShowController as InstallationShowController;
use App\Http\Controllers\Installation\StoreController as InstallationStoreController;
use App\Http\Controllers\Installation\UpdateController as InstallationUpdateController;
use App\Http\Controllers\Material\CreateController as MaterialCreateController;
use App\Http\Controllers\Material\DestroyController as MaterialDestroyController;
use App\Http\Controllers\Material\EditController as MaterialEditController;
use App\Http\Controllers\Material\IndexController as MaterialIndexController;
use App\Http\Controllers\Material\ShowController as MaterialShowController;
use App\Http\Controllers\Material\StoreController as MaterialStoreController;
use App\Http\Controllers\Material\UpdateController as MaterialUpdateController;
use App\Http\Controllers\NameEngraving\CreateController as NameEngravingCreateController;
use App\Http\Controllers\NameEngraving\DestroyController as NameEngravingDestroyController;
use App\Http\Controllers\NameEngraving\EditController as NameEngravingEditController;
use App\Http\Controllers\NameEngraving\IndexController as NameEngravingIndexController;
use App\Http\Controllers\NameEngraving\ShowController as NameEngravingShowController;
use App\Http\Controllers\NameEngraving\StoreController as NameEngravingStoreController;
use App\Http\Controllers\NameEngraving\UpdateController as NameEngravingUpdateController;
use App\Http\Controllers\PortraitEngraving\CreateController as PortraitEngravingCreateController;
use App\Http\Controllers\PortraitEngraving\DestroyController as PortraitEngravingDestroyController;
use App\Http\Controllers\PortraitEngraving\EditController as PortraitEngravingEditController;
use App\Http\Controllers\PortraitEngraving\IndexController as PortraitEngravingIndexController;
use App\Http\Controllers\PortraitEngraving\ShowController as PortraitEngravingShowController;
use App\Http\Controllers\PortraitEngraving\StoreController as PortraitEngravingStoreController;
use App\Http\Controllers\PortraitEngraving\UpdateController as PortraitEngravingUpdateController;
use App\Http\Controllers\Stele\CreateController as SteleCreateController;
use App\Http\Controllers\Stele\DestroyController as SteleDestroyController;
use App\Http\Controllers\Stele\EditController as SteleEditController;
use App\Http\Controllers\Stele\IndexController as SteleIndexController;
use App\Http\Controllers\Stele\IndexTableController;
use App\Http\Controllers\Stele\ShowController as SteleShowController;
use App\Http\Controllers\Stele\StoreController as SteleStoreController;
use App\Http\Controllers\Stele\UpdateController as SteleUpdateController;
use App\Http\Controllers\Stele\UpdateTableController as SteleUpdateTableController;
use App\Http\Controllers\Tomb\CreateController as TombCreateController;
use App\Http\Controllers\Tomb\DestroyController as TombDestroyController;
use App\Http\Controllers\Tomb\EditController as TombEditController;
use App\Http\Controllers\Tomb\IndexController as TombIndexController;
use App\Http\Controllers\Tomb\ShowController as TombShowController;
use App\Http\Controllers\Tomb\StoreController as TombStoreController;
use App\Http\Controllers\Tomb\UpdateController as TombUpdateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::group(['namespace' => 'Stele'], function() {
  Route::get('/steles', [SteleIndexController::class, 'index'])->name('steles.index');
  Route::get('/steles-table', [IndexTableController::class, 'index'])->name('steles-table.index');
  Route::get('/steles/create', [SteleCreateController::class, 'create'])->name('steles.create');
  Route::post('/steles', [SteleStoreController::class, 'store'])->name('steles.store');
  Route::get('/steles/{stele}', [SteleShowController::class, 'show'])->name('steles.show');
  Route::get('/steles/{stele}/edit', [SteleEditController::class, 'edit'])->name('steles.edit');
  Route::patch('/steles/{stele}', [SteleUpdateController::class, 'update'])->name('steles.update');
  Route::patch('/steles-table', [SteleUpdateTableController::class, 'update'])->name('steles-table.update');
  Route::delete('/steles/{stele}', [SteleDestroyController::class, 'destroy'])->name('steles.destroy');
});

Route::group(['namespace' => 'material'], function () {
  Route::get('/materials', [MaterialIndexController::class, 'index'])->name('materials.index');
  Route::get('/materials/create', [MaterialCreateController::class, 'create'])->name('materials.create');
  Route::post('/materials', [MaterialStoreController::class, 'store'])->name('materials.store');
  Route::get('/materials/{material}', [MaterialShowController::class, 'show'])->name('materials.show');
  Route::get('/materials/{material}/edit', [MaterialEditController::class, 'edit'])->name('materials.edit');
  Route::patch('/materials/{material}', [MaterialUpdateController::class, 'update'])->name('materials.update');
  Route::delete('/materials/{material}', [MaterialDestroyController::class, 'destroy'])->name('materials.destroy');
});

Route::group(['namespace' => 'Base'], function () {
  Route::get('/basis', [BaseIndexController::class, 'index'])->name('basis.index');
  Route::get('/basis/create', [BaseCreateController::class, 'create'])->name('basis.create');
  Route::post('/basis', [BaseStoreController::class, 'store'])->name('basis.store');
  Route::get('/basis/{base}', [BaseShowController::class, 'show'])->name('basis.show');
  Route::get('/basis/{base}/edit', [BaseEditController::class, 'edit'])->name('basis.edit');
  Route::patch('/basis/{base}', [BaseUpdateController::class, 'update'])->name('basis.update');
  Route::delete('/basis/{base}', [BaseDestroyController::class, 'destroy'])->name('basis.destroy');
});

Route::group(['namespace' => 'FlowerGarden'], function () {
  Route::get('/flower-gardens', [FlowerGardenIndexController::class, 'index'])->name('flower-gardens.index');
  Route::get('/flower-gardens/create', [FlowerGardenCreateController::class, 'create'])->name('flower-gardens.create');
  Route::post('/flower-gardens', [FlowerGardenStoreController::class, 'store'])->name('flower-gardens.store');
  Route::get('/flower-gardens/{flower-garden}', [FlowerGardenShowController::class, 'show'])->name('flower-gardens.show');
  Route::get('/flower-gardens/{flower-garden}/edit', [FlowerGardenEditController::class, 'edit'])->name('flower-gardens.edit');
  Route::patch('/flower-gardens/{flower-garden}', [FlowerGardenUpdateController::class, 'update'])->name('flower-gardens.update');
  Route::delete('/flower-gardens/{flower-garden}', [FlowerGardenDestroyController::class, 'destroy'])->name('flower-gardens.destroy');
});

Route::group(['namespace' => 'Tomb'], function () {
  Route::get('/tombs', [TombIndexController::class, 'index'])->name('tombs.index');
  Route::get('/tombs/create', [TombCreateController::class, 'create'])->name('tombs.create');
  Route::post('/tombs', [TombStoreController::class, 'store'])->name('tombs.store');
  Route::get('/tombs/{tomb}', [TombShowController::class, 'show'])->name('tombs.show');
  Route::get('/tombs/{tomb}/edit', [TombEditController::class, 'edit'])->name('tombs.edit');
  Route::patch('/tombs/{tomb}', [TombUpdateController::class, 'update'])->name('tombs.update');
  Route::delete('/tombs/{tomb}', [TombDestroyController::class, 'destroy'])->name('tombs.destroy');
});

Route::group(['namespace' => 'Installation'], function () {
  Route::get('/installations', [InstallationIndexController::class, 'index'])->name('installations.index');
  Route::get('/installations/create', [InstallationCreateController::class, 'create'])->name('installations.create');
  Route::post('/installations', [InstallationStoreController::class, 'store'])->name('installations.store');
  Route::get('/installations/{installation}', [InstallationShowController::class, 'show'])->name('installations.show');
  Route::get('/installations/{installation}/edit', [InstallationEditController::class, 'edit'])->name('installations.edit');
  Route::patch('/installations/{installation}', [InstallationUpdateController::class, 'update'])->name('installations.update');
  Route::delete('/installations/{installation}', [InstallationDestroyController::class, 'destroy'])->name('installations.destroy');
});

Route::group(['namespace' => 'PortraitEngraving'], function () {
  Route::get('/portrait-engravings', [PortraitEngravingIndexController::class, 'index'])->name('portrait-engravings.index');
  Route::get('/portrait-engravings/create', [PortraitEngravingCreateController::class, 'create'])->name('portrait-engravings.create');
  Route::post('/portrait-engravings', [PortraitEngravingStoreController::class, 'store'])->name('portrait-engravings.store');
  Route::get('/portrait-engravings/{portrait-engraving}', [PortraitEngravingShowController::class, 'show'])->name('portrait-engravings.show');
  Route::get('/portrait-engravings/{portrait-engraving}/edit', [PortraitEngravingEditController::class, 'edit'])->name('portrait-engravings.edit');
  Route::patch('/portrait-engravings/{portrait-engraving}', [PortraitEngravingUpdateController::class, 'update'])->name('portrait-engravings.update');
  Route::delete('/portrait-engravings/{portrait-engraving}', [PortraitEngravingDestroyController::class, 'destroy'])->name('portrait-engravings.destroy');
});

Route::group(['namespace' => 'NameEngraving'], function () {
  Route::get('/name-engravings', [NameEngravingIndexController::class, 'index'])->name('name-engravings.index');
  Route::get('/name-engravings/create', [NameEngravingCreateController::class, 'create'])->name('name-engravings.create');
  Route::post('/name-engravings', [NameEngravingStoreController::class, 'store'])->name('name-engravings.store');
  Route::get('/name-engravings/{name-engraving}', [NameEngravingShowController::class, 'show'])->name('name-engravings.show');
  Route::get('/name-engravings/{name-engraving}/edit', [NameEngravingEditController::class, 'edit'])->name('name-engravings.edit');
  Route::patch('/name-engravings/{name-engraving}', [NameEngravingUpdateController::class, 'update'])->name('name-engravings.update');
  Route::delete('/name-engravings/{name-engraving}', [NameEngravingDestroyController::class, 'destroy'])->name('name-engravings.destroy');
});
