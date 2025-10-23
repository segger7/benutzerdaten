<?php

require "userdata.php";

function getAllData() {

    global $data;
    return $data;
}

function getDataPerId($id) {
    global $data;
    foreach($data as $user) {
        if($user["id"] == $id) {
            return $user;
        }
    }
}

function getFilteredData($filter) {
    global $data;

    $filtered_data = [];

    foreach($data as $user) {
        if(strpos(strtolower($user["firstname"]),strtolower($filter)) !== false || strpos(strtolower($user["lastname"]),strtolower($filter)) !== false || strpos(strtolower($user["email"]),strtolower($filter)) !== false) {
            $filtered_data[] = $user;
        }
    }

    return $filtered_data;
}