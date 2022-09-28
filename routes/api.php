<?php

use App\Http\Controllers\Api\Agente\AgenteDeleteController;
use App\Http\Controllers\Api\Agente\AgenteIndexController;
use App\Http\Controllers\Api\Agente\AgenteShowController;
use App\Http\Controllers\Api\Agente\AgenteStoreController;
use App\Http\Controllers\Api\Alumno\AlumnoDeleteController;
use App\Http\Controllers\Api\Alumno\AlumnoIndexController;
use App\Http\Controllers\Api\Alumno\AlumnoShowController;
use App\Http\Controllers\Api\Alumno\AlumnoStoreController;
use App\Http\Controllers\Api\AnioEscolar\AnioEscolarDeleteController;
use App\Http\Controllers\Api\AnioEscolar\AnioEscolarIndexController;
use App\Http\Controllers\Api\AnioEscolar\AnioEscolarShowController;
use App\Http\Controllers\Api\AnioEscolar\AnioEscolarStoreController;
use App\Http\Controllers\Api\Cargo\CargoDeleteController;
use App\Http\Controllers\Api\Cargo\CargoIndexController;
use App\Http\Controllers\Api\Cargo\CargoShowController;
use App\Http\Controllers\Api\Cargo\CargoStoreController;
use App\Http\Controllers\Api\CicloLectivo\CicloLectivoDeleteController;
use App\Http\Controllers\Api\CicloLectivo\CicloLectivoIndexController;
use App\Http\Controllers\Api\CicloLectivo\CicloLectivoShowController;
use App\Http\Controllers\Api\CicloLectivo\CicloLectivoStoreController;
use App\Http\Controllers\Api\CicloLectivo\CicloLectivoUpdateController;
use App\Http\Controllers\Api\Curso\CursoDeleteController;
use App\Http\Controllers\Api\Curso\CursoIndexController;
use App\Http\Controllers\Api\Curso\CursoShowController;
use App\Http\Controllers\Api\Curso\CursoStoreController;
use App\Http\Controllers\Api\Curso\CursoUpdateController;
use App\Http\Controllers\Api\DesignacionCargo\DesignacionCargoDeleteController;
use App\Http\Controllers\Api\DesignacionCargo\DesignacionCargoIndexController;
use App\Http\Controllers\Api\DesignacionCargo\DesignacionCargoShowController;
use App\Http\Controllers\Api\DesignacionCargo\DesignacionCargoStoreController;
use App\Http\Controllers\Api\DesignacionDocente\DesignacionDocenteDeleteController;
use App\Http\Controllers\Api\DesignacionDocente\DesignacionDocenteIndexController;
use App\Http\Controllers\Api\DesignacionDocente\DesignacionDocenteShowController;
use App\Http\Controllers\Api\DesignacionDocente\DesignacionDocenteStoreController;
use App\Http\Controllers\Api\DesignacionDocente\DesignacionDocenteUpdateController;
use App\Http\Controllers\Api\EspacioCurricular\EspacioCurricularDeleteController;
use App\Http\Controllers\Api\EspacioCurricular\EspacioCurricularIndexController;
use App\Http\Controllers\Api\EspacioCurricular\EspacioCurricularShowController;
use App\Http\Controllers\Api\EspacioCurricular\EspacioCurricularStoreController;
use App\Http\Controllers\Api\Informe\InformeDeleteController;
use App\Http\Controllers\Api\Informe\InformeIndexController;
use App\Http\Controllers\Api\Informe\InformeShowController;
use App\Http\Controllers\Api\Informe\InformeStoreController;
use App\Http\Controllers\Api\Informe\InformeUpdateController;
use App\Http\Controllers\Api\Localidad\LocalidadDeleteController;
use App\Http\Controllers\Api\Localidad\LocalidadIndexController;
use App\Http\Controllers\Api\Localidad\LocalidadShowController;
use App\Http\Controllers\Api\Localidad\LocalidadStoreController;
use App\Http\Controllers\Api\Localidad\LocalidadUpdateController;
use App\Http\Controllers\Api\Persona\PersonaDeleteController;
use App\Http\Controllers\Api\Persona\PersonaIndexController;
use App\Http\Controllers\Api\Persona\PersonaShowController;
use App\Http\Controllers\Api\Persona\PersonaStoreController;
use App\Http\Controllers\Api\PlanEstudio\PlanEstudioDeleteController;
use App\Http\Controllers\Api\PlanEstudio\PlanEstudioIndexController;
use App\Http\Controllers\Api\PlanEstudio\PlanEstudioShowController;
use App\Http\Controllers\Api\PlanEstudio\PlanEstudioStoreController;
use App\Http\Controllers\Api\Provincia\ProvinciaDeleteController;
use App\Http\Controllers\Api\Provincia\ProvinciaIndexController;
use App\Http\Controllers\Api\Provincia\ProvinciaShowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ENDPOINT CICLO LECTIVO
Route::get('informes',InformeIndexController::class);
Route::get('informes/{id}',InformeShowController::class);
Route::post('informes',InformeStoreController::class);
Route::delete('informes/{id}',InformeDeleteController::class);
Route::put('informes/{id}',InformeUpdateController::class);

// ENDPOINT LOCALIDADES
Route::get('localidades',LocalidadIndexController::class);
Route::get('localidades/{id}',LocalidadShowController::class);
Route::post('localidades',LocalidadStoreController::class);
Route::delete('localidades/{id}',LocalidadDeleteController::class);
Route::put('localidades/{id}',LocalidadUpdateController::class);

// ENDPOINT PROVINCIAS
Route::get('provincias',ProvinciaIndexController::class);
Route::get('provincias/{id}',ProvinciaShowController::class);
Route::delete('provincias/{id}',ProvinciaDeleteController::class);
// ENDPOINT PERSONAS
Route::get('personas',PersonaIndexController::class);
Route::get('personas/{id}',PersonaShowController::class);
Route::post('personas',PersonaStoreController::class);
Route::delete('personas/{id}',PersonaDeleteController::class);
///////////////////////////////////


// ENDPOINT ALUMNO
Route::get('alumnos',AlumnoIndexController::class);
Route::get('alumnos/{id}',AlumnoShowController::class);
Route::post('alumnos',AlumnoStoreController::class);
Route::delete('alumnos/{id}',AlumnoDeleteController::class);


// ENDPOINT AGENTE
Route::get('agentes',AgenteIndexController::class);
Route::get('agentes/{id}',AgenteShowController::class);
Route::post('agentes',AgenteStoreController::class);
Route::delete('agentes/{id}',AgenteDeleteController::class);


// ENDPOINT PLAN DE ESTUDIO
Route::get('planes_estudio',PlanEstudioIndexController::class);
Route::get('planes_estudio/{id}',PlanEstudioShowController::class);
Route::post('planes_estudio',PlanEstudioStoreController::class);
Route::delete('planes_estudio/{id}',PlanEstudioDeleteController::class);


// ENDPOINT ANIO ESCOLAR
Route::get('anio_escolar',AnioEscolarIndexController::class);
Route::get('anio_escolar/{id}',AnioEscolarShowController::class);
Route::post('anio_escolar',AnioEscolarStoreController::class);
Route::delete('anio_escolar/{id}',AnioEscolarDeleteController::class);


// ENDPOINT ANIO ESCOLAR
Route::get('espacios_curriculares',EspacioCurricularIndexController::class);
Route::get('espacios_curriculares/{id}',EspacioCurricularShowController::class);
Route::post('espacios_curriculares',EspacioCurricularStoreController::class);
Route::delete('espacios_curriculares/{id}',EspacioCurricularDeleteController::class);


// ENDPOINT CARGOS
Route::get('cargos',CargoIndexController::class);
Route::get('cargos/{id}',CargoShowController::class);
Route::post('cargos',CargoStoreController::class);
Route::delete('cargos/{id}',CargoDeleteController::class);

// ENDPOINT DESIGNACION DE CARGOS
Route::get('designaciones_cargo',DesignacionCargoIndexController::class);
Route::get('designaciones_cargo/{id}',DesignacionCargoShowController::class);
Route::post('designaciones_cargo',DesignacionCargoStoreController::class);
Route::delete('designaciones_cargo/{id}',DesignacionCargoDeleteController::class);
// ENDPOINT CURSOS
Route::get('cursos',CursoIndexController::class);
Route::get('cursos/{id}',CursoShowController::class);
Route::post('cursos',CursoStoreController::class);
Route::delete('cursos/{id}',CursoDeleteController::class);
Route::put('cursos/{id}',CursoUpdateController::class);

// ENDPOINT DESIGNACION DOCENTE
Route::get('designaciones_docente',DesignacionDocenteIndexController::class);
Route::get('designaciones_docente/{id}',DesignacionDocenteShowController::class);
Route::post('designaciones_docente',DesignacionDocenteStoreController::class);
Route::delete('designaciones_docente/{id}',DesignacionDocenteDeleteController::class);
Route::put('designaciones_docente/{id}',DesignacionDocenteUpdateController::class);

// ENDPOINT CICLO LECTIVO
Route::get('ciclos_lectivos',CicloLectivoIndexController::class);
Route::get('ciclos_lectivos/{id}',CicloLectivoShowController::class);
Route::post('ciclos_lectivos',CicloLectivoStoreController::class);
Route::delete('ciclos_lectivos/{id}',CicloLectivoDeleteController::class);
Route::put('ciclos_lectivos/{id}',CicloLectivoUpdateController::class);




//Route::resource('personas',PersonaController::class);
