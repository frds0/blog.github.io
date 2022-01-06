<!-- Modal -->
<di class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <div class="alert alert-gray">
            Edit Product
        </div>

        <div class="modal-body">
            <hr>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                action="<?php echo site_url('CTR_Admin/EditData'); ?>">
                <?php $row=current($isi); ?>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Product Name:</label>
                    <div class="controls">
                        <input name="Product_ID" value="<?php echo $row->Product_ID?>" type="hidden" id="inputEmail"
                            placeholder="ID">
                        <input name="name" value="<?php echo $row->Name; ?>" type="text" id="inputEmail"
                            placeholder="Product Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Description:</label>
                    <div class="controls">
                        <textarea rows="2" class="span9" placeholder="Description"
                            name="desc"><?php echo $row->Description; ?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Price:</label>
                    <div class="controls">
                        <input name="price" value="<?php echo $row->Price; ?>" type="text" id="inputEmail"
                            placeholder="Price">
                    </div>
                </div>

                <input type="hidden" value="<?php echo $row->Photo; ?>" name="Photo" id="inputEmail"
                    placeholder="Photo">
                <div class="control-group">
                    <label class="control-label" for="input01">Photo:</label>
                    <div class="controls">
                        <input type="file" name="image" class="font">
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