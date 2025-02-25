<?php

/**
 * @category   OpenCart
 * @package    Handy Product Manager
 * @copyright  © Serge Tkach, 2018–2024, https://sergetkach.com/
 */

// Heading
$_['heading_title']			 = 'Handy Product Manager';
$_['heading_title_2']		 = 'Handy Product Manager'; // conflict with product language file
$_['handy_title']				 = 'Настройка модуля Handy Product Manager'; // conflict with product language file
$_['text_part_settings'] = 'Настройки';

// Text
$_['text_extension']					 = 'Расширения';
$_['text_success']						 = 'Настройки модуля обновлены!';
$_['text_edit']								 = 'Настройка модуля';
$_['text_author']							 = 'Автор';
$_['text_author_support']			 = 'Поддержка';
$_['text_version']						 = 'Версия модуля: <b>%s</b>';
$_['check_license']						 = '☛ Будьте осторожны с пиратскими копиями! Проверьте подлинность вашей лицензии по ссылке — <a href="https://licence.sergetkach.com/check/license/%1$s">https://licence.sergetkach.com/check/license/%1$s</a>';
$_['text_as_is']							 = 'Начальное название файла в транслит';
$_['text_by_formula']					 = 'По формуле в транслит';
$_['text_input_licence_list']	 = 'Для работы со списком товаров необходимо активировать лицензию на странице с настройками модуля';
$_['text_input_licence_mass']	 = 'Для работы с массовым редактированием товаров необходимо активировать лицензию на странице с настройками модуля';

$_['text_none']					 = '- Не выбрано -';
$_['handy_text_filled']	 = 'Заполнено';
$_['handy_text_empty']	 = 'Не заполнено';

// Button
$_['button_save']					 = 'Сохранить';
$_['button_cancel']				 = 'Отмена';
$_['button_save_licence']	 = 'Сохранить лицензию';

// Entry
$_['entry_licence']	 = 'Код лицензии';
$_['entry_status']	 = 'Статус';
$_['entry_system']	 = 'Использованный сборник OpenCart'; // For OpenCart 2
$_['entry_debug']		 = 'Режим отладки';
$_['help_debug']		 = 'Если при массовой генерации есть ошибка, то логи могут понять, на каком этапе она происходит. Логи записываются в папку ' . DIR_LOGS . '. Рекомендую режим Debug';
$_['debug_0']				 = 'Не вести лог';
$_['debug_1']				 = 'Error - записывать ошибки при проверке данных';
$_['debug_2']				 = 'Info - записывать значимые действия';
$_['debug_3']				 = 'Debug – записывать данные при значимых действиях';
$_['debug_4']				 = 'Trace – записывать все подряд';

$_['fieldset_product_list']						 = 'Настройка списка товаров';
$_['entry_product_list_field']				 = 'Какие из стандартных полей отображать в списке товаров';
$_['entry_product_list_field_custom']	 = 'Какие из кастомных полей отображать в списке товаров';
$_['entry_product_list_limit']				 = 'Сколько товаров <br>показывать в списке товаров';
$_['entry_model_automatic_change']		 = 'Автоматическое обновление совпадений в текстовых полях при редактировании модели';
$_['entry_sku_automatic_change']			 = 'Автоматическое обновление совпадений в текстовых полях при редактировании артикула';
//$_['help_model_automatic_change']		 = '* После изменения этой настройки необходимо обновить страницу Список товаров';
//$_['help_sku_automatic_change']			 = '* После изменения этой настройки необходимо обновить страницу Список товаров';
$_['entry_product_edit_model_require'] = 'Поле "Модель" (model) является обязательным для заполнения (по умолчанию в системе является обязательным)';
$_['entry_product_edit_sku_require']	 = 'Сделать поле "Артикул" (на английском sku) обязательным для заполнения';

if (version_compare(VERSION, '3.0.0.0') >= 0) {
	$_['entry_transliteration'] = 'Настройка транслитерации для названия файла';
} else {
	$_['fieldset_translit']			 = 'Настройки SEO URL';
	$_['entry_transliteration']	 = 'Настройки транслитерации для SEO URL';
	$_['entry_translit_formula'] = 'Формула транслитерации для SEO URL товаров';
}

$_['entry_language_id']				 = 'Исходный язык';
$_['entry_translit_function']	 = 'Правило транслитерации';

$_['fieldset_upload']							 = 'Настройки для загрузки фотографий';
$_['entry_upload_rename_mode']		 = 'Принцип называния фото';
$_['entry_upload_rename_formula']	 = 'Если переименовать фото по формуле, то использовать переменные';
$_['entry_upload_max_size_in_mb']	 = 'Макс. размер загружаемых фото в МБ';
$_['entry_upload_mode']						 = 'Способ распределения фотографий по папкам';
$_['text_branch']									 = 'Разветвлять папку products цифрами 1,2,3,..., n по 100 фото в каждой';
$_['text_dir_for_category']				 = 'Помещать фото товара в папку главной родительской категории – должен быть установлен SeoPro для определения главной категории';

$_['fieldset_other']							 = 'Другие настройки';
$_['entry_categories_mode']				 = 'Отображение категорий';
$_['categories_mode_autocomplete'] = 'Автозаполнение';
$_['categories_mode_tree_view']		 = 'Дерево выбора';
$_['entry_price_prefixes']				 = 'Дополнительные префиксы для цены опций';

// for OpenCart PRO
$_['entry_options_buy'] = 'Заменить опции на опции с кнопкой купить';

// Success
$_['success_licence'] = 'Лицензия успешно сохранена!';

//Error
$_['error_warning']									 = 'Неверные настройки. Проверьте все поля!';
$_['error_permission']							 = 'У Вас нет прав для управления этим модулем!';
$_['error_licence']									 = 'Код лицензии недействителен';
$_['error_licence_empty']						 = 'Введите код лицензии!';
$_['error_licence_not_valid']				 = 'Код лицензии недействителен!';
$_['error_product_list_limit']			 = 'Лимит товаров не должен быть пустым!';
$_['error_product_list_limit_small'] = 'Лимит товаров не должен быть менее 10!';
$_['error_product_list_limit_big']	 = 'Лимит товаров не должен превышать 500!';
$_['error_translit_formula_empry']	 = 'Заполните формулу для транслитерации!';
$_['error_rename_formula_empty']		 = 'Укажите формулу для переименования фотографий по формуле в транслит';
$_['error_formula_less_vars']				 = 'Используйте хотя бы одну переменную в формуле!';
$_['error_formula_pattern']					 = 'Не используйте в формуле другие символы, кроме переменных и рисочки (-)';
$_['error_max_size_in_mb']					 = 'Укажите макс размер фото для загрузки в Мегабайтах';




/* For Column Left
  -------------------------------------------------- --------------------------- */
$_['text_handy_menu']			 = 'Handy Product Manager';
$_['text_handy_product']	 = 'Список товаров';
$_['text_handy_mass_edit'] = 'Массовое редактирование';


/* For Common: Mass Edit & Product List
  -------------------------------------------------- --------------------------- */
$_['handy_filter_info']								 = 'Если не выбран ни один фильтр или они сбрасываются, учитываются все товары';
$_['handy_filter_reset_mass_edit']		 = 'Сбросить фильтры + форму';
$_['handy_filter_reset_product_list']	 = 'Сбросить фильтры';
$_['handy_filter_entry_flag_andor']		 = 'Условие для поля:';
$_['handy_filter_flag_and']						 = 'Логическое AND';
$_['handy_filter_flag_or']						 = 'Логическое OR';

$_['handy_filter_categories']		 = 'Категории';
$_['handy_filter_entry_name']		 = 'Название товара';
$_['handy_filter_entry_sku']		 = 'Артикул товара';
$_['handy_filter_entry_model']	 = 'Модель товара';
$_['handy_filter_entry_doubles'] = 'Найти повторные значения среди полей';

$_['handy_text_none']						 = '- Не выбрано -';
$_['handy_text_notset']					 = 'A! - не заполнено в товаре';
$_['handy_text_notset_category'] = 'A! - не заполнено или совпадает с главной категорией';
$_['handy_text_notset2']				 = 'A! - не присвоено ни одного';

$_['handy_entry_category_flag']		 = 'Товары должны содержать';
$_['handy_entry_category']				 = 'Выбрать категории';
$_['handy_entry_select_all']			 = 'Выбрать все товары для редактирования';
$_['handy_entry_manufacturer']		 = 'Производители';
$_['handy_entry_attribute']				 = 'Атрибут';
$_['handy_entry_attribute_value']	 = 'Значение <font class="hidden visible_lg-ib">атрибута</font>'; // span is reservet for help ic OC
$_['handy_entry_option']					 = 'Опции';
$_['handy_entry_date_added']			 = 'Дата добавления';
$_['handy_entry_date_modified']		 = 'Дата редактирования';
$_['handy_text_date_added']				 = 'Дата создания';
$_['handy_text_date_modified']		 = 'Дата редактирования';
$_['handy_text_date_available']		 = 'Дата поступления';
$_['handy_entry_date_from']				 = 'с';
$_['handy_entry_date_before']			 = 'до';

$_['handy_filter_sort']										 = 'Сортировка';
$_['handy_filter_sort_by_default']				 = 'По умолчанию';
$_['handy_filter_sort_by_sort_order_asc']	 = 'Порядок сортировки (по возрастанию)';
$_['handy_filter_sort_by_sort_order_desc'] = 'Порядок сортировки (по убыванию)';
$_['handy_filter_sort_by_product_id_asc']	 = 'product_id (по возрастанию)';
$_['handy_filter_sort_by_product_id_desc'] = 'product_id (по убыванию)';
$_['handy_filter_sort_by_name_asc']				 = 'Название (А-Я)';
$_['handy_filter_sort_by_name_desc']			 = 'Название (Я-А)';
$_['handy_filter_sort_by_model_asc']			 = 'Модель (А-Я)';
$_['handy_filter_sort_by_model_desc']			 = 'Модель (Я-А)';
$_['handy_filter_sort_by_sku_asc']				 = 'SKU(А-Я)';
$_['handy_filter_sort_by_sku_desc']				 = 'SKU(Я-А)';
$_['handy_filter_sort_by_price_asc']			 = 'Цена (по возрастанию)';
$_['handy_filter_sort_by_price_desc']			 = 'Цена (по убыванию)';
$_['handy_filter_sort_by_quantity_asc']		 = 'Количество (по возрастанию)';
$_['handy_filter_sort_by_quantity_desc']	 = 'Количество (по убыванию)';
$_['handy_filter_sort_by_orders_asc']			 = 'Количество продаж (по росту)';
$_['handy_filter_sort_by_orders_desc']		 = 'Количество продаж (по убыванию)';
$_['handy_filter_sort_by_views_asc']			 = 'Количество просмотров (по возрастанию)';
$_['handy_filter_sort_by_views_desc']			 = 'Количество просмотров (по убыванию)';


/* For Mass Edit
  -------------------------------------------------- --------------------------- */
$_['text_part_massedit']			 = 'Массовое редактирование';
$_['mass_edit_title']					 = 'Массовое редактирование - Handy Product Manager';
$_['text_part_massedit_data']	 = 'Редактирование данных';

$_['entry_attribute_value']								 = 'Значение';
$_['entry_option']												 = 'Опция';
$_['entry_flag']													 = '- Выбрать действие-';
$_['entry_category_flag']									 = 'Как поступить с выбранными категориями';
$_['text_flag_add']												 = 'Добавить выбранные к существующим';
$_['text_flag_delete_all_and_add_new']		 = 'Удалить все старые, затем добавить избранные';
$_['text_flag_delete']										 = 'Удалить избранные';
$_['text_flag_reset_values_attribute']		 = 'Удалить только значение выбранных атрибутов'; //
$_['text_flag_update_attribute']					 = 'Заменить значение'; //
$_['text_flag_update_option']							 = 'Заменить значение'; //
$_['text_flag_update_option_requirement']	 = 'Изменить необходимость выбора опций'; //
$_['text_flag_and']												 = 'AND';
$_['text_flag_or']												 = 'OR';
$_['text_flag_and_category']							 = 'Все выбранные категории одновременно';
$_['text_flag_or_category']								 = 'Хотя одну из выбранных категорий';

$_['text_available_vars']	 = 'Доступные переменные';
$_['text_randomizer']			 = 'Вы можете использовать рандомизацию текста. Описание и пример работы <b>рандомизатора</b> — <a href="http://randomizer.sergetkach.com/" target="_blank">http://randomizer.sergetkach.com/</a>';
$_['text_flag_description'] = 'Перезаписывать текстовые поля для этого языка';

$_['handy_entry_round']				 = 'Округление';
$_['text_flag_discount_clear'] = 'Очистить предыдущие скидки';
$_['text_flag_special_clear']	 = 'Очистить предыдущие акции';

$_['handy_entry_delete_products']	 = '(!) УДАЛИТЬ ТОВАРЫ';
$_['button_execute']							 = 'Выполнить запрос';

$_['text_processing']						 = 'Выполняется обработка данных...';
$_['success_item_step']					 = "Шаг <b>%1\$d</b> с <b>%2\$d</b> выполнен успешно";
$_['success_item_step_finish']	 = "Ура! Обновление товаров успешно завершено!";
$_['error_warning_mass']				 = 'Внимание! Неправильно заполнены данные для массового редактирования';
$_['error_item_step']						 = 'Ошибка шага <b>%1\$d</b> из <b>%2\$d</b>:';
$_['error_no_count']						 = 'Ошибка: Не удалось получить количество товаров по заданным параметрам';
$_['error_no_products']					 = 'Ошибка: Нет товаров, соответствующих выбранным фильтрам';
$_['error_ajax_response']				 = 'Произошла ошибка в методе massEditProcessing()!';
$_['error_select_all_need']			 = 'Вы не выбрали ни одного фильтра. Подтвердите намерение изменить все товары на сайте! Для этого отметьте галочку "Выбрать все товары редактирования". Затем снова нажмите кнопку';
$_['error_select_all_remove']		 = 'Вы выбрали фильтры и при этом нажали галочку "<b>Выбрать ВСЕ товары для редактирования</b>". Либо снимите галочку, либо откажитесь от других фильтров. Затем снова нажмите кнопку';
$_['error_edit_var_not_allowed'] = 'В поле %s обнаружена недопустимая переменная';
$_['error_nothing_todo']				 = 'Ошибка: ни одного товара не было отредактировано. Скорее всего, Вы не назначили никакие данные';


/* For Product List
  -------------------------------------------------- --------------------------- */
$_['text_part_productlist']		 = 'Список товаров';
$_['handy_productlist_title']	 = 'Список товаров - Handy Product Manager';

$_['handy_filter_text_none']						 = '- Не выбрано для фильтрации -';
$_['handy_filter_text_notset']					 = 'A! - не заполнено в товаре';
$_['handy_filter_text_notset_category']	 = 'A! - не заполнено или совпадает с главной категорией';
$_['handy_filter_text_notset2']					 = 'A! - не присвоено ни одного';
$_['handy_filter_text_min']							 = 'От';
$_['handy_filter_text_max']							 = 'До';

$_['handy_error_report_title'] = 'Ошибка!';
$_['handy_text_report_log']		 = 'reportModal должен был быть вызван по отсрочке';
$_['handy_error_empty_post']	 = 'Данные, передаваемые для живого обновления, оказались пустыми!';
$_['handy_success']						 = 'Данные обработаны!';

$_['handy_upload_text_photo_main']		 = 'Скачать главное фото';
$_['handy_upload_text_drag_and_drop']	 = 'Для загрузки перетащите файлы сюда.';

$_['handy_upload_error_no_category']			 = 'Сначала выберите категорию товара, а затем загружайте фото';
$_['handy_upload_error_no_category_main']	 = 'Сначала выберите главную категорию товара, а затем загружайте фото';
$_['handy_upload_error_no_product_name']	 = 'Название товара используется при замене названия файла. Заполните это поле!';
$_['handy_upload_error_no_model']					 = 'Модель используется при замене названия файла. Заполните это поле!';
$_['handy_upload_error_no_sku']						 = 'Артикул используется при замене названия файла. Заполните это поле!';
$_['handy_upload_error_result']						 = '(!) Ошибка: Файл ([file]) не удалось переместить из временного расположения на целевой адрес [target]!';
$_['handy_upload_error_max_size']					 = 'Фото ([file]) превышает допустимый размер файла';
$_['handy_upload_error_file_extenion']		 = 'Фото ([file]) имеет недопустимое расширение';

$_['handy_filter_entry_product_id']			 = 'ID товара (! нивелирует другие фильтры)';
$_['handy_filter_entry_keyword']				 = 'SEO URL (! нивелирует другие фильтры)';
$_['handy_filter_entry_category']				 = 'Принадлежит к категории';
$_['handy_filter_entry_category_main']	 = 'Главная категория';
$_['handy_filter_entry_attribute_value'] = 'Значение <font class="hidden visible_lg-ib">атрибута</font>'; // span is reservet for help ic OC

$_['handy_text_select_all']		 = 'Выбрать все';
$_['handy_text_unselect_all']	 = 'Снять выбор из всех';

$_['handy_column_image']		 = 'Изображение';
$_['handy_column_identity']	 = 'Идентичность';
$_['handy_column_category']	 = 'Категории';
$_['handy_column_attribute'] = 'Атрибуты';
$_['handy_column_option']		 = 'Опции';
$_['handy_column_action']		 = 'Действие';

$_['handy_text_product_id']			 = 'ID товара (product_id)';
$_['handy_btn_generate_seo_url'] = 'Сгенерировать SEO URL';
$_['handy_entry_main_category']	 = 'Выбрать главную категорию';
$_['handy_text_product_new']		 = 'Новый товар';
$_['handy_entry_discount']			 = 'Цена со скидкой';
$_['handy_entry_special']				 = 'Акционная цена';
$_['handy_entry_customer_group'] = 'Гр. клиента';
$_['handy_entry_date_start']		 = 'Начало';
$_['handy_entry_date_end']			 = 'Конец';

$_['handy_text_custom_fields']						 = 'Кастомные поля';
$_['handy_text_custom_fields_price']			 = 'Кастомные поля с ценой';
$_['handy_text_custom_fields_description'] = 'Название поля';
$_['handy_text_custom_fields_type_price']	 = 'Поле с ценой';
$_['entry_field_key']											 = 'Ключ поля в базе данных';
$_['entry_field_name']										 = 'Название поля в списке товара';
$_['entry_field_type']										 = 'Тип поля';
$_['handy_text_custom_fields_type_other']	 = 'Другое';


$_['handy_column_description'] = 'Описание товара';

$_['handy_text_attribute_select']				 = 'Выбрать атрибут';
$_['handy_text_attribute_edit']					 = 'Редактировать атрибут';
$_['handy_text_attribute_new']					 = 'Новый атрибут';
$_['handy_text_attribute_group_select']	 = 'Выбрать группу атрибута';
$_['handy_text_attribute_new_save']			 = 'Сохранить';
$_['handy_text_attribute_values_select'] = 'Выберите значение';
$_['handy_text_attribute_values_empty']	 = 'Значений нет';

$_['handy_text_option_select'] = '- Выбрать опцию -';
$_['handy_text_option_edit']	 = 'Редактировать опцию';
$_['handy_text_option_new']		 = 'Новая опция';

$_['handy_button_delete_product']	 = 'Удалить этот товар';
$_['handy_button_delete_confirm']	 = 'Подтвердите удаление';


/* Copy & Clone
  -------------------------------------------------- --------------------------- */
$_['handy_entry_products_row_number']				 = 'Количество';
$_['handy_entry_clone']											 = 'Обозначить для клонирования';
$_['handy_entry_clone_images']							 = 'Клонировать изображение';
$_['handy_help_clone_images']								 = 'Имеет значение ТОЛЬКО при клонировании конкретного выбранного товара';
$_['handy_text_add_new_products_row']				 = 'Добавить товар';
$_['handy_text_add_new_products_row_clone']	 = 'Клонировать товар';

$_['handy_text_view_product_in_catalog']		 = 'Смотреть товар на сайте';
$_['handy_text_edit_product_in_system_mode'] = 'Редактировать товары <br>в стандартном интерфейсе системы';
$_['text_success_delete']										 = 'Выбранные товары удалены!';
$_['text_error_add_new_tr']									 = 'Произошла ошибка при создании нового товара';
