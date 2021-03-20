<!--
 <div class="container top-margin">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <h1>Sign Up</h1>
            <?php /*if(isset($validation)):*/?>
                <div class="alert alert-danger">
                <?/*=
                $validation->listErrors() 
                */?>
                </div>
            <?php /*endif;*/?>
            <form action="/register/save" method="post">
                <div class="mb-3">
                    <label for="InputForFName" class="form-label">First Name</label>
                    <input type="text" name="name" class="form-control" id="InputForName" value="<?/*= set_value('fname') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForMiddleName" class="form-label">Middle Name</label>
                    <input type="text" name="mname" class="form-control" id="InputForMName" value="<?/*= set_value('mname') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForLName" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="InputForLName" value="<?/*= set_value('lname') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="InputForAddress" value="<?/*= set_value('address') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForState" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="InputForState" value="<?/*= set_value('state') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForCountry" class="form-label">Country</label>
                    <input type="text" name="name" class="form-control" id="InputForCountry" value="<?/*= set_value('country') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForZipCode" class="form-label">Zip Code</label>
                    <input type="text" name="zipcode" class="form-control" id="InputForZipCode" value="<?/*= set_value('zipcode') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?/*= set_value('email') */?>">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <div class="mb-3">
                    <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                </div>
                <button type="submit" class="btn lwc-btn">Register</button>
            </form>
        </div>
            
    </div>
</div>
-->