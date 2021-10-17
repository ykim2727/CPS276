<?php

class AddNamesProc{

    private $showNames;
    private $nameList=[];
    private $name;

    public function addClearNames(){
        if(isset($_POST["addName"])){
            return $this->addNames();
        }
        else if(isset($_POST["clearName"])){
            return $this->clearNames();
        }

    }

    public function addNames(){
        $nameArray = explode(" ", $_POST["name"]);
        $this->name = $nameArray[1].", ".$nameArray[0];
        $this->nameList = explode("\n", $_POST["nameList"]);

        array_push($this->nameList,$this->name);
        sort($this->nameList);
        $this->showNames = implode("\n", $this->nameList);

        return $this->showNames;
    }

    public function clearNames(){
        $this->showNames = "";
        return $this->showNames;
    }
}

?>