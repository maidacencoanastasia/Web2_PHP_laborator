<!doctype html>
<title>Maidacenco</title>
<h1>This is my exemple of Register</h1>
<?php
$days = 15;
$totalStudents = 15;
$dates = ["03.09","03.09","07.09"]
?>
<table border = "1">
    <thead>
    <th>Nr.ord</th>
    <th>Nume/prenume</th>
    <? for ($d = 1; $d <= $days; $d++){?>
    <th><? $d; ?> </th>
    <?}?>
    </thead>
    <tbody>
    <tr>
        <? for($i = 1; $i <= $totalStudents; $i++){?>
        <tr>
        <th><?=$i;?></th>
        <th>Maidacenco Anastasia</th>
        <? for ($d = 1; $d <= $days; $d++){?>
            <td> </td>
        <?}?>
        <td> </td>
        <?}?>
    </tr>


    </tbody>

</table>
</html>