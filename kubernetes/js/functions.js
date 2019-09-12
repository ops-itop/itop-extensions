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

function KubernetesAceInit(height, theme) {
	var editor = $('textarea[name=attr_secret]');
	if(editor.length<=0) {
		return 1;
	}
	var fullscreen_button = editor.parent().find("span.fullscreen_button");
	fullscreen_button.off('click');

	var editor_id = editor.attr('id');
	editor.css('display', 'none');

	var aceDiv = document.createElement('div');
	aceDiv.id="ace_editor_" + editor_id;
	aceDiv.style.minHeight = height;
	aceDiv.style.height = "100%";
	aceDiv.style.width = "100%";
	editor.parent().append(aceDiv);

	var aceEditor = ace.edit(aceDiv.id);
	aceEditor.setValue(editor.val());
	aceEditor.getSession().setMode("ace/mode/yaml");
	aceEditor.setTheme("ace/theme/" + theme);
	aceEditor.setHighlightActiveLine(true);
	aceEditor.getSession().setUseWrapMode(true);
	aceEditor.setFontSize("14px");
	aceEditor.getSession().on("change", function(e) {
		editor.val(aceEditor.getValue());
	});

	// fullscreen
	fullscreen_button.on('click',function() {
		var stat = editor.parent().fullScreen();
		if(!stat) {
			editor.parent().fullScreen(true);
			editor.parent().addClass('fullscreen');
		} else {
			editor.parent().fullScreen(false);
			editor.parent().removeClass('fullscreen');
		}
		aceEditor.resize();
	});
}

function KubernetesHighlight() {
	hljs.configure({useBR: true, languages: ["yaml"]});
	var secret = $("div[data-attcode=secret]");
	if(secret.length>0) {
		var block = secret.find('.field_value').find('div');
		var width = block.width();
		block.html('<pre>' + block.html() + '</pre>');
		var code = block.find('pre');
		code.width(width);
		hljs.highlightBlock(code[0]);
	}
}

function KubernetesStatusHighlight(state) {
	var block = $("div[data-attcode=status]").find('.field_value');
	if(block.text() != state) {
		block.css("background-color", "red");
		block.css("color", "white");
		block.css("font-weight", "bold");
		block.css("letter-spacing", "6px");
	}
}

function CustomCert() {
	var certname = $('[data-attcode=cert_name]');
	function DisplayCertName() {
		var customcert = $('[name=attr_custom_cert]').val();
		certname.hide();
		if(customcert == 'yes') {
			certname.show();
		}
	}
	DisplayCertName();
	$('[name=attr_custom_cert]').bind('change', DisplayCertName);
}