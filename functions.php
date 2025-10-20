<?php

require "userdata.php";

function getAllData() {

    global $data;
    return $data;
}

function getDataPerId($id) {
    global $data;
    return $data[$id];
}

function getFilteredData($filter) {
    return null;
}