/* === SIDEBAR === */
$('.toogle').on('click', function() {
	$('.body').toggleClass('slide');
	$('.sidebar').toggleClass('show');
	$('.toogle i').toggleClass('fa-chevron-left fa-chevron-right');
});
/* === END SIDEBAR === */	

/*====JQuery DataTable Plugin===*/
$('.solsoTable').dataTable();


/* === USE MODALS === */
$(document).on('click', '.solsoShowModal', function(){
	var modalTitle = $(this).attr('data-modal-title');
	
	$.ajax({
		url:$(this).attr('data-href'),
		dataType: 'html',
		success:function(data) {
			$('.solsoModalTitle').text(modalTitle.toString());
			//$('.solsoModalTitle').html(modalTitle)
			$('.solsoShowForm').html(data);
		}
	});
});

/* ==== Event Submit Client Form ===*/
$( document ).on('click', '.solsoSave', function(e){
	e.preventDefault();
	var solsoSelector 	= $(this);
	var solsoFormAction   = $('.solsoForm').attr('action');
	var solsoFormMethod = $('.solsoForm').attr('method');
	var solsoFormData	= $('.solsoForm').serialize();
	//var name = $('.solsoForm').attr('name').val();
	//alert(solsoFormData);

	$.ajax({
		url: solsoFormAction,
		type: solsoFormMethod,
		data: solsoFormData,
		cache: 	false,
		dataType: 'html',
		success:function(data) {
			if (data == 0) {
				console.log('error');
			}else{
				if ($(data).filter('table.solsoRefresh').length == 1) {
					//alert("OK");
					$('#solsoCrudModal').modal('hide'); // ปิด modal
					$('#ajaxTable').html(data);
					$('#countClients').text( $('.solsoTable').attr('data-all') ); // นับจำนวน Record ในตารางใหม่
					$.growl.notice({ 
						title: solsoSelector.attr('data-message-title'), 
					 	message: solsoSelector.attr('data-message-success') 
					});
				}else {
					$('.solsoShowForm').html(data);
					$.growl.error({ 
						title: solsoSelector.attr('data-message-title'), 
					 	message: solsoSelector.attr('data-message-error') 
					});
				}

				
			}
		}
	});
});
