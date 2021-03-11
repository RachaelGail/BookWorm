<?php
require_one __DIR__ . '/conn.php'; 

class API {

    function Select(){

        $db = new Connect; 
        $books =array(); 
        $data = $db->prepare('SELECT* FROM bs_BestSellers ORDER BY id'); 
        $data->execute(); 

        while$(OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $books[$OutputData['id']] = array(

                'id'        =>$OutputData['id'], 
                'name'      =>$OutputData['name'], 
                'author'    =>$OutputData['author'], 
                'userRating'=>$OutputData['userRating']

            ); 
        }
            return $json_encode($books); 
    }
}


$API = new API; 
header ('Content-Type: application/json'); 
echo $API->Select(); 

?>