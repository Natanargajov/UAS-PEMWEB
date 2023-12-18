function submitForm() {
    var nama = document.getElementById('nama').value;
    var nim = document.getElementById('nim').value;
    

    if (nama === '' || nim === '') {
        alert('Masukan nama dan nim');
        return;
    }

    var formData = {
        Nama: nama,
        Nim:nim,
        Validasi_Manusia: document.getElementById('check').checked,
        Jenis_kelamin : document.querySelector('input[name="Jenis_kelamin"]:checked') ? document.querySelector('input[name="Jenis_kelamin"]:checked').value : ''
    };

    displayData(formData);
}

function displayData(data) {
    var resultDiv = document.getElementById('result');

    var table = document.createElement('table');
    var tbody = document.createElement('tbody');

    for (var key in data) {
        var row = tbody.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.innerHTML = key;
        cell2.innerHTML = data[key];
    }

    table.appendChild(tbody);
    resultDiv.innerHTML = '';
    resultDiv.appendChild(table);
}
