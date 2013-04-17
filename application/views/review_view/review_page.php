<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/review/review_submit" method="post">
        <legend>Review</legend>
        <div class="control-group">
        <label class="control-label" for="inputProductType">Product/Subject Type</label>
        <div class="controls"> 
        <select class="span3" name="type">
            <option value="">Select Product/Subject Type</option>
            <option name="p_type" value="1">ELECTRONICS</option>
            <option name="p_type" value="2">BANK</option>
            <option name="p_type" value="3">RESTAURANT</option>
            <option name="p_type" value="4">BUS SERVICE</option>
            <option name="p_type" value="5">HOTEL</option>
        </select>
        <span >or</span>
        <input class="span3" type="text" id="proName" name="prodName" placeholder="New Product/Subject Type">
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for="inputProductName">Product/Subject Name</label>
        <div class="controls">
        <input class="span6" type="text" id="proName" name="prodName" placeholder="Product Name">
        </div>
        </div>
            
        <div class="control-group">
        <label class="control-label" for="inputProductName">Review Title</label>
        <div class="controls">
        <input class="span6" type="text" id="proName" name="reviewName" placeholder="Review Title">
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for="inputReview">Review Details</label>
        <div class="controls">
        <textarea class="span6" rows="6" id="inputUserReview" name="review" placeholder="Write review .."></textarea>
        </div>
        </div>
            
        <div class="control-group">
        <div class="controls"> 
        <button class="btn btn-large btn-primary" type="submit" class="revBtn" >Add Review</button>
        </div>
        </div>
        
    </form>
    </div>

    <hr>

    <footer>
        <p>&copy; Team: BUET_abcd, BUET CSE Fest'13</p>
    </footer>

</div> <!-- /container -->