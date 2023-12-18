<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the attendee database
        public function insertclient($fname, $lname, $dob, $address,$gender_id,$avatar_path, $email){
            try {

               

                // define sql statement to be executed
                $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,addres,gender_id,avatar_path,email) VALUES (:fname,:lname,:dob,:addres,:gender_id,:avatar_path :email)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':addres',$address);
                $stmt->bindparam(':gender_id',$gender_id);
                $stmt->bindparam(':avatar_path',$avatar_path);
                $stmt->bindparam(':email',$email);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editclient($id, $fname, $lname, $dob, $address, $gender_id, $avatar_path,$email) {
            try {
                $sql = "UPDATE `attendee` SET `firstname`=:fname, `lastname`=:lname, `dateofbirth`=:dob, `address`=:addres, `gender_id`=:gender_id, `avatar_path`=:avatar_path,`email`=:email WHERE `attendee_id` = :id";
                $stmt = $this->db->prepare($sql);
        
                // bind all placeholders to the actual values
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':lname', $lname);
                $stmt->bindParam(':dob', $dob);
                $stmt->bindParam(':addres', $address);
                $stmt->bindParam(':gender_id', $gender_id);
                $stmt->bindParam(':avatar_path', $avatar_path);
                $stmt->bindparam(':email',$email);
        
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        

        public function getclient(){
            try{
                $sql = "SELECT * FROM `attendee` a inner join gender s on a.gender_id = s.gender_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getclientDetails($id){
           try{
                $sql = "select * from attendee a inner join gender s on a.gender_id = s.gender_id 
                where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteclient($id){
           try{
                $sql = "delete from attendee where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getgender(){
            try{
                $sql = "SELECT * FROM `gender`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getgenderById($id){
            try{
                $sql = "SELECT * FROM `gender` where gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }


        

    }
?>