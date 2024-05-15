fetch('/ba/src/php/get_entries.php')
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        var table = document.getElementById('entries-table');
        for (var i = 0; i < data.length; i++) {
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            handleCellData(cell1, data[i].name);
            handleCellData(cell2, data[i].comment);
        }
        function handleCellData(cell, data) {
            if (data) {
                cell.innerHTML = data;
            } else {
                cell.innerHTML = "empty";
                cell.classList.add("empty-value");
            }
        }
    })
    .catch(e => {
        console.error('An error occurred fetching the JSON data: ' + e.message);
    });