<!DOCTYPE html>
<html>

<head>
    <title>Contoh Memunculkan Data Tabel ke Input</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }
    </style>
</head>

<body>
    <table id="data_tabel">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
        <tr>
            <td>Andi</td>
            <td>Jl. Raya no. 1</td>
            <td>123456789</td>
        </tr>
        <tr>
            <td>Budi</td>
            <td>Jl. Raya no. 2</td>
            <td>987654321</td>
        </tr>
    </table>
    <br>
    <label>Nama:</label>
    <input type="text" id="input_nama"><br>
    <label>Alamat:</label>
    <input type="text" id="input_alamat"><br>
    <label>Telepon:</label>
    <input type="text" id="input_telepon"><br>
    <script>
        // menangani event double click pada tabel
        document.getElementById("data_tabel").addEventListener("dblclick", function(event) {
            // mengambil elemen tr yang di-double klik
            var tr = event.target.parentNode;

            // mengambil nilai dari setiap elemen td pada tr tersebut
            var nama = tr.cells[0].innerHTML;
            var alamat = tr.cells[1].innerHTML;
            var telepon = tr.cells[2].innerHTML;

            // mengisi nilai ke dalam input
            document.getElementById("input_nama").value = nama;
            document.getElementById("input_alamat").value = alamat;
            document.getElementById("input_telepon").value = telepon;
        });
    </script>
</body>

</html>