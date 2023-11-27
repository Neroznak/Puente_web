function addRow() {
    var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    // Добавьте дополнительные ячейки при необходимости
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);

    cell1.innerHTML = '<input type="text" name="name[]">';
    cell2.innerHTML = '<input type="text" name="email[]">';
    cell3.innerHTML = '<input type="text" name="email[]">';
    cell4.innerHTML = '<input type="text" name="email[]">';
    cell5.innerHTML = '<input type="text" name="email[]">';
    cell6.innerHTML = '<input type="text" name="email[]">';
    // Добавьте дополнительные поля ввода при необходимости
    cell7.innerHTML = '<button type="button" onclick="removeRow(this)">Удалить</button>';
    cell8.innerHTML = '<button type="button" onclick="saveData(this)">Сохранить</button>';
}

function removeRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

function saveData() {
    // Собираем данные из таблицы
    var data = [];
    var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];

    for (var i = 0; i < table.rows.length; i++) {
        var row = table.rows[i];
        var cells = row.cells;

        var rowData = {
            name: cells[0].querySelector('input').value,
            email: cells[1].querySelector('input').value,
            // Добавьте дополнительные поля при необходимости
        };

        data.push(rowData);
    }

    // Отправляем данные на сервер
    fetch('/table/save', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ data: data }),
    })
        .then(response => response.json())
        .then(data => {
            // Обработка ответа от сервера (если необходимо)
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}