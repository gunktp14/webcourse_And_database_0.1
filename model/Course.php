<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

     public function getCourseDetail($id) 
    {
        $sql = "SELECT * FROM sci_cs where cs_id = ".$id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
            return true;
        }else {
            return false; 
        }
    }

    public function getCourseforyear($cs_year) 
    {
        $sql = "SELECT * FROM sci_cs where cs_year = ".$cs_year;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            return true;
        }else {
            return false; 
        }
    }

    // public function getCoursePro($pro_id)
    // {
    //     $sql = "SELECT * FROM agency WHERE `agency_pro_id` = '". $pro_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    // public function getAgencyID($a_id)
    // {
    //     $sql = "SELECT * FROM agency where agency_id=".$a_id;
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    public function addCourse($data_course)
    {
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`)";
        $sql .= " VALUES ('', :cs_name, :cs_img, :cs_date, :cs_wallet);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_course)){
            return true;
        }else {
            return false; 
        }
    }

    public function delCourse($cs_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='".$cs_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourse($cs_id, $cs_name, $cs_img, $cs_date, $cs_wallet, $cs_range_date, $cs_fcourse, $cs_time, $cs_location, $cs_group, $cs_detail, $cs_perform, $cs_reward)
    {
        $sql = "UPDATE `sci_cs` SET `cs_name` = '". $cs_name ."', `cs_img` = '". $cs_img ."', `cs_date` = '". $cs_date ."', `cs_wallet` = '". $cs_wallet ."'
        , `cs_range_date` = '". $cs_range_date ."', `cs_fcourse` = '". $cs_fcourse ."', `cs_time` = '". $cs_time ."', `cs_location` = '". $cs_location ."', `cs_group` = '". $cs_group ."'
        , `cs_detail` = '". $cs_detail ."', `cs_perform` = '". $cs_perform ."', `cs_reward` = '". $cs_reward ."' WHERE `cs_id` = '". $cs_id ."'"; 
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    // public function editCourse2($data_course)
    // {
    //     $sql = "UPDATE `sci_cs` SET `cs_name` = :cs_name, `cs_img` = :cs_img, `cs_date` = :cs_date, `cs_wallet` = :cs_wallet";
    //     $sql .=", `cs_range_date` = :cs_range_date, `cs_fcourse` = :cs_fcourse, `cs_time` = :cs_time, `cs_location` = :cs_location, `cs_group` = :cs_group";
    //     $sql .=", `cs_detail` = :cs_detail, `cs_perform` = :cs_perform, `cs_reward` = :cs_reward, WHERE `cs_id` = :cs_id"; 
    //     $query = $this->ConDB->prepare($sql); 
    //     if( $query->execute()){
    //         return true; 
    //     }else {
    //         return false;
    //     }
    // }

    public function checkAddCourse($cs_name ,$cs_date ,$cs_wallet ,$cs_img)
    { 
        if(empty($cs_name))
        {
            return true;
        }
        else {
            if(empty($cs_date))
            {
                return true;
            }
            else {
                if(empty($cs_wallet))
                {
                    return true;
                }
                else {
                    if(empty($cs_img))
                    {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
            }
        }

    }
}
?>

