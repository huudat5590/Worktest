<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="https://mwg.vn/wp-content/uploads/2014/05/favicon-1.ico" />
    <title>Upload App </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
	
	
	<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="css/jquery.fileupload.css">
	<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	
	<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
	<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
    <!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <style>
        
        .frame-login {
            width: 100%;
            height: 100%;
            margin-top: 100px;
            justify-content: center;
            display: grid;
        }

        .frame-login img  {
            width: 280px;
            padding-bottom: 30px;
            top: 20px; 
        }

        .bglg {
            background: url('https://login.thegioididong.com/Content/assets/pages/media/bg/4.jpg') center center no-repeat;
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }

        .loadingClass  {
            text-align: center;
            position: absolute;
            height: 100%;
            width : 100%;
        }

        .loading-small{
            width: 100%;
            height: 100%;
            z-index: 99999;
            background: #192F3D;
            opacity: 0.7;
            position: absolute;
            display : flex;
            justify-content : center;
            align-item : center;
        }

        @media only screen and (max-width: 992px) {
            .row {
                margin-left : 0 !important;
                margin-right : 0 !important;
                margin-right : 0 !important;
                
            }
            .loadingClass {
                height : 104%;
                
            }
            .loading-small  img{
                margin-top : 200px;
            }
            
        }
        @media only screen and (max-width: 768px) {
            .bglg {
                    background: url('https://login.thegioididong.com/Content/assets/pages/media/bg/4.jpg') center center no-repeat;
                    background-size: cover;
                    width: 100vw;
                    height: 100%;
            }
            
        }

        @media only screen and (width: 1024px) {
            .bglg {
                    background: url('https://login.thegioididong.com/Content/assets/pages/media/bg/4.jpg') center center no-repeat;
                    background-size: cover;
                    width: 100vw;
                    height: 100%;
            }

             .loadingClass {
                height : 104%;
                
            }
            
        }

        @media only screen and (width: 1440px) {
            .bglg {
                    background: url('https://login.thegioididong.com/Content/assets/pages/media/bg/4.jpg') center center no-repeat;
                    background-size: cover;
                    width: 100vw;
                    height: 120%;
            }

             .loadingClass {
                height : 110vh;              
            }
            
        }
        
        </style>
</head>
<div id="text_loading" class="loadingClass" style=""><p><img src="ajax-loader.gif" style="padding-top: 20%" /> </p></div>
<body class="bglg " >
            <div class=" row justify-content-md-center col-sm-12 col-md-12 col-12">
                    <div class="frame-login">
                        <img src="https://login.thegioididong.com/Content/custom/images/tgdd-01.png" alt="">
                        <div style="width: 100%;">
                                <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control"  aria-describedby="" id="username" placeholder="Nhập username">
                                <small id="text" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1"></label>
                                <input type="password" class="form-control"   id="password" placeholder="Mật khẩu">
                                </div>                          
                                <label style="color: red" id="err"></label>
                                <span id="err2" style="font-size: 13px;margin-bottom: 20px;"></span>
                                    
                                <div class="form-group">
                                        <button type="button"   onclick="login()" class="btn btn-primary col-md-12 col-sm-12">Đăng nhập</button>
                                </div>
                                
                        </div>
                        <p style="text-align: center;color: white">Hỗ trợ 14511 Lưu Thanh Lâm</p>
                        <p style="text-align: center;color: black;font-size: 15px">2019 © Thế giới di động.  </p>
                    </div>
        </div>
	
<script type="text/javascript">
    var token = localStorage.getItem('uploadAppFile');
    var url  = "https://adminapp.tgdd.vn/file";
    var all_data = [];
    if(token != null)
        window.location.href = "home2.php";
        
    function login(){
			var data = {};
           
			var checkValidate = false;
			var err = true;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            document.getElementById("err2").innerHTML = "";
            document.getElementById("err").innerHTML = "";
            
                {
                        let bodyAPI = {
                            "usernamelogin": username,
                            "passwordlogin": password
                        }
                        $( "#text_loading" ).css("display","block");
                        $( "#text_loading" ).addClass( "loading-small" );
                        document.getElementById("err").innerHTML = "";
                        $(document).ready(function() {
                            $.ajax({
                                    url: url+'/authensite',
                                    data: JSON.stringify(bodyAPI),
                                    type: 'POST',
                                    headers: {
                                        "Accept": "application/json",
                                        "Content-Type": "application/json"
                                    
                                    },
                                    success: function(success) {
                                       
                                        if(success != -1){
                                        localStorage.setItem('uploadAppFile', success.access_token);	
                                        localStorage.setItem('username', username);	
                                        if (username != "" && username != null) {
                                            setCookie("username", username, 30);
                                            checkCookie();                      
                                        }                                       

                                        }else{
                                            setTimeout(() => {
                                                $( "#text_loading" ).removeClass( "loading-small" );
                                                $( "#text_loading" ).css("display","none");		
                                                document.getElementById("err").innerHTML = "Sai tên đăng nhập hoặc mật khẩu !"
                                            }, 200);
                                        }

                                      
                                    },
                                    error: function(fail) {
                                        setTimeout(() => {
                                            $( "#text_loading" ).removeClass( "loading-small" );
                                            $( "#text_loading" ).css("display","none");	
                                            if(fail.status != 500)	
                                            document.getElementById("err").innerHTML = "Sai tên đăng nhập hoặc mật khẩu !"
                                            else
                                            document.getElementById("err").innerHTML = "Server Error Time Out!"
                                        }, 200);
                                    

                                    }
                                })
                            
                        
                            });
                        }// end of check allow user
             
		}
        $('input').keyup(function(e){
            if(e.keyCode == 13)
            {
                login();
                $(this).trigger("enterKey");
            }
        });

        
        function setCookie(cname,cvalue,exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (60*60*1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                    }
                }
                return "";
                }

            function checkCookie(success) {
                var user=getCookie("username");
                if (user != "") {
                    window.location.href = "home2.php";
                } else {
                    logout();
                }
            }

            function logout(){
                localStorage.removeItem('username');
                localStorage.removeItem('uploadAppFile');
                window.location.href = "login2.php";
		    }
        
</script>
</body>

</html>