<?php
//crear gurpos de rutas
Route::group(['prefix'=>'admin','as'=>'admin'],function(){


    //solo usuarios logueados pueden entrar en estas rutas
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/categorias-all',function(){
            return App\Core\Entities\Category::All();
            //http://blog2.dev/sumar2/2/4
        });
        
        
        Route::get('/load-data',function(){
           var_dump('cargando usuarios');
            factory(App\User::class,50)->create();
            var_dump('cargando categorias');
            factory(App\Core\Entities\Category::class,50)->create();
        });
        
        Route::get('/categoria/{id}',function($id){
            
            return App\Core\Entities\Category::findOrFail($id);
         });
    
    });

    

});



 