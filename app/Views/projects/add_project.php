<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>

<section>
    <div class="container-fluid">
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-11 margin">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h1>Добавление проекта</h1></div>
                            <div class="col-auto">
                                <input type="submit" class="add_project_button" value="Шаблоны">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="add_project_button" value="Сохранить шаблон">
                            </div>
                            <div class="col-auto">
                                <a href="/projects">
                                <button class="add_project_button">Cоздать проект</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <form class="form-nero">
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Заказчик</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Название проекта</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Адрес объекта</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Структура</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Срок выполнения</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Гарантийные</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Ответственный </p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>НДС</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>НДС в смете</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                        </form>
                        <form class="form-nero">
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>График</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Экономика</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Ресурсы</p></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <p>Закупки</p></div>
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
                        </form>
                    </div>
                    <div class="col-lg-9">
                        <form id="myForm">
                            <table class="otstup" id="myTable">
                                <thead>
                                <tr>
                                    <th class="table-start">№</th>
                                    <th>Наименование работы</th>
                                    <th>Ед.изм</th>
                                    <th>Объём</th>
                                    <th>Материал</th>
                                    <th>Трудозатраты</th>
                                    <th>Цена</th>
                                    <th class="table-stop">Стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left">Снятие старого асфальтового покрытия вручную гидромолотом</td>
                                    <td>м2</td>
                                    <td>77</td>
                                    <td>0</td>
                                    <td>109,2</td>
                                    <td>109,2</td>
                                    <td>8408,40</td>
                                </tr>

                                </tbody>
                            </table>
                            <button type="submit">Сохранить</button>
                            <button type="button" onclick="addRow()">Add Row</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>


</section>