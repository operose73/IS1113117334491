<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">

            <!-- Adding a radio button for salesforce -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
            
            <!-- Adding a radio button for Amazon Web Services -->
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
            <!-- Adding a radio button for Cloud 9 -->
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
            <!-- Adding a radio button for Gmail -->
            <label for="Gmail">
                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
            <!--Adding a textbox for the Subtotal  -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Adding a textbox for the Discount  -->
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Adding a textbox for the VAT  -->
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
           
            <!-- Adding a textbox for the total -->
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
            <!-- Adding the button to proceed -->
            <button type="submit" id="btnProceed" class="button" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>