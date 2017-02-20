<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<form method="post" action="<?php echo base_url();?>users/register">
    <div class="form-group">
        <label>First Name*</label>
        <input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name">
    </div>
    <div class="form-group">
        <label>Last Name*</label>
        <input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name">
    </div>
    <div class="form-group">
        <label>Email Address*</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
    </div>
    <div class="form-group">
        <label>Choose Username*</label>
        <input type="text" name="username" class="form-control" placeholder="Create A Username">
    </div>
    <div class="form-group">
        <label>Password*</label>
        <input type="password" name="password" class="form-control" placeholder="Enter A Password">
    </div>
    <div class="form-group">
        <label>Confirm Password*</label>
        <input type="password" name="password2" class="form-control" placeholder="Enter Password Again">
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Register</button>
</form>