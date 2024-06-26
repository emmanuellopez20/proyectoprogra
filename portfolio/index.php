<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'contact_db')or die('connection failed');

if(isset($_POST['send'])){
    
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $asunto = mysqli_real_escape_string($conn, $_POST['asunto']);
    $mensaje = mysqli_real_escape_string($conn, $_POST['mensaje']);

    $insert_message = mysqli_query($conn, "INSERT INTO `contact_form`(nombre, email, asunto, mensaje) VALUES('$nombre', '$email', '$asunto', '$mensaje')");

    if($insert_message){
        $_SESSION['message'] = 'Su vipazo fue enviado con éxito.';
    } else {
        $_SESSION['message'] = 'Hubo un error al enviar su vipazo.';
    }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel Lopez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">




    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4 " href="home">
                <span class="h3 fw-bold d-block d-lg-none">Emmanuel Lopez</span>
                <img src="./assets/images/IMG_3018.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Fotografia">Fotografia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Works">Arte Plastico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>                  
                    <li class="nav-item">
                        <a class="nav-link" href="verdatos.php">Ver DB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Content wrapper-->
    <div id="content-wrapper">
        <!--home-->
        <section id="home" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold " data-aos="fade-up">Hola, soy Emmanuel, <span
                                class="text-brand">Ingeniero y Artista</span></h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay=300>Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Eligendi nulla dolore libero soluta quae? Ratione suscipit
                            odio perspiciatis quia corrupti incidunt cumque perferendis. Reprehenderit eos voluptas
                            dolorem laboriosam quas fugiat?</p>
                        <div data-aos="fade-up" data-aos-delay=600>
                            <a href="#Works" class="btn btn-brand me-3">Explora mi trabajo</a>
                            <a href="#" class="link-custom">Llamar: (333) 333 3333</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services-->
        <section id="services" class="full-height px-lg-5">
            <div class="container">


                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="display-4 fw-bold">Servicios</h6>
                        <h1>Contratame, me gusta comer</h1>
                        <p class="lead mt-2 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
                            nulla dolore libero soluta quae? Ratione suscipit odio perspiciatis quia corrupti incidunt
                            cumque perferendis. Reprehenderit eos voluptas dolorem laboriosam quas fugiat?</p>
                    </div>
                </div>

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay=300>
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-3" data-aos="fade-up" data-aos-delay=300>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADh0lEQVR4nO2dO2gUURSGf58pttJCMHZCQNnCBz7QxkRjY2GlYGeMhfgqVDCVECvBNIrGxiKdEG0Ei4AigigoBgQ1hWDlC4JaaRFfWblwFo7B7O7M3OucO/f/YMkyu/fMzfl27pnsnM0ChBBCCCGEEEIIIYQQQgghRLMBwCUAEwDu8YZWOZiQXK0P9RI6D+A3gAZvyJIDl7Nh3zIOqx18B/CMRwfarRCTAH6ovB3yJWMhgA8S9C2AHl+BE2CNyt17yWVh6sryER8BE+O4yt9aHwF3qIB9PgImRp/Kn8tlYXpVQHeflJw/CikGhRiDQoxBIcagkJSE9APYBGCxetzd5zbMm4P+kEKm5OdV9fg1bkOrHLz630JGuQ2tcvAy9JK18R+HJrdh3hzs4h+GtuBZljEoxBgUYgwKMQaFGINCjEEhwikAQwAWoFwoBH9fdna9ZBRSMhdFxi8Ay0ueC48QAC9EyCOUT/JCVgKYFSHnyrZBIcCgqh9byrZRBSGnAXyVBrM8jMtcP7XpFNwK4DOAWwAWIRxRC9kphbghic2KS+wXGX+jzXOPqd/LezN0FYSsAPBR9vNNWlizsk3N9WCb59bUBTfXob4bYYhSiFta7qr9DOSMMyzjZ6W4t6Mu8t2YaQDd8E+UQpqJbAAYKxDnicR4nmHMgNr3gwD1JDohvapuTMlSkodlKs6FjGPHAtaTqIT4qBtNDhSYZ8h6Eo0QX3Vj7qvcie1CdkLVk2iE+KobkHd0m59Uuo38hKgnUQjxVTearFNzPIpi+K4n5oX4rBtNhtQcV6MYvuuJeSH7VLynnpaF+xLvNfwwouZ4pepCfC8LNQAzEuuyweU0CiE+l4W9an57DC6nUQjxeZo5KjFmCr6afZ+GRyfE12nmGxnvkmnlNDxaIUXrSY8ae8ZQ3YhaSJF6ckLNrW6obkQtpEg9uSNj3uXsvwpVN6IXkqeeLJVLve75143VjUoImVtPzqI1+pNJ+5Gd7QHrRmWE1FQ9udlhM9xPuRaSlZMB60ZlhDhWSedJd4fNcI+Rjy5pdNiMsEQvJMZmOKQuZNBYMxxSFzLeYTOcBZIQMt1hM5wFkhDyUP7jZ6jmNp8kIWSJvOURA0kIiQkKMQaFGINCjEEhxqAQY1BISkLcVzDwi1yQKQeTIYXwhkI58CLENTLzqICXHLhcEkIIIYQQQgghhBBCCCGEIGX+AHVM7Wq/GQmgAAAAAElFTkSuQmCC">
                            </div>
                            <h4 class="mt-4 mb-2">WebDev</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ratione laudantium
                                repellendus impedit facere voluptates perspiciatis maxime alias, consequuntur pariatur
                                adipisci, quaerat hic eius assumenda autem et nisi, consequatur nam.</p>
                            <a href="#" class="link-custom">Leer Más</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay=600>
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-3" data-aos="fade-up" data-aos-delay=600>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFgUlEQVR4nO2ba4hVVRTHf83oxLV0SqdU8ksQ9KKH2BPSqOlDUSRUVFrZ40MgFkEUEpRFDxOyYhJ7fO1LhB96KFGRjuOl90NLJHtM6e0xTZFOjQ3k68SmdWBxOOeeu++953n3HzYzs885a6/9n73XXnvttcHBwcHBwcHBwcEhHXQB1wIbgFHgADACDAGPAWe7f0Q0jgM2Al5M2Qk8CpxZR1bH4WhgmxD0J3APMAeYBJwAXA28APweQubjwFl0OJ4VQn4AZtV5rxu4DHgxhMxvgCc6cZpPByaAg8AZFt8ZMvtlZI4GyPwOWAnMpQNwjXT6nRZkGDIvBZ4HfguQ+T3wJDCPkmER8JWMPE9+mr9vbFGuIfMSYK2s4JrMYWAVcA4Fxw0xK+11bXSLLgIGgF8CbeyWevP8CAqGrdKJpTJikJ/LpP6LBNo0ZF4MrAF+DZD5I/AUcF5RyNwvik8O1E+WevM8SRgyFwDPhYzMXcBq4PysyDQj6Q5gMzAWM1XD4OWojEk/bhPSU3FJtlgoGAYvp2VI+pfoyBtS02ARcEzEu40QmAcY/RfLgmN0GlQ2u+24Va1us2LeLQqBPkx/aqLXzUk1MigN3NLAu17BCDRYInqZgEci2CsNzCgpgX2i156kGqjX8T7ZGQT9r3pysig/Ac8AvU30sWVECe8Dvi3YKrwdmGbRx7YgSvhaqd8qoaauBhzpf0kfZnU9F9ghOpidSS4IHJH6uSFbuWWBrdzdUv852eEC5U3kgsDDUq89+etjppA5F8kKk0SHQ3kh0IuoDwtnfSmRmqxh25dEG63K9i4Kj8h3KyzamiNh/VEJScU57raI0jkTAuPgE/hw7Jv/r+ir5AhAT/l/hMjjSRa5JHCFfPdgnXeOlQOjcWWfXgEuB15TdnZM/hFhLkhhCVwHrK/z3anAq8ApIc+mCrH+LseUN0LOhI378bZ65w/gfmBKk32J0jkTAteLQjaoAPcGji7flSBnPcxXESFPdj53AT2W7UfpnMspHHSk7wR+VvI+lBM3G5iz40+UjJrINS5KK8g9gZuVnM+AK1qQZcLxC8VV8mWa0Vk6G6ihV9dtMpJawXwZwb5Ms9iU2gZOqKiIL+8t4HRLXU4D3lQy9PlwqW3ghMjolQSjvcpteRmYHfO9SUR6SdLizHf7xG+c1ib9CkNgRTnOa1T0xviBD4W4J1PFT/S/3y/face6sASua8IG+gT6OFkcZr8Ns0rfLu7JUpVcdFh8ypMs9CulDaxEPF8QcE/2qd+rMX5iR9nASox7slgtNMMNhr8KO4XbTaCPlfLuAw3K7mgbmDaBpbWBaRFYahvYcVPYBo7ANtnA/jaPwIWdYgM/UnJeFwe6FQLnqZwd31cstQ2cAiwH/hJZB2RvO9OSQH9PfFBd3jFyj2xRv9wTiNoDD6igwLgcPlViCDxKiBpXe+KBOnmKpfMDw8JSG5Rsky1wk+xGNIHdEnEeCeyJT6Q5fCxxxMLZwCj0q3QQUz6VOKFvK7erZx8AF5JMXwozhcPQJcneOtiqy7CkjIRl1vfI1N6pzEIjpVQE6oXGHHX+Le2ZoOt9dRaIHjnR8yxLbjITqhbugw1mSl52XEbsctHL3Ae5qsFdThQyIdBLaWRG4Wtp/8o2yMqEwENS3+qZbLPwjwP8kfd+g1O4mhcCa1Ifl1WQll42djBOVqKK+lgt9TvkMl9iF1UsCbT5xubbphElvDfgp2VVCkugT+LTajqnXbYUYQrbXLTJEtUmSE/los0mi6teRYR/F/C9pO+S1RpIwSgaZqstpAlmJIJulZ62W241mtTcImO6zKiaumjYlXSDOkPUK1HZlNaA6JaoyaAYXK/AZY8QtyStK/8ODg4ODg4ODg4ODg60hP8ARJAgMPGmJvIAAAAASUVORK5CYII=">
                            </div>
                            <h4 class="mt-4 mb-2">Impresión 3D</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ratione laudantium
                                repellendus impedit facere voluptates perspiciatis maxime alias, consequuntur pariatur
                                adipisci, quaerat hic eius assumenda autem et nisi, consequatur nam.</p>
                            <a href="#Works" class="link-custom">Leer Más</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay=900>
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-3" data-aos="fade-up" data-aos-delay=600>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEW0lEQVR4nO2a22sVRxzHP0kkxnqU6Fvje01fhSJeYkyDiEWoLX0siFRFpW+KNxAUsdZ4QfonFPStah/VQkVqwMuTDybqi+ZSb0haIqXxkiMD34Efm2PcPXvWMyfOF4Zkfrvz29nvzPxueyAiIiIiIiIiohgsA34HngHljO0p8BvwBQ2KzcDrKl482V4B39fzRb4ChqeZoLu2LjFmKfASmASOAJ9W8dxFwAk9YwJYQp0wnGKVhsz9bcAdyY/X4Pm/SNdtYHaGhaq0MFWhrJb2+s/q3xEZefEJcFc63W7KslB2YT4IAWt17l/rGNQKy6XT2YM1Kef5vnlPQStwDPi7BoZrupWqFn5n5Wmj0tNa1AOeAIeB5gIIaBGxT2swz6OVHjCqi267zVSsNDthCjKfmQbFO9+znLhwBehP3DMTZKkJKFe4cSbI6k7AKeAqMGJkI5KdComAfuBa4p60sj+NrATsB95ksNJvNKZUQV/e+aUmoBb4Rq6xbKJD54J6gcXAXLVOyZwrHjD3Pwa+prb4IAS0mBjetetAd4bxPcANM/50DWOLwgmYBZwxWdw2oEnXFgCbgAvAIPBCzf1/XtfcPWjMdmWVTtevIjZ4Ak5Lz3NglWRzgH3APynO/xiw1yRS3dLlrp0MnYDvzMr7l+8Abhr9F1UsSdoAJ7tk7ruhsQ6rTX3h21AJKJlw2m179AJDkg0qFH0fukz6O2RI2GFcpiMtOAIOGoPXpG3vV965sfYMuhYogvP62qTT6zsQGgGzTBrtrf0+9Qcyvrwlwe+EPZJ9qf6onhkMAeuNn/eT9wYvzbZ/F7qNYfTeYVCydSERcDKRZ28yBi8vLkvXRvWP5aw3FkJAv8a6aA75dNf/gfzYIl3uGwEqibn+XyERMKyxn6nvz65zdXnRabwI0uk9RDAE/KexPnkZT/TzoCRd44m+e2YwBExo7LwCCJgvXf8m+v+HRMCTOhwBlykGbwQ3kx9bG8EIntBYl89bN+hi+7z4I+EG+9R3f4MhoMtEfShoGZPMJ0XVoMcEQu2J47UiJAJajB1wmRtKacuasI/ismAhcF86dkvWq/6jHAWSwpKh3SaNbVIC46s6VzKSsFBF0mQydEuynTnmWRgBbSb1dZWcZDp8L2VZrMesvE2Hf5TsQc6vzoURgIoVkype+Jft0Cp6/Zdl2T9XnFDS/1uNwfMr32FI8QWRDeRDoQSgj6NllbE8CW1Kab1hnK6N6Tj5H0OsNiWxQ+RH4QQ0A2el66UqOb4o2i53dk4eY1xtQLKNxto3adv7ougZoydoAtBE95iPITdVzEiLXmPwJhVfNExZPPlh5KHRPah8fo1CXG8DOiXrM37eG7yG/DBi4c7/LsXu5ZTtkVzddD+KahgCPJoVvfXpW91jZZET+v+arq0o6BcmdScgFEQCiDuAijt9tAZl7NDRZb4uTcHRDFa60dtPlQhoFQl+J8zENqKXr/hDyYiIiIiIiAg+KrwFy/AjVSA42e0AAAAASUVORK5CYII=">
                            </div>
                            <h4 class="mt-4 mb-2">Fotografía</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ratione laudantium
                                repellendus impedit facere voluptates perspiciatis maxime alias, consequuntur pariatur
                                adipisci, quaerat hic eius assumenda autem et nisi, consequatur nam.</p>
                            <a href="#Fotografia" class="link-custom">Leer Más</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- WORK -->
        <section id="Fotografia" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Fotografia</h6>
                        <h1>Sesiones</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/1/17.jpg" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/1/12.jpg" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/1/3.jpg" class="d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Unos Guapillxs</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aspernatur labore
                                    velit eveniet non consectetur cumque, reprehenderit assumenda, magni impedit
                                    similique modi officiis adipisci placeat odio quos quam quae nihil.</p>
                                <a href="galleries/Sesh1.html" class="link-custom">Ver más...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/2/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/2/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/2/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh2"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh2"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Que chin%#@ su madre el minimo</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quasi eaque,
                                    distinctio aliquid repellat voluptatibus quae labore blanditiis ad vero optio neque
                                    pariatur corporis atque autem natus iusto suscipit? Eum?</p>
                                <a href="galleries/Sesh2.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh3" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/3/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/3/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/3/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh3"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh3"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>En vivo</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non nobis rerum corporis
                                    qui eaque, velit eligendi, praesentium, quo accusamus est facilis ducimus. Porro
                                    consequuntur quos deserunt eum ut consequatur beatae.</p>
                                    <a href="galleries/Sesh3.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh4" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/4/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/4/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/4/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh4"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh4"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Choleros</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, qui vero aliquam
                                    possimus quisquam tempora odit placeat vitae voluptas voluptatibus expedita,
                                    cupiditate corrupti praesentium quaerat provident nulla aut? Aliquid, doloremque.
                                </p>
                                <a href="galleries/Sesh4.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- WORK -->
        <section id="Works" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Modelismo e impresión 3D</h6>
                        <h1>Trabajos</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh5" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/5/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/5/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/5/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh5"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh5"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Robotsitos distopitocos alv</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aspernatur labore
                                    velit eveniet non consectetur cumque, reprehenderit assumenda, magni impedit
                                    similique modi officiis adipisci placeat odio quos quam quae nihil.</p>
                                    <a href="galleries/Sesh5.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh6" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/6/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/6/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/6/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh6"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh6"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Impresion 3D</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quasi eaque,
                                    distinctio aliquid repellat voluptatibus quae labore blanditiis ad vero optio neque
                                    pariatur corporis atque autem natus iusto suscipit? Eum?</p>
                                    <a href="galleries/Sesh6.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh7" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/7/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/7/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/7/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh7"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh7"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Arte Plastico</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the
                                    elements you could ever need to put together</p>
                                    <a href="galleries/Sesh7.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <div id="carouselsesh8" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/FotosiCloud/8/4.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/8/5.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/FotosiCloud/8/7.jpg"
                                                class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsesh8"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsesh8"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Pintura</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the
                                    elements you could ever need to put together</p>
                                    <a href="galleries/Sesh8.html" class="link-custom">Ver mas...</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ABOUT</h6>
                        <h1>My Education & Experiance</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Educación</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Licenciatura en Ing. en Computación</h4>
                                    <p class="text-brand mb-2">Universidad de Guadalajara(2022-presente)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                        ducimus officia cupiditate enim repudiandae minus modi tempore, animi commodi
                                        ratione beatae quam vero sit ut suscipit recusandae corrupti. Necessitatibus,
                                        dolorem?</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Idiomas</h4>
                                    <p class="text-brand mb-2">High proficiency in written and spoken English</p>
                                    <p class="mb-0">Español Nativo</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experiencia</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Supervisor de Operaciones</h4>
                                    <p class="text-brand mb-2">Atel (2014 - 2018)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Agente bilingüe</h4>
                                    <p class="text-brand mb-2">choloperformance (2020-2022)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Risk Analyst</h4>
                                    <p class="text-brand mb-2">Bread Financial(2022-presente)</p>
                                    <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet
                                        consectetur adipisicing elit</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>Si quieres que trabajemos juntos mandame un vipazo
                        </h1>
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <?php
                            if (isset($_SESSION['message'])) {
                                echo '<p>' . $_SESSION['message'] . '</p>';
                                unset($_SESSION['message']);
                            }
                        ?>
                        <form action="" method="post" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" name="asunto" class="form-control" placeholder="Asunto">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="mensaje" rows="4" class="form-control"
                                    placeholder="Dime lo que te salga del corazón"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" name="send" class="btn btn-brand">Vipazo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //CONTACT -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">hola amigo <a href="#" class="fw-bold">gracias por llegar al final de mi
                                pagina</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-linkedin"></i></a>
                            <a href="#"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>
