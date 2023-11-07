<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="bvi/bvi.min.css" type="text/css">
    <link rel="stylesheet" href="bs/bootstrap.min.css">

</head>

<body>
    <style>
        #warning {
            background-color: white;
            border: solid 4px #FF8364;
            padding: 10px;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            min-width: 100vw;
            align-items: center;
            overflow-x: none;
            overflow-x: hidden;
            scrollbar-width: none;
            background-image: url("media/texture.jpg");
            background-repeat: repeat;
            margin: 0;
            padding: 0;
        }

        #logo {
            height: 50px;
            width: 50px;
        }

        main {
            display: flex;
            max-width: 1280px;
            flex-direction: column;
            align-items: center;

        }

        #footer {
            margin-top: auto;
        }

        #specialpic {
            height: 50px;
            width: 50px;
        }

        #special {
            z-index: 1000;
            position: fixed;
            bottom: 20px;
            right: 20px;
            height: 60px;
            width: 60px;
        }

        #button {
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-xl navbar-dark fs-3" style="background-color: #0B87BA; min-width:100vw; margin:0;">
        <div class="container-fluid d-flex align-items-center" id="navlist">
            <a class="navbar-brand flex-grow-1 text-uppercase white fs-3" href="/">
                <img src="media/logo.png" alt="главная" id="logo" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" alt="меню"></span>
                <div class="bvi-show">меню</div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 text-uppercase">
                    <!-- <li class="nav-item">
                        <a class="nav-link active mx-2" aria-current="page" href="/">главная</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active mx-2" aria-current="page" href="/about">о диспансере</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  mx-2" aria-current="page" href="/paid">платные услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  mx-2" aria-current="page" href="/contacts">наши филиалы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  mx-2" aria-current="page" href="/news">пресс-служба</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1 mx-3">


        <a href="#" onclick="remove(this)" class="bvi-open badge d-flex flex-column align-items-center justify-content-center rounded-4" style="background-color: #0B87BA;" id="special">

            <img src="media/eye.png" alt="" srcset="" id="specialpic">


        </a>
        <script>
            function remove(el) {
                var element = el;
                element.remove();
            }
        </script>