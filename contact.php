<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LIÊN HỆ|ÁNH SÁNG HOÀN MỸ</title>
        <!--&lt;!&ndash;[if lt IE 9]>-->
        <!--<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
        <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
        <!--&lt;!&ndash;[endif]&ndash;&gt;-->
        <link href="css/styles.css" rel="stylesheet">
        
          <!-- for FF, Chrome, Opera -->
        <link rel="icon" type="image/png" href="imgs/favicons/favicon16px.png" sizes="16x16">
        <link rel="icon" type="image/png" href="imgs/favicons/favicon32px.png" sizes="32x32">

        <!-- for IE -->
        <link rel="icon" type="image/x-icon" href="imgs/favicons/favicon.ico" >
        <link rel="shortcut icon" type="image/x-icon" href="imgs/favicons/favicon.ico"/>
        <script>
        function validateEmail(email) { 
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
         } 


         function checkSubmit() {
            var check = true;
             var name = document.getElementById('name').value;
             var phone = document.getElementById('phone').value;
             var email = document.getElementById('email').value;
             var content = document.getElementById('content').value;
             var errors = document.getElementById('errors');
             var strErrors ="";
             if(name.length <= 0){
                check = false;
               strErrors = "<pre>" + "Họ tên không được để trống." + "\n" ;//+ arr_tags[element] + "</pre>";
             }
            if(email.length <= 0){
                check = false;
                 strErrors += "Email không được để trống." + "\n";
            }
             else if(!validateEmail(email)){
                  check = false;
                  strErrors += "Email không hợp lệ." + "\n";
             }
             if(phone.length <= 0){
                  check = false;
                 strErrors += "Số điện thoại không được để trống." + "\n";
             }
             if(content.length <= 0){
                  check = false;
                 strErrors += "Vui lòng điền nội dung cần gửi." + "\n";
             }
             strErrors += "</pre>";
             if(check){
                return true;
             }
             else{
                errors.innerHTML = strErrors;
                 return false;
             }
             //else{ alert("email not valid"); return false;}
         }
        </script>
    </head>

    <body>
        <!-- CONTENT-->
        <div class="container">
            <!-- HEADER INFO COMPANY-->
           <div class="header">
                <div class="header-info">
                    <table id="tb-info" class="tb-info" width="100%" >
                        <tr>
                            <td class="td-center">
                                <div class="text-left">
                                   <table id="tb-company-name">
                                        <tr>
                                            <td>
                                                <img src="imgs/logo60px.png" width="50">
                                            </td>
                                            <td class="v-top">
                                                <label>
                                                    CÔNG TY TNHH TRANG TRÍ 
                                                </label>
                                                <label>
                                                    ÁNH SÁNG HOÀN MỸ
                                                </label>
                                            </td>
                                       </tr>
                                    </table>
                                </div>
                            </td>
                            <td class="td-right v-top">
                                <label>Số 4, Đường 13, P.Long Bình, Quận 9, T.p HCM.</label>
                                <label>Di động: 0908.99.3468 - 09.45.45.1119.</label>
                                <label>Email: nguyenhoanmym@yahoo.com.</label>
                            </td>
                        </tr>
                    </table>
               </div>
               <!-- HEADER MENU-->
               <div class="header-menu">
                    <ul>
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                         <li>
                            <a href="project.php">Dự án</a>
                        </li>
                         <li>
                            <a href="#">Đội ngũ</a>
                        </li>
                         <li>
                            <a href="contact.php">Liên hệ</a>
                        </li>
                   </ul>
               </div>
                <!--content contact-->
               <div class="content-contact">
                    <img src="imgs/contact.png">
                   <div class="form-contact">
                       <form action="form-to-mail.php" method="post" name="myemailform" onsubmit="return checkSubmit();">
                        <table id="tb-form-contact" width="100%">
                            <tr>
                                <td colspan="2" >
                                    <div id="errors" class="errors-form-contact"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-row">Họ tên:</td>
                                <td><input type="text" id="name" name="name" /></td>
                            </tr>
                            <tr>
                                <td class="title-row">Điện thoại:</td>
                                <td><input type="text" id="phone" name="phone" /></td>
                            </tr>
                            <tr>
                                <td class="title-row">Email:</td>
                                <td><input type="text" id="email" name="email" /></td>
                            </tr>
                            <tr>
                                <td class="title-row">Nội dung</td>
                                <td><textarea name="content" id="content" rows="7"></textarea></td>
                            </tr>
                            <tr>
                                <td class="title-row"></td>
                                <td><input type="submit" name='submit' value="Gửi đi"></td>
                            </tr>
                       </table>
                           </form>
                   </div>
               </div>
               
               <div class="footer">
                    <span><strong>Copyright 2014 Công ty TNHH Ánh Sáng Hoàn Mỹ | All Rights Reserved |</strong></span>
               </div>
               
               
        </div>
      
        
        <!--script not scroll on browser mobile -->
        <script src="js/jquery.mina654.js"></script>
    </body>
</html>