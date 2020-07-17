<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Kriteria</th>
            <th>Tipe</th>
            <th>Bobot</th>
        </tr>
        <?php foreach ($data_kriteria as $key => $value) : ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $value->nama_kriteria ?></td>
                <td><?php echo $value->tipe == 0 ? "Cost" : "Benefit" ?></td>
                <td><?php echo $value->bobot ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>