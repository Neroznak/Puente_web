<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
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