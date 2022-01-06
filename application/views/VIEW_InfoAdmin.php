<body>
    <div class="container">
        <br>
        <div class="row-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="span9">

                        <div class="alert alert-success">
                            <h4>Update Information</h4>
                        </div>

                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Tanggal</th>
                                    <th>Content</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($daftar_info as $row) { ?>
                                <tr>
                                    <td><?php echo $row->Title; ?></td>
                                    <td><?php echo $row->tgl_info; ?></td>
                                    <td><?php echo $row->Content; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('gambar/info/'.$row->Photo)?>" class="img-rounded"
                                            rel="zoom-id:zoom;opacity-reverse:true;">
                                            <img src="<?php echo base_url('gambar/info/'.$row->Photo)?>" width="90"
                                                alt="">
                                    </td>
                                    <td style="vertical-align: middle;">

                                        <!-- <?php  echo base_url('')?> -->

                                        <a href="#edit<?php echo $row->Information_ID;?>" data-toggle="modal"
                                            class="btn btn-warning"><i class="icon-pencil icon-large"></i>&nbsp;</a>

                                        <!--<?php echo anchor('CTR_InfoAdmin/GetData/'.$row->Information_ID,"<button type='button' class='btn btn-warning' data-placement='top' data-toggle='tooltip' title='Edit'><i class='icon-pencil icon-large'></i>&nbsp;</button>");?>-->

                                        <?php echo anchor('CTR_InfoAdmin/HapusData/'.$row->Information_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='icon-trash icon-large'></i>&nbsp;</button>",array('onclick'=>"return confirm('Hapus data $row->Title ?');")); ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>

                    </div>
                    <?php foreach ($daftar_info as $row) { ?>
                    <div id="edit<?php echo $row->Information_ID;?>" class="modal hide fade" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <div class="alert alert-gray">
                                Edit Info
                            </div>

                            <div class="modal-body">
                                <hr>
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                                    action="<?php echo site_url('CTR_InfoAdmin/EditData'); ?>">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Tittle : </label>
                                        <div class="controls">
                                            <input name="Information_ID" value="<?php echo $row->Information_ID?>"
                                                type="hidden" id="inputEmail">
                                            <input name="Title" value="<?php echo $row->Title; ?>" type="text"
                                                id="inputEmail" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Tanggal : </label>
                                        <div class="controls">
                                            <input name="tgl_info" value="<?php echo $row->tgl_info?>"
                                                type="hidden" id="inputEmail">
                                            <input name="tgl_info" value="<?php echo $row->tgl_info; ?>" type="text"
                                                id="inputEmail" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Content :</label>
                                        <div class="controls">
                                            <textarea rows="3" cols="5" class="span9" placeholder="Description"
                                                name="Content"><?php echo $row->Content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="input01">Image :</label>
                                        <div class="controls">
                                            <input type="file" name="userfile" class="font">
                                            <img src="<?php echo base_url('gambar/info/'.$row->Photo)?>" width="90">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button name="edit" type="submit" class="btn btn-large btn-warning"><i
                                                class="icon-save"></i>&nbsp;Save</button>
                                        <button class="btn btn-large" data-dismiss="modal" aria-hidden="true"><i
                                                class="icon-remove"></i>&nbsp;No</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                    <div class="span3">


                        <div class="alert alert-success">
                            Welcome: <?php echo $this->session->userdata("Username"); ?>
                        </div>
                        <div class="well">
                            <a button class="btn btn-block btn-success" type="button" href="#addinfo" role="button"
                                data-toggle="modal"><i class="icon-pencil"></i> Add Information</button></a>
                            <div id="addinfo" class="modal hide fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <div class="alert alert-gray">
                                        Add Information
                                    </div>
                                    <div class="modal-body">
                                        <hr>
                                        <form class="form-horizontal" method="POST"
                                            action="<?php echo site_url('CTR_InfoAdmin/SimpanData'); ?>"
                                            enctype="multipart/form-data">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail">Title</label>
                                                <div class="controls">
                                                    <input type="text" class="span10" id="inputEmail" name="Title"
                                                        placeholder="Title" required class="span3">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail">Tanggal</label>
                                                <div class="controls">
                                                    <input type="date" class="span10" id="tgl_info" name="tgl_info"
                                                        placeholder="tgl_info" required class="span3">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Content</label>
                                                <div class="controls">
                                                    <textarea rows="5" class="span10" required
                                                        placeholder="Write your details here..!"
                                                        name="Content"></textarea>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="input01">Image:</label>
                                                <div class="controls">
                                                    <input type="file" name="userfile" class="font" required>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button name="addinfo" type="submit" class="btn btn-success"><i
                                                class="icon-pencil"></i>&nbsp;Post</button>
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><i
                                                class="icon-remove"></i>&nbsp;Close</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>