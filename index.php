

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="btsp/css/bootstrap.min.css">
  <link rel="stylesheet" href="btsp/css/bootstrap-datepicker.min.css">
  
  
  <script src="btsp/js/jquery-3.1.1.min.js"></script>
  <script src="btsp/js/bootstrap.min.js"></script>
  <script src="btsp/js/bootstrap-datepicker.min.js"></script>



<title>Inventory System</title>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        

    </head>

    <body>
       
        
       <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
         
          <form class="form col-md-12 center-block"  method="post" action="login.php">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="username" id="loginEmail" placeholder="Username" autofocus >
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg"  name="password" id="loginPass" placeholder="Password" >
            </div>
            
            <div class="form-group">
                                <label for="status">Please Select Type</label>
                                <select name="status" required>
                                    <option value="" disabled selected>Select Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    
                                </select>

            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              
            </div>
          </form>
          
          
          
      </div>
      <div class="modal-footer">
          
      </div>
  </div>
  </div>
</div>
        
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>