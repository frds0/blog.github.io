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
                                        <th style="vertical-align: middle;">Username</th>
                                        <th style="vertical-align: middle;">Password</th>
                                        <th style="vertical-align: middle;">Full Name</th>
                                        <th style="vertical-align: middle;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($daftar_admin as $row) { ?>
                                    <tr>
                                        <td style="vertical-align: middle;"><?php echo $row->Username;?></td>
                                        <td style="vertical-align: middle;"><?php echo $row->Password;?></td>
                                        <td style="vertical-align: middle;"><?php echo $row->Full_Name;?></td>                                          

                                            <!-- <?php  echo base_url('')?> -->

                                            <td><a href="#edit<?php echo $row->User_ID;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-pencil icon-large"></i>&nbsp; Edit</a>

                                           <!-- <?php echo anchor('CTR_Admin/GetData/'.$row->User_ID,"<button type='button' class='btn btn-warning' data-placement='top' data-toggle='tooltip' title='Edit'><i class='icon-pencil icon-large'></i>&nbsp;</button>");?> -->

                                            <?php echo anchor('CTR_Admin/HapusData/'.$row->User_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='icon-trash icon-large'></i>&nbsp;</button>",array('onclick'=>"return confirm('Hapus data $row->Username ?');")); ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php foreach ($daftar_admin as $row) { ?>
                        <div id="edit<?php echo $row->User_ID;?>" class="modal hide fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <div class="alert alert-gray">
                                            Edit Admin
                                        </div>

                                        <div class="modal-body">
                                            <hr>
                                            <form class="form-horizontal" method="POST"
                                                action="<?php echo site_url('CTR_Admin/EditData'); ?>">
                                                <input type="hidden" name="User_ID" placeholder="Username" value="<?php echo $row->User_ID;?>" 
                                                            required>
                                                <div class="control-group">
                                                    <label class="control-label">Username</label>
                                                    <div class="controls">
                                                        <input type="text" name="Username" placeholder="Username" value="<?php echo $row->Username;?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="Password" placeholder="Password" value="<?php echo $row->Password;?>"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Full Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="Full_Name" placeholder="Full Name" value="<?php echo $row->Full_Name;?>" 
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
                                </div> <?php } ?>
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
                                </div> <br>
                                <a button class="btn btn-block btn-danger" type="button" href="#myModal" role="button"
                                    data-toggle="modal"><i class="icon-signout icon-large"></i> Sign Out</button></a>
                                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-gray">Are you Sure you Want to <strong>Logout?</strong>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><i
                                                class="icon-remove"></i>&nbsp;Close</button>
                                        <a href="<?php echo site_url('CTR_Index/index')?>" class="btn btn-danger"><i
                                                class="icon-signout"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

</body>