<?php
  include 'includes/head.php';
  require 'be/db/db_pdo.php';
  function fill_product($conn){
    $output= '';

    $select = $conn->prepare("SELECT * FROM tbl_product");
    $select->execute();
    $result = $select->fetchAll();

    foreach($result as $row){
      $output.='<option value="'.$row['id'].'">'.$row["product_name"].'</option>';
    }

    return $output;
  }
  function create_random_string($length = 20){
    $random_string = "";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    for($i =0; $i < $length; $i++){
      $random_string .= $characters[rand(0, $charactersLength - 1)];
    }
    return $random_string;
}
    //Current Date and Time
    date_default_timezone_set('Asia/Manila');
    $currentDate = date('d-m-y');

    $currentTime = date('h:i:s');

?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include 'includes/sidebar.php'?>
        <div id="main" class="layout-navbar">
            <?php include 'includes/navbar.php'?>
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Transactions</h3>
                                <p class="text-subtitle text-muted">For users to make transactions</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Print Document for receipt -->
                <style>
                  @media print {
                    body * {
                      visibility: hidden;
                    }
                    .print-container * {
                      visibility: visible;
                    }
                    .print-container {
                      position: absolute;
                      left: 0px;
                      top: 0px;

                    }
                  }
                </style>
                <form action="be/order/addOrder.php" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="card">
                  <div class="card-header">
                    <h3>Select Customer</h3>
                  </div>
                    <div class="card-body">
                      <div class="form-group">
                      <label class="col-form-label">Customer: (optional)</label>
                      <p><small class="text-muted">Customers with accounts can
                              view their recent transactions with the system. Leaving
                              this field anonymous will not record specific customer transactions.</small></p>
                          <select class="choices form-select" name="orderCustomerID">
                            <option value="0">1. Leave Anonymous</option>
                              <?php
                                require 'be/db/db_pdo.php';
                                $sql = $conn->prepare("SELECT * FROM `tbl_account_customer`");
                                $sql->execute();
                                while($fetch = $sql->fetch()){
                              ?>
                                <option value="<?php echo $fetch['id'] ?>">
                                <?php echo $fetch['cst_name'] ?></option>
                              <?php
                                }
                              ?>
                            </select>
                      </div>
                    </div>
                </div>
                </div>
                <!-- Area to be printed -->
                <div class="print-container">
                  <div class="col-md-12">
                  <h3>SME Purchase Order Receipt</h3>
                    <div class="row">
                      <div class="card">
                      <div class="card-header">
                          <h5>ORDER INFORMATION</h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-6">

                                <div class="form-group">
                                    <label class="col-form-label">Cashier: </label>
                                    <input type="text" name="orderCashier" class="form-control" value="<?php echo $_SESSION['cashier_name'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Order ID</label>
                                    <input type="text" name="orderRandomID" value="<?php echo create_random_string($length = 20) ?>" class="form-control" size="11" readonly/>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Date: </label>
                                    <input type="text" name="orderDate" class="form-control" value="<?php echo $currentDate ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Time: </label>
                                    <input type="text" name="orderTime" class="form-control" value="<?php echo $currentTime ?>" readonly>
                                </div>
                              </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                          <h5>PRODUCT INFORMATION</h5>
                        </div>
                      <div class="card-body">
                        <table class="table table-border" id="myOrder">
                          <thead>
                              <tr>
                                  <th>Product</th>
                                  <th>Stock</th>
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                                  <th>
                                    <button type="button" name="addOrder" class="btn btn-success btn-sm addOrder"><span>
                                      <i class="bi bi-cart-fill"></i>
                                    </span></button>
                                  </th>
                              </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="card">
                      <div class="card-header">
                        <h5>ORDER TOTAL</h5>
                      </div>
                      <div class="card-body">
                      <div class="col-md-offset-1 col-md-6">
                      <div class="form-group">
                        <label>Total</label>
                        <div class="input-group">
                          <input type="text" class="form-control pull-right" name="total" id="total" required readonly>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Money Received</label>
                        <div class="input-group">
                          <input type="text" class="form-control pull-right" name="paid" id="paid" required>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Change</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input type="text" class="form-control pull-right" name="due" id="due" required readonly>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" name="printOrder" onclick="window.print();">Print</button>
                <button type="submit" class="btn btn-success" name="saveOrder">Save</button>
                </form>
                <?php
                    include 'includes/footer.php';
                ?>
                <!-- main-content -->
            </div>
        <!-- main -->
        </div>
    <!-- app -->
    </div>
    <?php include 'includes/scripts.php' ?>
    <script>
      $(document).on('click','.addOrder', function(){
        var html='';
        html+='<tr>';
        html+='<td><select class="choices form-select productid" name="productid[]" required><option value="">--Select Product--</option><?php
        echo fill_product($conn)?></select></td>';
        html+='<td><input type="text" class="form-control productstock" style="width:100px;" name="productStock[]" readonly></td>';
        html+='<td><input type="text" class="form-control productprice" style="width:100px;" name="productPrice[]" readonly></td>';
        html+='<td><input type="number" min="1" class="form-control quantity_product" style="width:100px;" name="quantity[]" required></td>';
        html+='<td><input type="text" class="form-control producttotal" style="width:150px;" name="producttotal[]" readonly></td>';

        html+='<td><button type="button" name="remove" class="btn btn-danger btn-sm btn-remove"><i class="bi bi-trash-fill"></i></button></td>';
        $('#myOrder').append(html);
        Toastify({
                text: "Additional Product Added. Please Add The Purchase Information",
                duration: 5000,
                close:true,
                gravity:"top",
                position: "center",
                backgroundColor: "linear-gradient(315deg, #4c4177 0%, #2a5470 74%)",
            }).showToast();

        $(document).on('click','.btn-remove', function(){
        $(this).closest('tr').remove();
        calculate(0,0);
        $("#paid").val(0);
      })

     $('.productid').on('change', function(e){
          var productid = this.value;
          var tr=$(this).parent().parent();
          $.ajax({
            url:"getproduct.php",
            method:"get",
            data:{id:productid},
            success:function(data){
              //console.log(data);
              tr.find(".productstock").val(data["product_stock"]);
              tr.find(".productprice").val(data["product_price"]);
              tr.find(".quantity_product").val(1);
              tr.find(".producttotal").val(tr.find(".quantity_product").val() * tr.find(".productprice").val());
              calculate(0,0);
            }
          })
        })

        $("#myOrder").delegate(".quantity_product","keyup change", function(){
        var quantity = $(this);
        var tr=$(this).parent().parent();
        if((quantity.val()-0)>(tr.find(".productstock").val()-0)){
          swal("Warning","");
          quantity.val(1);
          tr.find(".producttotal").val(quantity.val() * tr.find(".productprice").val());
          calculate(0,0);
        }else{
          tr.find(".producttotal").val(quantity.val() * tr.find(".productprice").val());
          calculate(0,0);
        }
      })

      function calculate(paid){
        var net_total = 0;
        var paid = paid;

        $(".producttotal").each(function(){
          net_total = net_total + ($(this).val()*1);
        })

        due = paid - net_total;

        $("#total").val(net_total);
        $("#due").val(due);
      }

      $("#paid").keyup(function(){
        var paid = $(this).val();
        calculate(paid);
      })
      });
    </script>
</body>

</html>
