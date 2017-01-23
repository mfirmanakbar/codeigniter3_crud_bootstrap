
<table border="1">
    <tr>
      <th>No</th>
      <th>Time</th>
      <th>Name</th>
      <th>Email</th>
      <th>Website</th>
      <th>Message</th>
    </tr>
    <?php
    $no=1;
    foreach ($record->result() as $r){
        echo "<tr>
                <td>$no</td>
                <td>$r->time</td>
                <td>$r->nama</td>
                <td>$r->email</td>
                <td>$r->url</td>
                <td>$r->pesan</td>
              </tr>";
        $no++;
    }
    ?>
</table>
