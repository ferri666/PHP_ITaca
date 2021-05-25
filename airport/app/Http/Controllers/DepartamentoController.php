<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index($pais) {
        return "Índex de Departamentos en $pais";
       }
   
       public function store($pais) {
           return "Store de Departamentos en $pais";
          }
   
          public function show($pais,$departamento) {
           return "Departamento de $departamento en $pais";
          }
   
          public function update($pais,$departamento) {
           return "Actualización de $departamento en $pais";
          }
   
          public function destroy($pais, $departamento) {
           return "Destrucción de $departamento en $pais";
          }
}
