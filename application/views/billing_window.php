<script src="<?php echo $this->config->item('admin_js_path');?>jquery-3.1.1.min.js"></script>
<?php 
$_SESSION['top'] = $_SESSION['top'] + 20;
$_SESSION['left'] = $_SESSION['left'] + 20;
if($_SESSION['top'] > 200)
{
	$_SESSION['top'] = '20';
	$_SESSION['left'] = '20';
}
?>
<script>
var i = "<?php echo $_GET['i'];?>";
$(document).on('keypress',function(e) {
    if(e.which == 61 || e.which == 43) {
		i = parseInt(i)+Math.random();
        window.open('<?php echo site_url('window').'?i=';?>'+i,'pagename'+i,'resizable,height=500,width=700,top=<?php echo $_SESSION['top'];?>, left=<?php echo $_SESSION['left'];?>');
    }
});
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
		window.close();
    }
};
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
                <div class="col-md-1" ><b>Tax %</b></div>
                <div class="col-md-1" ><b>Tax Amt</b></div>
                <div class="col-md-1" ><b>Net Amount</b></div>
                <div class="col-md-1" ><b>Action</b></div>
            </div>
        </div>
    </div>    
</div>