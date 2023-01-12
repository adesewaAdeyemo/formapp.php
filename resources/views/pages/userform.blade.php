<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Fuzzy Bubbles', cursive;
            }
            body{
                font-family: 'Roboto', sans-serif;
                background-color: rgb(237, 234, 234);
            }
            .bodyContainer{
                width: 45%;
                margin: auto;
                color:black;

            }
            .bodyContainer .email, .name, .tel, .pLink, .rLink, .resume, .file, .why{
                border: 1px solid rgb(208, 206, 206);
                border-radius: 10px;
                margin-top: .8rem;
                background-color: #fff;
                padding: 2rem;
                text-align: left;
                box-shadow: 1px 1px 1px rgb(191, 188, 188);
            }
            .join{
                border-top: 10px solid rgb(173, 171, 171);
                border-radius: 10px;
                margin-top: .8rem;
                background-color: #fff;
                padding: 2rem;
                text-align: left;
                box-shadow: 1px 1px 1px rgb(191, 188, 188);

            }
            .join hr{
                margin: 1rem -2rem;
            }
            .join a{
                color: black;
                text-decoration: none;
            }
            .join .switch{
                color: blue;
            }
            .bodyContainer .star{
                display: inline;
                color: red;
            }
            .header{
                text-align: center;
                border: 1px solid rgb(208, 206, 206);
                border-radius: 10px;
                padding: 2rem;
                margin-top: .8rem;
                background-color: #fff;
            }
            .header h1{
                display: inline;
                font-size: 3rem;
                font-weight: 500;
            }
            .header .mellon{
                color: rgb(42, 176, 42);
                box-shadow: 1px 1px 1px rgb(191, 188, 188);
            }
            input{
                width: 50%;
                margin-left: 0;
                border: 0;
                outline: 0;
                background: transparent;
                border-bottom: 1px solid black;
                margin-top: 1.5rem;
                padding: 10px;
            }
            .resume input, input[type="submit"]{
            border: 0;
            }
            .action{
                display: flex;
                justify-content: space-between;
            }
            .action .submit{
                border-radius: 4px;
                background-color: rgb(179, 178, 178);
                max-width: 20%;
                box-shadow: 1px 1px 1px rgb(191, 188, 188);
            }
            .action .submit:hover{
                background-color: #fff;
                transition: all .3s ease;
            }
            footer{
                text-align: center;
            }
            p{
                font-size: 12px;
                padding: 10px 0;
            }
            .clear{
                color:red;
            }
            #logout{
                border-radius: 4px;
                background-color: rgb(179, 178, 178);
                max-width: 10%;
                box-shadow: 1px 1px 1px rgb(74, 66, 66);
                margin-left:45%;
                margin-bottom: 10px;
            }
            #logout:hover{
                background-color: red;
                transition: all .8s ease;
                color: white;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="bodyContainer">
                <div class="header">
                    <h1 class='data'>Data<h1><h1 class='mellon'>mellon</h2>
                </div>
                <div class="join">
                    <h1>Join us</h1>
                    <p>Datamellon prospective applicants form</p><hr>
                    <a href="mailto=${email}">adeyemoadesewa@gmail.com</a> <a href="#" class='switch'>Switch account</a>
                    <p>The name and photo associated with your Google account will be recorded when you upload files and submit this form. Only
                            the email you enter is part of your response.</p>
                    <div class="star required">*Required</div>
                </div>
                <div class="email">
                    Email <p class='star'>*</p><br><input type="email" placeholder='Your Email' name='email' value='<?php isset($_REQUEST['email']) ? $_POST['email'] : '' ?>' required>
                </div>
                <div class="name">
                    Name <p class='star'>*</p><p>First name and Last name</p><br><input type="text" name='name' placeholder='You Name' value='<?php isset($_REQUEST['name']) ? $_POST['name'] : '' ?>' required>
                </div>
                <div class="tel">
                    Phone number <p class='star'>*</p><br><input type="tel" name='tel' value='<?php isset($_REQUEST['tel']) ? $_POST['tel'] : '' ?>' placeholder='Phone Number' required>
                </div>
                <div class="pLink">
                    Portfolio link (optional)<br><input type="link" name='pLink' placeholder='Url' value='<?php isset($_REQUEST['pLink']) ? $_POST['pLink'] : '' ?>'>
                </div>
                <div class="rLink">
                    Resume link (optional)<br><input type="link" name='rLink' placeholder='Url' value='<?php isset($_REQUEST['rLink']) ? $_POST['rLink'] : '' ?>'>
                </div>
                <div class="resume">
                    Upload resume/CV<br><input type="file" name='name' value='<?php isset($_REQUEST['resume']) ? $_POST['resume'] : '' ?>'>
                </div>
                <div class="why">
                    Why should we hire you?<br><input type="text" name='why' value='<?php isset($_REQUEST['why']) ? $_POST['why'] : '' ?>'>
                </div>
                <div class="action">
                    <input type="submit" class='submit'>
                    <input type="submit" value='Clear Form' class='clear'>
                </div>        
                <p>Never submit passwords through google forms</p>
    
            </form>
            <div class="myVar">
            </div>
            <footer>
                <p>This form was recreated with a MonkConcept.<a href="#">Report Abuse</a></p>
            </footer>
            <form action="{{Route('logout')}}" method='post'>
                @csrf
                <input type="submit" name="logout" value="logout" id="logout">
            </form>
    
        </div>
    </body>
</html>
