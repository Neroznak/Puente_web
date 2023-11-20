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
                                        labels: ['Green', 'Orange', 'Blue', 'Red', 'Purple'],
                                        datasets: [{
                                            data: [20, 15, 25, 20, 20],
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
                                        labels: ['Green', 'Orange', 'Blue', 'Red', 'Purple'],
                                        datasets: [{
                                            data: [20, 15, 25, 20, 20],
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
                                        data: [10000, 15000, 20000, 18000, 25000, 30000, 28000, 32000, 27000, 22000, 18000, 20000],
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
                                <th class="table-start table-stop">Общие задачи</th>
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
                    <!-- ASIDE #2 -->
                    <aside class="col-sm-6 col-md-12 height">
                        <table id="productTable">
                            <thead>
                            <tr>
                                <th class="table-start table-stop">Новости</th>
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
                </div>
            </div>
        </div>
</section>