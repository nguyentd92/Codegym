<?php

    class SQL {
        public $connection;
        public function SQL($host,$user,$password,$database) {
            $this->connection = mysqli_connect($host,$user,$password,$database);
        }

        public function showTable($tableName) {
        
            $sql = "SELECT * FROM $tableName";
            $result = mysqli_query($this->connection, $sql);
    
            if ($result) {
                $html = "<form method='get'><table>";
                foreach ($result as $column => $array) {
                    $html .= '<tr>';
                    $html .= "<th>$column</th>";
                    foreach ($array as $title => $value) {
                        $html .= "<td>$value</td>";                    
                    }
                    $html .= "<td><input type='submit' name='del$column' value='Delete'</td>";
                    $html .= '</tr>';
                }
                $html .= "</table></form>";
            }
    
            return $html;
        }

        public function insert($code,$name){
            return mysqli_query($this->connection, "INSERT INTO `category` VALUES ('$code','$name')");
        }
    }

    ?>