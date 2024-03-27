fetch('./../php/get_entries.php')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('entries-table');
        for (var i = 0; i < data.length; i++) {
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            cell1.innerHTML = data[i].name;
            cell2.innerHTML = data[i].comments;
        }
    });

/*
fetch('get_entries.php')
    .then(response => response.json())
    .then(data => {
        // Get the table body
        var tbody = document.getElementById('entries-table').getElementsByTagName('tbody')[0];

        // Loop through the data and add rows to the table
        data.forEach(entry => {
            var row = document.createElement('tr');

            var nameCell = document.createElement('td');
            nameCell.textContent = entry.name;
            row.appendChild(nameCell);

            var commentsCell = document.createElement('td');
            commentsCell.textContent = entry.comments;
            row.appendChild(commentsCell);

            tbody.appendChild(row);
        });
    });*/
