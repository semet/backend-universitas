<?php
use Illuminate\Support\Facades\Route;

Route::get("/fakultas", "FakultasController@index");
Route::get("/fakultas/no_dekan", "FakultasController@hasNoDekan");
Route::post("/fakultas", "FakultasController@store");
Route::get("/fakultas/{id}", "FakultasController@show");
Route::post("/fakultas/edit", "FakultasController@update");
Route::post("/fakultas/delete", "FakultasController@destroy");

Route::get("/tahun", "TahunController@index");
Route::post("/tahun", "TahunController@store");
Route::post("/tahun/toggle", "TahunController@toggleActive");
Route::get("/tahun/{id}", "TahunController@show");
Route::post("/tahun/edit", "TahunController@update");
Route::post("/tahun/delete", "TahunController@destroy");

Route::get("/semester", "SemesterController@index");
Route::post("/semester", "SemesterController@store");
Route::post("/semester/toggle", "SemesterController@toggleActive");
Route::get("/semester/{id}", "SemesterController@show");
Route::post("/semester/edit", "SemesterController@update");
Route::post("/semester/delete", "SemesterController@destroy");

Route::get("/dekan", "DekanController@index");
Route::post("/dekan", "DekanController@store");
Route::get("/dekan/{id}", "DekanController@show");
Route::post("/dekan/edit", "DekanController@update");
Route::post("/dekan/delete", "DekanController@destroy");

Route::get("/staff", "StaffController@index");
Route::post("/staff", "StaffController@store");
Route::get("/staff/{id}", "StaffController@show");
Route::post("/staff/edit", "StaffController@update");
Route::post("/staff/delete", "StaffController@destroy");

Route::get("/matakuliah", "MatakuliahController@index");
Route::post("/matakuliah", "MatakuliahController@store");
Route::get("/matakuliah/{id}", "MatakuliahController@show");
Route::post("/matakuliah/edit", "MatakuliahController@update");
Route::post("/matakuliah/delete", "MatakuliahController@destroy");

Route::get("/dosen", "DosenController@index");
Route::post("/dosen", "DosenController@store");
Route::get("/dosen/{id}", "DosenController@show");
Route::post("/dosen/edit", "DosenController@update");
Route::post("/dosen/delete", "DosenController@destroy");
