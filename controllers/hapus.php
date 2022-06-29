<?php
require_once '../conn.php';

$data = hapus('users', "id=" . $_GET['id'] . "");
if ($data) {
        echo json_encode(['status' => 'success', 'data' => $data]);
        return;
} else {
        echo json_encode(['status' => 'error', 'data' => $data]);
        return;
}
