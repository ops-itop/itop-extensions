// (c) Combodo SARL 2011 - 2016

function SelectPrecannedReply(sLogAttCode)
{
	if ($('#precanned_button').attr('disabled')) return; // Disabled, do nothing
	if ($('#precanned_dlg').length == 0)
	{
		$('body').append('<div id="precanned_dlg"></div>');
	}
	$('#precanned_button').attr('disabled', 'disabled');
	$('#v_precanned').html('<img src="../images/indicator.gif" />');

	oWizardHelper.UpdateWizard();
	var theMap = { 'json': oWizardHelper.ToJSON(),
			   operation: 'select_precanned',
			   log_attcode: sLogAttCode
			 };
	
	// Run the query and get the result back directly in HTML
	$.post( AddAppContext(GetAbsoluteUrlModulesRoot()+'precanned-replies/ajax.php'), theMap, 
		function(data)
		{
			var dlg = $('#precanned_dlg');
			dlg.html(data);
			dlg.dialog({ width: 'auto', height: 'auto', autoOpen: false, modal: true, title: Dict.S('UI:Dlg-PickAReply'), resizeStop: function(event, ui) { PrecannedUpdateSizes(); }, close: function() {OnClosePrecannedReply(sLogAttCode);} });
			var data_area = $('#dr_precanned_select');
			data_area.css('max-height', (0.5*$(document).height())+'px'); // Stay within the document's boundaries
			data_area.css('overflow', 'auto'); // Stay within the document's boundaries
			dlg.dialog('open');
			PrecannedDoSearch(sLogAttCode);
			$('#precanned_select').resize(function() { PrecannedUpdateSizes(); });
		},
		'html'
	);
}

function OnClosePrecannedReply(sLogAttCode)
{
	$('#precanned_button').removeAttr('disabled');
	$('#v_precanned').html('');
}

function PrecannedDoSelect(sLogAttCode)
{
	var selected = $('#datatable_precanned_select_results .listResults input:checked');
	if (selected.length > 0)
	{
		var aSelected = new Array();
		var index = 0;
		selected.each( function () { aSelected[index++] = this.value; });

		oWizardHelper.UpdateWizard();
		var theMap = { 'json': oWizardHelper.ToJSON(),
			operation: 'add_precanned',
			selected: aSelected,
			log_attcode: sLogAttCode
		 };
		
		// Run the query and get the result back directly in HTML
		$.post( AddAppContext(GetAbsoluteUrlModulesRoot()+'precanned-replies/ajax.php'), theMap, 
			function(aJson)
			{
				var sText = aJson[0].text;
				var iPrecannedId = aJson[0].id;
				var sPrevVal = $('#2_'+sLogAttCode).val();
				if (sPrevVal != '')
				{
					sPrevVal = '\n'+sPrevVal;
				}
				$('#2_'+sLogAttCode).val(sText+sPrevVal);
				var aFiles = aJson[0].files;
				var index = 0;
				while(index < aFiles.length)
				{
					$('#emry_event_bus_'+sLogAttCode).trigger('add_blob', [
						aFiles[index]['container_class'],
						aFiles[index]['container_id'],
						aFiles[index]['blob_attcode'],
						aFiles[index]['file_name']
					])
					index++;
				}
				$('#emry_enabled_'+sLogAttCode).attr('checked', true);
			},
			'json'
		);
	
	
	}
	var dlg = $('#precanned_dlg');
	dlg.dialog('close');
	dlg.html('');
}

function PrecannedDoSearch(sLogAttCode)
{
	var theMap = {};

	// Gather the parameters from the search form
	$('#fs_precanned_select :input').each( function() {
		if (this.name != '')
		{
			var val = $(this).val(); // supports multiselect as well
			if (val !== null)
			{
				theMap[this.name] = val;					
			}
		}
	});
	theMap['operation'] = 'search_precanned';
	theMap['log_attcode'] = sLogAttCode;
	
	// Run the query and get the result back directly in HTML
	$.post( AddAppContext(GetAbsoluteUrlModulesRoot()+'precanned-replies/ajax.php'), theMap, 
		function(data)
		{
			var res = $('#dr_precanned_select');
			res.html(data);
			PrecannedUpdateSizes();
		},
		'html'
	);
	return false; // Stay on page
}

function PrecannedUpdateSizes()
{
	var dlg = $('#precanned_dlg');
	// Adjust the dialog's size to fit into the screen
	dlg.dialog('option', 'position', 'center');
	
	var searchForm = $('#precanned_select');
	var results = $('#fr_precanned_select');
	
	var padding_right = 0;
	if (dlg.css('padding-right'))
	{
		padding_right = parseInt(dlg.css('padding-right').replace('px', ''));			
	}
	var padding_left = 0;
	if (dlg.css('padding-left'))
	{
		padding_left = parseInt(dlg.css('padding-left').replace('px', ''));			
	}
	var padding_top = 0;
	if (dlg.css('padding-top'))
	{
		padding_top = parseInt(dlg.css('padding-top').replace('px', ''));			
	}
	var padding_bottom = 0;
	if (dlg.css('padding-bottom'))
	{
		padding_bottom = parseInt(dlg.css('padding-bottom').replace('px', ''));			
	}
	width = dlg.innerWidth() - padding_right - padding_left - 22; // 5 (margin-left) + 5 (padding-left) + 5 (padding-right) + 5 (margin-right) + 2 for rounding !
	height = dlg.innerHeight() - padding_top - padding_bottom -22;
	height = Math.max(height, 350); // Ensure there is enough space for at least one line...
	wizard = dlg.find('.wizContainer:first');
	wizard.width(Math.max(wizard.width(), width+22));
	wizard.height(height);
	form_height = searchForm.outerHeight();
	results.height(height - form_height - 40); // Leave some space for the buttons
}
