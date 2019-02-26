<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username === 'admin' && $request->password === 'password') {
        return view('welcome_admin');
    } else {
        return view('login_error');
    }
});

Route::get('/display_discount', function () {
    
    return view('display_discount');
    
});

Route::post('/display_discount', function (Illuminate\Http\Request $request) {
    
    $price = $request->listprice;
    $productDescription = $request->productdescription;
    $discountPercent = $request->discountpercent / 100;

    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;

    return view('discount_result', compact(['discountPrice','discountAmount','productDescription','price','discountPercent']));
});

Route::get('/translation', function() {
    $result = '';

    return view('translation', compact(['result']));
});

Route::post('/translate' , function (Illuminate\Http\Request $request) {
    

    class TranslateController {
        private $dictionary;
    
        public function __construct() {
            $this->dictionary = array(
                'one' => 'một',
                'two' => 'hai',
                'three' => 'ba',
                'four' => 'bốn',
                'hello' => 'xin chào'
            );
        }
    
        public function toVietnamese($word) {
            foreach ($this->dictionary as $key => $result) {
                if ($key === $word) {
                    return $result;
                }; 
                
            }
            return 'No result';
        }
    }
    $input = $request->word_input;
    $translate = new TranslateController();
    $result = $translate->toVietnamese($input);
    return view('translation', compact(['result']));
}) ;
