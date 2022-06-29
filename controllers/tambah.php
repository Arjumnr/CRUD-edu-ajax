<?php
require_once '../conn.php';

$data = tambah('users', "('','" . $_POST['username'] . "','" . $_POST['password'] . "','" . $_POST['role'] . "')");
if ($data) {
        echo json_encode(['status' => 'success', 'data' => 'Data berhasil ditambahkan']);
        return;
} else {
        echo json_encode(['status' => 'error', 'data' => $data]);
        return;
}
