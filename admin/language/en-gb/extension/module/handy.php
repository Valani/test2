<?php

/**
 * @category   OpenCart
 * @package    Handy Product Manager
 * @copyright  © Serge Tkach, 2018–2024, https://sergetkach.com/
 */

// Heading
$_['heading_title']			 = 'Handy Product Manager';
$_['heading_title_2']		 = 'Handy Product Manager'; // conflict with product language file
$_['handy_title']				 = 'Settings = Handy Product Manager'; // conflict with product language file
$_['text_part_settings'] = 'Settings';

// Text
$_['text_extension']					 = 'Extensions';
$_['text_success']						 = 'Success: You have modified module settings!';
$_['text_edit']								 = 'Edit module settings';
$_['text_author']							 = 'Author';
$_['text_author_support']			 = 'Support';
$_['text_version']						 = 'Version: <b>%s</b>';
$_['check_license']						 = '☛ Be cautious with pirate copies! Verify the authenticity of your license by following the link — <a href="https://licence.sergetkach.com/check/license/%1$s">https://licence.sergetkach.com/check/license/%1$s</a>';
$_['text_as_is']							 = 'Original filename in translit';
$_['text_by_formula']					 = 'According to the formula in translit';
$_['text_input_licence_list']	 = 'For access the products list you must activate the license on the page with settings of extension';
$_['text_input_licence_mass']	 = 'For access the mass edit you must activate the license on the page with settings of extension';

$_['text_none']					 = '- Non selected -';
$_['handy_text_filled']	 = 'Заповнено';
$_['handy_text_empty']	 = 'Не заповнено';

// Button
$_['button_save']					 = 'Save';
$_['button_cancel']				 = 'Cancel';
$_['button_save_licence']	 = 'Save licence';

// Entry
$_['entry_licence']	 = 'Licence code';
$_['entry_status']	 = 'Status';
$_['entry_system']	 = 'OpenCart fork used'; // For OpenCart 2
$_['entry_debug']		 = 'Debug mode';
$_['help_debug']		 = 'If there will happen any error in time of mass generation of SEO URLs, logs will help to find place and reason of error. Logs are written to the folder ' . DIR_LOGS . '. Debug mode is recomended';
$_['debug_0']				 = 'Turn off logs';
$_['debug_1']				 = 'Error - record errors only';
$_['debug_2']				 = 'Info - record all actions';
$_['debug_3']				 = 'Debug - record actions and their data';
$_['debug_4']				 = 'Trace - record all data';

$_['fieldset_product_list']						 = 'Settings of product list';
$_['entry_product_list_field']				 = 'Enable fileds in the product list';
$_['entry_product_list_field_custom']	 = 'Custom fields';
$_['entry_product_list_limit']				 = 'Product list limit items';
$_['entry_model_automatic_change']		 = 'Automatically update matches in text fields when editing the model';
$_['entry_sku_automatic_change']			 = 'Automatically update matches in text fields when editing the SKU';
//$_['help_model_automatic_change']		 = '* After changing this setting, you need to refresh the Product List page';
//$_['help_sku_automatic_change']			 = '* After changing this setting, you need to refresh the Product List page';
$_['entry_product_edit_model_require'] = 'Field "Model" is required';
$_['entry_product_edit_sku_require']	 = 'Filed "Sku" set required';

if (version_compare(VERSION, '3.0.0.0') >= 0) {
	$_['entry_transliteration']		 = 'Transliteration settings for file name';
} else {
	$_['fieldset_translit']				 = 'Settings for SEO URL';
	$_['entry_transliteration']		 = 'Translit settings for SEO URL';
	$_['entry_translit_formula']	 = 'Translit formula for SEO URL of products';
}

$_['entry_language_id']				 = 'Source language';
$_['entry_translit_function']	 = 'Transliteration rules';

$_['fieldset_upload']							 = 'Settings for image upload';
$_['entry_upload_rename_mode']		 = 'Photo naming rules';
$_['entry_upload_rename_formula']	 = 'Formula for rename photo';
$_['entry_upload_max_size_in_mb']	 = 'Max filesize for upload in MB';
$_['entry_upload_mode']						 = 'Put images to folders';
$_['text_branch']									 = 'Branch folder "products" with numbers subfolders (1,2,3,..., n). Each subfolder can contain 100 files';
$_['text_dir_for_category']				 = 'Put image to folder with main category - need be SeoPro installed for follow main_category';

$_['fieldset_other']							 = 'Other settings';
$_['entry_categories_mode']				 = 'Category Display Mode';
$_['categories_mode_autocomplete'] = 'Autocomplete';
$_['categories_mode_tree_view']		 = 'Tree View';
$_['entry_price_prefixes']				 = 'Additional prefixes for options price';

// for OpenCart PRO
$_['entry_options_buy'] = 'Replace options with options with a buy button'; // ???

// Success
$_['success_licence'] = 'Success!';

// Error
$_['error_warning']									 = 'Somethis went wrong. Check all fields!';
$_['error_permission']							 = 'Warning: You do not have permission to modify this module!';
$_['error_licence']									 = 'Invalid licence code!';
$_['error_licence_empty']						 = 'Type licence code!';
$_['error_licence_not_valid']				 = 'Invalid licence code!';
$_['error_product_list_limit']			 = 'Products limit can\'t be empty!';
$_['error_product_list_limit_small'] = 'Products limit can\'t be less than 10!';
$_['error_product_list_limit_big']	 = 'Products limit can\'t be more than 500!';
$_['error_translit_formula_empry']	 = 'Type formula for transliteration!';
$_['error_rename_formula_empty']		 = 'Type formula for rename images';
$_['error_formula_less_vars']				 = 'Follow even 1 var in formula!';
$_['error_formula_pattern']					 = 'Follow in formula only available vars and char -';
$_['error_max_size_in_mb']					 = 'Type max filesize for image on upload';




/* For Column Left
  ----------------------------------------------------------------------------- */
$_['text_handy_menu']			 = 'Handy Product Manager';
$_['text_handy_product']	 = 'Product List';
$_['text_handy_mass_edit'] = 'Mass editing';


/* For Common: Mass Edit & Product List
  ----------------------------------------------------------------------------- */
$_['handy_filter_info']								 = 'When no filters are selected or they are reset, all products are taken into account';
$_['handy_filter_reset_mass_edit']		 = 'Reset filters + form';
$_['handy_filter_reset_product_list']	 = 'Reset filters';
$_['handy_filter_entry_flag_andor']		 = 'Condition for: ';
$_['handy_filter_flag_and']						 = 'Logical AND';
$_['handy_filter_flag_or']						 = 'Logical OR';

$_['handy_filter_categories']		 = 'Categories';
$_['handy_filter_entry_name']		 = 'Product Name';
$_['handy_filter_entry_sku']		 = 'SKU';
$_['handy_filter_entry_model']	 = 'Model';
$_['handy_filter_entry_doubles'] = 'Find duplicate values for fields';


$_['handy_entry_category_flag']	 = 'Products need to contain';
$_['handy_entry_category']				 = 'Select categories';
$_['handy_entry_select_all']			 = 'Select ALL product for editing';
$_['handy_entry_manufacturer']		 = 'Manufacturers';
$_['handy_entry_attribute']			 = 'Attribute';
$_['handy_entry_attribute_value'] = '<font class="hidden visible_lg-ib">Attribute</font> Value'; // span is reserved for help ic OC
$_['handy_entry_option']					 = 'Options';

$_['handy_entry_date_added']		 = 'Date added';
$_['handy_entry_date_modified']	 = 'Date modified';
$_['handy_text_date_available']	 = 'Date Available';
$_['handy_text_date']						 = 'Product was added';
$_['handy_entry_date_from']			 = 'from';
$_['handy_entry_date_before']		 = 'to';

$_['handy_filter_sort']										 = 'Sort';
$_['handy_filter_sort_by_default']				 = 'By default';
$_['handy_filter_sort_by_sort_order_asc']	 = 'Sort Order (ascending)';
$_['handy_filter_sort_by_sort_order_desc'] = 'Sort Order (descending)';
$_['handy_filter_sort_by_product_id_asc']	 = 'product_id (ascending)';
$_['handy_filter_sort_by_product_id_desc'] = 'product_id (descending)';
$_['handy_filter_sort_by_name_asc']				 = 'Name (AZ)';
$_['handy_filter_sort_by_name_desc']			 = 'Name (Z-A)';
$_['handy_filter_sort_by_model_asc']			 = 'Model (AZ)';
$_['handy_filter_sort_by_model_desc']			 = 'Model (Y-A)';
$_['handy_filter_sort_by_sku_asc']				 = 'SKU (AZ)';
$_['handy_filter_sort_by_sku_desc']				 = 'SKU (Y-A)';
$_['handy_filter_sort_by_price_asc']			 = 'Price (ascending)';
$_['handy_filter_sort_by_price_desc']			 = 'Price (descending)';
$_['handy_filter_sort_by_quantity_asc']		 = 'Quantity (ascending)';
$_['handy_filter_sort_by_quantity_desc']	 = 'Quantity (descending)';
$_['handy_filter_sort_by_orders_asc']			 = 'Number of sales (in ascending order)';
$_['handy_filter_sort_by_orders_desc']		 = 'Number of sales (descending)';
$_['handy_filter_sort_by_views_asc']			 = 'Number of views (ascending)';
$_['handy_filter_sort_by_views_desc']			 = 'Number of views (descending)';

$_['handy_text_none']						 = '- Non selected -';
$_['handy_text_notset']					 = 'A! - Not completed in product';
$_['handy_text_notset_category'] = 'A! - Not completed or conflict with main category';
$_['handy_text_notset2']				 = 'A! - Any one is not defined';


/* For Mass Edit
  ----------------------------------------------------------------------------- */
$_['text_part_massedit']				 = 'Mass editing';
$_['mass_edit_title']						 = 'Mass editing — Handy Product Manager';
$_['text_part_massedit_data']		 = 'Edit data';

$_['entry_attribute_value']								 = 'Value';
$_['entry_option']												 = 'Option';
$_['entry_flag']													 = '- Select action -';
$_['entry_category_flag']									 = 'What it is neccessary to do with selected categories';
$_['text_flag_add']												 = 'Add new values';
$_['text_flag_delete_all_and_add_new']		 = 'Delete THE ALL old values and then add new';
$_['text_flag_delete']										 = 'Delete selected values';
$_['text_flag_reset_values_attribute']		 = 'Delete values of selected attributes'; // 
$_['text_flag_update_attribute']					 = 'Update values';
$_['text_flag_update_option']							 = 'Update values'; // 
$_['text_flag_update_option_requirement']	 = 'Update requirement'; // 
$_['text_flag_and']												 = 'AND';
$_['text_flag_or']												 = 'OR';
$_['text_flag_and_category']							 = 'All selected categories';
$_['text_flag_or_category']								 = 'At least one of the selected categories';

$_['text_available_vars']	 = 'Available variables';
$_['text_randomizer']			 = 'You can use text randomization. Description and example of <b>randomizer</b> operation — <a href="http://randomizer.sergetkach.com/" target="_blank">http://randomizer.sergetkach.com/</a>';
$_['text_flag_description'] = 'Overwrite text fields for this language';

$_['handy_entry_round']				 = 'Rounding';
$_['text_flag_discount_clear'] = 'Clear previous discounts';
$_['text_flag_special_clear']	 = 'Clear previous specials';

$_['handy_entry_delete_products'] = '(!) DELETE PRODUCTS';
$_['button_execute']						 = 'Execute';

$_['text_processing']						 = 'Data processing in progress...';
$_['success_item_step']					 = "Step <b>%1\$d</b> from <b>%2\$d</b> completed successfully";
$_['success_item_step_finish']	 = "Hooray! Product update completed successfully!";
$_['error_warning_mass']				 = 'Attention! Incorrectly filled data for bulk editing';
$_['error_item_step']						 = 'Error at step <b>%1\$d</b> from <b>%2\$d</b>:';
$_['error_no_count']						 = 'Error: Failed to get the number of products for the given parameters';
$_['error_no_products']					 = 'Error: There are no products matching the selected filters';
$_['error_ajax_response']				 = 'An error occurred in the massEditProcessing() method!';
$_['error_select_all_need']			 = 'You have not selected any filters. Confirm your intention to change ALL products on the site! To do this, check the box "<b>Select ALL products for editing</b>". Then press the button again';
$_['error_select_all_remove']		 = 'You have selected filters and at the same time clicked the checkbox "<b>Select ALL products for editing</b>". Either uncheck the box or discard other filters. Then press the button again';
$_['error_edit_var_not_allowed'] = 'Invalid variable found in field %s';
$_['error_nothing_todo']				 = 'Error: No items have been edited. Most likely you have not assigned any data';



/* For Product List
  ----------------------------------------------------------------------------- */
$_['text_part_productlist']		 = 'Products List';
$_['handy_productlist_title']	 = 'Products List — Handy Product Manager';

$_['handy_filter_text_none']						 = '--- Not selected ---';
$_['handy_filter_text_notset']					 = 'A! - Not indicated in product';
$_['handy_filter_text_notset_category']	 = 'A! - Not indicated or is same as main catagory';
$_['handy_filter_text_notset2']					 = 'A! - Not specified';
$_['handy_filter_text_min']							 = 'From';
$_['handy_filter_text_max']							 = 'Before';

$_['handy_error_report_title'] = 'Error!';
$_['handy_text_report_log']		 = 'reportModal should have been called on deferment';
$_['handy_error_empty_post']	 = 'Data sent for live update turned out to be empty!';
$_['handy_success']						 = 'Data processed successful!';

$_['handy_upload_text_photo_main']		 = 'Upload main image';
$_['handy_upload_text_drag_and_drop']	 = 'For uploade image, drug & drop image here';

$_['handy_upload_error_no_category']			 = 'First select a product category, and then upload a photo';
$_['handy_upload_error_no_category_main']	 = 'First select the main category fro product, and then upload a photo';
$_['handy_upload_error_no_product_name']	 = 'Product name must be specified as used for rename image filename!';
$_['handy_upload_error_no_model']					 = 'Model must be specified as used for rename image filename!';
$_['handy_upload_error_no_sku']						 = 'Sku must be specified as used for rename image filename!';
$_['handy_upload_error_result']						 = '(!) Error: file ([file]) could not be moved from temporary to [target]!';
$_['handy_upload_error_max_size']					 = 'Size of ([file]) is more more than specified in the settings';
$_['handy_upload_error_file_extenion']		 = 'File ([file]) has invalid extension';

$_['handy_filter_entry_product_id']			 = 'Product ID (! eliminates others filters)';
$_['handy_filter_entry_sku']						 = 'Sku (! eliminates others filters)';
$_['handy_filter_entry_model']					 = 'Model (! eliminates others filters)';
$_['handy_filter_entry_keyword']				 = 'SEO URL (! eliminates others filters)';
$_['handy_filter_entry_category']				 = 'Belongs to the category';
$_['handy_filter_entry_category_main']	 = 'Main category';
$_['handy_filter_entry_attribute_value'] = 'Value <font class="hidden visible_lg-ib">of attribute</font>'; // span is reservet for help ic OC

$_['handy_text_select_all']		 = 'Select All';
$_['handy_text_unselect_all']	 = 'Unelect all';

$_['handy_column_identity']			 = 'Identity';
$_['handy_column_category']			 = 'Categories';
$_['handy_btn_generate_seo_url'] = 'Generate SEO URL';

$_['handy_text_product_id']			 = 'Product ID';
$_['handy_entry_main_category']	 = 'Select main category';
$_['handy_text_product_new']		 = 'New item';
$_['handy_entry_discount']			 = 'Discount price';
$_['handy_entry_special']				 = 'Special price';
$_['handy_entry_customer_group'] = 'Client group';
$_['handy_entry_date_start']		 = 'Start';
$_['handy_entry_date_end']			 = 'End';

$_['handy_text_custom_fields']						 = 'Custom fields';
$_['handy_text_custom_fields_price']			 = 'Custom fields with price';
$_['handy_text_custom_fields_description'] = 'Field name';
$_['handy_text_custom_fields_type_price']	 = 'Price field';
$_['entry_field_key']											 = 'Field key in the database';
$_['entry_field_name']										 = 'Field name in the product list';
$_['entry_field_type']										 = 'Field type';
$_['handy_text_custom_fields_type_other']	 = 'Other';


$_['handy_column_description'] = 'Product description';

$_['handy_text_attribute_select']				 = 'Select attribute';
$_['handy_text_attribute_edit']					 = 'Edit Attribute';
$_['handy_text_attribute_new']					 = 'New attribute';
$_['handy_text_attribute_group_select']	 = 'Select attribute group';
$_['handy_text_attribute_new_save']			 = 'Save';
$_['handy_text_attribute_values_select'] = '- Choose a value -';
$_['handy_text_attribute_values_empty']	 = 'No values';

$_['handy_text_option_select'] = '- Choose an option -';
$_['handy_text_option_edit']	 = 'Edit option';
$_['handy_text_option_new']		 = 'New option';

$_['handy_button_delete_product']	 = 'Delete this product';
$_['handy_button_delete_confirm']	 = 'Confirm deletion';




/* Copy & Clone
  ----------------------------------------------------------------------------- */
$_['handy_entry_products_row_number']				 = 'Quantity';
$_['handy_entry_clone']											 = 'Mark for cloning';
$_['handy_entry_clone_images']							 = 'Clone image also';
$_['handy_help_clone_images']								 = 'Matter ONLY when cloning selected item';
$_['handy_text_add_new_products_row']				 = 'Add product item';
$_['handy_text_add_new_products_row_clone']	 = 'Clone product';

$_['handy_text_view_product_in_catalog']		 = 'View product in catalog';
$_['handy_text_edit_product_in_system_mode'] = 'Edit product <br>in system interface';
$_['text_success_delete']										 = 'Selected product was deleted!';
$_['text_error_add_new_tr']									 = 'Error on creating of the new product';

