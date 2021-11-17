<?php
require_once "Pdo_methods.php";

class Date_time extends PdoMethods{

    
    public function checkSubmit(){
        date_default_timezone_set('America/New_York');
        if (isset($_POST["addButton"])){
            return $this->addName();
        }
        if (isset($_POST["displaynotes"])){
            return $this->checkDate();
        } 
    }

    public function addName(){
        date_default_timezone_set('America/New_York');
        $pdo = new PdoMethods();
        $sql = "INSERT INTO notes_table (Date_and_Time, Note) VALUES (:notetime, :note)";
        $bindings = [
            [':notetime',strtotime($_POST["dateTime"]),'str'],
            [':note',$_POST["noteContent"],'str'],
        ];
        
        $result = $pdo->otherBinded($sql, $bindings);

        if($result === 'error'){
            return 'There was an error adding the note';
        }
        else {
            return 'Note has been added';
        }
    }

    public function checkDate(){
        date_default_timezone_set('America/New_York');
        $pdo = new PdoMethods();
        $sql = "SELECT * FROM notes_table WHERE Date_and_Time >= :begdate AND Date_and_Time <= :enddate ORDER BY Date_and_Time ASC";
        $bindings = [
            [':begdate',strtotime($_POST["begDate"]),'str'], 
            [':enddate',strtotime($_POST["endDate"]),'str'], 
        ];

        $records = $pdo->selectBinded($sql, $bindings);

        if($records === 'error'){
            return 'There was an error finding the note';
        }
        else {
            if(count($records) != 0){
                return $this->createTable($records);
            }
            else {
                return "<br>No notes found for the date range selected";
            }
        }
    }

    public function createTable($records){
        date_default_timezone_set('America/New_York');
        $list = '<br><table class="table table-striped table-bordered"><thead><tr><th>Date and Time</th><th>Note</th></tr><thead><tbody>';
        foreach ($records as $row){
            $dateformat = date("n/d/Y g:i a", $row['Date_and_Time']); 
            $list .= "<tr><td>{$dateformat}</td><td>{$row['note']}</td></tr>"; 
        }
        $list .= '</tbody></table>'; 
        return $list;
    }
}
?>