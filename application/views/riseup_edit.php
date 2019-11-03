<body>

    <br>
    <br>

    <div class="container">
        <form method="post" action="<?php echo site_url('RiseUp_Controller/update') ?>/<?php echo $userData->id; ?>">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name='inputName' value="<?php echo $userData->name; ?>">
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="inputUsername" name='inputUsername' value="<?php echo $userData->username; ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name='inputEmail' value="<?php echo $userData->email; ?>">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Save</button>
            <a href="<?php echo site_url('RiseUp_Controller'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>

        </form>
    </div>

</body>

</html>