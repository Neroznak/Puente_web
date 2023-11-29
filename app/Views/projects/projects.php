<section>
    <!--    <div class="container">-->
    <div class="row">
        <!-- MAIN -->
        <main class="col-md-12 col-lg-12">
            <div class="row">
                <div class="col-lg-11 margin">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <h1><?= esc($title) ?></h1></div>
                        <div class="col-auto row">
                            <a href="/add_project">
                                <button class="add_project_button">
                                    Добавить новый объект
                                </button>
                            </a>
<!--                            <a href="/archive_projects">-->
<!--                                <button class="add_project_button">-->
<!--                                    Сданные работы-->
<!--                                </button>-->
<!--                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="half">
            <div class="margin-table">
                <h3 class="text-center">Подготавливаются, на сумму <?= esc($total_prepare) ?> руб.</h3>

                <table>
                    <thead>
                    <tr>
                        <th class="table-start">Заказчик</th>
                        <th>Объект</th>
                        <th>Начало</th>
                        <th>Дедлайн</th>
                        <th class="table-stop">Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($project_prepare as $project_item) : ?>
                        <tr>
                            <td><?= esc($project_item['customer']); ?></td>
                            <td><a href="/projects/<?=$project_item['slug']?>"><?= esc($project_item['project']); ?></a></td>
                            <td><?= esc($project_item['date_start']); ?></td>
                            <td><?= esc($project_item['date_finish']); ?></td>
                            <td><?= esc($project_item['total']); ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="half">
            <div class="margin-table">
                <h3 class="text-center">Выполняются, на сумму <?= esc($total_process) ?> руб.</h3>
                <table>
                    <thead>
                    <tr>
                        <th class="table-start">Заказчик</th>
                        <th>Объект</th>
                        <th>Начало</th>
                        <th>Дедлайн</th>
                        <th class="table-stop">Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($project_process as $project_item): ?>
                        <tr>
                            <td><?= esc($project_item['customer']) ?></td>
                            <td><a href="/projects/<?=$project_item['slug']?>"><?= esc($project_item['project']); ?></a></td>
                            <td><?= esc($project_item['date_start']) ?></td>
                            <td><?= esc($project_item['date_finish']) ?></td>
                            <td><?= esc($project_item['total']); ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="half">
            <div class="margin-table">
                <h3 class="text-center">Сданы в оплату, на сумму <?= esc($total_completed) ?> руб.</h3>
                <table>
                    <thead>
                    <tr>
                        <th class="table-start">Заказчик</th>
                        <th>Объект</th>
                        <th>Начало</th>
                        <th>Дедлайн</th>
                        <th class="table-stop">Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($project_completed as $project_item): ?>
                        <tr>
                            <td><?= esc($project_item['customer']) ?></td>
                            <td><a href="/projects/<?=$project_item['slug']?>"><?= esc($project_item['project']); ?></a></td>
                            <td><?= esc($project_item['date_start']) ?></td>
                            <td><?= esc($project_item['date_finish']) ?></td>
                            <td><?= esc($project_item['total']); ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </main>
    <!--        </div>-->
    </div>
</section>