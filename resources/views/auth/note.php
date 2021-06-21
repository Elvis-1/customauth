<?php
/* how to protect profile page
1) make middleware
   $ php artisan make:middleware AuthCheck
2) register your middleware in kernal.php file inside Http
3) add it to profile route
4) go to AuthCheck.php and  add:
     if(!session()->has('Logggeduser')){
            return redirect('login')->with('fail','You must log in');
        }
/* How to keep user logged
1) make middleware
 



