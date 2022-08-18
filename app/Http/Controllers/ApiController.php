<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index() {
      return response()->json([
          'api' => 'shopicon',
          'version' => '1.0.0',
      ]);
    }

    public function get_products($categoryId) {
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      } else {
        $page = 1;
      }

      $product_count = DB::table('products')
        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->where('product_categories.category_id', '=', $categoryId)
        ->count();
      $page_count = ceil($product_count / 10);

      $products = DB::table('products')
        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->where('product_categories.category_id', '=', $categoryId)
        ->offset(($page - 1) * 10)
        ->limit(10)
        ->get();
      
      return response()->json([
        'products' => $products,
        'page_count' => $page_count,
      ]);
    }
}