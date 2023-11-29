<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#submitBothForms').click(function () {
            $('#project').submit();
            $('#myForm').submit();
        });
    });
</script>

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
                                <button type= "submit" form="submitBothForms" class="add_project_button">Cоздать проект</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <form id="project" action="<?php echo base_url('App\Controllers\Projects/submit_form'); ?>" method="post" class="form-nero">
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="customer"><p>Заказчик</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name="customer" class="input-nero" required>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="project"><p>Название проекта</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name='project ' class="input-nero" required>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="address"><p>Адрес объекта</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name="address" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="date_finish"><p>Срок выполнения</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name= "date_finish" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="garanty"><p>Гарантии</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name="garanty" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="response_person"><p>Ответственный</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name="response_person" class="input-nero">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto settings">
                                    <label for="vat"><p>НДС</p></label></div>
                                <div class="col-auto">
                                    <input type="text" placeholder="ввод" name="vat" class="input-nero" required>
                                </div>
                            </div>
                        </form>
<!--                        <form class="form-nero">-->
<!--                            <div class="row justify-content-between">-->
<!--                                <div class="col-auto settings">-->
<!--                                    <p>График</p></div>-->
<!--                                <div class="col-auto">-->
<!--                                    <input type="text" placeholder="ввод" class="input-nero">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row justify-content-between">-->
<!--                                <div class="col-auto settings">-->
<!--                                    <p>Экономика</p></div>-->
<!--                                <div class="col-auto">-->
<!--                                    <input type="text" placeholder="ввод" class="input-nero">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row justify-content-between">-->
<!--                                <div class="col-auto settings">-->
<!--                                    <p>Ресурсы</p></div>-->
<!--                                <div class="col-auto">-->
<!--                                    <input type="text" placeholder="ввод" class="input-nero">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row justify-content-between">-->
<!--                                <div class="col-auto settings">-->
<!--                                    <p>Закупки</p></div>-->
<!--                                <div class="col-auto">-->
<!--                                    <input type="text" placeholder="ввод" class="input-nero">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row justify-content-between">-->
<!--                                <div class="col-auto settings">-->
<!--                                    <p>Документы</p></div>-->
<!--                                <div class="col-auto">-->
<!--                                    <input type="text" placeholder="ввод" class="input-nero">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
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
                                    <?php $id=1 ?>
                                    <td><?= esc($id) ?></td>
                                    <?php $id++; ?>
                                    <td class="text-left"><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                            <button type="submit" onclick="saveData()">Сохранить</button>
                            <button type="button" onclick="addRow()">Add Row</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>


</section>