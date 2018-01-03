<?php

Route::group(['middleware' => ['api']], function(){
    Route::post('/auth/signup', 'AuthController@signup');
    Route::post('/auth/signin', 'AuthController@signin');
    
    Route::get('/tutorial', 'TutorialController@index');
    Route::get('/tutorial/{id}', 'TutorialController@show');
    
    Route::group(['middleware' => ['jwt.auth']], function(){
        Route::get('/profile', 'UserController@show');
        
        // =====tutorial
        Route::post('/tutorial', 'TutorialController@store');
        Route::put('/tutorial/{id}', 'TutorialController@update');
        Route::delete('/tutorial/{id}', 'TutorialController@destroy');
        
        // =====komentar dari tutorial
        Route::post('/comment/{id_tut}', 'CommentController@store');
    });
});
