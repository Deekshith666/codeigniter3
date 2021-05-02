<?php
if($_SESSION['top'])
{
    if($_SESSION['top'] > 200 || $_SESSION['top'] =='' || $_SESSION['top'] == NULL)
    {
    $_SESSION['top'] = 20;
    }
    else
    {
    $_SESSION['top'] = $_SESSION['top']+20;	
    }
}
else
{
    $_SESSION['top'] = 20;
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

<script src="<?php echo $this->config->item('admin_js_path');?>bootstrap.js"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>jquery.metisMenu"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>jquery.slimscroll.min"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo $this->config->item('admin_js_path');?>inspinia.js"></script>    
<script>
$(document).on('keypress',function(e) {
    if(e.which == 61 || e.which == 43) {
		i = Math.random();
        top = "<?php echo $_SESSION['top'];?>";
        left = "<?php echo $_SESSION['top'];?>";
window.open('<?php echo site_url('window').'?i=';?>'+i,'pagename'+i,'resizable,height=500,width=1200,top='+top+', left='+left);
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
function IsNumeric(e) {
   if(e.keyCode == 9){return true;}
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (specialKeys1.indexOf(e.keyCode) != -1 ) );// 
            //document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
}
</script>
<script src="<?php echo $this->config->item('admin_js_path');?>datatables.min.js"></script>
<script src="<?php echo $this->config->item('admin_js_path');?>dataTables.bootstrap4.min.js"></script>

</body>