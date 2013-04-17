<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/registration/register" method="post" onsubmit="return validateForm()">
    
    <legend>Registration</legend>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email<span style="color: red;">*</span></label>
    <div class="controls">
        <input type="text" id="email" name="email" placeholder="Email" onblur="validateEmail()" onfocus="clearMessage('mail')" />
    <a id="mail"></a>
    </div>
    <div class="span4 offset2"><span class="muted" style="font-size:10pt">(e.g. abcd@gmail.com, abcd@yahoo.com)</span></div>
    </div>    
        
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password<span style="color: red;">*</span></label>
    <div class="controls">
    <input type="password" id="password" name="password" placeholder="Password" onblur="checkPassword()" onfocus="clearMessage('pass')" />
    <a id="pass"></a>
    </div>
    <div class="span4 offset2"><span class="muted" style="font-size:10pt">(minimum password length 4.)</span></div>
    </div>
        
    <div class="control-group">
    <label class="control-label" for="inputRePassword">Retype Password<span style="color: red;">*</span></label>
    <div class="controls">
        <input type="password" id="re_password" name="re_password" placeholder="Retype password" onblur="checkRePassword()" onfocus="clearMessage('repass')" />
    <a id="repass"></a>
    </div>
    </div>
        
    <div class="control-group">
    <div class="controls">
    <label class="checkbox">
    <input type="checkbox"> Remember me
    </label>  
    <input class="btn btn-large btn-success" type="submit" class="btn" value='Registration'>
    </div>
    </div>
        
    </form>
    </div>

    <hr>

    <footer>
        <p>&copy; Team: BUET_abcd, BUET CSE Fest'13</p>
    </footer>

</div> <!-- /container -->