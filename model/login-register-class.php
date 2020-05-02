<?php
 

 class loginregister{

    public $conn; 
    public $query;
    public $servername;
    public $username;
    public $password;
    public $db;

    public $dname;
    public $kwd;
    public $rnk;
    public $vol;
    public $comp;

    public $iddata;

    public $domain;
    public $keyword;
    public $ranking;
    public $volume;
    public $competition;
    
    public $company;
    public $phone;
    public $email;
    public $url;
    public $issues;
    public $converted;
    public $contacted;
    public $notes;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "leadsdata";

        $connect = $this->conn = mysqli_connect($servername, $username, $password, $db);
        
      }

      public function forgetpass($pas){
        $query = "SELECT password FROM registered WHERE username='$pas'";

        $res = $this->conn->query($query);

            $row = mysqli_fetch_assoc($res);
            if($row > 0){
                $showpass = base64_decode($row['password']);
           
                echo $showpass;
            }
            else{
                echo "Username not found in our database";
            }

            
      }

    public function insertdata($name, $user, $pass){

        $query2 = "SELECT username FROM registered WHERE username='$user'";
        $res2 = $this->conn->query($query2);
        $row2 = mysqli_fetch_assoc($res2);
        
        if($row2 > 0){
            echo "Username must be unique";
        }else{
            $query = "INSERT INTO registered (Name, username, password) VALUES ('$name', '$user', '$pass')";

        
            if($this->conn->query($query)){
                echo "Registration successful";
        }
        else{
            echo $this->conn->error;
        }
      }        
     }           
     public function login($username,$password){
            #echo $username." ".$password;
            $query = "SELECT id FROM registered WHERE username='$username' AND password='$password'";
            $res = $this->conn->query($query);

            $row = mysqli_fetch_assoc($res);

            $this->iddata = $row['id'];
        }
}




?>