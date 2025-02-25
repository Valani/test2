<?php

/**
 * @category   OpenCart
 * @package    Handy Product Manager
 * @copyright  © Serge Tkach, 2018–2024, https://sergetkach.com/
 */

// Heading
$_['heading_title']			 = 'Handy Product Manager';
$_['heading_title_2']		 = 'Handy Product Manager'; // conflict with product language file
$_['handy_title']				 = 'Налаштування модуля Handy Product Manager'; // conflict with product language file
$_['text_part_settings'] = 'Налаштування';

// Text
$_['text_extension']			 = 'Розширення';
$_['text_success']				 = 'Налаштування модуля оновлено!';
$_['text_edit']						 = 'Налаштування модуля';
$_['text_author']					 = 'Автор';
$_['text_author_support']	 = 'Підтримка';
$_['text_version']				 = 'Версія модуля: <b>%s</b>';
$_['check_license']				 = '☛ Будьте обережні з піратськими версіями! Перевірьте справжність вашої ліцензії за посиланням — <a href="https://licence.sergetkach.com/check/license/%1$s">https://licence.sergetkach.com/check/license/%1$s</a>';

$_['text_as_is']							 = 'Початкова назва файлу в трансліт';
$_['text_by_formula']					 = 'За формулою в трансліт';
$_['text_input_licence_list']	 = 'Для роботи зі списком товарів необхідно активувати ліцензію на сторінці з налаштуваннями модуля';
$_['text_input_licence_mass']	 = 'Для роботи з масовим редагуванням товарів необхідно активувати ліцензію на сторінці з налаштуваннями модуля';

$_['text_none']					 = '- Не вибрано -';
$_['handy_text_filled']	 = 'Заповнено';
$_['handy_text_empty']	 = 'Не заповнено';

// Button
$_['button_save']					 = 'Зберегти';
$_['button_cancel']				 = 'Скасування';
$_['button_save_licence']	 = 'Зберегти ліцензію';

// Entry
$_['entry_licence']	 = 'Код ліцензії';
$_['entry_status']	 = 'Статус';
$_['entry_system']	 = 'Використвована збірка OpenCart'; // For OpenCart 2
$_['entry_debug']		 = 'Режим налагодження';
$_['help_debug']		 = 'Якщо при масової генерації є помилка, то логи можуть зрозуміти, на якому етапі вона відбувається. Логі записуються в папку ' . DIR_LOGS . '. Рекомендую режим Debug';
$_['debug_0']				 = 'Нe вести лог';
$_['debug_1']				 = 'Error - записувати помилки при перевірці даних';
$_['debug_2']				 = 'Info - записувати значущи дії';
$_['debug_3']				 = 'Debug - записувати дані при значущих діях';
$_['debug_4']				 = 'Trace - записувати все підряд';

$_['fieldset_product_list']						 = 'Налаштування списку товарів';
$_['entry_product_list_field']				 = 'Які зі стандартних полів<br>відображати у списку товарів';
$_['entry_product_list_field_custom']	 = 'Які з кастомних полів відображати в списку товарів';
$_['entry_product_list_limit']				 = 'Скільки товарів <br>показувати у списку товарів';
$_['entry_model_automatic_change']		 = 'Автоматичне оновлення збігів у текстових полях під час редагування моделі';
$_['entry_sku_automatic_change']			 = 'Автоматичне оновлення збігів у текстових полях під час редагування артикула';
//$_['help_model_automatic_change']		 = '* Після зміни цього налаштування потрібно оновити сторінку Список товарів';
//$_['help_sku_automatic_change']			 = '* Після зміни цього налаштування потрібно оновити сторінку Список товарів';

$_['entry_product_edit_model_require'] = 'Поле "Модель" (model) є обов\'язковим для заповнення (за замовчуванням в системі є обов\'язковим)';
$_['entry_product_edit_sku_require']	 = 'Зробити поле "Артикул" (англійською sku) обов\'язковим для заповнення';

if (version_compare(VERSION, '3.0.0.0') >= 0) {
	$_['entry_transliteration']		 = 'Налаштування транслітерації для назви файлу';
} else {
	$_['fieldset_translit']				 = 'Налаштування SEO URL';
	$_['entry_transliteration']		 = 'Налаштування транслітерації для SEO URL';	
	$_['entry_translit_formula']	 = 'Формула транслітерації для SEO URL товарів';
}

$_['entry_language_id']				 = 'Вихідна мова';
$_['entry_translit_function']	 = 'Правило транслітерації';

$_['fieldset_upload']							 = 'Налаштування для завантаження фото';
$_['entry_upload_rename_mode']		 = 'Принцип називання фото';
$_['entry_upload_rename_formula']	 = 'Якщо переназувати фото за формулою, то використовувати змінні';
$_['entry_upload_max_size_in_mb']	 = 'Макс. розмір завантажуваних фото в МБ';
$_['entry_upload_mode']						 = 'Спосіб розподілу фотографій за папками';
$_['text_branch']									 = 'Розгалужувати папку products цифрами 1,2,3,..., n по 100 фото в кожній';
$_['text_dir_for_category']				 = 'Поміщати фото товару в папку головної батьківської категорії - має бути встановлений SeoPro для визначення головної категорії';

$_['fieldset_other']							 = 'Інші налаштування';
$_['entry_categories_mode']				 = 'Відображення категорій';
$_['categories_mode_autocomplete'] = 'Автозаповнення';
$_['categories_mode_tree_view']		 = 'Дерево вибору';
$_['entry_price_prefixes']				 = 'Додаткові префікси для ціни опцій';

// for OpenCart PRO
$_['entry_options_buy'] = 'Замінити опції на опції з кнопкою купити';

// Success
$_['success_licence'] = 'Ліцензія успішно збережена!';

// Error
$_['error_warning']									 = 'Неправильні установки. Перевірте всі поля!';
$_['error_permission']							 = 'У Вас немає прав для керування цим модулем!';
$_['error_licence']									 = 'Код ліцензії недійсний';
$_['error_licence_empty']						 = 'Введіть код ліцензії!';
$_['error_licence_not_valid']				 = 'Код ліцензії недійсний!';
$_['error_product_list_limit']			 = 'Ліміт товарів не повинен бути порожнім!';
$_['error_product_list_limit_small'] = 'Ліміт товарів не повинен бути меншим за 10!';
$_['error_product_list_limit_big']	 = 'Ліміт товарів не повинен бути більшим за 500!';
$_['error_translit_formula_empry']	 = 'Заповніть формулу для транслітерації!';
$_['error_rename_formula_empty']		 = 'Вкажіть формулу для перейменування фотографій за формулою в трансліт';
$_['error_formula_less_vars']				 = 'Використовуйте хоча б одну змінну у формулі!';
$_['error_formula_pattern']					 = 'Не використовуйте у формулі інші символи, крім назв змінних та рисочки (-)';
$_['error_max_size_in_mb']					 = 'Вкажіть макс розмір фото для завантаження в Мегабайтах';




/* For Column Left
  -------------------------------------------------- --------------------------- */
$_['text_handy_menu']			 = 'Handy Product Manager';
$_['text_handy_product']	 = 'Список товарів';
$_['text_handy_mass_edit'] = 'Масове редагування';


/* For Common: Mass Edit & Product List
  -------------------------------------------------- --------------------------- */
$_['handy_filter_info']								 = 'Коли не обрано жодного фільтр або вони скидуються, до уваги беруться всі товари';
$_['handy_filter_reset_mass_edit']		 = 'Cкинути фільтри + форму';
$_['handy_filter_reset_product_list']	 = 'Cкинути фільтри';
$_['handy_filter_entry_flag_andor']		 = 'Умова для поля: ';
$_['handy_filter_flag_and']						 = 'Логічне AND';
$_['handy_filter_flag_or']						 = 'Логічне OR';

$_['handy_filter_categories']		 = 'Категорії';
$_['handy_filter_entry_name']		 = 'Назва товару';
$_['handy_filter_entry_sku']		 = 'Артикул товару';
$_['handy_filter_entry_model']	 = 'Модель товару';
$_['handy_filter_entry_doubles'] = 'Знайти повторні значення серед полів';

$_['handy_text_none']						 = '- Не вибрано -';
$_['handy_text_notset']					 = 'A! - Не заповнено у товарі';
$_['handy_text_notset_category'] = 'A! - не заповнено або збігається з головною категорією';
$_['handy_text_notset2']				 = 'A! - не присвоєно жодного ';

$_['handy_entry_category_flag']		 = 'Товари повинні містити';
$_['handy_entry_category']				 = 'Вибрати категорії';
$_['handy_entry_select_all']			 = 'Вибрати всі товари для редагування';
$_['handy_entry_manufacturer']		 = 'Бренди';
$_['handy_entry_attribute']				 = 'Атрибут';
$_['handy_entry_attribute_value']	 = 'Значення <font class="hidden visible_lg-ib">атрибуту</font>'; // span is reservet for help ic OC
$_['handy_entry_option']					 = 'Опції';
$_['handy_entry_date_added']		 = 'Дата додавання';
$_['handy_entry_date_modified']	 = 'Дата редагування';
$_['handy_text_date_added']				 = 'Дата створення';
$_['handy_text_date_modified']		 = 'Дата редагування';
$_['handy_text_date_available']		 = 'Дата надходження';
$_['handy_entry_date_from']				 = 'з';
$_['handy_entry_date_before']			 = 'до';

$_['handy_filter_sort']										 = 'Сортування';
$_['handy_filter_sort_by_default']				 = 'За замовченням';
$_['handy_filter_sort_by_sort_order_asc']	 = 'Порядок сортування (за зростанням)';
$_['handy_filter_sort_by_sort_order_desc'] = 'Порядок сортування (за зменьшенням)';
$_['handy_filter_sort_by_product_id_asc']	 = 'product_id (за зростанням)';
$_['handy_filter_sort_by_product_id_desc'] = 'product_id (за зменьшенням)';
$_['handy_filter_sort_by_name_asc']				 = 'Назва (А-Я)';
$_['handy_filter_sort_by_name_desc']			 = 'Назва (Я-А)';
$_['handy_filter_sort_by_model_asc']			 = 'Модель (А-Я)';
$_['handy_filter_sort_by_model_desc']			 = 'Модель (Я-А)';
$_['handy_filter_sort_by_sku_asc']				 = 'SKU (А-Я)';
$_['handy_filter_sort_by_sku_desc']				 = 'SKU (Я-А)';
$_['handy_filter_sort_by_price_asc']			 = 'Ціна (за зростанням)';
$_['handy_filter_sort_by_price_desc']			 = 'Ціна (за зменьшенням)';
$_['handy_filter_sort_by_quantity_asc']		 = 'Кількість (за зростанням)';
$_['handy_filter_sort_by_quantity_desc']	 = 'Кількість (за зменьшенням)';
$_['handy_filter_sort_by_orders_asc']			 = 'Кількість продажів (за зростанням)';
$_['handy_filter_sort_by_orders_desc']		 = 'Кількість продажів (за зменьшенням)';
$_['handy_filter_sort_by_views_asc']			 = 'Кількість переглядів (за зростанням)';
$_['handy_filter_sort_by_views_desc']			 = 'Кількість переглядів (за зменьшенням)';

/* For Mass Edit
  -------------------------------------------------- --------------------------- */
$_['text_part_massedit']				 = 'Масове редагування';
$_['mass_edit_title']						 = 'Масове редагування - Handy Product Manager';
$_['text_part_massedit_data']		 = 'Редагування даних';

$_['entry_attribute_value']								 = 'Значення';
$_['entry_option']												 = 'Опція';
$_['entry_flag']													 = '- Вибрати дію-';
$_['entry_category_flag']									 = 'Як вчинити з вибраними категоріями';
$_['text_flag_add']												 = 'Додати вибрані до існуючих';
$_['text_flag_delete_all_and_add_new']		 = 'Видалити ВСІ старі, потім додати вибрані';
$_['text_flag_delete']										 = 'Видалити вибрані';
$_['text_flag_reset_values_attribute']		 = 'Видалити тільки значення вибраних атрибутів'; //
$_['text_flag_update_attribute']					 = 'Замінити значення'; //
$_['text_flag_update_option']							 = 'Замінити значення'; //
$_['text_flag_update_option_requirement']	 = 'Змінити необхідність вибору опцій'; //
$_['text_flag_and']												 = 'AND';
$_['text_flag_or']												 = 'OR';
$_['text_flag_and_category']							 = 'Всі обрані категорії одночасно';
$_['text_flag_or_category']								 = 'Хоча одну з обраних категорій';

$_['text_available_vars']	 = 'Доступні змінні';
$_['text_randomizer']			 = 'Ви можете використовувати рандомізацію текста. Опис та приклад роботи <b>рандомізатора</b> — <a href="http://randomizer.sergetkach.com/" target="_blank">http://randomizer.sergetkach.com/</a>';
$_['text_flag_description'] = 'Перезаписувати текстові поля для цієї мови';

$_['handy_entry_round']				 = 'Округлення';
$_['text_flag_discount_clear'] = 'Очистити попередні знижки';
$_['text_flag_special_clear']	 = 'Очистити попередні акції';

$_['handy_entry_delete_products'] = '(!) ВИДАЛИТИ ТОВАРИ';
$_['button_execute']						 = 'Виконати запит';

$_['text_processing']						 = 'Виконується обробка даних...';
$_['success_item_step']					 = "Крок <b>%1\$d</b> з <b>%2\$d</b> виконаний успішно";
$_['success_item_step_finish']	 = "Ура! Оновлення товарів завершено успішно!";
$_['error_warning_mass']				 = 'Увага! Неправильно заповнені дані для масового редагування';
$_['error_item_step']						 = 'Помилка кроку <b>%1\$d</b> з <b>%2\$d</b>:';
$_['error_no_count']						 = 'Помилка: Не вдалося отримати кількість товарів за заданими параметрами';
$_['error_no_products']					 = 'Помилка: Немає товарів, які відповідають вибраним фільтрам';
$_['error_ajax_response']				 = 'Сталася помилка в методі massEditProcessing()!';
$_['error_select_all_need']			 = 'Ви не вибрали жодного фільтра. Підтвердьте намір змінити всі товари на сайті! Для цього відзначте галочку "Вибрати всі товари для редагування". Потім знову натисніть кнопку';
$_['error_select_all_remove']		 = 'Ви вибрали фільтри і при цьому натиснули галочку "<b>Вибрати ВСЕ товари для редагування</b>". Або зніміть галочку, або відмовтеся від інших фільтрів. Потім знову натисніть кнопку';
$_['error_edit_var_not_allowed'] = 'У полі %s виявлено неприпустиму змінну';
$_['error_nothing_todo']				 = 'Помилка: Не було відредаговано жодного товару. Швидше за все, Ви не призначили жодних даних';


/* For Product List
  -------------------------------------------------- --------------------------- */
$_['text_part_productlist']		 = 'Список товарів';
$_['handy_productlist_title']	 = 'Список товарів - Handy Product Manager';

$_['handy_filter_text_none']						 = '- Не вибрано для фільтрації -';
$_['handy_filter_text_notset']					 = 'A! - Не заповнено у товарі';
$_['handy_filter_text_notset_category']	 = 'A! - не заповнено або збігається з головною категорією';
$_['handy_filter_text_notset2']					 = 'A! - не присвоєно жодного ';
$_['handy_filter_text_min']							 = 'Від';
$_['handy_filter_text_max']							 = 'До';

$_['handy_error_report_title'] = 'Помилка!';
$_['handy_text_report_log']		 = 'reportModal повинен був бути викликаний по відстрочці';
$_['handy_error_empty_post']	 = 'Дані, передані для живого оновлення, виявилися порожніми!';
$_['handy_success']						 = 'Дані оброблені!';

$_['handy_upload_text_photo_main']		 = 'Завантажити головне фото';
$_['handy_upload_text_drag_and_drop']	 = 'Для завантаження перетягніть файли сюди.';

$_['handy_upload_error_no_category']			 = 'Спочатку виберіть категорію товару, а потім завантажуйте фото';
$_['handy_upload_error_no_category_main']	 = 'Спочатку виберіть головну категорію товару, а потім завантажуйте фото';
$_['handy_upload_error_no_product_name']	 = 'Назва товару використовується при заміні назви файлу. Заповніть це поле!';
$_['handy_upload_error_no_model']					 = 'Модель використовується при заміні назви файлу. Заповніть це поле!';
$_['handy_upload_error_no_sku']						 = 'Артикул використовується при заміні назви файлу. Заповніть це поле!';
$_['handy_upload_error_result']						 = '(!) Помилка: Файл ([file]) не вдалося перемістити з тимчасового розташування на цільову адресу [target]!';
$_['handy_upload_error_max_size']					 = 'Фото ([file]) перевищує допустимий розмір файлу';
$_['handy_upload_error_file_extenion']		 = 'Фото ([file]) має неприпустиме розширення';

$_['handy_filter_entry_product_id']			 = 'ID товару (! нівелює інші фільтри)';
$_['handy_filter_entry_keyword']				 = 'SEO URL (! нівелює інші фільтри)';
$_['handy_filter_entry_category']				 = 'Належить до категорії';
$_['handy_filter_entry_category_main']	 = 'Головна категорія';
$_['handy_filter_entry_attribute_value'] = 'Значення <font class="hidden visible_lg-ib">атрибуту</font>'; // span is reservet for help ic OC

$_['handy_text_select_all']		 = 'Вибрати все';
$_['handy_text_unselect_all']	 = 'Зняти вибір з усіх';

$_['handy_column_image']		 = 'Зображення';
$_['handy_column_identity']	 = 'Ідентичність';
$_['handy_column_category']	 = 'Категорії';
$_['handy_column_attribute'] = 'Атрибути';
$_['handy_column_option']		 = 'Опції';
$_['handy_column_action']		 = 'Дія';

$_['handy_text_product_id']			 = 'ID товару (product_id)';
$_['handy_btn_generate_seo_url'] = 'Згенерувати SEO URL';
$_['handy_entry_main_category']	 = 'Вибрати головну категорію';
$_['handy_text_product_new']		 = 'Новий товар';
$_['handy_entry_discount']			 = 'Ціна зі знижкою';
$_['handy_entry_special']				 = 'Акційна ціна';
$_['handy_entry_customer_group'] = 'Гр. клієнта';
$_['handy_entry_date_start']		 = 'Початок';
$_['handy_entry_date_end']			 = 'Кінець';

$_['handy_text_custom_fields']						 = 'Кастомні поля';
$_['handy_text_custom_fields_price']			 = 'Кастомні поля з ціною';
$_['handy_text_custom_fields_description'] = 'Назва поля';
$_['handy_text_custom_fields_type_price']	 = 'Поле з ціною';
$_['entry_field_key']											 = 'Ключ поля в базі даних';
$_['entry_field_name']										 = 'Назва поля у списку товару';
$_['entry_field_type']										 = 'Тип поля';
$_['handy_text_custom_fields_type_other']	 = 'Інше';


$_['handy_column_description'] = 'Опис товару';

$_['handy_text_attribute_select']				 = 'Вибрати атрибут';
$_['handy_text_attribute_edit']					 = 'Редагувати атрибут';
$_['handy_text_attribute_new']					 = 'Новий атрибут';
$_['handy_text_attribute_group_select']	 = 'Вибрати групу атрибута';
$_['handy_text_attribute_new_save']			 = 'Зберегти';
$_['handy_text_attribute_values_select'] = 'Виберіть значення';
$_['handy_text_attribute_values_empty']	 = 'Значень немає';

$_['handy_text_option_select'] = '- Вибрати опцію -';
$_['handy_text_option_edit']	 = 'Редагувати опцію';
$_['handy_text_option_new']		 = 'Нова опція';

$_['handy_button_delete_product']	 = 'Видалити цей товар';
$_['handy_button_delete_confirm']	 = 'Підтвердіть видалення';


/* Copy & Clone
  ----------------------------------------------------------------------------- */
$_['handy_entry_products_row_number']				 = 'Кількість';
$_['handy_entry_clone']											 = 'Позначити для клонування';
$_['handy_entry_clone_images']							 = 'Клонувати зображення';
$_['handy_help_clone_images']								 = 'Має значення ТІЛЬКИ при клонуванні конкретного обраного товару';
$_['handy_text_add_new_products_row']				 = 'Додати товар';
$_['handy_text_add_new_products_row_clone']	 = 'Клонувати товар';

$_['handy_text_view_product_in_catalog']		 = 'Дивитись товар на сайті';
$_['handy_text_edit_product_in_system_mode'] = 'Редагувати товар <br>у стандартному інтерфейсі системи';
$_['text_success_delete']										 = 'Вибрані товари видалені!';
$_['text_error_add_new_tr']									 = 'Сталася помилка при створенні нового товару';
