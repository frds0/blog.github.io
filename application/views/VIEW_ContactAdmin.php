<div class="container">
    <br>

    <div class="row-fluid">
        <div class="span12">

            <div class="row-fluid">
                <div class="span12">
                    <div class="span9">



                        <div class="alert alert-gray">
                            <h4>Messages</h4>
                        </div>
                        <legend></legend>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                            id="example">




                            <caption></caption>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Email</th>
                                    <th width="200">Message</th>
                                    <th>Date and Time</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($daftar_contact as $row) { ?>
                                <tr>
                                    <td><?php echo $row->Name;?></td>
                                    <td><?php echo $row->Subject;?></td>
                                    <td><?php echo $row->Email;?></td>
                                    <td><?php echo $row->Message;?></td>
                                    <td width="100"><?php echo $row->Date_and_Time;?></td>
                                    <td style="vertical-align: middle;">

                                        <!-- <?php  echo base_url('')?> -->

                                        <?php echo anchor('CTR_Contact_Admin/GetData/'.$row->Name_ID,"<button type='button' class='btn btn-warning' data-placement='top' data-toggle='tooltip' title='Edit'><i class='icon-pencil icon-large'></i>&nbsp;</button>");?>

                                        <?php echo anchor('CTR_Contact_Admin/HapusData/'.$row->Name_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='icon-trash icon-large'></i>&nbsp;</button>",array('onclick'=>"return confirm('Hapus data $row->Name ?');")); ?>
                                    </td>

                                </tr>
                                <?php } ?>

                                <div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-header">
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-gray">Are you Sure you Want to <strong>Delete?</strong>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo site_url('CTR_Contact_Admin/HapusData')?>"
                                            class="btn btn-danger"><i class="icon-trash"></i>&nbsp;Yes</a>
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><i
                                                class="icon-remove"></i>&nbsp;Close</button>

                                    </div>
                                </div>




                            </tbody>

                        </table>



                    </div>
                    <div class="span3">


                        <div class="alert alert-success">
                            Welcome: <?php echo $this->session->userdata("Username"); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </body>

    </html>