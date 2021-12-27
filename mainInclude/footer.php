<!-- footer section -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed by ELearning <br><br><div class="ad"><a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small></div>
</footer>

<!-- start registration model-->

<div class="modal fade" role="dialog" 
tabindex="-1" id="stuRegModalCenter"> 
<div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
        <div class="modal-header bg-primary text-white"> 
        <h5 class="modal-title" id="stuRegModalCenter">Student Registration</h5> 
        <button type="button" class="close" 
        data-dismiss="modal" aria-label="Close">×</button> 
    </div> 
    <div class="modal-body">
    <!-- start registration form -->
        <form>
            <div class="form-group">
                <i class="fas fa-user"></i> <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
            </div>

            <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
            </div>
            <!-- <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="stupasss" class="pl-2 font-weight-bold">Re-Enter Password</label>
                <input type="password" class="form-control" placeholder="Password" name="stupasss" id="stupasss">
            </div> -->
        </form>
        <!-- end registration form -->
    </div>
    <div class="modal-footer"> 
        <span id="successMsg"></span>
    <button class="btn btn-primary" type="button" onclick="addStu()">Sign Up</button> 
    <button class="btn btn-dark" type="button" data-dismiss="modal">Close</button> 
    
    </div> 
    </div> 
</div>
</div>
<!-- end registration model -->

<!-- start login modal-->
<div class="modal fade" role="dialog" 
tabindex="-1" id="stuLoginModalCenter"> 
<div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
        <div class="modal-header bg-info text-white"> 
        <h5 class="modal-title" id="stuLoginModalCenter">Student Login</h5> 
        <button type="button" class="close" 
        data-dismiss="modal" aria-label="Close">×</button> 
    </div> 
    <div class="modal-body">
    <!-- student login form -->
        <form id="stuLoginForm">
        <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="stueLogmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
            </div>

            <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
            </div>
        </form>
        <!-- end login form -->
    </div>
    <div class="modal-footer"> 
    <button class="btn btn-info" type="button" id="stuLoginBtn">Login</button> 
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> 
    
    </div> 
    </div> 
</div>
</div>
<!-- end login model -->


<!-- start admin modal-->
<div class="modal fade" role="dialog" 
tabindex="-1" id="adminLoginModalCenter"> 
<div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
        <div class="modal-header bg-success text-white"> 
        <h5 class="modal-title" id="adminLoginModalCenter">Admin Login</h5> 
        <button type="button" class="close" 
        data-dismiss="modal" aria-label="Close">×</button> 
    </div> 
    <div class="modal-body">
    <!-- admin login form -->
        <form id="adminLoginForm">
        <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="admineLogmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
            </div>

            <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
            </div>
        </form>
        <!-- end admin form -->
    </div>
    <div class="modal-footer"> 
    <button class="btn btn-success" type="button" id="adminLoginBtn">Login</button> 
    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button> 
    
    </div> 
    </div> 
</div>
</div>
<!-- end admin model -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>