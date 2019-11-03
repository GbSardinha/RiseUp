<body>
    <!-- As a link -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">RiseUp User List</a>
    </nav>

    <div class="container">
        <br>
        <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New User Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo site_url('RiseUp_Controller/create') ?>">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" name='inputName' placeholder="Enter your Name">
                            </div>
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" name='inputUsername' placeholder="Enter your Username">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name='inputEmail' placeholder="Enter your Email">
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Save</button>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <th scope="row"><?php echo $row->id; ?></th>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td> <a href="<?php echo site_url('RiseUp_Controller/edit'); ?>/<?php echo $row->id; ?>">Edit </a> | <a href="<?php echo site_url('RiseUp_Controller/delete'); ?>/<?php echo $row->id; ?>">Delete</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>