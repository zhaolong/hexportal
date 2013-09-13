/*
 */
 
 var jAlert;
 jQuery(document).ready(function(){
	jAlert = function(msg,b,c){
		if(jQuery('.jalert-content').length == 0){
			var html = "";
			html = '<div class="window-overlay jalert-content" style="display:none;">'
				+ '<div class="modal jalert-modal" style="width: 400px; height:auto;min-height:150px; margin-left: -200px;margin-top: -100px; top: 50%;">'
				+'<div class="modal-header">'
				+'<h4>提示</h4><a href="#" class="close"><span class="icon-close icon-Large"></span></a>'
				+'</div>'
				+'<div class="modal-content" id="tip-content">'
				+'	<div class="table-inner">'
				+'<div class="title">'
				+'<h4></h4>'
				+'</div>'
				+'</div>'
				+'</div>'
				+'<div class="modal-footer" style="text-align: right;">'
				+'<a href="javascript:void(0);" class="btn btn-primary">确认</a>'
				+'<a href="javascript:void(0);" class="btn">关闭</a>'
				+'</div>'
				+'</div>'
				+'</div>';
			jQuery('body').append(html);
		}
		jQuery('#tip-content div.table-inner div.title h4').html(msg);
		jQuery('.jalert-modal .modal-header h4').html("提示");
		if(typeof(b)=="string"){
			jQuery('.jalert-modal .modal-header h4').html(b);
		}
		else if(typeof(b)=="function"){
			jQuery('.jalert-content .jalert-modal .modal-footer .btn.btn-primary').unbind('click').click(function(){
				b();
			});
		}
		if(typeof(c)=="function"){
			jQuery('.jalert-content .jalert-modal .modal-footer .btn.btn-primary').unbind('click').click(function(){
				c();
			});		
		}
		jQuery('.jalert-content .jalert-modal .modal-header .close,.jalert-content .jalert-modal .modal-footer .btn').click(function(){
			jQuery('.jalert-content').hide();
		});
		jQuery('.jalert-content').show();
	};
 })