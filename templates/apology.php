<div class="row">
		<fieldset class="fieldset fieldset1">
			
			
			<div class="msgApology alert alert-danger alert-dismissible animated bounceIn" role="alert">
                <button id="close_apology" type="button" class="closebtn close" >
                <span >×</span>
                </button>
                 <?= htmlspecialchars($message) ?>
            </div>
            
			<!-- <a class='btn btn-danger btn-lg' href="javascript:history.go(-1);">Retour</a> 

			data-dismiss="alert" aria-label="Close"
				aria-hidden="true"
			-->
		</fieldset>

			
	
</div>
<!--link href="css/app_1.min1.css" rel="stylesheet">
<link href="css/demo1.css" rel="stylesheet">
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
       	<script src="js/app.min.js"></script>-->
        
        <script type="text/javascript">
        $(document).ready(function(){
        	$(".closebtn").click(function(){
		
		//$(".msgApology").addClass("bounceOutDown");
		$(".msgApology").addClass("fadeOutUpBig");
		$(".msgApology").removeClass("bounceIn");
		//$(".msgApology#close_apology").css("display","none");
		console.log("ok")
	});

        });
        </script>


