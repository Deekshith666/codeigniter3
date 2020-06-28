<style>
body {background-color: white;}
</style>
<script>
  $( function() { 
    $( "#Item" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "<?php echo site_url('ajax/getProduct');?>",
		  method: "post",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( data ) {
            response( data );
          }
        } );
      },
      minLength: 2,
      select: function( event, ui ) {
        //console.log( "Selected: " + ui.item.value + " aka " + ui.item.id );
		document.getElementById('item_id').value = ui.item.id;
		document.getElementById('Rate').value = ui.item.rate;
		document.getElementById('Qty').focus();
      }
    } );
  } );
  </script>
<script>
	
	function checkEnter1(e)
	{
		var x = e.keyCode;
		if(x == 13){document.getElementById('add_btn').focus()  ;}
	}
	function checkEnter2(e,val)
	{
		if(val != '')
		{
		var x = e.keyCode;
		if(x == 13){document.getElementById('add_btn').focus()  ;}
		}
	}
</script>

<div class="wrapper wrapper-content">
    <div class="form-group row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-3" ><b>Item</b></div>
                <div class="col-md-1" ><b>Quantity</b></div>
                <div class="col-md-1" ><b>Rate</b></div>
                <div class="col-md-1" ><b>Total</b></div>
                <div class="col-md-1" ><b>Discount</b></div>
                <div class="col-md-1" ><b>Tax&nbsp;%</b></div>
                <div class="col-md-1" ><b>Tax&nbsp;Amt</b></div>
                <div class="col-md-2" ><b>Net&nbsp;Amount</b></div>
                <div class="col-md-1" ><b></b></div>
            </div>
        </div>
        		     
             
        <div class="col-sm-12">
        <div class="row">
            <div class="col-md-3" >
            <input id="Item" name="Item" placeholder='Type Item Name' type="text" class="biginput form-control" >
            <input type="hidden" name="item_id" id="item_id" value="1">                     
            </div>
            
            <div class="col-md-1" >
            <input id="Qty" placeholder='Qty' class="form-control" name="Qty" type="text" onchange="calc()" onkeypress="return isNumber(event)" onkeyup="checkEnter2(event,this.value)" value=""/>
            </div>
            <div class="col-md-1" >
            <input id="Rate" placeholder='Rate' class="form-control" name="Rate" type="text" onchange="calc()" onkeypress="return isNumber(event)" />
            </div>
            <div class="col-md-1" >
            <input id="Total" placeholder='Total' class="form-control" name="Total" type="text" onkeypress="return isNumber(event)" />
            </div>
            <div class="col-md-1" >
            <input id="Disc" placeholder='Disc' class="form-control" name="Disc" type="text" value="0" onchange="calc()" onkeypress="return isNumber(event)" />
            </div>
            <div class="col-md-1" >
            <input id="vat_perc" placeholder='Tax %' class="form-control" name="vat_perc" type="text" value="0" onchange="calc()" onkeypress="return isNumber(event)" />
            </div>
            <div class="col-md-1" >
            <input id="tax_amt" placeholder='Tax in Amount' class="form-control" name="tax_amt" type="text" value="0" onkeypress="return isNumber(event)"/>
            </div>
            <div class="col-md-1" >
            <input id="Net_Amount" placeholder='Net' class="form-control" name="Net_Amount" type="text" onkeypress="return isNumber(event)"/>
            </div>
            <div class="col-md-1" >
            <input class="btn btn-sm btn-primary float-right m-t-n-xs"  id="add_btn" type="button" value="Add" onclick="add()"/>
            </div>
            
         </div>
        </div>
      
       
        <div class='col-sm-12' style='padding-top:25px;padding-bottom:1px' id="total_div"></div>
        <input type="hidden" name="i" id="i" value="0"/>
        <div class="col-sm-12" style="padding-top:25px;padding-bottom:1px">
        	<div class="row">
            
                <div class="col-md-3" ></div>
                <!--<div class="col-md-1" ></div>-->
                <div class="col-md-1" >
                <span id="total_qty"></span>
                </div>
                <div class="col-md-1" ></div>    
                <div class="col-md-1" >
                <span id="total_total"></span>
                </div>
                <div class="col-md-1" >
                <span id="total_disc"></span>
                </div>
                <div class="col-md-1" ></div>
                <div class="col-md-1" >
                <span id="total_tax"></span>  
                </div>
                <div class="col-md-1" >
               <span id="total_net_amt"></span>
               <input type="hidden" name="total1" id="total1"/>
               <input type="hidden" name="total_disc1" id="total_disc1"/>
               <input type="hidden" name="total_tax1" id="total_tax1"/>
               <input type="hidden" name="net_total1" id="net_total1"/>
               
                </div>
                <div class="col-md-1" ></div>
                
            </div>
        </div>
        <div class="col-md-12" style="padding-top:25px;padding-bottom:1px">
        <div class="row">
            <div class="col-md-3" ></div>
            <!--<div class="col-md-1" ></div>-->
            <div class="col-md-1" >
            <span id=""></span>
            </div>
            <div class="col-md-1" ></div>    
            <div class="col-md-1" >
            <span id=""></span>
            </div>    <div class="col-md-1" >
            <span id=""></span>
            </div>
            <div class="col-md-1" >
            <input class="form-control" type="text"  placeholder="Cash" id="cash_paid" onkeypress="return isNumber(event)" name="cash_paid"/>
            </div>
            <div class="col-md-1" >
            <input class="form-control" type="text"  placeholder="NEFT"  id="neft_paid" onkeypress="return isNumber(event)" name="neft_paid"/>  
            </div>
            <div class="col-md-1" >
            <input class="form-control" type="text"  placeholder="Return" id="return_payable" onkeypress="return isNumber(event)" name="return_payable"/>
            </div>
            <div class="col-md-1" >
            <input class="btn btn-lg btn-primary float-right m-t-n-xs"  name="" type="button" value="Save" onclick="save()"/>
            </div>
            </div>
        </div>
             
               

    </div>    
</div>

<script>
function save()
{
	var i = document.getElementById('i').value;
	var Party_FK = document.getElementById('Party_FK').value;
	if(i == '')
	{
		alert("Please select any item")
		document.getElementById('Item').focus();
		return;
	}
	else if(Party_FK == '')
	{
		alert("Please select partner")
		document.getElementById('autocomplete').focus();
		return;
	}
	if(i > 0 && Party_FK != ''){document.getElementById('main_form').submit();}
	
}
function calc()
{
	var Qty 		= document.getElementById('Qty').value;
	var vat_perc 	= document.getElementById('vat_perc').value;
	var Rate 		= document.getElementById('Rate').value;
	var Disc 		= document.getElementById('Disc').value;
	
	if(Qty == ''){Qty = 0;}if(vat_perc == ''){vat_perc = 0;}if(Rate == ''){Rate = 0;}if(Disc == ''){Disc = 0;}
	Total = parseFloat(Qty)*parseFloat(Rate);
	document.getElementById('Total').value = Total;
	tax_amt = (parseFloat(Total)*parseFloat(vat_perc))/100;
	document.getElementById('tax_amt').value = tax_amt;
	Net_Amount = parseFloat(Total)+parseFloat(tax_amt);
	document.getElementById('Net_Amount').value = Net_Amount - parseFloat(Disc);
	
}
function add()
{
	//var Description = document.getElementById('Description').value;
	var Item 		= document.getElementById('Item').value;
	var Qty 		= document.getElementById('Qty').value;
	var vat_perc 	= document.getElementById('vat_perc').value;
	var tax_amt 	= document.getElementById('tax_amt').value;
	var Rate 		= document.getElementById('Rate').value;
	var Total 		= document.getElementById('Total').value;
	var Disc 		= document.getElementById('Disc').value;
	var Net_Amount	= document.getElementById('Net_Amount').value;
	if(Item == '')
	{
		alert("Please select an Item")
		document.getElementById('Item').focus();
		return;
	}
	else if(Qty == '')
	{
		alert("Please enter quantity")
		document.getElementById('Qty').focus();
		return;
	}
	else if(Rate == '')
	{
		alert("Please enter Rate")
		document.getElementById('Rate').focus();
		return;
	}
	else if(Total == '')
	{
		alert("Please enter Total")
		document.getElementById('Total').focus();
		return;
	}
	else if(Net_Amount == '')
	{
		alert("Please enter Net Amount")
		document.getElementById('Net_Amount').focus();
		return;
	} 
	var i = document.getElementById('i').value;
	var item_id = document.getElementById('item_id').value;	

	i = parseInt(i) + 1;
	var innerValue 	= "<div class='row' id='innerDiv"+i+"'><div class='col-md-3' >"+i+"."+Item+"<input type='hidden'  value='"+item_id+"' id='Item"+i+"' name='Item"+i+"'  /><input type='hidden'  value='"+Item+"' id='Item_Name"+i+"' name='Item_Name"+i+"'  /></div>";
	//innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Description"+i+"'  value='"+Description+"' name='Description"+i+"' class='form-control' /></div>";	
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Qty"+i+"' name='Qty"+i+"'  value='"+Qty+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Rate"+i+"' name='Rate"+i+"'  value='"+Rate+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Total"+i+"' name='Total"+i+"'  value='"+Total+"' class='form-control'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Disc"+i+"' name='Disc"+i+"'   value='"+Disc+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='vat_perc"+i+"' name='vat_perc"+i+"'   value='"+vat_perc+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='tax_amt"+i+"' name='tax_amt"+i+"'  value='"+tax_amt+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Net_Amount"+i+"' name='Net_Amount"+i+"'  value='"+Net_Amount+"' class='form-control'/></div>";
	//innerValue 	= innerValue+"<div class='col-md-1' ><a href='javascript:void(0)' onclick='delete_row("+i+")'>Delete</a></div></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ></div></div>";
	
	document.getElementById('total_div').innerHTML = document.getElementById('total_div').innerHTML + innerValue;
	
	document.getElementById('i').value = parseInt(i);
	document.getElementById('Item').value = '';
	document.getElementById('Qty').value = '';
	document.getElementById('Rate').value = '';
	document.getElementById('Total').value = '';
	document.getElementById('Disc').value = '0';
	document.getElementById('tax_amt').value = '';
	document.getElementById('Net_Amount').value = '';
	//document.getElementById('Description').value = '';
	document.getElementById('Item').focus();
	total_calc()
}
function total_calc()
{
 	var i = document.getElementById('i').value;
	total_qty = 0;total_total = 0;total_disc = 0;total_tax = 0;total_net_amt = 0;
	for(var j = 1; j <= i;j++)
	{
	
		if(document.getElementById('Qty'+j).value != '')
		{
		total_qty = total_qty + parseFloat(document.getElementById('Qty'+j).value)
		}
		
		if(document.getElementById('Total'+j).value != '')
		{
		total_total = total_total + parseFloat(document.getElementById('Total'+j).value)
		}
		
		if(document.getElementById('Disc'+j).value != '')
		{
		total_disc = total_disc + parseFloat(document.getElementById('Disc'+j).value)
		}
		
		if(document.getElementById('tax_amt'+j).value != '')
		{
		total_tax = total_tax + parseFloat(document.getElementById('tax_amt'+j).value)
		}
		
		if(document.getElementById('Net_Amount'+j).value != '')
		{
		total_net_amt = total_net_amt + parseFloat(document.getElementById('Net_Amount'+j).value)
		}
	}
	
	//document.getElementById('total_qty').innerHTML = total_qty;
	document.getElementById('total_total').innerHTML = total_total;
	document.getElementById('total_disc').innerHTML = total_disc;
	document.getElementById('total_tax').innerHTML = total_tax;
	document.getElementById('total_net_amt').innerHTML = total_net_amt.toFixed(2);
	
	document.getElementById('total1').value = total_total;
	document.getElementById('total_disc1').value = total_disc;
	document.getElementById('total_tax1').value = total_tax;
	document.getElementById('net_total1').value = total_net_amt.toFixed(2);
	
	
}

function calc_i(i)
{
	var Qty 		= document.getElementById('Qty'+i).value;
	var vat_perc 	= document.getElementById('vat_perc'+i).value;
	var Rate 		= document.getElementById('Rate'+i).value;
	var Disc 		= document.getElementById('Disc'+i).value;
	
	var Total 		= document.getElementById('Total'+i).value;
	var tax_amt 	= document.getElementById('tax_amt'+i).value;
	var Net_Amount 	= document.getElementById('Net_Amount'+i).value;
	//var Description	= document.getElementById('Description'+i).value;
	
	var item_id	= document.getElementById('Item'+i).value;
	var Item_Name	= document.getElementById('Item_Name'+i).value;
	
	if(Qty == ''){Qty = 0;}if(vat_perc == ''){vat_perc = 0;}if(Rate == ''){Rate = 0;}if(Disc == ''){Disc = 0;}
	Total = parseFloat(Qty)*parseFloat(Rate);
	document.getElementById('Total'+i).value = Total;
	tax_amt = (parseFloat(Total)*parseFloat(vat_perc))/100;
	document.getElementById('tax_amt'+i).value = tax_amt;
	Net_Amount = parseFloat(Total)+parseFloat(tax_amt);
	document.getElementById('Net_Amount'+i).value = Net_Amount - parseFloat(Disc);
	
	
	var innerValue 	= "<div class='col-md-3' >"+i+"."+Item_Name+"<input type='hidden'  value='"+item_id+"' id='Item"+i+"' name='Item"+i+"'  /><input type='hidden'  value='"+Item_Name+"' id='Item_Name"+i+"' name='Item_Name"+i+"'  /></div>";
	//innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Description"+i+"'  value='"+Description+"' name='Description"+i+"' class='form-control' /></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='Qty"+i+"' name='Qty"+i+"'  value='"+Qty+"' class='form-control' onchange='calc_i("+i+")' /></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' id='Rate"+i+"' name='Rate"+i+"'  value='"+Rate+"' class='form-control' onchange='calc_i("+i+")' onkeypress='return isNumber(event)'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='Total"+i+"' name='Total"+i+"'  value='"+Total+"' class='form-control'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='Disc"+i+"' name='Disc"+i+"'   value='"+Disc+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='vat_perc"+i+"' name='vat_perc"+i+"'   value='"+vat_perc+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='tax_amt"+i+"' name='tax_amt"+i+"'  value='"+tax_amt+"' class='form-control' onchange='calc_i("+i+")'/></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ><input type='text' onkeypress='return isNumber(event)' id='Net_Amount"+i+"' name='Net_Amount"+i+"'  value='"+Net_Amount+"' class='form-control'/></div>";
	//innerValue 	= innerValue+"<div class='col-md-1' ><a href='javascript:void(0)' onclick='delete_row("+i+")'>Delete</a></div></div>";
	innerValue 	= innerValue+"<div class='col-md-1' ></div>";
	
	document.getElementById('innerDiv'+i).innerHTML = innerValue;
	
	
	total_calc();
}

function delete_row(i)
{
	document.getElementById("innerDiv"+i).remove();
	total_calc();
}
</script>
