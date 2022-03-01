<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- cdns for tailwind css -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Lobster -font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <!-- poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">

        <!-- script for tailwind css -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body{
                /* font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; */
                font-family: 'Lobster', cursive;
                /* background-color : #eec07b; */
                /* background-color : #c879ff; */
                /* background-color : #c68956; */
            }
            
            .background-image {
                width:100%;
                position : relative;
                background-image: url("assets/res1.jpg");
                background-size: cover;
               /* background-color:#eec07b; */
               /* z-index : 1; */
               /* animation: spin 2s linear; */

                /* @keyframes spin {
                    from {
                        transform: rotate(0deg);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                } */
            }

            .background-image:after{
                content:'';
                background-color : white;
                width:100%;
                height:100%;
                position:absolute;
                top:0;
                left:0;
                opacity:0.4;
            }

            .box {
                /* background-color : #e6f8f9; */
                /* background-color : #E7A688; */
                /* background-color : #FED18C; */
                background-color : rgba(98,58,43, 0.6);
                position:relative;
                z-index : 1;
            }

            .snip{
                font-size : 12px;
                text-decoration : underline;
            }

            .google{
                font-family: 'Poppins', sans-serif;
            }

            .googlebutton{
                background-color : white;
            }
        </style>

    </head>
    <body>
        <div class="background-image p-6"> 
            <div class="flex items-center justify-center min-h-screen">
                <div class="px-8 py-5 box m-4 text-left shadow-lg rounded-3xl">
                    <div class="flex justify-center">
                        <!-- <img src="assets/kebab.png" width="100px"> -->
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg> -->
                    </div>
                    <h3 class="text-2xl font-bold text-center" style="color: white">Login to your account</h3>
                    <div class="form">
                        <form action="" calss="sm">
                                <div>
                                    <label class="block" for="email">Email<label>
                                            <input type="text" placeholder="Email"
                                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                            <span class="text-xs tracking-wide text-red-600">Email field is required </span>
                                </div>
                                <div class="mt-4">
                                    <label class="block">Password<label>
                                            <input type="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                                <div class="h-10 mt-4">
                                    <div class="grid grid-rows-1 ">
                                        <div class="row-start-1 float-right">
                                            <button class="px-6 py-2 text-aqua rounded-lg hover:bg-blue-900" style="background-color: white">Login</button>
                                        </div>
                                        <div class="row-end-2">
                                            <a href="#" class="text-sm px-6 float-right py-2 text-blue-600 hover:underline">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                        <p class="mt-4 snip text-blue-500 text-center">sign in with</p>
                    <div class="grid grid-rows-1 sign_app">
                        <div class="row-start-1 float-right google text-center">
                            <button class="googlebutton py-2 mt-4 text-black rounded-lg"><span class="googlespan">continue with google<span></button>
                        </div>
                        <div class="row-end-2 text-center google">
                            <button class="googlebutton mt-4 py-2 text-black rounded-lg">continue with facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>