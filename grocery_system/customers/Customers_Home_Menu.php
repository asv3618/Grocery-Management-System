<table align="center">
<tr>
    <td><img  width="700px"  height="60px" alt="Add Title Image" src="images\title.png" /></td> 
    <td><img  width="123px"  height="100px" alt="Add Title Image" src="images\logo1.png" /></td>
</tr>
</table>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color:;background-image:url(images/dark.png)">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">

        <li class='nav-item'><a href='Customers_Home.php' class='nav-link' class='active'>Home</a></li>
        <li class='nav-item'><a href='ManageProfile.php' class='nav-link'>Profile</a></li>
        <!--<li class='nav-item'><a href='ManageOrders.php' class='nav-link'>Orders</a></li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Orders<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class='nav-item'><a href='ManageOrders.php' class="dropdown-item">Recent Orders</a></li>
            <li class='nav-item'><a href='ManageReturnOrders.php' class='dropdown-item'>Return/Exchange Orders</a></li>
          </ul>
        </li>
        <li class='nav-item'><a href='ManageReviews.php' class="nav-link">Reviews</a></li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Reviews<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class='nav-item'><a href='ManageReviews.php' class="dropdown-item">Manage</a></li>
          </ul>
        </li>-->
        <li class='nav-item'><a href='ManageWishtList.php' class="nav-link">Wishlist</a></li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Wish-List<span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li class='nav-item'><a href='ManageWishtList.php' class="dropdown-item">Manage</a></li>
          </ul>
        </li>-->
        <li class='nav-item'><a href='ManageRefund.php' class='nav-link'>Refund</a></li>
        <li class='nav-item'><a href='ManageRewards.php' class='nav-link'>Rewards</a></li>
        <li class='nav-item'><a href='ManageCart.php' class='nav-link'>Cart</a></li>
        <li class='nav-item'><a href='../Home.php' class='nav-link'>Logout</a></li>
      </ul>

    </div>
  </div>
</nav>