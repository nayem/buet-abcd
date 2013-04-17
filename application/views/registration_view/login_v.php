<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/registration/login" method="post">
            <legend>Log in</legend>
            <div class="control-group">
                <label class="control-label" for="inputUsername">Email</label>
                <div class="controls">
                    <input type="text" id="input_Uname" name="email" placeholder="Email" onblur="uLen()" >
                    <span class="text-error"><?php echo form_error('email'); ?></span>
                    <span id="uCheck"></span>
                </div>
            </div>    

            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" id="input_Password" name="password" placeholder="Password" onblur="checkLen()">
                    <span class="text-error" ><?php echo form_error('password'); ?></span>
                    <span id="pCheck"></span>
                </div>

            </div>

            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>  
                    <button class="btn btn-large btn-primary" type="submit" class="btn" id="sub_btn">Log in</button>
                    <?php if ($attempt == 1) { ?>
                        <span class="text-warning" style="font-size: 10pt"><?php echo '(You have previouly tried ' . $attempt . ' time.)'; ?></span>
                    <?php } else { ?>
                        <span class="text-warning" style="font-size: 10pt"><?php echo '(You have previouly tried ' . $attempt . ' times.)'; ?></span>
                    <?php } ?>
                    <input type="hidden" id="inputPassword" name="attempt" value="<?php echo $attempt; ?>">
                </div>
            </div>

        </form>
    </div>

    <hr>

    <footer>
        <p>&copy; Team: BUET_abcd, BUET CSE Fest'13</p>
    </footer>

</div> <!-- /container -->