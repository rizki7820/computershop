 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <?php
        mysql_connect("localhost","root","");
        mysql_select_db("shop");

        $query="SELECT max(ID_PRODUCT) as maxID FROM product";
        $hasil=mysql_query($query);
        $data=mysql_fetch_array($hasil);
        $ID_PRODUCT=$data['maxID'];

        $nourut=(int) substr($ID_PRODUCT,3,3);
        $nourut++;
        $char="IDP";
        $newIDP=$char.sprintf("%03s",$nourut);

    ?>
<form role="form"  method="post" action="pinsertproduct.php">
                  <label>ID PRODUCT</label>
                  <input type="text" name="ID_PRODUCT" class="form-control" value="<?php echo $newIDP;?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label>CATEGORY</label>
                              <select name="ID_CATEGORY" class="form-control" required>
                                  <option value="C001">Laptop</option>
                                  <option value="C002">Desktop Computer</option>
                                  <option value="C003">Notebook</option>
                                  <option value="C004">PC All in One</option>
                                  <option value="C005">Spare Part</option>
                                  <option value="C006">Accessories</option>
                              </select>
                            </div>
                            <div class="form-group">
                  <label>PRODUCT NAME</label>
                  <input type="text" name="NAME" class="form-control" placeholder="Insert product name">
                </div>
                <div class="form-group">
                  <label>BRAND</label>
                  <input type="text" name="BRAND" class="form-control" placeholder="Insert brand name">
                </div>
                <div class="form-group">
                  <label>PRICE</label>
                  <input type="text" name="PRICE" class="form-control" placeholder="Insert price of the product">
                </div>
                <div class="form-group">
                  <label>STOCK</label>
                  <input type="text" name="STOCK" class="form-control" placeholder="Insert stock number">
                </div>
                <div class="form-group">
                  <label>DESCRIBTION</label>
                  <textarea type="text" name="DESCRIBE" class="form-control" placeholder="Insert stock number"></textarea>
                </div>
                </div>
                <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" name="submit" class="btn btn-primary" title="Save Product"> <i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
                        </div>
                </form>

       
    </div>
  </div>
  </body>
 </html>