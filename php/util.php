<?php
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// Извлечение набора данных из базы данных с условием
function get_data(string $collection, $filter = []) {
    global $mng;
    $query = new MongoDB\Driver\Query($filter);
    $data = $mng->executeQuery("sprout.$collection", $query);
    return $data;
}

// Превращает набор данных в масив
function get_array($data) {
    $a = [];
    foreach($data as $item){
        array_push($a, $item);
    }
    return $a;
}

// Извлекает первый объект из набора данных
function get_item(string $collection, $filter = []) {
    return get_array(get_data($collection, $filter))[0];
}

// Добавляет записи
function insert_item(string $collection, $item) {
    global $mng;
    $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
    $bulk->insert($item);
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
    $result = $mng->executeBulkWrite("sprout.$collection", $bulk, $writeConcern);
}

// Обновляет запись
function update_item(string $collection, $filter, $item) {
    global $mng;
    $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
    $bulk->update($filter, $item);
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
    $result = $mng->executeBulkWrite("sprout.$collection", $bulk, $writeConcern);
}

// Удаляет запись
function delete_item(string $collection, $filter) {
    global $mng;
    $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
    $bulk->delete($filter);
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
    $result = $mng->executeBulkWrite("sprout.$collection", $bulk, $writeConcern);
}

?>