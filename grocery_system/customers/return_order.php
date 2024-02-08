<?php session_start(); ?>
<html lang="en">

<head>
    <?php
    include 'groceryfiles/groceryfiles.php';
    include '../grocery_connections.php';
    ?>

</head>

<body>

    <?php
    include 'Customers_Home_Menu.php';
    ?><br>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 style="color: #e74c3c">Return Order</h1>
                    <form name='f1' method='post' action="return_order_code.php" enctype="multipart/form-data">
                        <input type='hidden' name='order_id' value="<?php echo $_REQUEST['order_id'];?>">
                        <input type='hidden' name='order_number' value="<?php echo $_REQUEST['order_number'];?>">
						<input type='hidden' name='return_type' value="<?php echo $_REQUEST['return_type'];?>">
                        <div class='row'>
                            <div class='col-md-12'>
                                <label for='reason'>Reason</label>
                                <textarea rows='3' class='form-control' id='reason' placeholder='Reason' name='reason'></textarea>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <br>
                            <input type="submit" name="submit" class="btn btn-danger form-control" value="Return Order">
                        </div>
                </div>
                </form>
            </div>
        </div>

    </section>

</body>

</html>