<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="d_ctr">
            <div class="d_sctr">
                <div class="login">Username And Password</div>
            </div>
            <div class="d_t_sctr">
            
                    
                        <!-- <a href="" class="pagination_no" id="pre"><li class="">Pre</li></a>
                        <a href="" class="pagination_no" id="1"><li class="active">1</li></a>
                        <a href="" id="2"><li>2</li></a>
                        <a href=""><li>3</li></a>
                        <a href=""><li>4</li></a>
                        <a href="" class="pagination_no" id="next"><li>Next</li></a> -->
                    
                
            </div>
        </div>
    </header>


    <!-- ajax coding 'start' -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweet_alert.js"></script>
    <script>

        // 'data loaded function' start

        function dataloaded(page){
            $.ajax({
                url:'data_loaded.php',
                type: "POST",
                data:{page_no:page},
                success:function(parameter){
                    if(parameter=='data_not_found'){
                        swal({
                                    title: "Data is not found",
                                    text: "Here is no data",
                                    icon: "info",//info,warning,error
                                    button: "OK",
                                    });
                    }else{
                        $('.d_t_sctr').html(parameter);
                    }
                    
                }
            });
        }

        dataloaded('');
         // 'data loaded function' end


         /* 'pagination' start*/
            $(document).on('click','.pagination_no',function(e){
                e.preventDefault();
                const page_no= $(this).attr('id');
                dataloaded(page_no);
            });
         /* 'pagination' end*/


    </script>
</body>
</html>