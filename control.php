<?php
error_reporting(0);
class control{
    private $connection;
    public function __construct(){
           $this->connection = $this->connect();
           session_start();
    }

    public function connect(){
        $dbServerName = "http://remotemysql.com";
        $dbUsername = "2FugcqJ5ae";
        $dbPassword = "4YLtctYL2n";
        $dbName = "2FugcqJ5ae";

        // create connection
        $conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

        // check connection
        if(mysqli_errno($conn)){
            echo mysqli_error($conn) ;
            exit;
            }
                //echo "connected";
                return $conn;
    }

    public function register(){
        if(isset($_POST["regButton"])){
            $teamName = $_POST["teamName"];
            $paName = $_POST["paName"];
            $paEmail = $_POST["paEmail"];
            $paPhone = $_POST["paPhone"];
            $paAge = $_POST["paAge"];
            $gend = $_POST["gend"];
            $paSchool = $_POST["paSchool"];
            $paCourse = $_POST["paCourse"];
            $level = $_POST["level"];
            $project = $_POST["project"];
            $cat = $_POST["cat"];
            $subcat = $_POST["subcat"];
            $paTitle = $_POST["paTitle"];
            $paLink = $_POST["paLink"];
            $paProblem = $_POST["paProblem"];
            $paIdentified = $_POST["paIdentified"];
            $description = $_POST["description"];

            if(count(array_filter($_POST))!= count($_POST)){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Please Fill Form Completely!!!</strong> You should check in on some of those fields below.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
            }
                $insertDetails = "INSERT INTO Registration(team_name, participant_name, participant_email, participant_phone, participant_age, participant_gender, participant_school, participant_course, participant_level, project_title, project_type, project_cat, project_sub, project_link, project_problem, project_soln, project_description) 
                VALUES('$teamName','$paName','$paEmail','$paPhone','$paAge','$gend','$paSchool','$paCourse','$level','$project','$cat','$subcat','$paTitle','$paLink','$paProblem','$paIdentified','$description')";
                // mysqli_query($this->connection, $insertDetails) or die(mysqli_error($this->connection));
                if(mysqli_query($this->connection, $insertDetails)){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Registration Successful! See you at the event!!!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
                // echo "Registration Successful";

                }else{
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Registration Failed!!!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
                // echo "Registration Failed";

                } 
            

        }
        

        
    }
}
echo "testing";
$control = new control;

?>