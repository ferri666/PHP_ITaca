<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index() {
        return "Índex de Paises";
       }
   
       public function store() {
           return "Store de Paises";
          }
   
          public function show($pais) {
           return "Muestra de $pais";
          }
   
          public function update($pais) {
           return "Actualización de $pais";
          }
   
          public function destroy($pais) {
           return "Destrucción de $pais";
          }
}
