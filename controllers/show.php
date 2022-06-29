<?php
require_once '../conn.php';

$data = showdata('users', 'id>0 AND username LIKE "%' .$_GET['search']. '%" AND role LIKE "%' .$_GET['filter'].'%"');
?>

<table id="example2" class="table table-striped table-bordered">
        <thead>
                <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>
                </tr>
        </thead>
        <tbody>
                <?php foreach ($data as $i => $v) : ?>
                        <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $v['username'] ?></td>
                                <td><?= $v['password'] ?></td>
                                <td ><?= $v['role'] ?></td>
                                <td align="center">
                                        <a onclick="update(<?= $v['id'] ?>)" class="btn btn-success btn-sm">Update</a>
                                        <a onclick="hapus(<?= $v['id'] ?>)" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                        </tr>
                <?php endforeach; ?>
        </tbody>
        <tfoot>
                <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>
                </tr>
        </tfoot>
</table>