<?php 

if($_SESSION['top'] > 200 || $_SESSION['top'] =='' || $_SESSION['top'] == NULL)
{
$_SESSION['top'] = 20;
}
else
{
$_SESSION['top'] = $_SESSION['top']+20;	
}
?>
 <div class="footer fixed">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company © 2014-2018
            </div>
        </div>

</div>

<script src="<?php echo $this->config->item('admin_js_path');?>bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo $this->config->item('admin_js_path');?>inspinia.js"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>plugins/pace/pace.min.js"></script>

<!-- jquery UI -->
    <script src="<?php echo $this->config->item('admin_js_path');?>plugins/jquery-ui/jquery-ui.min.js"></script>
     <!-- Jquery Validate -->
	    <script src="<?php echo $this->config->item('admin_js_path');?>plugins/validate/jquery.validate.min.js"></script>

<!-- Data table UI -->
    <script src="<?php echo $this->config->item('admin_js_path');?>plugins/dataTables/datatables.min.js"></script>

	<!-- Select2 -->
    <script src="<?php echo $this->config->item('admin_js_path');?>plugins/select2/select2.full.min.js"></script>

	
<!-- toaster UI -->
    <script src="<?php echo $this->config->item('admin_js_path');?>plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path'); ?>plugins/chosen/chosen.jquery.js"></script>

<!-- ADDITIONAL JS -->
    <script src="<?php echo $this->config->item('admin_js_path');?>popper.min.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.metisMenu.js"></script>

    <!-- Flot -->
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.spline.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.resize.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.pie.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.flot.symbol.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>curvedLines.js"></script>

    <!-- Peity -->
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.peity.min.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo $this->config->item('admin_js_path');?>inspinia.js"></script>
    <script src="<?php echo $this->config->item('admin_js_path');?>pace.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo $this->config->item('admin_js_path');?>jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo $this->config->item('admin_js_path');?>sparkline-demo.js"></script>
    <script>
$(document).on('keypress',function(e) {
    if(e.which == 61 || e.which == 43) {
		i = Math.random();
        window.open('<?php echo site_url('window').'?i=';?>'+i,'pagename'+i,'resizable,height=500,width=1200,top=<?php echo $_SESSION['top'];?>, left=<?php echo $_SESSION['top'];?>');
    }
});
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
		window.close();
    }
};

</script>
<script>
var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
		
		 var specialKeys1 = new Array();
		 specialKeys1.push(8); //Backspace
		 specialKeys1.push(46); //Delete
		 specialKeys1.push(36); //Home
        specialKeys1.push(35); //End
        specialKeys1.push(37); //Left
        specialKeys1.push(39); //Right
function isNumber(e) {
   if(e.keyCode == 9){return true;}
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (specialKeys1.indexOf(e.keyCode) != -1 ) );// 
            //document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
}
</script>
</body>