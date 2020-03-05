<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DownLoad APP</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="hover.css">
    <script src="jquery-3.4.1.min.js" ></script>
    <script src="masonry.pkgd.min.js"></script>
    <style>
        header {
            background: #000;
            padding: 15px 0;
        }
        .logo {
            width: 156px;
            height: 30px;
            background: url('https://cdn.thegioididong.com/v2015/Content/desktop/images/V4/icondesktop@1x.png?v=001')top left no-repeat;
        }
        #logodevice{
          -webkit-animation: slide-top 0.5s infinite alternate ; /* Safari 4.0 - 8.0 */
          animation: slide-top 0.5s infinite alternate ;
        }
        section {
            margin-top: 30px
        }
        h1, p, h5 {
            font-family: 'Roboto', sans-serif;
        }
        h1, small {
            font-weight: 500;
            text-align: center;
            display: block
        }
        .inner-box {
            padding: 40px 30px;
            border-bottom: 3px solid #fcd63b;
            -webkit-box-shadow: 0px 5px 24px 6px rgba(0, 0, 0, 0.06);
            box-shadow: 0px 5px 24px 6px rgba(0, 0, 0, 0.06);
            width: 100%;
            margin-bottom:  20px;
            border-radius: 20px;
        }
        h5 {
            position: relative;
            font-size: 18px;
            font-weight: 600;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .inner-box:hover h5:after {
            width: 30px;
        }
        .inner-box:hover h5:before {
            width: 15px;
        }
        h5:before {
            position: absolute;
            content: '';
            left: 50%;
            bottom: -5px;
            width: 30px;
            height: 2px;
            background-color: #fcd63b;
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        h5:after {
            position: absolute;
            content: '';
            left: 50%;
            bottom: 2px;
            width: 15px;
            height: 2px;
            background-color: #fcd63b;
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        ul {
            padding: 0 !important;
            list-style-type: none;
            display: block;
            text-align: center
        }
        ul li {
            display: inline-block
        }
        /* ul li:last-of-type {
            margin-top: 5px;
        } */
        ul li:first-of-type a {

            margin-right: 10px
        }
        ul li a {
            display: table;
        }
        ul li img {
            max-width: 80px;
        }
        @-webkit-keyframes slide-top{0%{-webkit-transform:translateY(0);transform:translateY(0)}100%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}}@keyframes slide-top{0%{-webkit-transform:translateY(0);transform:translateY(0)}100%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}}
    </style>
</head>
<body >
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <div class="logo"></div>
                  <div style="color: white;position : absolute ; right : 100px ; top : 0px" class="pull-right"><a  id="usershow"></a></div>
                </div>
                  
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row" style="margin-bottom: 30px">
              <!--  <div class="col">
                    <h1>Tải ứng dụng</h1>
                    <small>(Nhấn vào link bên dưới để tải ứng dụng tương ứng)</small>
                </div>
              -->
            </div>
            <div class="row grid" id="masonry">
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                    <div class="inner-box hvr-wobble-vertical">
											  
																							<img src='data/transferdata/icontransfer.png' style='width: 70px; margin: 20px auto; display: table' alt=''>
																							<h5 style='text-align: center'>App Transfer Data</h5>
																							<div class='content'>
																							<ul class='list-none' style='padding-left: 18px;'>
																			 			
                                      				<li><a href='https://app.tgdd.vn/data/transferdata/android/transferdata.apk'><img   class='hvr-wobble-vertical' src='img/google-play.png' alt=''></a></li>
                                      				<li><a href='itms-services://?action=download-manifest&url=https://app.tgdd.vn/data/transferdata/ios/manifest.plist'><img    class='hvr-wobble-vertical' src='img/mac-os.png' alt=''></a></li>
                                      				                            </ul>
                            <p class="text-center">Nhấn vào icon để download app</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col">
                    <p class="text-center">Hỗ trợ : <strong>Lưu Thanh Lâm - 14511</strong></p>
                </div>
            </div>
        </div>
    </section>
    <script>
            // var grid = document.querySelector('#masonry');
            // var msnry = new Masonry( grid, {
            // // options...
            //     itemSelector: '.grid-item',
            //     percentPosition: true,
            //     columnWidth: '.grid-item'
            // });

            var domain = "https://adminapp.tgdd.vn";
            var apiUrl = domain+'/file';
            var token = localStorage.getItem('uploadAppFile');
            var own = localStorage.getItem('username');
            var url = "https://wsticket.tgdd.vn/user-service/api/user";
            var username = localStorage.getItem('username', username);

			var data = {};
			var data_user = [];
			var err = true;
			
				let bodyAPI = {           
					"username": username,  
					"token"  : token       
				}
			function checkToken(){      
				$(document).ready(function() {
					$.ajax({
							url: apiUrl+'/userdetail',
							data: JSON.stringify(bodyAPI),
							type: 'POST',
							processData: false,
							headers: {
								"Authorization": 'Bearer ' + token,
								"Content-Type": "application/json",        
							},
							success: function(success) {
								if(success != -1){                                                                    
                                    checkCookie(success);
                                }
                                   
										
							},
							error: function(fail) {
								console.log("Error", fail);	
								logout();
							}
						})
				
				});
			
            
			  
		}
		checkToken();

		function logout(){
			localStorage.removeItem('username');
			localStorage.removeItem('uploadAppFile');
			window.location.href = "authen.php";
		}

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
                    document.getElementById("usershow").innerHTML ="Xin chào "+ success.object.lastName + success.object.firstName;
                } else {
                    logout();                  
                }
            }
           
    </script>
</body>
</html>