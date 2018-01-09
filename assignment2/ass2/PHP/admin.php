
<?php session_start();

          include 'model/connect.php';//////////////////////////// Modified
  
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<link rel="stylesheet" type="text/css" href="../CSS/style.huuly.register.css" />
<link rel="stylesheet" type="text/css" href="../CSS/style.nam.admin.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link href="../CSS/slider/responsive-slider.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/owl.carousel.css">
<link rel="stylesheet" href="../CSS/owl.theme.default.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
    }
    
</style>
<style>

td, th {
    padding: 7px;
}

</style>
</head>
<body>
 





<!--========================= Modal delete================================================================-->
<div class ="main">

<!-- The Modal of delete -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Bạn có chắc là muốn xóa?</p>
    <div class="answer">
    <form id="sampleForm" name="sampleForm" method="post" action="admin.php" >
    <button type='button' id="agree" >Yes</button>
    <button type='button' id="disargree">    No</button>
    <input type="hidden" name="total" id="total" value="">
    <input type="hidden" name="retype" id="retype" value="">
    </form>
    </div>
  </div>

</div>
</div>

<!--========================= Modal edit================================================================
========================================================================================================-->

<!-- ========================= Modal edit member======================================================
==========================================================================-->
<div class ="main">

<!-- The Modal of delete -->
<div id="myModal-edit-member" class="modal-edit">

  <!-- Modal content -->
  <div class="modal-content-edit">
  <span class="close-edit">&times;</span>
  <section class="section-register">
        <h2 class="bordered">Sửa thông tin</h2>
        <p>Thông tin thành viên</p>

        <form class="register-form cf-style-1" id="edit-mem" method="POST" onsubmit="return valid()" name="edit-mem" action="admin.php">
             <input type="hidden" name="totalife" id="totalife" value="">
               <div class="field-row">
                <label>Họ và tên</label>
                <input type="text" class="le-input" id="username" name="username" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Password</label>
                <input type="password" class="le-input" id="password" name="password" value=""/>
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Số điện thoại</label>
                <input type="number" class="le-input" id="sdt" name="sdt" value="" />
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Email</label>
                <input type="email" class="le-input" id="email" name="email" value=""/>
            </div><!-- /.field-row -->
            
                <div class="field-row">
                <label>Mã Pin</label>
                <input type="number" class="le-input" id="pin" name="pin" value=""/>
            </div><!-- /.field-row -->


            <div class="buttons-holder">
                <button type="submit" class="button button1" id="submit" name="btn_submit">Sửa</button>
            </div><!-- /.buttons-holder -->
        </form>
</section>
    
    </div>
  </div>

</div>
</div>
<!--========================= Check edit member================================================================-->
<script type="text/javascript">
 var inputs = document.forms['edit-mem'].getElementsByTagName('input');
  var run_onchange = false;
  function valid(){
   var errors = false;
   var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
   for(var i=0; i<inputs.length; i++){
    var value = inputs[i].value;
    var id = inputs[i].getAttribute('id');
    // Tạo phần tử span lưu thông tin lỗi
    var span = document.createElement('span');
    // Nếu span đã tồn tại thì remove
    var p = inputs[i].parentNode;
    if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
    // Kiểm tra rỗng
   /* if(value == ''){
     span.innerHTML ='Chọn thông tin cần sửa';
    }else{*/
    // Kiểm tra các trường hợp khác
     if(id == 'email'){
      if(reg_mail.test(value) == false){
        if(value.length != 0 )
           span.innerHTML ='Email illegal (Expamle: abc@gmail.com)';
           }
      var email =value;
     }
 
     // Kiểm tra password
     if(id == 'password'){
      if(value.length <8 ){
          if(value.length != 0 )
          span.innerHTML ='Password phải có ít nhất 8 kí tự';
          }
      var pass =value;
     }
     // Kiểm tra password nhập lại
     // Kiểm tra số điện thoại
     if(id == 'phonenumber' && isNaN(value) == true){span.innerHTML ='Số điện thoại phải là kiểu số';}
    //}
    // Nếu có lỗi thì chèn span vào hồ sơ, chạy onchange, submit return false, highlight border

    if(span.innerHTML != ''){
     inputs[i].parentNode.appendChild(span);
     errors = true;
     run_onchange = true;
     inputs[i].style.border = '1px solid #c6807b';
     inputs[i].style.background = '#fffcf9';
    }
   }// end for
   return !errors;
  }// end valid()
  // Chạy hàm kiểm tra valid()
  var register = document.forms['edit-mem'].getElementById('submit');
  register.onclick = function(){
   return valid();
  }
  // Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()
   for(var i=0; i<inputs.length; i++){
    var id = inputs[i].getAttribute('id');
    inputs[i].onchange = function(){
     if(run_onchange == true){
      this.style.border = '1px solid #999';
      this.style.background = '#fff';
      valid();

     }
    }
   }// end for

 
 </script>
<!-- ========================= Modal edit  product=============================================
========================================================================================-->
<div class ="main">

<!-- The Modal of delete -->
<div id="myModal-edit-product" class="modal-edit-product">

  <!-- Modal content -->
  <div class="modal-content-edit-product">
  <span class="close-edit-product">&times;</span>
  <section class="section-register">
        <h2 class="bordered">Sửa thông tin</h2>
        <p>Thông tin sản phẩm</p>

        <form class="register-form cf-style-1" id="productform" method="POST" name="productform" action="admin.php">
             <input type="hidden" name="productlife" id="productlife" value="">
               <div class="field-row">
                <label>Id loại sản phẩm</label>
                <input type="text" class="le-input" id="type_id" name="type_id" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Mã sản Phẩm</label>
                <input type="text" class="le-input" id="productcode" name="productcode" value=""/>
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Tên sản Phẩm</label>
                <input type="text" class="le-input" id="productname" name="productname" value="" />
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Hình ảnh sản phẩm</label>
                <input type="text" class="le-input" id="productimage" name="productimage" value=""/>
            </div><!-- /.field-row -->
            
                <div class="field-row">
                <label>Nhãn Best</label>
                <select class="le-input" id="best" name="best" >
                    <option selected value=""></option>
                    <option value=00>không</option>
                    <option  value=1>có</option>
                </select>
                
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Nhãn New</label>
                <select class="le-input" id="new" name="new" >
                    <option selected value=""></option>
                    <option value=00>không</option>
                    <option  value=1>có</option>
                </select>
                
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Nhãn Hot</label>
                <select class="le-input" id="hot" name="hot" >
                    <option selected value=""></option>
                    <option value=00>không</option>
                    <option  value=1>có</option>
                </select>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Giảm giá</label>
                <input type="number" class="le-input" id="salerate" name="salerate" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Giá gốc</label>
                <input type="number" class="le-input" id="normalprice" name="normalprice" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Id kho hàng</label>
                <input type="text" class="le-input" id="category_id" name="category_id" value=""/>
            </div><!-- /.field-row -->


            <div class="buttons-holder">
                <button type="submit" class="button button1" id="submit" name="btn_submit">Sửa</button>
            </div><!-- /.buttons-holder -->
        </form>
</section>
    
    </div>
  </div>

</div>
</div>


 <!--========================= Modal add================================================================
========================================================================================================-->
<!-- ===============================================================================================
============================== Modal add member================================================================-->
<div class ="main">

<!-- The Modal of delete -->
<div id="myModal-add-member" class="modal-add-member">

  <!-- Modal content -->
  <div class="modal-content-add-member">
  <span class="close-add-member">&times;</span> 
  <section class="section-register">
        <h2 class="bordered">Thêm thành viên</h2>
        <p>Thông tin thành viên</p>

        <form class="register-form cf-style-1" id="addmemberform" onsubmit="return validmem()" method="POST" name="addmemberform" action="admin.php">
        <input type="hidden" name="addmem" id="addmem" value=""/>
               <div class="field-row">
                <label>Họ và tên</label>
                <input type="text" class="le-input" id="username" name="username" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Password</label>
                <input type="password" class="le-input" id="password" name="password" value=""/>
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Số điện thoại</label>
                <input type="number" class="le-input" id="sdt" name="sdt" value="" />
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Email</label>
                <input type="email" class="le-input" id="email" name="email" value=""/>
            </div><!-- /.field-row -->
            
                <div class="field-row">
                <label>Mã Pin</label>
                <input type="number" class="le-input" id="pin" name="pin" value=""/>
            </div><!-- /.field-row -->


            <div class="buttons-holder">
                <button type="submit" class="button button1" id="submit" name="btn_submit">Thêm</button>
            </div><!-- /.buttons-holder -->
        </form>
</section>
    
    </div>
  </div>

</div>
</div>
<!--========================= Check add member================================================================-->
<script type="text/javascript">
 var inputsadd = document.forms['addmemberform'].getElementsByTagName('input');
  var run_onchangeadd = false;
  ////////////////////
  function validmem(){////////////func check valid
    
   var errors = false;
   var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
   for(var i=0; i<inputsadd.length; i++){
    var value = inputsadd[i].value;
    var id = inputsadd[i].getAttribute('id');
    // Tạo phần tử span lưu thông tin lỗi
    var span = document.createElement('span');
    // Nếu span đã tồn tại thì remove
    var p = inputsadd[i].parentNode;
    if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
    
    // Kiểm tra rỗng
    if(value == ''){
        span.innerHTML ='Thông tin bắt buộc';
    }else{
    // Kiểm tra các trường hợp khác
     if(id == 'email'){
      if(reg_mail.test(value) == false){ span.innerHTML ='Email illegal (Expamle: abc@gmail.com)';}
      var email =value;
     }
 
     // Kiểm tra password
     if(id == 'password'){
      if(value.length <8){span.innerHTML ='Password phải có ít nhất 8 kí tự';}
      var pass =value;
     }
     // Kiểm tra password nhập lại
     // Kiểm tra số điện thoại
     if(id == 'phonenumber' && isNaN(value) == true){span.innerHTML ='Số điện thoại phải là kiểu số';}
    }
    // Nếu có lỗi thì chèn span vào hồ sơ, chạy onchange, submit return false, highlight border

    if(span.innerHTML != ''){
     inputsadd[i].parentNode.appendChild(span);
     errors = true;
     run_onchangeadd = true;
     inputsadd[i].style.border = '1px solid #c6807b';
     inputsadd[i].style.background = '#fffcf9';
    }
    else{
        inputsadd[i].style.border = '1px solid #999';
     inputsadd[i].style.background = '#fff';
    }
   }  
    // end for
    return !errors;
   
   
  }// end valid()
  var register1 = document.forms['addmemberform'].getElementById('submit');
  register1.onclick = function(){
   return validmem();
  }
 
 

 
 </script>
<!-- ========================= Modal Add product======================================================
===============================================================================================-->
<div class ="main">

<!-- The Modal of delete -->
<div id="myModal-add-product" class="modal-add-product">

  <!-- Modal content -->
  <div class="modal-content-add-product">
  <span class="close-add-product">&times;</span>
  <section class="section-register">
        <h2 class="bordered">Thêm sản phẩm</h2>
        <p>Thông tin sản phẩm</p>

        <form class="register-form cf-style-1" id="addproductform" method="POST" onsubmit="return validpro()" name="addproductform" action="admin.php">
        <input type="hidden" name="addpro" id="addpro" value="">  
               <div class="field-row">
                <label>ID loại sản phẩm</label>
                <input type="text" class="le-input" id="type_id" name="type_id" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Mã sản Phẩm</label>
                <input type="text" class="le-input" id="productcode" name="productcode" value=""/>
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Tên sản Phẩm</label>
                <input type="text" class="le-input" id="productname" name="productname" value="" />
            </div><!-- /.field-row -->

            <div class="field-row">
                <label>Hình ảnh sản phẩm</label>
                <input type="file" class="le-input" id="productimage" name="productimage" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
            <label>Nhãn Best</label>
            <select class="le-input" id="best" name="best" >
                <option selected value=""></option>
                <option value=00>không</option>
                <option  value=1>có</option>
            </select>
            
        </div><!-- /.field-row -->
        <div class="field-row">
            <label>Nhãn New</label>
            <select class="le-input" id="new" name="new" >
                <option selected value=""></option>
                <option value=00>không</option>
                <option  value=1>có</option>
            </select>
            
        </div><!-- /.field-row -->
        <div class="field-row">
            <label>Nhãn Hot</label>
            <select class="le-input" id="hot" name="hot" >
                <option selected value=""></option>
                <option value=00>không</option>
                <option  value=1>có</option>
            </select>
        </div><!-- /.field-row -->
            <div class="field-row">
                <label>Giảm giá</label>
                <input type="number" class="le-input" id="salerate" name="salerate" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>Giá gốc</label>
                <input type="number" class="le-input" id="normalprice" name="normalprice" value=""/>
            </div><!-- /.field-row -->
            <div class="field-row">
                <label>ID kho hàng</label>
                <input type="text" class="le-input" id="category_id" name="category_id" value=""/>
            </div><!-- /.field-row -->


            <div class="buttons-holder">
                <button type="submit" class="button button1" id="submit" name="btn_submit" >Thêm</button>
            </div><!-- /.buttons-holder -->
        </form>
</section>
    
    </div>
  </div>

</div>
</div>
<!--========================= Check add product================================================================-->
<script type="text/javascript">
 var input = document.forms['addproductform'].getElementsByTagName('input');
  var run_onchangeadd = false;
  ////////////////////
  function validpro(){////////////func check valid
    
   var errors = false;
   
   for(var i=0; i<input.length; i++){
    var value = input[i].value;
    var id = input[i].getAttribute('id');
    // Tạo phần tử span lưu thông tin lỗi
    var span = document.createElement('span');
    // Nếu span đã tồn tại thì remove
    var p = input[i].parentNode;
    if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
    
    // Kiểm tra rỗng
    if(value == ''){
        span.innerHTML ='Thông tin bắt buộc';
    }
    // Nếu có lỗi thì chèn span vào hồ sơ, chạy onchange, submit return false, highlight border

    if(span.innerHTML != ''){
     input[i].parentNode.appendChild(span);
     errors = true;
     run_onchangeadd = true;
     input[i].style.border = '1px solid #c6807b';
     input[i].style.background = '#fffcf9';
    }else{   
            input[i].style.border = '1px solid #999';
            input[i].style.background = '#fff';   
    }
   }  
    // end for
    return !errors;
   
   
  }// end valid()
  var register1 = document.forms['addproductform'].getElementById('submit');
  register1.onclick = function(){
   return validpro();
  }
 
  // Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()


 
 </script>

<!--========================= PHP delete member and product======================================================
================================================================================================================-->
<?php  include 'admin/delete-form.php';?>
<!--========================= PHP edit member================================================================-->
<?php  include 'admin/members-edit-form.php';?>
<!--========================= PHP edit product================================================================-->
<?php  include 'admin/products-edit-form.php';?>
<!--========================= PHP add member================================================================-->
<?php  include 'admin/members-add-form.php';?>
<!--========================= PHP add product================================================================-->
<?php  include 'admin/products-add-form.php';?>
<!--========================= Function Control Modal================================================================-->
<script>
// Get the modal

var modal = document.getElementById('myModal');
var modaledit =  document.getElementById('myModal-edit-member');
var modaleditpro =  document.getElementById('myModal-edit-product');
var modaladdmem =  document.getElementById('myModal-add-member');
var modaladdpro =  document.getElementById('myModal-add-product');

// Get the <span> or no btn element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close-edit")[0];
var span3 = document.getElementsByClassName("close-edit-product")[0];
var span4 = document.getElementsByClassName("close-add-member")[0];
var span5 = document.getElementsByClassName("close-add-product")[0];
var btnno = document.getElementById("disargree");
var btnyes = document.getElementById("agree");

// When the user clicks the button, open the modal 
function deletebtn(id,type){
    modal.style.display = "block";
    
    btnyes.onclick =function(){
        document.sampleForm.retype.value = type; /// truyền kiểu dử liệu của members hoặc product
        document.sampleForm.total.value = id;///// truyền thông tin xác đinh vị trí của dòng cần thao tác
        document.forms["sampleForm"].submit();
    }
    btnno.onclick = function() {///// Hủy chọn 
    modal.style.display = "none";
        
    }
    
}

function editmember(id){ //truyền từ table vào
    modaledit.style.display = "block"; 
    document.forms["edit-mem"].totalife.value = id;
        document.forms["edit-mem"].submit();
}
function editproduct(id){//truyền từ table vào
    modaleditpro.style.display = "block"; 
    document.forms["productform"].productlife.value = id;
    document.forms["productform"].submit();
}

function addmember(){//truyền từ button add vào
    modaladdmem.style.display = "block"; 
    document.forms["addmemberform"].addmem.value ="a";
    document.forms["addmemberform"].submit();
    
}
function addproduct(){//truyền từ button add vào
    modaladdpro.style.display = "block"; 
    document.forms["addproductform"].addpro.value ="b";
    document.forms["addproductform"].submit();
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
span2.onclick = function() {
    modaledit.style.display = "none";
}
span3.onclick = function() {
    modaleditpro.style.display = "none";
}
span4.onclick = function() {
    modaladdmem.style.display = "none";
}
span5.onclick = function() {
    modaladdpro.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if(event.target == modaledit){
        modaledit.style.display = "none";
    }
    if(event.target == modaleditpro){
        modaleditpro.style.display = "none";
    }
    if(event.target == modaladdmem){
        modaladdmem.style.display = "none";
    }
    if(event.target == modaladdpro){
        modaladdpro.style.display = "none";
    }
}
</script>
<!--========================= CONTENT ADMIN===================================================================
==============================================================================================================-->
  <div class = "header">
    <div class="container">
     <div class="row">
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> 
    <h2>Hello, admin</h2> 
     </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class ="log-out">
    <a href='./register-admin.php'>Log out</a> 
    </div>
    </div>
  </div>
</div>
</div>
  <div class = "body">
    <div class="container">
    <!--========================= Script two tab ================================================================-->

    <div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active" ><a data-toggle="tab" href="#sectionA" style="color:white !important">Member</a></li>
        <li ><a data-toggle="tab" href="#sectionB" style="color:white !important">Product</a></li>
        <li><a data-toggle="tab" href="#sectionC" style="color:white !important">Cart</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton " >
        <button id="btnMem" onclick="addmember()">+ Add members</button>
    </div>
    <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton " >
        <form id="searchmem" name="searchmem" method="post" action="admin.php" >
        <button type="submit" class="bu1" id="subse1" name="subse1" >Toàn bộ bảng</button>
        <input type="hidden" name="allmem" id="allmem" value="">
        </form>
    </div>
    <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton">
        <form id="searchmem" name="searchmem" method="post" action="admin.php" >
        <input type='text' id="search-mem" class="se-input" name="search-mem"  value=""/>   
        <button type="submit" class="bu" id="subse" name="subse" >Tìm username</button>
        <input type="hidden" name="search1" id="search1" value="">
    </form>
    </div>

    <?php 
        include 'admin/members.php';
    ?>
        </div>
        <div id="sectionB" class="tab-pane fade">
        <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton " >
        <button id="btnPro" onclick="addproduct()">+ Add products</button>
        </div>
        <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton " >
        <form id="searchmem" name="searchmem" method="post" action="admin.php" >
        <button type="submit" class="bu1" id="subse1" name="subse1" >Toàn bộ bảng</button>
          <input type="hidden" name="allpro" id="allpro" value="">
        </form>
        </div>
        <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 addbutton">
        <form id="searchmem" name="searchpro" method="post" action="admin.php" >
          <input type='text' id="search-pro" class="se-input" name="search-pro"  value=""/>   
          <button type="submit" class="bu" id="subse" name="subse" >Tìm productcode</button>
          <input type="hidden" name="search2" id="search2" value="">
        </form>
        </div>
        
        <?php 
            include 'admin/product.php';//////////////////////////// Modified
         ?>   
        </div>
        <div id="sectionC" class="tab-pane fade">
        <?php 
        include 'admin/donhang.php';//////////////////////////// Modified
        ?>  
        </div>
        
       
        
        
    </div>
</div>
    <!--========================= Script two tab ================================================================-->



<script>
function opentab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <!--========================= ================================================================-->
    </div>
  </div>
  <div class = "footer">
  </div>
	</div>
</body>
</html>
