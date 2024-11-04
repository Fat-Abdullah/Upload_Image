<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Rules\ImageOnly;
use App\Rules\MaxName;


Route::get('/', function () {
    return view('upload_img'); // تأكد من وجود صفحة upload_img.blade.php في resources/views
});

Route::post('/', function (Request $request) {
    $valid = $request->validate([
        'name' =>[new MaxName],
        'file' =>[new ImageOnly],
    ]);

    return 'success';
});

?>







