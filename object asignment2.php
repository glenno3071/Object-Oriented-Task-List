<?php
class Task{
    public $description=" "; 
    public $completed=" ";
    public $date_created=" ";
    public $date_completed=" ";

public function printtasklist(){
 echo $this->description." ";
 echo $this->completed." ";
 echo $this->date_created." ";
 echo $this->date_completed." ";
echo "\n";
}

public function set_tasklist($description,$completed,$date_created,$date_completed){
  $this->description;
  $this->completed;
  $this->date_created;
  $this->date_completed;
}

  public function __construct() {
      $this->Tasks = []; 
    }
    
    public function addTask($task) {
        $this->Tasks[] = $task;   
    }
    
    public function printTask() {
        foreach($this->Tasks as $task) {
            echo ($task)."\n";
        }
}
}

$tasklist=new Task();
$tasklist->description="feed the cat";
$tasklist->completed="ok";
$tasklist->date_created="1/22/1912";
$tasklist->date_completed="2/33/1932";
$tasklist->printtasklist();

$tasklist=new Task();
$tasklist->description="kiss the scorpion";
$tasklist->completed="not today";
$tasklist->date_created="1/22/1913";
$tasklist->date_completed="2/33/1934";
$tasklist->printtasklist();

$tasklist = new Task("Feed the Dog","Y","1/1/111","2/2/2222");
$tasklist->printtasklist();//added here to individually call printTask

$tasklist->set_tasklist("feed the dog","Yes","1/11/1911", "2/22/1922");
$tasklist->set_tasklist("kick the dog","Yes","1/12/1911", "2/23/1922");
$tasklist->set_tasklist("hug the dog","Yes","1/13/1911", "2/24/1922");
$tasklist->printtasklist();//added here in an attempt to call printTask loop

?>
//  So paul why does 38-50 work but not 52-56

