<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ApiController extends Controller
{
    public function index() {
      $user = 'guest';

      // for simplification reasons of the demo
      session_start();
      if (isset($_SESSION['user'])) {
        $user = DB::table('users')->find($_SESSION['user'])->username;
      }

      return response()->json([
          'api' => 'shopicon',
          'version' => '1.0.0',
          'user' => $user,
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

    public function get_product($id, $name) {
      $product = DB::table('products')
        ->select('id', 'title', 'price', 'weight', 'sku', 'mpn', 'manufacturer', 'description', 'image')
        ->join('product_images', 'products.id', '=', 'product_images.product_id')
        ->find($id);
      
      return response()->json($product);
    }

    public function get_categories() {
      $categories = DB::table('categories')->get();

      return response()->json($categories);
    }

    public function login(Request $request) {
      $email = $request->input('email', '');
      $password = $request->input('password', '');

      $user = DB::table('users')
        ->where('username', '=', $email)
        ->where('password', '=', $password)
        ->first();

      if ($user) {
        // for simplification reasons of the demo
        session_start();
        $_SESSION['user'] = $user->id;

        return response()->json([
          "code" => 200,
          "status" => "ok",
          "message" => "Logged in successfuly",
        ]);
      } else if (!$user) {
        return response()->json([
          "code" => 401,
          "status" => "Invalid credentials",
          "message" => "Check your email and password",
        ]);
      }
    }

    public function register(Request $request) {
      $email = $request->input('email', '');
      $password = $request->input('password', '');
      $password_check = $request->input('password-check', '');

      $request->validate([
          'email' => [
            'required',
            'unique:users,username',
          ],
          'password' => [
            'required',
          ],
          'password-check' => [
            'required',
            'same:password',
          ],
      ]);

      DB::table('users')->insert([
        'username' => $email,
        'password' => $password,
      ]);

      return response()->json([
        "code" => 200,
        "status" => "ok",
        "message" => "Welcome to our store",
      ]);
    }

    public function logout() {
      session_start();

      if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
      
        return response()->json([
          "code" => 200,
          "status" => "ok",
          "message" => "Logged out successfuly",
        ]);
      } else {
        return response()->json([
          "code" => 401,
          "status" => "error",
          "message" => "You are not logged in",
        ]);
      }
    }
}