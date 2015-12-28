<?php
// Delete blacklisted user
$locale['400'] = "Видалення запису з Чорного cписку";
$locale['401'] = "Запис видалено";
$locale['402'] = "Повернутися до налаштування Чорного Списку";
$locale['403'] = "Повернутися в Центр керування";
$locale['404'] = "Будь ласка, введіть електронну адресу або адресу IP";
$locale['405'] = "Електронна адреса некоректна.";
$locale['406'] = "Чорний список";

// Add/Edit Blacklist Titles
$locale['420'] = "Чорний cписок";
$locale['421'] = "Редагування Чорного cписку";

// Add/Edit blacklist form
$locale['440'] = "Введене значення заборонить користувачу з  вказаною адресою IP відвідувати цей сайт.<br />Ви можете використовувати повний формт IP, наприклад <em>123.45.67.89.</em>, або шаблон маски, наприклад, <em>123.45.67</em> чи <em>123.45</em>.
<br /><br />Зауваження: на цьому сайті адреси формату IPv6 конвертуються у повну форму, наприклад, <em>ABCD:1234:5:6:7:8:9:FF</em> буде виглядати як <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
<br /><br />Змішані адреси IP (які одночасно містять частини IPv6 та IPv4) не будуть перевірятися на частковий збіг по шаблону маски.
<br /><br />Введена електронна адреса заборонить користувачу реєструватися з цієї адреси. Ви можете використовувати повний формат адреси, наприклад <em>foo@bar.com</em>, або лише поштовий домен, наприклад <em>bar.com</em>.
<br /><br />% - блокує все.
<br />%.%.%.%@domain.tld блокує усі адреси, що містять принаймні 3 крапки.
<br />%+%@domain.tld блокує усі адреси, що містять знак <b>\"плюс\"</b>.
<br />%@domain.tld блокує усі адреси з домену domain.tld
<br />%.domain.tld блокує усі адреси з субдомену domain.tld
<br />%payday% блокує усі адреси, що містять слово \"payday\", яке часто зустрічалось на інших сайтах
<br />domain.tld є псевдонімом %@domain.tld для забезпечення сумісності з правилами у v7 системи.
<br />";
$locale['441'] = "Адреса IP: <strong>або</strong>";
$locale['442'] = "Електронна адреса:";
$locale['443'] = "Підстава:";
$locale['444'] = "Зберегти";

// Current blacklisted users
$locale['460'] = "Наявні записи Чорного cписку";
$locale['461'] = "Заблоковано";
$locale['462'] = "Опції";
$locale['463'] = "Редагувати";
$locale['464'] = "Видалити";
$locale['465'] = "Записи відсутні";
$locale['466'] = "н/д";
$locale['467'] = "Адміністратор";
$locale['468'] = "Дата";