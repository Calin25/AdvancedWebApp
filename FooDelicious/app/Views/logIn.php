<h2>Please Log-in to Continue</h2>
<div class="container">
    <div class="row justify-content-center mt-5">
        <form action="<?php echo base_url();?>/logIn" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label><input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email"></label>
            </div>
            <div class="form-group">
                <label><input type="password" class="form-control" name="password" id="password" placeholder="Password" name="password"></label>
            </div>
            <label><button type="submit" class="btn btn-primary">Submit</button></label>

            <button type="submit"><a href="<?php echo base_url();?>/register" class="btn btn-primary">Register</a></button>
            <br>
            <br>
            <br>
            <label type="checkbox"  for="adminCheck"> Administrator Log In</label>
            <input type="checkbox" id="adminCheck" name="userCheck" value="Administrator">
        </form>
    </div>
</div>