<html>
    <head>
        <title>Raicov Technology Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <link rel="stylesheet" type="text/css" href="css/styles.css"/>
         <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
        
         <script src="js/jquery-1.9.1.js"></script>
         <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body id="welcome" class="scrollspy">
        <div class="navbar-fixed">
            <nav>
        <div class="nav-wrapper">
         <a href="#welcome" class="center brand-logo waves-effect waves-circle waves-custRed waves-ripple scrollspy"><img class="hide-on-med-and-down" src="images/logo.png"/></a>
             <a href="#" data-activates="sideMenu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#welcome">Home</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a class="modal-trigger"href="#contactModal">Contact Us</a></li>
        </ul>  
            <ul class="side-nav" id="sideMenu">
         <li><a href="#welcome">Home</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a class="modal-trigger" href="#contactModal">Contact Us</a></li>
         </ul>
        
    </div>
    
    </nav>  
      
            </div>
      
    <!-- Content -->
        <!--<div class="container" style="margin-top:25px;"> -->
         <?php include('welcome-area.php');
                include('about-us.php');
                include('services.php');
        include('our-clients.php');?>
                
         

         
        <!-- !Content -->
        <!--Modals-->
        <div id="contactModal" class="modal">
            <form name="emailUs" action="includes/contact-process.php" method="POST">
    <div class="modal-content">
      <h4>Contact Us</h4>
      <p>Use the form or information below to contact us!</p>
        
        <div class="input-field col s4">
            <i class="mdi-action-account-circle prefix"></i>
          <input id="name" name="name" type="text">
          <label for="name">Name</label>
        </div>
        
         <div class="input-field col s6">
          <i class="mdi-communication-phone prefix"></i>
          <input id="icon_telephone" name="tele" type="tel" >
          <label for="icon_telephone">Telephone</label>
        </div>
        <div class="input-field col s12">
          <i class="mdi-communication-email prefix"></i>  
          <input id="email" name="email" type="email" >
          <label for="email">Email</label>
        </div>
       <div class="input-field col s12">
            <i class="mdi-communication-forum prefix"></i>
          <textarea id="textarea1" name="comments" class="materialize-textarea"></textarea>
          <label for="textarea1">Enquiry</label>
        </div>
            
    </div>
    <div class="modal-footer">
      <input type="submit" value="Send" class="modal-action modal-close waves-effect waves-red btn-flat"/>
        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancel</a>
    </div>
        </form>
  </div>
            
    </body>
</html>