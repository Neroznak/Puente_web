<section>
    <div class="container-fluid">
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-11 margin">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h1><?= esc($title) ?></h1></div>

                        </div>
                    </div>
                </div>

                <div class="row center-block">
                    <table class="employers-table">
                        <thead>
                        <tr>
                            <th class="table-start">№</th>
                            <th>Заказчик</th>
                            <th>Объект</th>
                            <th>Начало</th>
                            <th>Конец</th>
                            <th class="table-stop">Сумма</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $id = 1;?>
                        <?php foreach ($project_archive as $project_item) : ?>
                            <tr>
                                <td>
                                    <?= esc($id) ?>
                                    <?php $id++;?>
                                </td>
                                <td><?= esc($project_item['customer']) ?></td>
                                <td><?= esc($project_item['project']) ?></td>
                                <td><?= esc($project_item['date_start']) ?></td>
                                <td><?= esc($project_item['date_finish']) ?></td>
                                <td><?= esc($project_item['total']) ?></td>
                            </tr>
                        <?php endforeach ?>

                        </tbody>
                    </table>

                </div>
            </main>
        </div>
    </div>
</section>