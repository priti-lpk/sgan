<?php

class DBAdapter {

    private $con;

    public function __construct() {
        include_once 'Controls.php';
        include 'dbconn.php';
        $this->con = $con;
    }

    function setData($table, $field) {
        //include 'dbconn.php';
        $string = '';
        $field_val = '';
        $count = count($field) - 1;
        $i = 0;
        $text = "INSERT INTO " . $table . " (";
        foreach (array_keys($field)as $key) {
            if ($i == $count) {
                $string = $string . $key;
            } else {
                $string = $string . $key . ",";
            }
            $i++;
        }
        $i = 0;
        foreach ($field as $val) {
            if ($i == $count) {
                $field_val = $field_val . "'" . mysqli_real_escape_string($this->con, $val) . "'";
            } else {
                $field_val = $field_val . "'" . mysqli_real_escape_string($this->con, $val) . "',";
            }
            $i++;
        }
        $query = $text . $string . ") " . "VALUES(" . $field_val . ");";
//        echo $query;
        $result = mysqli_query($this->con, $query);
        if ($result) {
            return TRUE;
        } else {
            mysqli_error($this->con);
            return false;
        }
    }

    function getData($table, $field) {
        include 'dbconn.php';
        $string = "";
        $query = "";
        $data = null;
        $text = "select ";
        $count = count($field) - 1;
        $i = 0;
        foreach ($field as $col) {
            if ($i == $count) {
                $string = $string . $col;
            } else {
                $string = $string . $col . ",";
            }
            $i++;
        }
        $query = $text . $string . " from " . $table;
        $result = mysqli_query($this->con, $query);
        if ($result) {
            $i = 0;
            while ($row = mysqli_fetch_row($result)) {
                $data[$i] = $row;
                $i++;
            }
            return $data;
        } else {
            echo 'Data can not fetch<br>';
            return FALSE;
        }
        echo $query;
    }

    function getRow($table, $field, $clause) {
        include 'dbconn.php';
        $string = "";
        $query = "";
        $text = "select ";
        $data = null;
        $count = count($field) - 1;
        $i = 0;
        foreach ($field as $col) {
            if ($i == $count) {
                $string = $string . $col;
            } else {
                $string = $string .$col . ",";
            }
            $i++;
        }
		
        $query = $text . $string . " from " . $table . " where " . $clause;
//        echo '</br>';echo '</br>';echo '</br>';echo '</br>';
   //   echo $query;
        $result = mysqli_query($this->con, $query);
        if ($result) {
            $i = 0;
            while ($row = mysqli_fetch_row($result)) {
                $data[$i] = $row;
                $i++;
            }
            if ($data === NULL) {
                return NULL;
            } else {
                return $data;
            }
        } else {
            return FALSE;
        }
    }

    function getLastID($field, $table, $clause) {
        include 'dbconn.php';
		
        $query = "select " . $field . " from " . $table . " where " . $clause . " order by " . $field . " desc limit 1";
        //echo $query;
        $result = mysqli_query($this->con, $query);
        if ($result) {
            $data = 0;
            while ($row = mysqli_fetch_row($result)) {
                $data = $row[0];
            }
            return $data;
        } else {
            return FALSE;
        }
    }

    function updateRow($table, $field, $clouse) {
        include 'dbconn.php';
        $query = "";
        $string = "";
        $fiel_array = array_keys($field);
        $count = count($field) - 1;
        $i = 0;
        foreach ($field as $key) {
            if ($i == $count) {
                $string = $string . $fiel_array[$i] . '=' . "'" . mysqli_real_escape_string($con, $key) . "'";
            } else {
                $string = $string . $fiel_array[$i] . '=' . "'" . mysqli_real_escape_string($con, $key) . "',";
            }
            $i++;
        }
        $query = "update " . $table . " set " . $string . " where " . $clouse;
   //echo $query;
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function delRow($table, $clous) {
        include 'dbconn.php';
		$id=mysqli_real_escape_string($this->con,$claus);
        $query = "Delete from " . $table . " where id=" . $id;
        echo $query;
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function closeDB() {
        $result = mysqli_query($this->con, "SHOW FULL PROCESSLIST");
        while ($row = mysqli_fetch_array($result)) {
            if ($row["Time"] > $max_excution_time) {
                $sql = "KILL " . $row["Id"];
                mysqli_query($sql);
            }
        }
        mysqli_close($this->con);
    }
	
	 function Conn(){
        return $this->con;
    }
}
?>
