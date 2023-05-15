<?php
// Model.php
require 'Koneksi.php';

function insertData($table, $data)
{
    $conn = connect();
    
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";

    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
    
    mysqli_close($conn);
}

function updateData($table, $data, $id)
{
    $conn = connect();
    
    $set = "";
    foreach ($data as $column => $value) {
        $set .= "$column = '$value', ";
    }
    $set = rtrim($set, ", ");
    
    $sql = "UPDATE $table SET $set WHERE id_$table = $id";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
    
    mysqli_close($conn);
}

function deleteData($table, $id)
{
    $conn = connect();
    
    $sql = "DELETE FROM $table WHERE id_$table = $id";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
    
    mysqli_close($conn);
}

function getData($table)
{
    $conn = connect();
    
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);
    $data = array();
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    
    mysqli_close($conn);
    
    return $data;
}