<body>
    <div class="container">
        <br>



        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="span9">


                            <div class="alert alert-success">
                                <h4>Admin List</h4>
                            </div>
                            <legend></legend>
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Total Number of Visitors</th>
                                        <th>Total Number of Visitors per day</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php foreach ($daftar_admin as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->Username;?></td>
                                        <td><?php echo $row->Password;?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>



                        </div>
                        <div class="span3">

                            <div class="alert alert-success">
                                Welcome: <?php echo $this->session->userdata("Username"); ?>
                            </div>
                            <div class="well">
                                <a button class="btn btn-block btn-success" type="button" href="#addadmin" role="button"
                                    data-toggle="modal"><i class="icon-edit icon-large"></i> Add Admin</button></a>
                                <div id="addadmin" class="modal hide fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <div class="alert alert-gray">
                                            Add Admin
                                        </div>

                                        <div class="modal-body">
                                            <hr>
                                            <form class="form-horizontal" method="POST"
                                                action="<?php echo site_url('CTR_Admin/SimpanData'); ?>">
                                                <div class="control-group">
                                                    <label class="control-label">Username</label>
                                                    <div class="controls">
                                                        <input type="text" name="Username" placeholder="Username"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="Password" placeholder="Password"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Full Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="Full_Name" placeholder="Full Name"
                                                            required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn"><i class="icon-save"></i>Save</button>
                                            <button type="button" class="btn" data-dismiss="modal"><i
                                                    class="icon-remove"></i>Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>