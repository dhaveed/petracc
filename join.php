<?php 

class Database{
    
    private $db_host = 'localhost';
    private $db_name = 'petracc';
    private $db_username = 'root';
    private $db_password = '';
    
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
        
        
    }
}

$db_connection = new Database();
$conn = $db_connection->dbConnection();

$data = json_decode(file_get_contents("php://input"));
$msg['message'] = '';


if(isset($_POST['submit_biodata'])){
    if(isset($data->name) && isset($data->email) && isset($data->phone)){
        if(!empty($data->title) && !empty($data->body) && !empty($data->author)){
            
            $insert_query = "INSERT INTO `members`(name,email,phone) VALUES(:name,:email,:phone)";
            
            $insert_stmt = $conn->prepare($insert_query);
            // DATA BINDING
            $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($data->name)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':email', htmlspecialchars(strip_tags($data->email)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':phone', htmlspecialchars(strip_tags($data->phone)),PDO::PARAM_STR);
            
            if($insert_stmt->execute()){
                $msg['message'] = 'We will connect with you as soon as possible.';
            }else{
                $msg['message'] = 'Could not join';
            } 
            
        }else{
            $msg['message'] = 'Oops! empty field detected. Please fill all the fields';
        }
    }
    else{
        $msg['message'] = 'Please fill all the fields | name, email, phone';
    }
    
echo  json_encode($msg);
}

?>