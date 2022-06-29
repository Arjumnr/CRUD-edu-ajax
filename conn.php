<?php
$conn = mysqli_connect("localhost", "root", "", "db_belajar_ajax");

function showdata($table, $value)
{
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM $table WHERE $value");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
        }
        return $rows;
}

function hapus($table, $value)
{
        global $conn;
        mysqli_query($conn, "DELETE FROM $table WHERE $value");
        return mysqli_affected_rows($conn);
}

function tambah($table, $value)
{
        global $conn;
        mysqli_query($conn, "INSERT INTO $table VALUES $value");
        return mysqli_affected_rows($conn);
}

function update($table, $value)
{
        global $conn;
        mysqli_query($conn, "UPDATE $table SET $value");
        return mysqli_affected_rows($conn);
}
