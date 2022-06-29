<?php
require_once '../conn.php';

$data = update('users', "username='" . $_POST['username'] . "', password='" . $_POST['password'] . "',role='" . $_POST['role'] . "' WHERE id='" . $_POST['id'] . "'");
if ($data) {
        echo json_encode(['status' => 'success', 'data' => 'Data berhasil ditambahkan']);
        return;
} else {
        echo json_encode(['status' => 'error', 'data' => $data]);
        return;
}
