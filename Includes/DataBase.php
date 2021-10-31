<?php

class DataBase {
    private $sql;

    function __construct($host, $user, $pass, $db) {
        $this -> sql = mysqli_connect($host, $user, $pass, $db);
        $this -> sql -> query("SET CHARACTER SET utf8");
    }

    public function Fetch($column, $from) {
        $my_query = $this -> sql -> query("SELECT $column FROM $from ");
        $i = 0;
        $fetching = array();
        while ($all = mysqli_fetch_assoc($my_query)) :
            $fetching[$i] = $all;
            $i++;
        endwhile;
        return ($fetching);
    }

    public function Delete($table, $where) {
        $test = $this -> sql -> query("DELETE FROM $table WHERE $where ");
        $result = ($test) ? "yes" : "no";
        return ($result);
    }

    public function Insert($table, $columns, $values) {
        // $columns = ss,ss,ss || $value = 'ss','ss',ss'
        $test = $this -> sql -> query("INSERT INTO $table($columns) VALUES($values)");
        $result = ($test) ? "yes" : "no";
        return ($result);
    }

    public function Update($table, $columns, $where) {
        //$table = table || $columns = column1=ss,column2=ss || $where = id=2
        $test = $this -> sql -> query("UPDATE $table SET $columns WHERE $where");
        $result = ($test) ? "yes" : "no";
        return ($result);
    }

}
?>
