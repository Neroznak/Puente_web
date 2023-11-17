<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <title>Добавить проект</title>

</head>


<body>

<!-- HEADER -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 header">
                <nav class="col-lg-11 white-text">
                    <a class="nav-item active" href="main/main.php">Главная</a>
                    <a class="nav-item" href="#">Проекты</a>
                    <a class="nav-item" href="#">Задачи</a>
                    <a class="nav-item" href="#">Сотрудники</a>
                    <a class="nav-item" href="#">Техника</a>
                    <a class="nav-item" href="#">Контрагенты</a>
                </nav>
                <div>
                    <div class="white-text">
                        <p>TRIUMVIRATE</p></div>
                </div>
            </div>
        </div>
</header>


<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
<section>
    <div class="container-fluid">
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-11 margin">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h1>Добавление сотрудника</h1></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row greyform">
                            <div class="col-lg-3">
                                <img class="pic" src="./assets/css/man.png" alt="гендир">
                            </div>
                            <div class="col-lg-3">
                                <form class="form-add-emp">
                                    <div class="row justify-content-between">
                                        <div class="col-auto settings">
                                            <p>ФИО</p></div>
                                        <div class="col-auto">
                                            <input type="text" placeholder="ввод" class="input-nero">
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto settings">
                                            <p>Номер телефона</p></div>
                                        <div class="col-auto">
                                            <input type="text" placeholder="ввод" class="input-nero">
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto settings">
                                            <p>Электронная почта</p></div>
                                        <div class="col-auto">
                                            <input type="text" placeholder="ввод" class="input-nero">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form class="form-add-emp">
                            <p>Комментарий</p>
                            <textarea name="" id="" cols="60" rows="5"></textarea>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form class="form-add-emp">
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Дата рождения</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Отдел</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Должность</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Заработная плата</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Условия труда</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Ответственности</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Образование</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Опыт</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Документы</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <input type="submit" class="add_project_button" value="Принять на работу">
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
<!-- FOOTER -->
<footer>
    <div class="container-fluid">
        <p>Designed by Neroznak studio</p>
    </div>
</footer>
</body>
</html>