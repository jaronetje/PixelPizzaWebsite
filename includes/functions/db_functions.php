<?php
/**
 * 
 * query a statement to the database
 * 
 * @param   string $query the statement to query
 * @param   array $options the values to replace ? with
 * @param   PDO $db the database to query from
 * 
 * @return  void does not return anything
 * 
 */
function Query($query, $options = array(), $db = null){
    global $dbh;
    if(!$db){
        $db = $dbh;
    }
    $sth = $db->prepare($query);
    $sth->execute($options);
}

/**
 * 
 * query a statement to the database and return the selected values
 * 
 * @param   string $query the statement to query
 * @param   array $options the values to replace ? with
 * @param   PDO $db the database to query from
 * 
 * @return  array returns the selected values
 * 
 */
function selectQuery($query, $options = array(), $db = null){
    global $dbh;
    if(!$db){
        $db = $dbh;
    }
    $sth = $db->prepare($query);
    $sth->execute($options);
    return $sth->fetchAll();
}

/**
 * 
 * query a statement to the database and return the first row
 * 
 * @param   string $query the statement to query
 * @param   array $options the values to replace ? with
 * @param   PDO $db the database to query from
 * 
 * @return  array returns the first row of the selected values
 * 
 */
function selectSingleQuery($query, $options = array(), $db = null){
    global $dbh;
    if(!$db){
        $db = $dbh;
    }
    $sth = $db->prepare($query);
    $sth->execute($options);
    return $sth->fetch();
}

/**
 * 
 * query a statement to the database and return the first value
 * 
 * @param   string $query the statement to query
 * @param   array $options the values to replace ? with
 * @param   PDO $db the database to query from
 * 
 * @return  string returns the first value
 * 
 */
function selectValueQuery($query, $options = array(), $db = null){
    global $dbh;
    if(!$db){
        $db = $dbh;
    }
    $sth = $db->prepare($query);
    $sth->execute($options);
    return $sth->fetchColumn();
}

/**
 * 
 * get the last id that was inserted into the database
 * 
 * @param   PDO $db the database to query from
 * 
 * @return  int returns the last inserted id
 * 
 */
function getLastId($db = null){
    global $dbh;
    if(!$db){
        $db = $dbh;
    }
    return $db->lastInsertId();
}