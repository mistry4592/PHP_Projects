<?php
include 'inc/head.php';
?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center bold">
            <h2>Login Page</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST">
            	<label class="form-label">Visitor Phone No</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Visitor Phone Number" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Visitor Name</label>
                    <input type="text=" class="form-control" name="email_log">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text=" class="form-control" name="email_log">
                </div>
                <div class="mb-3">
                    <label class="form-label">Purpose</label>
                    <input type="text=" class="form-control" name="email_log">
                </div>
                <div class="mb-3">
                    <label class="form-label">Meet Name</label>
                    <input type="text=" class="form-control" name="email_log">
                </div>
                <div class="mb-3">
                    <label class="form-label">Wing Name</label>
                    <select class="form-control">
                        <option>Default select</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Flat Number</label>
                    <select class="form-control">
                        <option>Default select</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="login_btn">Submit</button>
                <button type="button" class="btn btn-primary" onclick="ClearFields();">Clear</button>
            </form>
        </div>
    </div>
</div>
<?php
include 'inc/foot.php';
?>