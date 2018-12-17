function KubernetesAceInit(height, theme) {
	var editor = $('textarea[id$=secret]');
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
	hljs.configure({useBR: true});
	var secret = $("div[data-attcode=secret]");
	if(secret.length>0) {
		var block = secret.find('.field_value').find('div');
		block.html('<pre>' + block.html() + '</pre>');
		hljs.highlightBlock(block.find('pre')[0]);
	}
}