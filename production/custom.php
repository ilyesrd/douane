<?php  

 //header('Content-Type: application/json');     
 
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "declaration");  
      $output = '';  
      $query = "  
            SELECT v.n_passport, v.nom, v.prenom, v.nationalite, i.val_chiffre,i.val_lettre, vd.date_voyage FROM voyageur AS v 
            JOIN formulaire AS f ON v.n_passport = f.n_passport 
            JOIN importations AS i ON i.id_formulaire = f.id_formulaire 
            JOIN voyage AS vd ON vd.n_voyage = f.n_voyage 
            WHERE vd.date_voyage BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";
      $result = mysqli_query($connect, $query);  
      $output .= '  
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Voyageur</th>
                    <th>N° Passeport</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Valeur</th>
                    <th>Poids</th>
                </tr>
            </thead> 
            <tbody>
      ';

     $data =array();
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                if($row['nationalite'] == "algerienne"){
                    $type = "resident";
                } else{
                    $type = "etranger";
                }

                 $data[] = $row; 
                
                $output .= '  
                    
                     <tr>  
                        <td>'. $row['nom'].' '.$row['prenom'] .'</td>
                        <td>'. $row['n_passport'].'</td>
                        <td>'. $type .'</td>
                        <td>'. $row['date_voyage'].'</td>
                        <td>'. $row['val_chiffre'].'</td>
                        <td>'. $row['val_lettre'].'</td> 
                     </tr>  
                ';  
           }  
           //print json_encode($data);
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="6">No Order Found</td>  
                </tr>  
           ';  
      } 
      $output .= '</tbody></table>'; 
      //$data2 = implode(',',$data);
      echo $output.'|'.$output;  
 } else{

    header('Content-Type: application/json');     
     $connect = mysqli_connect("localhost", "root", "", "declaration");  
     
     $query = "  
     SELECT v.n_passport, v.nom, v.prenom, v.nationalite, i.val_chiffre,i.val_lettre, vd.date_voyage FROM voyageur AS v 
     JOIN formulaire AS f ON v.n_passport = f.n_passport 
     JOIN importations AS i ON i.id_formulaire = f.id_formulaire 
     JOIN voyage AS vd ON vd.n_voyage = f.n_voyage 
     WHERE vd.date_voyage BETWEEN '2018-01-01' AND '2018-12-31'
     ";
     $result = mysqli_query($connect, $query);  
     
     $data =array();
     if(mysqli_num_rows($result) > 0)  
     {  
         while($row = mysqli_fetch_array($result))  
         {  
             
             $data[] = $row; 
             
            }  
        }     
        
        print json_encode($data);
        
    }  
 ?>
