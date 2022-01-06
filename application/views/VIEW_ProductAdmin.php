<body>
    <div class="container">
        <br>
        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="span9">

                            <div class="alert alert-success">
                                <h4>Skills</h4>
                            </div>

                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">

                                <thead>
                                    <tr>
                                        <th>Skills Type</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($daftar_product as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->Name; ?></td>
                                        <td><?php echo $row->Description; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('gambar/skil/'.$row->Photo)?>"
                                                class="img-rounded" rel="zoom-id:zoom;opacity-reverse:true;">
                                                <img src="<?php echo base_url('gambar/skill/'.$row->Photo)?>"
                                                    width="90" alt="">
                                        </td>
                                        <td style="vertical-align: middle;">

                                            <!-- <?php  echo base_url('')?> -->
                                            <a href="#edit<?php echo $row->Product_ID;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-pencil icon-large"></i>&nbsp;</a>

                                            <!--<?php echo anchor('CTR_ProductAdmin/GetData/'.$row->Product_ID,"<button type='button' class='btn btn-warning' data-placement='top' data-toggle='tooltip' title='Edit'><i class='icon-pencil icon-large'></i>&nbsp;</button>");?>-->

                                            <?php echo anchor('CTR_ProductAdmin/HapusData/'.$row->Product_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='icon-trash icon-large'></i>&nbsp;</button>",array('onclick'=>"return confirm('Hapus data $row->Name ?');")); ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php foreach ($daftar_product as $row) { ?>
                        <div id="edit<?php echo $row->Product_ID;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <div class="alert alert-gray">
                                    Edit Skills
                                </div>

                                <div class="modal-body">
                                    <hr>
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                                        action="<?php echo site_url('CTR_ProductAdmin/EditData'); ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Skills Type :</label>
                                            <div class="controls">
                                                <input name="Product_ID" value="<?php echo $row->Product_ID?>" type="hidden" id="inputEmail">
                                                <input name="Name" value="<?php echo $row->Name; ?>" type="text" id="inputEmail"
                                                    placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Description:</label>
                                            <div class="controls">
                                                <textarea rows="2" class="span9" placeholder="Description"
                                                    name="Description"><?php echo $row->Description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Percentage:</label>
                                            <div class="controls">
                                                <input name="Price" value="<?php echo $row->Price; ?>" type="text" id="inputEmail"
                                                    placeholder="Price">
                                            </div>   
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Image :</label>
                                            <div class="controls">
                                                <input type="file" name="userfile" class="font">
                                                <img src="<?php echo base_url('gambar/product/'.$row->Photo)?>" width="90">
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
                                <a button class="btn btn-block btn-success" type="button" href="#adddessert"
                                    role="button" data-toggle="modal"><i class="icon-pencil"></i> Add
                                    Skills</button></a>
                                <div id="adddessert" class="modal hide fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <div class="alert alert-gray">
                                            Add Skill
                                        </div>
                                        <div class="modal-body">
                                            <hr>
                                            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                                                action="<?php echo site_url('CTR_ProductAdmin/SimpanData'); ?>">
                                                <div class="control-group">
                                                    <label class="control-label">Skill Name</label>
                                                    <div class="controls">
                                                        <input type="text" id="inputEmail" name="Name"
                                                            placeholder="Skill Name" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Price</label>
                                                    <div class="controls">
                                                        <input type="text" id="inputPassword" name="Price"
                                                            placeholder="Price" required>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Description</label>
                                                    <div class="controls">
                                                        <textarea name="Description" rows="5" required></textarea>
                                                    </div>
                                                </div>


                                                <div class="control-group">
                                                    <label class="control-label">Image:</label>
                                                    <input type="file" name="userfile" size="20" required>
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

</html>