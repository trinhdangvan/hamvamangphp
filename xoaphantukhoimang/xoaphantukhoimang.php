<br>
<br>
<br>

<form method="post">
    Nhap phan tu can xoa <input type="number" name="num">
    <input type="submit" value="submit">
</form>

<?php

$arr = [1, 2, 3, 4, 10, 15, 18, 20];

print("<br>Mang truoc khi xoa: <pre>" . print_r($arr, true) . "</pre>");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['num'])) {
        $new_arr = array();
        foreach ($arr as $key => $value) {
            if ($_POST['num'] != $value) {
                $new_arr[] = $value;
            }
        }
        print("<pre>" . print_r($new_arr, true) . "</pre>");

    }
}