<?php
    

    $sql= "SELECT * FROM amistad";

    $sql=mysqli_query($conect->getCon(),"SELECT * FROM amistad");
    $output="";
        
    if(mysqli_num_rows($sql)== 0 ){
        $output .="No hay chats disponibles";

    }elseif(mysqli_num_rows($sql)>0){

       
        while($row=mysqli_fetch_assoc($sql)){
            if(strcmp($user['nombre'],$row['principal'])==0){
               $output .= '<a href="chat.php?user_id='.$user['id'].'">
               <div class="main-container d-flex px-3 py-2 d-block">
               <div style="float:left">
                    <img class="Logotipo2 img-fluid rounded-circle" src="img/Floppa_ICON.png" alt="">
                    </div>
                    
                    <div class="px-3 py-2 d-block">
                    
                                <span>'.$row['amigo']." ".'</span>
                                <p>Esto es un mensaje</p>
                    </div>
               </div>
               
               
              </a> ';
            
            }
        }
   

    }
    echo $output;
?>