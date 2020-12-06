<?php
$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$result=mysqli_query($con,"SELECT phoneno from register where email in (select email from login)");

$row=mysqli_fetch_array($result);
$user_p = $row['phoneno'];
//echo $user_e;
?>
<!------ Include the below in your HEAD tag ---------->
<?php
include "include/head.php";
?>
<!------ Include the above in your HEAD tag ---------->
<body>

<?php


date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$timestamp = date('d-m-Y H:i:s');

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

?>
<!-- Image and text -->

<div class="container">
    <div class="row" style="margin-top:50px;">
        <!------ Include the below in your NAV tag ---------->
        <?php
        include "include/nav.php";
        ?>
        <!------ Include the above in your NAV tag ---------->

      
                    <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">

                         

                <form method="post" action="pgRedirect.php">

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <address>
                                <strong><i class="fab fa-youtube text-danger" ></i> Venjan Tutorials</strong>
                                <br>
                                <br>
                                <small><i class="fas fa-info-circle" ></i> If you have any queries about payment, meassage us through the contact form. </small>
                                
                            </address>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                            <p>
                                <em>Date: <?php echo date("jS F, Y", strtotime($timestamp)); ?></em>
                            </p>
                            <p>
                                <em>Enter Your Registered Phone No.<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="30" size="30" style="border: 1px solid black;background: #f5f5f5" 
                                                                        name="ORDER_ID" autocomplete="off"
                                                                        value="<?php echo $user_p ?>">
                            </p>
                              <p>
                                <em>CUST-ID #: <input id="CUST_ID" tabindex="1" maxlength="30" size="11" style="border: none;background: #f5f5f5" 
                                                                        name="CUST_ID" autocomplete="off"
                                                                        value="<?php echo  "CUST" . rand(10000,99999999)?>"></em>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <h1>Standard Checkout</h1>
                        </div>
                        </span>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Q</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9"><em>Study Material</em></h4></td>
                                    <td class="col-md-1" style="text-align: center"> 1</td>
                                    <td class="col-md-1 text-center">Rs.999</td>
                                    <td class="col-md-1 text-center">Rs.999</td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td class="text-right">
                                  
                                    <p>
                                        <strong>Tax: </strong>
                                    </p></td>
                                    <td class="text-center">
                                    
                                    <p>
                                        <strong>Rs.89</strong>
                                    </p></td>
                                </tr>

                                <tr>
                                    <td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">   </td>
                                    <td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">  </td>

                                    <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                    
                                    <td class="text-center text-danger">
                                        <h4><strong><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="1088" size="3" style="border: none;background: #f5f5f5" ></strong></h4>
                                        
                                    </td>
                                   
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                    <!---<form method="POST" action="pgRedirect.php">
                        <td class="text-right"><h4><strong>Enter your registered E-mail: </strong></h4></td>
                        <h4><strong><input tabindex="10" type="text" name="E_mail" value="" size="30" style="border: border: 4px dotted black;background: #f4f4f4" ></strong></h4>
                        <label for="E_mail">First Name</label>
                        <input type="email" class="form-control" id="E_mail" name="E_mail"/>
                        <input type="submit" value="Submit">
                        <br>
                    </form> -->
                        <button type="submit" value="CheckOut"  class="btn btn-success btn-lg btn-block">
                            Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>

                        </button></td>
                        
                    </div>
</form>
                    <!---<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
                    <form method="POST" action="callback.php" target="hiddenFrame">
                        <td class="text-right"><h4><strong>Enter your registered E-mail: </strong></h4></td>
                        <h4><strong><input tabindex="10" type="text" name="E_mail" value="" size="30" style="border: border: 4px dotted black;background: #f4f4f4" ></strong></h4> 
                        <label for="E_mail">First Name</label>
                        <input type="text" class="form-control" id="E_mail" name="E_mail"/>
                        <input type="submit" value="Submit">
                        <br>-->
</form>
                </div>
    


    </div>
    </body>