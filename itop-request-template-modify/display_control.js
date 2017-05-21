$().ready(function(){
	$("div[data-field-id='request_template_ip_textarea']").attr("style", "display:none");
});

$("div[data-field-id=request_template_ip_textarea]").hide();
function displayList()
{
	$("#le_server_accounts_request").attr("style", "display:block");
	$("div[data-field-id=request_template_ip_textarea]").attr("style", "display:none");
}
function displayTextarea()
{
	$("#le_server_accounts_request").attr("style", "display:none");
	$("div[data-field-id=request_template_ip_textarea]").attr("style", "display:block");					
}

