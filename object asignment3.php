<?php
class Task{
    private $description=" "; 
    private $completed=" ";
    private $date_created=" ";
    private $date_completed=" ";

 public function __construct($description,$completed $date_created,$date_completed
) {
    $this->description = $description;
    $this->completed = $completed;
    $this->date_created = date_created;
    $this->date->completed = $date_completed;
  }
    
   public function getDescription(){
      return $this->description;
   }
   public function setDescription($_desc){
      $this->description = $_desc;
   }
   public function getCompleted(){
      return $this->completed;
   }
   public function setCompleted($_comp){
      $this->completed = $_comp;
   }
   public function getDateCreated(){
      return $this->date_created;
   }
   public function setDateCreated($_dcreat){
      $this->date_created = $_dcreat;
   }
   public function getDateCompleted(){
      return $this->date_completed;
   }
   public function setDateCompleted($_dcomp){
      $this->date_completed = $_dcomp;
}
}

class TaskList {
    private $Tasks;
 
    public function __construct() {
      $this->Tasks = []; 
    }

    public function addTask($task) {
        $this->Tasks[] = $task;   
    }
    
    public function printTask() {
        foreach($this->Tasks as $task) {
            echo ($task);
        }
    }
}
// error identified at this area indicating expection a ";" or a","
$TaskHolder = new TaskList();
$TaskHolder->addTask("Description&nbsp&nbspComplete&nbsp&nbspStarted&nbsp&nbspFinished");
$TaskHolder->addTask("Feed the Dog&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp       Y&nbsp&nbsp&nbsp&nbsp       1/1/1111&nbsp&nbsp&nbsp      2/2/2222");
$TaskHolder->addTask("Feed the cat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      Y&nbsp&nbsp&nbsp&nbsp        1/1/1111&nbsp&nbsp&nbsp&nbsp      2/2/2222");
$TaskHolder->addTask("Feed the Monkey&nbsp    Y&nbsp&nbsp        1/1/1111&nbsp&nbsp&nbsp&nbsp     2/2/2222");
$TaskHolder->addTask("Feed the human&nbsp&nbsp    Y&nbsp&nbsp&nbsp&nbsp        1/1/1111 &nbsp&nbsp&nbsp    2/2/2222");
$TaskHolder->printTask();


    
/*
 
<?php
class Task
{//encloses to line 93
    public $description=" "; 
    public $completed=" ";
    public $date_created=" ";
    public $date_completed=" ";

 
 public function print_tasklist()
  {
   echo $this->description." ";
   echo $this->completed." ";
   echo $this->date_created." ";
   echo $this->date_completed." ";
   echo "\n";
}

public function set_tasklist($description,$completed,$date_created,$date_completed)
{
  $this->description;
  $this->completed;
  $this->date_created;
  $this->date_completed;
}
 
public function __construct($description, $completed, $date_created,$date_completed)
  {
    $this->description = $adescription;
    $this->completed = $acompleted;
    $this->date_created = $adate_created;
    $this->date_completed = $adate_completed;
 }
 
// working construct from above working code - but want to try multiparamater construct
//      public function __construct() {
//      $this->Tasks = []; 
//       }
    
    public function addTask($task) {
        $this->Tasks[] = $task;   
    }
    
    public function printTask() {
        foreach($this->Tasks as $task) {
            echo ($task)."\n";
  
 public function __getDescription(){
 return $this->description; }
 puublic function __setDescription($description){
$this->description=$description;
// needed a get and set for each field

}//starts at line 72

$tasklist=new Task();
$tasklist->description="feed the cat";
$tasklist->completed="Nope";
$tasklist->date_created="1/22/1912";
$tasklist->date_completed="2/33/1932";
$tasklist->print_tasklist();

$tasklist->set_tasklist("feed the dog","Yes","1/11/1911", 2/22/1922");
$tasklist->set_tasklist("kick the dog","Yes","1/12/1911", 2/23/1922");
$tasklist->set_tasklist("hug the dog","Yes","1/13/1911", 2/24/1922");
$tasklist->print_tasklist();

