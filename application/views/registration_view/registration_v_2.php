<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/registration/login" method="post">
    <legend>Registration</legend>
    <div class="control-group">
    <label class="control-label" for="inputUsername">Username</label>
    <div class="controls">
    <input type="text" id="inputPassword" placeholder="Username">
    </div>
    </div>    
        
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" placeholder="Password">
    </div>
    </div>
        
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
    <input type="text" id="inputEmail" placeholder="Email">
    </div>
    </div>
        
    <div class="control-group">
    <div class="controls">
    <label class="checkbox">
    <input type="checkbox"> Remember me
    </label>  
    <button type="submit" class="btn">Registration</button>
    </div>
    </div>
        
    </form>
    </div>

    <hr>

    <footer>
        <p>&copy; Team: BUET_abcd, BUET CSE Fest'13</p>
    </footer>

</div> <!-- /container -->