<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="msapplication-TileColor" content="#6AB12F">
        <meta name="theme-color" content="#db5945">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="ico_black.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>TimePlan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container-fluid ">
            <div class="row" >
                 <div class="col-auto">
                      
                <img src="logo_black2.png" width="50%" > 
                </div>

        <div class="flex-center position-ref full-height">
                
                    @if (Route::has('login'))
                    <div class="top-right links"> 
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="/TimePlan">Let's start!</a> 
                    @else
                    
                    
                    <a href="/TimePlan">Let's start!</a> 
                    <a href="">Download</a>
                    <a href="">Login</a>
                    <a href="">Register</a>
                
                    </div>
                     @endif  
                     </div>
            </div>
        </div>
    </div>
        
        
        <hr style="height:10px">
                  
        
    </body>
</html>
