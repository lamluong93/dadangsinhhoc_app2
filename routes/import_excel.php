<?php
use App\Http\Controllers\ImportExcelController;

Route::get('/excel', [ImportExcelController::class, 'index'])->middleware(['auth'])->name('import.excel');
Route::post('/excel/import', [ImportExcelController::class, 'store'])->middleware(['auth'])->name('import-excel-import');