<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>jobmate</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/main.css" rel="stylesheet" />
        

</head>
<body>
<div class="d-none d-md-none d-lg-block">
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar  fixed-top sticky-nav" >
      
        <div class="container">
          <a class="navbar-brand" id="logo" href="index.php">job<span>mate</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto" id="leftelement">
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Home</a></li>
                  </ul>
                  <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Features</a></li>
                  <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Pricing</a></li>
                  <form>
                                <select id="resources" name="resources">
                                <option value="#">Resources</option>
                                <option value="ca">Canada</option>
                                <option value="usa">USA</option>
                                </select>
                                </form>
             
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Employeers</a></li>
                      <li class="nav-item"><a class="nav-link" id="p" style="color:#000000" href="alljobss.php">Post A Job</a></li>
                    
                      <button onclick="document.getElementById('id01').style.display='block'" id="navlogin"></i>Login</button>
                  </ul>
            </div>
            
          </div>
        </div>
      
      
    </nav>
</div>
</div>
<div class="d-block d-md-block d-lg-none">
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar  fixed-top sticky-nav" >
      
        <div class="container">
          <a class="navbar-brand" id="logo" href="index.php">job<span>mate</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto" id="leftelement">
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Features</a></li>
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Pricing</a></li>
                  </ul>
                  
                  
                  <form>
                                <select id="resources" name="resources">
                                <option value="#">Resources</option>
                                <option value="ca">Canada</option>
                                <option value="usa">USA</option>
                                </select>
                                </form>
             
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Employeers</a></li>
                      <li class="nav-item"><a class="nav-link" id="p" style="color:#000000" href="alljobss.php">Post A Job</a></li>
                    
                      <button onclick="document.getElementById('id01').style.display='block'" id="navlogin"></i>Login</button>
                  </ul>
            </div>
            
          </div>
        </div>
      
      
    </nav>
</div>
</div>
                      <div id="id01" class="modal">

                        <form class="modal-content animate" action="/action_page.php" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          
                            <a class="navbar-brand" href="#!">Job<span>Mate</span></a>
                          </div>
                      
                          <div class="c1">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" id="modaltext" placeholder="Enter Username" name="uname" required>
                      
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                              
                            <button type="submit">Login</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#f1f1f1">
                            
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>
                          
                        </form>
                      </div>


                    
                      <div id="id02" class="modal">

                          <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                          
                              <a class="navbar-brand" href="#!">Shob<span>job</span></a>
                            </div>
                        
                            <div class="c1">
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter email" name="email" required>

                              <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="uname" required>
                        
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>

                              <label for="cpsw"><b>Confirm Password</b></label>
                              <input type="password" placeholder="Retype Password" name="cpsw" required>
                                
                              <button type="submit">SignUp</button>
                              <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                            </div>
                        
                            <div class="container" style="background-color:#f1f1f1">
                            
                              <span class="psw"> <a href="#">Forgot password?</a></span>
                            </div>
                            
                          </form>
                      </div>
                      


