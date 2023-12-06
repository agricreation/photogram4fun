<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/dist/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Poppins&display=swap');
  </style>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-size: 1rem;
}
body {
  background: #f6f6f6;
}
* a {
  text-decoration: none;
  color: #151515;
}
.pinterest {
 
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #fff;
  padding: 0.938rem;
}
.sticky{
  animation-name: slide-bottom;
  animation-duration: 2s;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 666;
}

@-webkit-keyframes slide-bottom {
  0% {
    top: -50%;
  }
  100% {
    top: 0;
  }
}
@keyframes slide-bottom {
  0% {
    top: -50%;
  }
  100% {
    top: 0;
  }
}

.left {
  display: flex;
  align-items: center;
  width: 20%;
}
.left .logos {
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.left .logos:hover {
  background-color: #e5e5e5;
}
.left .logos i {
  color: #e60022;
  font-size: 24px;
}
.left .home {
  font-weight: bold;
  height: 3rem;
  color: #fff;
  padding: 1rem;
  background-color: #151515;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 1.563rem;
}
.avatar {
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.avatar .img {
  height: 2rem;
  width: 2rem;
  position: relative;
  border-radius: 50%;
  overflow: hidden;
}
.avatar .img img {
  position: absolute;
  object-fit: cover;
  width: 100%;
  height: 100%;
}
.search {
  width: 80%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 3rem;
  border-radius: 25px;
  overflow: hidden;
  background: #e3e3e3;
}
.search:hover {
  background: #c9c9c9;
}
.search i {
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #767676;
}
.search input {
  width: 100%;
  border: none;
  background: none;
  outline: none;
  padding-right: 1rem;
}
.search input::placeholder {
  color: #767676;
  font-size: 1rem;
}
.right {
  width: 20%;
  display: flex;
  align-items: center;
  position: relative;
  justify-content: flex-end;

}
.items {
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.items:hover {
  background: #e5e5e5;
}
.items i {
  font-size: 1rem;
  color: #767676;
}
.items-down {
  border-radius: 50%;
  width: 1rem;
  height: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.7rem;
}
.items-down:hover {
  background: #e5e5e5;
}
.right:hover .profile{
  display: block;
}
.profile{
  position: absolute;
  top: 100%;
  padding: 5px;
  width: 200px;
  background-color: #f6f6f6;
  padding: 10px;
  z-index: 111;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 10px;
  display: none;
}
.profile li{
  list-style: none;
}
  </style>
</head>
<body>
<header class="pinterests">
    <div class="pinterest">
      <div class="left">
        <a href="#" class="logos"><i class="fab fa-pinterest"></i></a>
        <a href="#" class="home">Photogram</a>
      </div>
      <div class="search">
        <i class="fas fa-search"></i>
        <input type="search" name="" placeholder="Scarch something intresting" id="">
      </div>
      <div class="right">
        <div class="profile">
          <div>Moovendhan</div>
          <div> <?php if(usersession::isAuthorised() == true){?>
          <a class="text-danger" href="?logout">logout</a><?php }else{?>
            <a class="text-primary" href="?logout">Login</a><?php
          } ?> </div>
        </div>
        <a href="#" class="items"><i class="fas fa-bell"></i></a>
        <a href="#" class="items"><i class="far fa-comment-dots"></i></a>
        <a href="#" class="avatar">
          <div class="img"><img src="https://images.unsplash.com/photo-1534308143481-c55f00be8bd7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1488&q=80" alt=""></div>
        </a>
        <a href="#" class="items-down"><i class="fas fa-chevron-down"></i>
      </a>
      </div>
    </div>
</header>

<script>
  const navbar = document.querySelector('.pinterests');
let tops = navbar.offsetTop;
function stickynavbar() {
  console.log(`tops ${tops+10}`);
  console.log(`scrool ${window.scrollY}`);
  if (window.scrollY >= tops+50) {    
    navbar.classList.add('sticky');
  } else {
    navbar.classList.remove('sticky');    
  }
}
window.addEventListener('scroll', stickynavbar);
</script>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
