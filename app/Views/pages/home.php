<!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
<section>
    <div class="container-fluid">
        <div class="row">
            <!-- MAIN -->
            <main class="col-md-8 col-lg-8">
                <div class="col-lg-8 margin">
                    <h1>Добро пожаловать, Дмитрий</h1></div>
                <div class="row">
                    <div class="half">
                        <div class="margin">
                            <canvas class="circle-size col-lg-6" id="myPieChart" width="20" height="20"></canvas>
                            <script>
                                var ctx = document.getElementById('myPieChart').getContext('2d');
                                var myPieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: ['МЕТРО', 'АШАН', 'Корнер М-1', 'Детская клиника', 'Прочие'],
                                        datasets: [{
                                            data: [45, 20, 20, 13, 2],
                                            backgroundColor: ['#4CAF50', '#FFA500', '#3498db', '#e74c3c', '#9b59b6']
                                        }]
                                    }
                                })
                            </script>
                        </div>
                    </div>
                    <div class="half">
                        <div class="margin">
                            <canvas class="circle-size col-lg-6" id="myPieChart2" width="20" height="20"></canvas>
                            <script>
                                var ctx = document.getElementById('myPieChart2').getContext('2d');
                                var myPieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: ['Асфальтирование', 'Земляные работы', 'Монолитные работы', 'Инженерные сети', 'Прочие'],
                                        datasets: [{
                                            data: [55, 15, 5, 23, 2],
                                            backgroundColor: ['#4CAF50', '#FFA500', '#3498db', '#e74c3c', '#9b59b6']
                                        }]
                                    }
                                })
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="half">
                        <div class="margin">
                            <canvas id="revenueChart" width="400" height="100"></canvas>
                            <script>
                                // Данные для графика (выручка за 12 месяцев)
                                var revenueData = {
                                    labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
                                    datasets: [{
                                        label: 'Выручка',
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1,
                                        data: [1000000, 1500000, 2000000, 1800000, 2500000, 3000000, 2800000, 3200000, 2700000, 2200000, 1800000, 2000000],
                                    }]
                                };

                                // Получение контекста для рисования на холсте
                                var ctx = document.getElementById('revenueChart').getContext('2d');

                                // Создание столбчатого графика
                                var revenueChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: revenueData,
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </main>

            <!-- ASIDE -->
            <div class="col-md-4 col-lg-4">
                <div class="row">
                    <!-- ASIDE #1 -->
                    <aside class="col-sm-6 col-md-12 height">
                        <table>
                            <thead>
                            <tr>
                                <th class="table-start table-stop"><?= esc($task_title) ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($task as $task_item): ?>
                            <tr>
                                <td><?= esc($task_item['body']) ?></td>
                            </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </aside>
                    <!-- ASIDE #2 -->
                    <aside class="col-sm-6 col-md-12 height">
                        <table id="productTable">
                            <thead>
                            <tr>
                                <th class="table-start table-stop"><?= esc($news_title) ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($news as $news_item): ?>
                                <tr>
                                    <td><?= esc($news_item['body']) ?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </aside>
                </div>
            </div>
        </div>
</section>