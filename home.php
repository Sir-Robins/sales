<?php  include "header.php"; ?>

<section class="sections">
<section class="heading">
        <form action="includes/logou.inc.php" method="POST" class="log_out">
            <button type="submit">Logout</button>
        </form>
</section>
<div class="dashboard">
   
        <h1>Dashboard</h1>
  
    <div class="gen">
    <input type="submit" name="generate" value="Generate Report">
    </div>
    
   
</div>
<div class="reports">
  <div class="item_1">
          <div class="ite">
          <h1><a href="sales.php">Sales</a></h1>
          <i class="fa-regular fa-rectangle-list"></i>
  </div>
          <p>20</p>
  </div>
  <div class="item_1">
        <div class="ite">
       <h1><a href="product.php">Products</a></h1>
        <i class="fa-regular fa-rectangle-list"></i>
  </div>
    <p>20</p>
  </div>
  <div class="item_1">
    <div class="ite">
    <h1><a href="report.php">Report</a></h1>
    <i class="fa-regular fa-rectangle-list"></i>
    </div>
    <p>20</p>
  </div>
  <div class="item_1">
    <div class="ite">
    <h1>Products</h1>
    <i class="fa-regular fa-rectangle-list"></i>
    </div>
    <p>20</p>
  </div>
</div>
<div class="sales_report">
    <div class="sale_list">
        <h1>Sales List</h1>

        <button class="add_sales" action="sales.php">
            Add Sales
        </button>
    </div>
    <div class="sale_table">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Qunatity</th>
                <th>Total Price</th>
                <th></th>
            </tr>
        </table>
    </div>

</div>


    </section>

<?php include "footer.php"; ?>