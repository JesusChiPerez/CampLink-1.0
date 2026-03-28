<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Muestra la página de bienvenida (banner + categorías + secciones + footer)
     * PÚBLICA - sin autenticación requerida
     */
    public function index()
    {
        $products = Product::all();

        return view('welcome')->with([
            'products' => $products,
        ]);
    }

    /**
     * ✅ Muestra SOLO los productos en la tienda/catálogo
     * COMPLETAMENTE PÚBLICA - sin autenticación requerida
     * SIN middleware, SIN restricciones
     * 
     * Accesible para:
     * - Usuarios NO logueados
     * - Usuarios logueados (sin admin)
     * - Usuarios admin
     * 
     * El admin verá esta página + puede ir a /panel para gestionar
     */
    public function productos()
    {
        $products = Product::all();
        
        // Detectar si es admin (para mostrar enlace opcional al panel)
        $isAdmin = optional(Auth::user())->isAdmin() ?? false;
        
        return view('products.productos', [
            'products' => $products,
            'isAdmin' => $isAdmin,
        ]);
    }
}