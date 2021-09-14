<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
   </head>
   <style>
       /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
  padding: 0 0 150px 0;
  overflow: auto;
}
.sidebar .nav-list::-webkit-scrollbar{
  display: none;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name{
  font-size: 20px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
  margin-top: 6px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.sidebar .profile #log_out:hover{
    background: white;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
.panel-heading, .panel-body{
  padding-top: 10px;
}
.container{
  width: 80%;
  margin: auto;
  padding-top: 50px;
}
.h2{
  text-align: center;
}
.table{
  width: 100%;
  border: 1px solid black;
  border-collapse: collapse;
  margin: auto;
  margin-top: 5px;
  text-align: left;
}
.table th{
  font-size: 18px;
  width: 20%;
}
.table input, .table select{
  font-size: 18px;
  width: 100%;
  height: 30px;
}
.table button{
  padding: 5px;
  font-size: 18px;
  margin-left: 46%;
}
.table th, .table td{
  padding: 10px;
}
.d-flex{
  margin-top: 7px;
}
   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-dev-to icon'></i>
        <div class="logo_name">BKACAD Lab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{route('admin.home')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Tài khoản</span>
        </a>
         <span class="tooltip">Tài khoản</span>
      </li>
     <li>
       <a href="{{route('giaovien')}}">
         <i class="fas fa-user-tie"></i>
         <span class="links_name">Giảng viên</span>
       </a>
       <span class="tooltip">Giảng viên</span>
     </li>
     <li>
       <a href="{{route('phancong')}}">
         <i class='bx bx-book-content'></i>
         <span class="links_name">Phân công</span>
       </a>
       <span class="tooltip">Phân công</span>
     </li>
     <li>
       <a href="{{route('sinhvien')}}">
         <i class="fas fa-user-graduate"></i>
         <span class="links_name">Sinh viên</span>
       </a>
       <span class="tooltip">Sinh viên</span>
     </li>
     <li>
       <a href="{{route('lop')}}">
         <i class="fas fa-chalkboard-teacher"></i>
         <span class="links_name">Lớp</span>
       </a>
       <span class="tooltip">Lớp</span>
     </li>
     <li>
       <a href="{{route('mon')}}">
         <i class="fas fa-desktop"></i>
         <span class="links_name">Môn học</span>
       </a>
       <span class="tooltip">Môn học</span>
     </li>
     <li>
       <a href="{{route('khoa')}}">
         <i class="fas fa-users"></i>
         <span class="links_name">Khóa</span>
       </a>
       <span class="tooltip">Khóa</span>
     </li>
     <li>
       <a href="{{route('nganh')}}">
         <i class="fas fa-graduation-cap"></i>
         <span class="links_name">Ngành</span>
       </a>
       <span class="tooltip">Ngành</span>
     </li>
     <li>
       <a href="{{route('view')}}">
         <i class="fas fa-history"></i>
         <span class="links_name">Lịch sử điểm danh</span>
       </a>
       <span class="tooltip">Lịch sử điểm danh</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
            @if(Auth::guard('admin')->user() != null)
                <div class="name">{{Auth::guard('admin')->user()->name}}</div>
                <a href="{{route('logout')}}"><i class='bx bx-log-out' id="log_out" ></i></a>
                <span class="tooltip">Logout</span>
            @endif    
           </div>
         </div>
     </li>
    </ul>
  </div>
  <section class="home-section">