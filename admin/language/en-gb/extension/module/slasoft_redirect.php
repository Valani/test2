<?php
// Heading
$_['heading_title']                    = 'SlaSoft Redirect manager';
$_['heading_add']                      = 'Redirect manager - add Rule';
$_['heading_edit']                     = 'Redirect manager - edit Rule';

//Text
$_['text_enabled']                     = 'Enable';
$_['text_disabled']                    = 'Disable';
$_['text_remove_redirect']             = 'Remove';
$_['text_export']                      = 'Export';
$_['text_import']                      = 'Import';
$_['text_import_file']                 = 'File of import';
$_['text_import_delimiter']            = 'Delimiter';
$_['text_import_delimiter_tab']        = 'Tab';
$_['text_import_delimiter_coma']       = 'Coma';
$_['text_import_delimiter_semicolon']  = 'Semicolon';
$_['text_success_update']              = 'Data successfully updated';
$_['text_success_save']                = 'Rule successfully added';
$_['text_success_remove']              = 'Rule successfully removed';
$_['text_return_to_main']              = 'Return to list of rules';
$_['text_result_all']                  = 'Number of records';
$_['text_result_update']               = 'Update records';
$_['text_result_insert']               = 'Insert records';
$_['text_result_remove']               = 'Remove records';
$_['text_result_error']                = 'Error records';
$_['text_remove_redirect_text']        = 'Are you sure you want to remove this element?';
$_['text_clear_list']                  = 'Are you sure you want to clear ALL rules?';
$_['text_sure']                        = 'Are you sure?';
$_['text_module']                      = 'Modules';
$_['text_result_check']                = 'Result of check responce code';
$_['text_success_result_all']          = 'Total processed: ';
$_['text_success_result_insert']       = 'Total added: ';
$_['text_success_result_update']       = 'Total refurbished: ';
$_['text_success_result_remove']       = 'Total deleted: ';
$_['text_success_result_error']        = 'Total errors: ';

// Tab
$_['tab_list']                         = 'List of rules';
$_['tab_settings']                     = 'Settings';
$_['tab_help']                         = 'Help / Support';

// Entry
$_['entry_from_url']                   = 'From url';
$_['entry_to_url']                     = 'To url';
$_['entry_code']                       = 'HTTP server code';
$_['entry_status']                     = 'Status';
$_['entry_templates']                  = 'Alternate template 404 page';
$_['entry_import_file']                = 'Import file';
$_['entry_import_delimiter']           = 'Delimiter';
$_['entry_change']                     = 'Добавлять изменение в url';
$_['entry_delete']                     = 'Добавлять 410 при удалении';

$_['column_from_url']                  = 'From url';
$_['column_to_url']                    = 'To url';
$_['column_code']                      = 'HTTP server code';
$_['column_status']                    = 'Status';
$_['column_action']                    = 'Action';
$_['column_qnt']                       = 'Qnt';
$_['column_last_date']                 = 'Last date';

// buttons
$_['button_close']                     = 'Close';
$_['button_filter']                    = 'Filter';
$_['button_check']                     = 'Check Rule';

// codes
$_['codes'][301]                       = 'Moved Permanently';
$_['codes'][302]                       = 'Temporary Redirect';
$_['codes'][410]                       = 'Not Found (GONE)';


// errors 
$_['error_from_url']                   = 'The \'From url\' is entered incorrectly';
$_['error_from_url_exists']            = 'The \'From url\' exists';
$_['error_protocol_from_url']          = 'The \'From url\' field can not contain http(s)://';
$_['error_to_url']                     = 'The \'To url\' is entered incorrectly';
$_['error_code']                       = 'The \'HTTP server code\' is entered incorrectly';
$_['error_enabled']                    = 'The \'Status\' is entered incorrectly';
$_['error_uploadfile']                 = 'The file was not loaded';
$_['error_data']                       = 'Incorrect data in line %s';

//help
$_['help_404_description']             = 'При удалении товара регистрировать в таблице для 410 ответа';
$_['help_change']                      = 'При измении URL товара регистрировать для 301 ответа';
$_['help_to_url']                      = 'You can specify the address of the external site with http(s) ';
$_['help_from_url']                    = 'Specify the address without http(s) the protocol and without site name';
$_['help_text']                        = '
<p>The module adds to the OpenCart redirects from the pages on the inside.</p>
<h3>Where and When can be used</h3>
<p>If you create a new structure of the website or transfer a website from another engine (CMS) 
this module will help You painless to create a list of redirects from one URL to another. <br>
As there may be occasions when your website had the wrong link, misspelled, Then you can 
to redirect visitors to the correct page.
</p>
<p>The module supports the following HTTP servers codes:</p>
<ol>
   <li>301 - Moved permanently<br>
 This is the recommended code for pages that need to redirect and you are sure that this page is not and never will be.
 </li>
   <li>302 - Moved temporarily<br>
 Code for pages which may temporarily absent, for example a product page, which was previously and will probably appear in the future.
 </li>
   <li>410 - Page not found (Gone)<br>
 This code is for &quot;Strong&quot; removal. It is considered that the substation itself will deal with pages NOT FOUND, but 
 the practice of the 404 page stay in the index. and 410 helps them faster to throw them out.
 </li>
   <li>404 - Page not found. This code is left for the future.</li>
   <li>403 - Access denied. Very often your website test different scripts, known addresses.
 Such visits are getting basically a 404 error, But this creates a small but load. To prevent such a situation and 
 used a response code.
 </li>
</ol>

<p>The module has the ability to use regular expressions in the redirect rules</p>
<p>For example:</p>
<table class="table-bordered table-striped table-condensed">
	<tr>
		<th>Rule for <br>old url</th>
		<th>Review</tр>
		<th>Example</th>
	</tr>
	<tr>
		<td>old-url/?</td>
		<td>doesn\'t matter, there is a slash at the end of the URL or not.</td>
		<td>catalog/ =&gt; new-url<br>
 catalog =&gt; new-url
 </td>
	</tr>
	<tr>
		<td>old-url/[a-zA-Z]+/?</td>
		<td>any word that contains letters, both lowercase and uppercase</td>
		<td>category/aBcDe/ =&gt; new-url<br>
 category/aBcDefght =&gt; new-url
 </td>
	</tr>
	<tr>
		<td>old-url/(1/2|x)/?</td>
		<td>the word between the brackets can contain only the number 1 or 2 or the x</td>
		<td>item/1/<br>
 item/2/<br>
 item/x<br>	
		</td>
	</tr>
	<tr>
		<td>old-url/.{1,5}/?</td>
		<td>any characters in from one to five</td>
		<td>product/234/<br>
 product/xyzwe<br>
		</td>
	</tr>
	<tr>
		<td>old-url/.{5}/?</td>
		<td>any word consisting of 5 characters </td>
		<td>some-url/abcde/<br>
 some-url/12345<br></td>
	</tr>
</table>

';