/*///////////////////////////////////////////////////////////////////////Ported to jquery from prototype by Joel Lisenby (joel.lisenby@gmail.com)http://joellisenby.comoriginal prototype code by Aarron Walter (aarron@buildingfindablewebsites.com)http://buildingfindablewebsites.comDistrbuted under Creative Commons licensehttp://creativecommons.org/licenses/by-sa/3.0/us////////////////////////////////////////////////////////////////////////*/$(document).ready(function() {	$('#sm_form').submit(function() {		// update user interface		$('#response').html('Adding email address...');				// Prepare query string and send AJAX request		$.ajax({ 			url: 'inc/data.php',			data: 'ajax=true&email=' + escape($('#sm_email').val()) + 'ajax=true&text=' + escape($('#sm_name').val()),			success: function(msg) {				$('#response').html(msg);			}		});			return false;	});});