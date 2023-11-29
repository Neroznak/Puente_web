<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Это гарантирует, что контейнер займет как минимум 100% высоты видимой области */
        margin: 0;

    }

    .header {
        background: linear-gradient(to right, #6ad0ae, #9CDE7D);
        height: 50px;
        display: flex;
        align-items: center;
    }


    .white-text p, .white-text a {
        color: whitesmoke;
        font-family: "Roboto Light", sans-serif;
        font-weight: bold;
        text-align: right;
        text-decoration: none;
    }

    .active a {
        color: yellow;
    }

    .form-nero {
        background-color: #F0F0F0;
        border-radius: 15px;
        margin-left: 6%;
        margin-top: 7%;
        width: 400px;
    }


    .settings p {
        margin-left: 2%;
        overflow: visible;
        white-space: nowrap;
        font-family: "Roboto Light", sans-serif;
    }

    .form-group-nero {
        width: 90%;
        border-radius: 15px;


    }

    .otstup {
        margin-bottom: 5%;
        margin-left: 10%;
        width: 80%;
    }

    .pic {
        width: 100%;
    }

    .errorText {
        display: flex;
        margin-top: 15%;
        margin-left: 25%;
        text-align: left;
        font-size: 50px;
        font-family: "Roboto Light", sans-serif;

    }

    .small_error_text {
        display: flex;
        /*margin-top: 15%;*/
        margin-left: 25%;
        text-align: left;
        font-size: 25px;
        font-family: "Roboto Light", sans-serif;


    }


    .form-add-emp {
        background-color: #F0F0F0;
        border-radius: 15px;
        width: 100%;
        padding-left: 2%;
        padding-top: 2%;
    }

    .input-nero {
        border-radius: 15px;
        width: 97%;
        margin-top: 3%;
        border: none;
        padding-left: 7%;
    }

    .nav-item {
        margin-left: 2%;
    }

    h1 {
        color: #000;
        font-family: "Roboto Light", sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: lighter;
        line-height: normal;
    }

    h3 {
        color: #000;
        text-align: center;
        font-family: Roboto;
        font-size: 24px;
        font-style: normal;
        font-weight: 200;
        line-height: normal;
        margin-top: 4%;
    }

    .margin {
        margin-top: 2%;
        margin-left: 1%;
    }

    .margin-table {
        margin-top: 7%;
        margin-left: 5%;
        width: 90%;
    }

    .bold {
        font-size: 16px;
    }


    .height {
        height: 300px;
        margin-top: 5%;
    }

    .info-table {
        width: 80%;
        margin-left: 5%;
        margin-top: 5%;
    }

    .width-90-table {
        width: 90%;
        margin-bottom: 5%;
    }

    .full-page {
        width: 800px;
    }

    .employers-table {
        margin-left: 2%;
        margin-top: 3%;
        width: 95%;
    }

    .circle-size {
        height: 250px !important;
        width: 280px !important;
        border: none !important;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #F7F7F7;
        border-top-left-radius: 15px;
        margin-top: 1%;
        border-top-right-radius: 15px;
        margin-left: 2%;

    }

    th, td {
        border: 1px solid #F7F7F7;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #9cde7d;
        font-family: "Roboto Light", sans-serif;
        font-size: 20px;
        text-align: center;

    }

    td {
        text-align: center;
        font-family: "Roboto Light", sans-serif;
        font-size: 12px;
        font-weight: bold;


    }

    tr:nth-child(even) {
        background-color: #F0F0F0;
    }

    th, td {
        border: 1px solid transparent;
    }

    .table-start {
        border-top-left-radius: 15px;
    }

    .table-stop {
        border-top-right-radius: 15px;
    }

    .half {
        flex: 1;
        height: 300px;
    }

    .grey {
        background-color: #F0F0F0;
        border-radius: 15px;
        display: flex;
    }

    .add_project_button {
        border: none;
        width: 188px;
        height: 58px;
        flex-shrink: 0;
        margin-right: 15%;
        background-color: #9CDE7D;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        color: black;
        font-family: "Roboto Light", sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        border-radius: 15px;
    }

    .project-button {
        border: none;
        width: 88px;
        height: 38px;
        flex-shrink: 0;
        margin-right: 10%;
        margin-top: 25%;
        background-color: #9CDE7D;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        color: black;
        font-family: "Roboto Light", sans-serif;
        font-size: 12px;
        font-style: normal;
        font-weight: 200;
        line-height: normal;
        border-radius: 15px;
    }

    footer {
        padding: 10px;
        background: linear-gradient(to right, #6ad0ae, #9CDE7D);
        height: 50px;
        margin-top: auto;
        color: whitesmoke;
        font-family: "Roboto Light", sans-serif;
        text-align: center;
        font-size: 16px;

        width: 100%;
    }


    .blue {
        background-color: blue;
    }

    .green {
        background-color: green;
    }

    .red {
        background-color: red;
    }
</style>


<section>
    <div class="container-fluid">
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-11 margin">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <?php foreach ($project

                                as $project_item): ?>
                                <h1><?= esc($project_item['project']) ?></h1>
                                <h3><?= esc($project_item['customer']) ?></h3></div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="КП">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="График">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="Экономика">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="Ресурсы">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="Документы">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="project-button" value="Закупки">
                            </div>
                        </div>
                        <table class="otstup">
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
                            <?php $id = 1; ?>
                            <tr>
                                <?php foreach ($estimated

                                as $estimate_item): ?>
                                <td><?= esc($id) ?></td>
                                <?php $id++; ?>
                                <td class="text-left"><?= esc($estimate_item['position']) ?></td>
                                <td><?= esc($estimate_item['unit_of_measurement']) ?></td>
                                <td><?= esc($estimate_item['volume']) ?></td>
                                <td><?= esc($estimate_item['cost_materials']) ?></td>
                                <td><?= esc($estimate_item['cost_work']) ?></td>
                                <?php $price = $estimate_item['cost_materials'] + $estimate_item['cost_work'] ?>
                                <td><?= esc($price) ?></td>
                                <td><?= esc($estimate_item['volume'] * $price) ?></td>
                            </tr>
                            <?php endforeach ?>
                            <tr>

                                <th colspan="7" class="text-left">Итого</th>
                                <th><?= esc($total_cost) ?></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-left">НДС 20%</th>
                                <th><?= esc($total_cost * 0.2) ?></th>
                            </tr>
                            <tr>

                                <th colspan="7" class="text-left">Итого с учётом НДС 20%</th>
                                <th><?= esc($total_cost * 1.2) ?></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <!--            ASIDE-->
            <div class="col-md-4 col-lg-4">
                <div class="row">
                    <!-- ASIDE #1 -->
                    <aside class="col-sm-6 col-md-12">
                        <h3 class="text-left">Ответственный: <?= esc($project_item['response_person']) ?></h3>
                        <h3 class="text-left">Статус: <?= esc($project_item['status']) ?></h3>
                        <table class="info-table">
                            <thead>
                            <tr>
                                <th class="table-start table-stop">Экономика</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Поиск новых Заказчиков</td>
                            </tr>
                            <tr>
                                <td>Повышение KPI</td>
                            </tr>
                            <tr>
                                <td>Повышение производительности труда</td>
                            </tr>
                            </tbody>
                            <?php endforeach ?>
                        </table>
                    </aside>
                    <!-- ASIDE #2 -->
                    <aside class="col-sm-6 col-md-12">
                        <table class="info-table"
                        <thead>
                        <tr>
                            <th class="table-start table-stop">Ресурсы</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                        <tr>
                            <td>Наша фирма внедряет автоматизированную систему контроля Puente!</td>
                        </tr>
                        <tr>
                            <td>24 мая - крайний срок по выполнению: Лапино Гарден, благоустройство</td>
                        </tr>
                        <tr>
                            <td>12 июня заканчивается действие договора с КонтейнерСервисом</td>
                        </tr>
                        <tr>
                            <td>15 июня состоится тендер за проект: АШАН Мытищи</td>
                        </tr>
                        <tr>
                            <td>21 июня пройдёт совещание всех сотрудников ООО Триумвират</td>
                        </tr>
                        </table>
                    </aside>
                    <!-- ASIDE #3 -->
                    <aside class="col-sm-6 col-md-12">
                        <table class="info-table">
                            <thead>
                            <tr>
                                <th class="table-start table-stop">Поставки</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Поиск новых Заказчиков</td>
                            </tr>
                            <tr>
                                <td>Повышение KPI</td>
                            </tr>
                            <tr>
                                <td>Повышение производительности труда</td>
                            </tr>
                            </tbody>
                        </table>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>