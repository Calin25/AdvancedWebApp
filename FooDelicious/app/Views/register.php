<h2>Register Here</h2>
<p>Please Enter The Following</p>
<div class="container">
    <div class="row justify-content-center">
        <form action="<?php echo base_url();?>/register" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="name" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label class="labelStyle" for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="name" placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="firstname">Company Name:</label>
                <input type="text" class="form-control" id="companyName" name="companyName" aria-describedby="name" placeholder="Enter Company Name">
            </div>

            <div class="form-group">
                <label class="labelStyle" for="addressLine1">Address Line 1:</label>
                <input type="text" class="form-control" id="addressLine1" name="addressLine1" aria-describedby="name" placeholder="Enter Address Line 1">
            </div>
            <div class="form-group">
                <label class="labelStyle" for="addressLine2">Address Line 2:</label>
                <input type="text" class="form-control" id="addressLine2" name="addressLine2" aria-describedby="name" placeholder="Enter Address Line 2">
            </div>
            <div class="form-group">
                <label class="labelStyle" for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" aria-describedby="name" placeholder="Enter City">
            </div>
            <div class="form-group">
                <label class="labelStyle" for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="name" placeholder="Enter Country">
            </div>
            <div class="form-group">
                <label class="labelStyle" for="postCode">Post Code:</label>
                <input type="text" class="form-control" id="postCode" name="postCode" aria-describedby="name" placeholder="Enter Post Code">
            </div>
            <div class="form-group">
                <label class="labelStyle" for="postCode">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="name" placeholder="Enter Phone Number">
            </div>

            <div class="form-group">
                <label class="labelStyle" for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address">
            </div>


            <div class="form-group">
                <label class="labelStyle" for="password1">Password:</label>
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter Password" name="password1">
            </div>

            <div class="form-group">
                <label class="labelStyle" for="password2">Re-Type Password:</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-Type Password" name="password2">
            </div>

            <div class="form-group">
                <label><button type="submit" class="btn btn-primary">Submit</button></label>
            </div>

            <div class="form-group">
            <button type="submit"><a href="<?php echo base_url();?>/logIn" class="btn btn-primary">Log-In</a></button>
            </div>
        </form>
        <br>
        <br>
    </div>
</div>