<section>
<!--    <div class="container">-->
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-11 margin">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h1><?= esc($project_title) ?></h1></div>
                            <div class="col-auto">
                                <a href="http://puente.tw1.ru/add_project"><button>
                                        Добавить новый объект
                                    </button></a>
                                <input type="submit" class="add_project_button" value="Добавить новый объект">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="half">
                        <div class="margin-table">
                            <?php $total_prepare = 0; ?>
                            <h3 class="text-center">Подготавливаются</h3>
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
                                        <td><a href="http://puente.tw1.ru/project_page"><?= esc($project_item['project']); ?></a></td>
                                        <td><?= esc($project_item['date_start']); ?></td>
                                        <td><?= esc($project_item['date_finish']); ?></td>
                                        <td><?= esc($project_item['total']);
                                            $total_prepare += $project_item['total']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <p class="bold"><?= esc($total_prepare); ?></p>
                        </div>
                    </div>

                    <div class="half">
                        <div class="margin-table">
                            <?php $total_process = 0; ?>
                            <h3 class="text-center">Выполняются</h3>
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
                                        <td><?= esc($project_item['project']) ?></td>
                                        <td><?= esc($project_item['date_start']) ?></td>
                                        <td><?= esc($project_item['date_finish']) ?></td>
                                        <td><?= esc($project_item['total']);
                                            $total_process += $project_item['total'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <p class="bold"><?= esc($total_process); ?></p>
                        </div>
                    </div>

                    <div class="half">
                        <div class="margin-table">
                            <?php $total_completed = 0; ?>
                            <h3 class="text-center">Сданы в оплату</h3>
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
                                        <td><?= esc($project_item['project']) ?></td>
                                        <td><?= esc($project_item['date_start']) ?></td>
                                        <td><?= esc($project_item['date_finish']) ?></td>
                                        <td><?= esc($project_item['total']);
                                            $total_completed += $project_item['total'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <p class="bold"><?= esc($total_completed); ?></p>
                        </div>
                    </div>

                </div>
            </main>
<!--        </div>-->
    </div>
</section>