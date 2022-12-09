<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap Links -->

  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="../../livrable n°3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../livrable n°3/css/all.min.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Remix icons -->


  <title>Document</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    * {
      margin: 0;
      padding: 0;
      user-select: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body{
  background-color: #eee;
}
.btn{
  position: absolute;
    top: 10px;
    left: 45px;
    height: 37px;
    width: 37px;
    text-align: center;
    background: #1b1b1b;
    border-radius: 3px;
    cursor: pointer;
    transition: left 0.4s ease;
}
.btn.click{
  left: 260px;
}
.btn span{
    color: white;
    font-size: 15px;
    line-height: 36px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 19px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
      padding-left: 10px;
}
nav ul li{
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 13px;
  padding-left: 14px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: #FC5404;
    background: #1e1e1e;
    border-left-color: #FC5404;
}
nav ul li a:hover{
  background: #1e1e1e;
}

.feat-show{
  transition: all 0.5s;
}

nav ul li.active ul{
 transition: all 0.5s;
}
nav ul ul{
  position: static;
  display: none; 
}

nav ul.show{
  display: block;
  transition: all 0.5s;
}

nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 12px;
  color: #e6e6e6;
  
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}

a:hover{
  color: #FC5404 !important;
}
nav ul ul li a:hover{
  color: #FC5404 !important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 15px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
  </style>
</head>

<body>
<div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            BBBootstrap.com
         </div>
         <ul class="main_side">
            <li class="active"><a href="#">Dashboard</a></li>
            <li>
               <a href="#" id="1">Pages
               <span class="fas fa-caret-down"></span>
               </a>
               <ul class="item-show-1">
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Our Team</a></li>
               </ul>
            </li>
            <li>
               <a href="#" id="2">Services
               <span class="fas fa-caret-down"></span>
               </a>
               <ul class="item-show-2">
                  <li><a href="#">App Design</a></li>
                  <li><a href="#">Web Design</a></li>
               </ul>
            </li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Bookmark</a></li>
            <li><a href="#">Files</a></li>
         </ul>
      </nav>
         
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
//     const btn = document.getElementById("mybtn");
//     const mystyle = document.getElementById("my-toggle");
//     btn.addEventListener("click", function() {
// btn.classList.toggle("display-toggle");
//       mystyle.classList.toggle("my-show");
      
//     })
$('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
          

           $('.sidebar ul li a').click(function(){
                var id = $(this).attr('id');
                $('nav ul li ul.item-show-'+id).toggleClass("show");
                $('nav ul li #'+id+' span').toggleClass("rotate");
                
           });
           
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
  </script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../../livrable n°3/js/all.min.js"></script>
</body>

</html>