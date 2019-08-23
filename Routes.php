<?php
$flag=1;
Route::set('Index',function(){
    Index::CreateView("Index");
});
Route::set('about-us',function(){
    AboutUs::CreateView("AboutUs");
    AboutUs::test();
});
Route::set('contact-us',function(){
    ContactUs::CreateView("ContactUs");
});
$routes=(Route::getRoute());
// print_r($routes);
if(!in_array($_GET['url'], $routes)){
    Redirect::CreateView("Redirect");
}
//     
// }

