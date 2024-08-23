<?php 

class Employee{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;



    public function __construct($id, $first_name, $last_name, $email)
    {
        $this->id=$id;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->email=$email;
    }

    public function getId(){ return $this->id; }
    public function getFirst_name(){ return $this->first_name; }
    public function getLast_name(){ return $this->last_name;}
    public function getEmail(){ return $this->email;}

    public function setId($id){ $this->id=$id;}
    public function setFirst_name($first_name){ $this->first_name=$first_name;}
    public function setLast_name($last_name){ $this->last_name=$last_name;}
    public function setEmail($email){ $this->email=$email; }



    public function affiche(){

        return  $this->id + " le nom est :" .$this->first_name. "last name :" .$this->last_name. "Email est: " .$this->email;
        }


    public function creat($id, $first_name, $last_name, $email){
        $this->id =$id;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->email=$email;
         
        $sql = "Insert into " .$this->employees(`id`, `first_name`, `last_name`, `email`) VALUES ()
        


    
     }

     public function suprimer($id){

        // foreach($employes as $employes ){

        //   if($employe = $id)
          
    
     }

     
}




?>