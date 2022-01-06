<body>
    <div class="container">
        <br>

        <div class="row-fluid">


            <div class="row-fluid">
                <div class="span12">
                    <div class="span9">

                        <div class="alert alert-success">
                            <h4>Gallery</h4>
                        </div>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                            id="example">

                            <caption></caption>

                            <thead>
                                <tr>
                                    <th>Photos</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftar_gallery as $row) { ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url('gambar/gallery/'.$row->Photo)?>"
                                            class="img-rounded" rel="zoom-id:zoom;opacity-reverse:true;">
                                            <img src="<?php echo base_url('gambar/gallery/'.$row->Photo)?>" width="110"
                                                alt="">
                                    </td>
                                    <td style="vertical-align: middle;">

                                        <!-- <?php  echo base_url('')?> -->
                                        <a href="#edit<?php echo $row->Photo_ID;?>" data-toggle="modal"
                                            class="btn btn-warning"><i class="icon-pencil icon-large"></i>&nbsp;</a>

                                        <!--<?php echo anchor('CTR_GalleryAdmin/GetData/'.$row->Photo_ID,"<button type='button' class='btn btn-warning' data-placement='top' data-toggle='tooltip' title='Edit'><i class='icon-pencil icon-large'></i>&nbsp;</button>");?>-->

                                        <?php echo anchor('CTR_GalleryAdmin/HapusData/'.$row->Photo_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='icon-trash icon-large'></i>&nbsp;</button>",array('onclick'=>"return confirm('Hapus data $row->Photo_ID ?');")); ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php foreach ($daftar_gallery as $row) { ?>
                    <div id="edit<?php echo $row->Photo_ID;?>" class="modal hide fade" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <div class="alert alert-gray">
                                Edit Image
                            </div>

                            <div class="modal-body">
                                <hr>
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                                    action="<?php echo site_url('CTR_GalleryAdmin/EditData'); ?>">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input name="Photo_ID" value="<?php echo $row->Photo_ID?>" type="hidden"
                                                id="inputEmail">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="input01">Image :</label>
                                        <div class="controls">
                                            <input type="file" name="userfile" class="font">
                                            <img src="<?php echo base_url('gambar/gallery/'.$row->Photo)?>" width="90">
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
                            <a button class="btn btn-block btn-success" type="button" href="#addphotos" role="button"
                                data-toggle="modal"><i class="icon-pencil"></i> Add Photos</button></a>
                            <div id="addphotos" class="modal hide fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <div class="alert alert-gray">
                                        Add Photos to Gallery
                                    </div>
                                    <div class="modal-body">
                                        <hr>
                                        <form class="form-horizontal" method="POST"
                                            action="<?php echo site_url('CTR_GalleryAdmin/SimpanData'); ?>"
                                            enctype="multipart/form-data">



                                            <div class="control-group">
                                                <label class="control-label" for="input01">Image :</label>
                                                <div class="controls">
                                                    <input type="file" name="userfile" class="font" required>
                                                </div>
                                            </div>




                                    </div>
                                    <div class="modal-footer">
                                        <button name="save" type="submit" class="btn btn-success"><i
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