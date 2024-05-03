<?php
require_once 'DataBase.php';

Class Contact{ 
    static function select()
    {
        global $conn;
        $sql = "SELECT * FROM laporan";
        $result = $conn->query($sql);
        $arr = array();

        if($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function update()
    {

    }
    static function insert()
    {
        require_once __DIR__ . '/../app/models/DataBase.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $id_user=input($_POST["id_user"]);
            $nomor_telepon=input($_POST["nomor_telepon"]);
            $owner=input($_POST["owner"]);
            $domisili=input($_POST["domisili"]);
    
            $sql="insert into laporan (user_id,owner,no_hp,email) values
            ('$id_user','$nomor_telepon','$owner','$domisili')";

            $hasil=mysqli_query($conn,$sql);
    

            if ($hasil) {
                header("Location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    
            }
    
        }
        
    }

    static function delete()
    {
        global $conn;
        if (isset($_GET['id'])) 
        {
            $id=htmlspecialchars($_GET["id"]);
      
            $sql="delete from laporan where id='$id' ";
            $hasil=mysqli_query($conn,$sql);
      
                if ($hasil) {
                    header("Location:index.php");
      
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
      
                }
            }
        
    }
  }


?>