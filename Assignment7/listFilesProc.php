<?php
require_once "Pdo_methods.php";

class Links extends PdoMethods{

    public function getData(){
        $pdo = new PdoMethods();

		$sql = "SELECT * FROM files";

        $records = $pdo->selectNotBinded($sql);

		if($records == 'error'){
			return 'There has been an error processing your request';
        }
        
		else {
			if(count($records) != 0){
				return $this->createList($records);
			}
			else {
				return "";
			}
		}
        
    }

    public function createList($records){
        $list = '<ul>';
        foreach ($records as $row){
            $list .= "<li><a target='_blank' href='{$row['file_path']}'>{$row['file_name']}</a></li>";
        }
        $list .= '</ul>';
        return $list;
    }

}

?>

