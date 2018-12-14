function Kubernetes_IngressWarning(title, content, ok='OK', cancel='Cancel', theme='modern', icon='', width='30%') {
	function IngressWarningBind() {
	   var cType = $('[name=attr_type]').val();
		$('[type=submit]').off('click', IngressWarningShow);
		var orgButton=$('button[class=action]');
		orgButton.attr('type','submit');
		if(cType != sType) {
			orgButton.attr('type', 'button');
			orgButton.on('click', IngressWarningShow);
		}
	}
	function IngressWarningShow(e) {
		$.confirm({
			theme: theme,
			icon: icon,
			title: title,
			onClose:function(){$('button[class=action]').attr('type','submit');},
			type: 'red',
			useBootstrap: false,
			boxWidth: width,
			content: content,
			buttons:{
				ok:{btnClass:'btn btn-red',text: ok,action:function(){$(e.currentTarget).parent().submit();}},
				cancel:{btnClass:'btn-green',text: cancel,action:function(){$('button.cancel').click();}}
			}
		})
	}
	
	var sType = $('[name=attr_type]').val();
	$('[name=attr_type]').on('change', IngressWarningBind);	
}