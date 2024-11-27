<?php

/**
 *  2Moons 
 *   by Jan-Otto Kröpke 2009-2016
 *
 * For the full copyright and license information, please view the LICENSE
 *
 * @package 2Moons
 * @author Jan-Otto Kröpke <slaver7@gmail.com>
 * @copyright 2009 Lucky
 * @copyright 2016 Jan-Otto Kröpke <slaver7@gmail.com>
 * @licence MIT
 * @version 1.8.0
 * @link https://github.com/jkroepke/2Moons
 */

// Translation into Russian - Copyright © 2010-2013 InquisitorEA <support@moon-hunt.ru>

$LNG['Version']     = 'Версия';
$LNG['Description'] = 'Описание';

$LNG['changelog']   = array(
'v1.7.2' => 'Jan 18.03.2013
- 0000358: [Fleet missions] Recycler mit vollem Rohstoffspeicher inkl. viel Kristall, baut TF nicht ab und geht auf Lock (Jan) - resolved.
- 0000360: [Fleet missions] Wenn bei "Mission: Halten" Rohstoffe mitgenommen wird, werden diese dort abgeliefert und die Flotte behält diese Rohstoffe (Jan) - resolved.
- 0000371: [Admin Panal] Support ticket kann nicht geschrieben werden (FC92) - resolved.
- 0000373: [Admin Panal] Nachrichten im ACP in der Nachrichtenliste können nicht mehr gelesen werden. (Jan) - resolved.
- 0000375: [Fleet missions] Halten soll kein Allianzdepot voraussetzen (Jan) - resolved.
- 0000386: [Fleet missions] Mehrere Interplantrakten kosten für eine (FC92) - resolved.
- 0000390: [User errors] Facebook Login (Jan) - resolved.
- 0000395: [Admin Panal] Manual Update Points (Jan) - resolved.
- 0000397: [Fleet missions] Mindestflugzeit wird nicht bei der Anzeige beachtet (Jan) - resolved.
- 0000411: [Langauge] "active users" in German (Jan) - resolved.
- 0000416: [Admin Panal] MessageListe im ACP bei IE8 / IE9 wird nicht geöffnet, Error: \'console\' ist undefiniert (Jan) - resolved.
- 0000423: [Statistical] Error in der class.statbuilder.php / Ref 2627, In der Tabelle config wird users_amount = 0 gesetzt (Jan) - resolved.
',

'v1.7.1' => 'Jan 18.01.2013
- Fix possible SQL Injections.
',

'v1.7' => 'Jan 12.01.2013
- 0000327: [Feature request] allowPlanetPosition integrieren (FC92) - resolved.
- 0000316: [Feature request] List of alliances when concluding the contract (FC92) - resolved.
- 0000328: [Admin Panal] CleanerCronjob SQL error (FC92) - resolved.
- 0000330: [Admin Panal] Adding fleet (FC92) - resolved.
- 0000331: [Feature request] Duplication of information in the combat report (FC92) - resolved.
- 0000333: [Feature request] Contract of alliances (FC92) - resolved.
- 0000336: [Alliance] A lot of confusion in the language keys two types of contracts (war and secret alliance) (FC92) - resolved.
- 0000338: [Alliance] You can offer an infinite number of identical contracts from one alliance to one alliance (FC92) - resolved.
- 0000339: [User errors] Falsche DE email_inactive.txt Texte (FC92) - resolved.
- 0000312: [Feature request] Backup schedule (FC92) - resolved.
- 0000322: [Feature request] Button to add the rank (FC92) - resolved.
- 0000014: [Officier] Mixed up the description extraDM (Orion) - resolved.
- 0000016: [Time] The extra zero in ACP -> Online users (Orion) - resolved.
- 0000031: [User errors] Beim automatischen löschen eines Spieler der Mitglied in einer Ali ist, wird der kompletten Ali-Datensatz gelöscht! (Orion) - resolved.
- 0000039: [Installer] Installation Error (Jan) - resolved.
- 0000041: [Fleet missions] class.FlyingFleetsTable.php Ref 2306 verursacht undefined Index PM, kein Login mehr möglich. (Orion) - resolved.
- 0000065: [Alliance] Error when you enter in menu Alliance (Jan) - resolved.
- 0000072: [User errors] PHP Fatal error bei Ref 2349 (Orion) - resolved.
- 0000076: [Fleet missions] Flying fleets disappear (Jan) - resolved.
- 0000152: [User errors] PHPMailer Exception handling (Jan) - resolved.
- 0000164: [Statistical] int -> bigint (Jan) - resolved.
- 0000191: [Admin Panal] Default Installation Typo? (Jan) - resolved.
- 0000225: [Statistical] Bein Aufruf eines KB aus der Hall of Fame Error: Undefined variable: CombatReport / Ref 2491 (Jan) - resolved.
- 0000233: [Installer] Fix installer with new language class (Jan) - resolved.
- 0000234: [Installer] Unkown Config Key lang (Jan) - resolved.
- 0000236: [Langauge] Error in language class (Jan) - resolved.
- 0000315: [Eco system] DailyCronjob locks when using other table prefix (FC92) - resolved.
- 0000309: [Admin Panal] Reply to the ticket after it is closed (FC92) - resolved.
- 0000303: [Officier] Officer 610 (Jan) - resolved.
- 0000298: [Fleet missions] Treibstoffverbrauch bei Stationieren und Transport ist immer gleich! (Jan) - resolved.
- 0000319: [Alliance] Undefined variable: rankRow (FC92) - resolved.
- 0000320: [Alliance] Button to save the rank does not work (FC92) - resolved.
- 0000313: [Time] Incorrect time in the teleport (Jan) - resolved.
- 0000317: [Admin Panal] InactiveMailCronjob lock with PHP Fatal error: Cannot redeclare class Mail (Jan) - resolved.
- 0000176: [User errors] Undefined index: moonChance (Jan) - resolved.
- 0000321: [Alliance] In the ranks the picture is missing (Jan) - resolved.
- 0000323: [Feature request] HTML editor (Jan) - resolved.
- 0000311: [Fleet missions] Some fleet missions are not working (Jan) - resolved.
- 0000310: [Feature request] Dynamic the remaining flight time (Jan) - resolved.
- 0000308: [Admin Panal] Support system (Jan) - resolved.
- 0000304: [User errors] Settings - Number spy probe (Jan) - resolved.
- 0000300: [User errors] Bei Mondversuch erhalte ich bei bestimmten angriffen folgende fehlermeldung (Jan) - resolved.
- 0000307: [Langauge] ru/email/email_inactive.txt: failed to open stream (Jan) - resolved.
- 0000306: [User errors] SQL Error: Unknown column Array (Jan) - resolved.
- 0000231: [Feature request] The name of the object in the battle report. (Jan) - resolved.
- 0000105: [Feature request] Create a MySQL Backup solution (Jan) - resolved.
- 0000179: [Officier] ExtraDM 705 does not add energy (Jan) - resolved.
- 0000299: [Installer] Smarty error in installer (Jan) - resolved.
- 0000220: [Fleet missions] Jump Gates not allowing jumps (Jan) - resolved.
- 0000295: [User errors] Kein Login mit IE8 möglich, Error: "Undefined offset: 1" (Jan) - resolved.
- 0000296: [Admin Panal] ReferralCronjob BUG, PHP Fatal error: Call to a member function setDefault() (Jan) - resolved.
- 0000180: [Officier] rpg_espion not work (Jan) - resolved.
- 0000186: [Fleet missions] A lot of problems with fleet mission (Jan) - resolved.
- 0000197: [Cheat] The Phalanax shows deployment mission at origin planet (Jan) - resolved.
- 0000221: [Officier] Officer General ADDs fleet time (Jan) - resolved.
- 0000211: [Fleet missions] [FIX] Interplanetarraketen (Jan) - resolved.
- 0000206: [Feature request] 2 neue Variabeln für aktuelle Forschung & Schiffbau einbauen (Jan) - resolved.
- 0000223: [Alliance] Missing key in alliance home page (Jan) - resolved.
- 0000204: [Admin Panal] Teamspeak-Cronjob geht auf lock (Jan) - resolved.
- 0000192: [Admin Panal] Cronjob CleanerCronjob geht auf lock, inaktive User werde nicht gelöscht. (Jan) - resolved.
- 0000153: [Feature request] Block PMs (Jan) - resolved.
- 0000172: [Admin Panal] The page numbering does not fit on the screen (Jan) - resolved.
- 0000185: [Admin Panal] User Ban Panel (Jan) - resolved.
- 0000194: [Langauge] Typo in Vac Mod (Jan) - resolved.
- 0000198: [Feature request] Market (Jan) - resolved.
- 0000202: [Langauge] Delete Player confirmation text typo (Jan) - resolved.
- 0000219: [Admin Panal] Aktivierungs Probleme, nach der Registration (Jan) - resolved.
- 0000226: [Fleet missions] Expeditionen können nicht gestartet werden, FIX 187 nicht ganz vollständig ! (Jan) - resolved.
- 0000227: [Installer] Fix to installer (Jan) - resolved.
- 0000228: [Alliance] Bug in alliance manage rights (Jan) - resolved.
- 0000229: [Admin Panal] Bug in info page (Jan) - resolved.
- 0000230: [Alliance] Text wrong in alliance view member (Jan) - resolved.
- 0000232: [Eco system] Better buildings page (Jan) - resolved.
- 0000196: [Eco system] Different encoding across PHP scripts (not always UTF-8) (Jan) - resolved.
- 0000168: [User errors] Not work switcher pages (Jan) - resolved.
- 0000205: [Admin Panal] Infos aus der "Nachrichtenliste" können nicht geöffnet werden, Error [object Object] (Jan) - resolved.
- 0000184: [Fleet missions] DM Untersuchung (Jan) - resolved.
- 0000177: [Feature request] To loser comes abbreviated battle report (Jan) - resolved.
- 0000199: [Admin Panal] Admin Logs (Jan) - resolved.
- 0000210: [Admin Panal] Bei Erstellung von neuen Usern über ACP werden nicht alle Infotexte angezeigt. (Jan) - resolved.
- 0000216: [Fleet missions] Expeditionsnachrichten (Jan) - resolved.
- 0000203: [Admin Panal] News im ACP können nicht erstellt oder geändert werden. (Jan) - resolved.
- 0000208: [Feature request] Building queue Update (Jan) - resolved.
- 0000209: [Fleet missions] Verband kann nicht aktiviert werden (Jan) - resolved.
- 0000212: [Alliance] [FIX] Delete Alliance Rank (Jan) - resolved.
- 0000214: [Fleet missions] Rückkehrmeldungen enthalten falschen Planeten (Jan) - resolved.
- 0000217: [Admin Panal] ACP/ Uni Konfigurations seite (Jan) - resolved.
- 0000215: [Fleet missions] Meldung von Expedition bei finden von Schiffen anpassen (Jan) - resolved.
- 0000183: [Feature request] Händler Funtioniert nicht ganz (Jan) - resolved.
- 0000161: [Admin Panal] Cronjobs können nicht richtig gesetzt werden und werden nicht abgearbeitet. (Jan) - resolved.
- 0000189: [Fleet missions] Able to attack while in VMODE (Jan) - resolved.
- 0000173: [Langauge] Two identical language key in a file ADMIN.php (Jan) - resolved.
- 0000174: [User errors] Undefined index: lm_changelog (Jan) - resolved.
- 0000175: [Admin Panal] Cleaning the cache does not work correctly (Jan) - resolved.
- 0000170: [Admin Panal] File CUSTOM.php does not overwrite the values of language keys ADMIN.php (Jan) - resolved.
- 0000169: [Admin Panal] Wrong reduction in numbers (Jan) - resolved.
- 0000127: [Fleet missions] Recycling missions with max transported resources fail [with solution] (Jan) - closed.
MOONHUNT-22 - Ошибка в панеле администратора.
MOONHUNT-106 - Неверное значение потребления дейтерия атомной электростанцией.
MOONHUNT-137 - Не работает вход в игру.
MOONHUNT-154 - Не проходит авторизация.
MOONHUNT-157 - Ошибка при появлении сообщения о шпионаже.
MOONHUNT-159 - Невозможно зарегистрироваться.
MOONHUNT-161 - Ошибка новой версии.
MOONHUNT-163 - Колонизация.
MOONHUNT-165 - Не создаётся новый аккаунт в панеле администратора.
MOONHUNT-166 - IPM не работает.
MOONHUNT-169 - Неверная конфигурация планет в галактике.
MOONHUNT-170 - Невозможно отправить флот.
MOONHUNT-173 - Ошибка в флоте и исследованиях.
MOONHUNT-174 - Неизвестная константа.
MOONHUNT-176 - Неизвестный индекс.
MOONHUNT-181 - Нехватка кристалла.
MOONHUNT-188 - Статистика.
MOONHUNT-189 - Ошибка в обработчике флота.
MOONHUNT-190 - Несуществующая страница.
MOONHUNT-191 - 500 ошибка.
MOONHUNT-196 - Сообщение о неудачном строительстве.
MOONHUNT-198 - Остановка производства ресурсов.
MOONHUNT-199 - Скупщик ресурсов.
MOONHUNT-205 - Вызов несуществующей страницы.
MOONHUNT-206 - Исследования.
MOONHUNT-207 - Повышение прав
MOONHUNT-208 - Отправка флота.
MOONHUNT-209 - Ошибка установщика.
MOONHUNT-211 - Таймер строительства в обзоре.
MOONHUNT-216 - Ошибка во время отправки флота.
MOONHUNT-218 - Подробное описание офицеров недоступно.
MOONHUNT-219 - Информация об аккаунте.
MOONHUNT-223 - Исчезновение флота.
MOONHUNT-228 - Лог ошибок.
MOONHUNT-235 - Дата блокировки.
MOONHUNT-236 - Режим отпуска и полёт флота.
MOONHUNT-238 - Ошибка при переходе по координатам в карточке игрока.
MOONHUNT-239 - Нет данных о флоте при его отправке.
MOONHUNT-240 - Ошибка на странице флота при атаке.
MOONHUNT-245 - Невожможно вызвать скупщика ресурсов.
MOONHUNT-246 - Заявки технической поддержки не могут быть удалены или закрыты.
MOONHUNT-247 - Ошибка при отправке полностью загруженного флота.
MOONHUNT-248 - В списке планет всегда первой отображается главная планета.
MOONHUNT-249 - Неотображаются боевые доклады в зале славы.
MOONHUNT-250 - Не отображается иконка кнопки удаления.
MOONHUNT-251 - Дубрированный языковой ключ.
MOONHUNT-254 - Невозможно отправить флот на луну.
MOONHUNT-256 - Создание аккаунта в панеле администрации.
MOONHUNT-257 - Список планет.
MOONHUNT-258 - Ошибка отправки общего сообщения по альянсу.
MOONHUNT-259 - Сообщение об ошибке при входе заблокированного игрока в игру.
MOONHUNT-260 - При продаже кораблей скупщику корабли не исчезали.
MOONHUNT-261 - Ошибка во время сноса постройки.
MOONHUNT-263 - Ошибка после смены языка на русский.
MOONHUNT-264 - Удвоение флота.
MOONHUNT-265 - Изменение часового пояса не сохраняется.
MOONHUNT-266 - Чат альяса.
MOONHUNT-267 - Неверное увеличение очков флота.
MOONHUNT-268 - Ошибка при устновки.
MOONHUNT-269 - Исследование, несмотря на выполнение требований, отображается красным.
MOONHUNT-271 - Скорость игры не влияет на производство энергии.
MOONHUNT-272 - Ошибка при строительстве.
MOONHUNT-273 - Некорректное отображение данные о шпионаже.
MOONHUNT-274 - Ошибка при блокировки аккаунтов.
MOONHUNT-275 - История изменений.
MOONHUNT-276 - Дублированное описание исследований.
MOONHUNT-278 - Неверно списываются ресурсы при обменен у скупщика.
MOONHUNT-281 - Неверно рассчитывается коммисия скупщику.
MOONHUNT-282 - Лог ошибок.
MOONHUNT-283 - Старница не существует.
MOONHUNT-284 - Невозможно изменить логин.
MOONHUNT-285 - Ошибка при удалении планеты в панеле администрации.
MOONHUNT-286 - Ошибка при удалении исследования из очереди.
MOONHUNT-287 - Невозможно расформировать альянс.
MOONHUNT-289 - Ошибка при отклонении заявки на вступление в альянс.
MOONHUNT-291 - Ошибка при удалении строящегося флота в верфи.
MOONHUNT-292 - Ручное обновление статистики.
MOONHUNT-294 - Смена расположения языковых ключей.
MOONHUNT-295 - Добавление языкового ключа в заметках.
MOONHUNT-299 - Ошибка при переходе на планету, где текущее исследование недоступно.
MOONHUNT-300 - Неверное сообщение при обмене ресурсов у скупщика.
MOONHUNT-303 - Изменение пароля не сохраняется.
MOONHUNT-304 - Описание построек.
MOONHUNT-305 - Невозможно отправить флот в атаку.
MOONHUNT-306 - Добавление языкового ключа в галактике.
MOONHUNT-307 - Описание инновационных разработок.
MOONHUNT-309 - Лог ошибок.
MOONHUNT-310 - Страница не существует.
MOONHUNT-313 - Необходимые ресурсы для солнечной электростанции.
MOONHUNT-314 - Неизвестная переменнная.
MOONHUNT-315 - Записи лога ошибок.
MOONHUNT-316 - Время удержание отображается неверно.
MOONHUNT-318 - Ошибка в зале славы.
MOONHUNT-320 - Не обновляется статистика.
MOONHUNT-321 - Полёт в экспедицию.
MOONHUNT-322 - Создание планеты.
MOONHUNT-323 - Невозможно атаковать.
MOONHUNT-324 - Экспедиция.
MOONHUNT-325 - Увеличение уровня построек после атаки.
MOONHUNT-329 - Ошибка при установке новой версии.
MOONHUNT-330 - SQL-ошибка.
MOONHUNT-332 - Нельзя отправить полностью загруженный ресурсами флот.
MOONHUNT-339 - Ошибка в реферальной ссылке, HTML и BBCode.
MOONHUNT-340 - Ошибка при установке.
MOONHUNT-341 - Невозможно зарегистрироваться
MOONHUNT-343 - Невозможно расформировать альянс.
MOONHUNT-349 - SQL инъекция.
MOONHUNT-193 - Автоматическая очистка логов полётов флота.
MOONHUNT-224 - Список мультиаккаунтов.
MOONHUNT-230 - Запрет на пересечение флотов.
MOONHUNT-237 - Кнопка вывода производства на 100%.
MOONHUNT-297 - Маршруты.
MOONHUNT-298 - Обмен ресурсов.
MOONHUNT-308 - Баннер.
MOONHUNT-311 - Резервное копирование базы данных.
MOONHUNT-312 - Разделение больших списков на страницы.
MOONHUNT-290 - Неполные тексты офицеров и исследований.
MOONHUNT-301 - При восстановлении пароля не появлялось сообщение об отправке письма на почту.
',

'v1.6.1' => 'Jan 19.11.2011
- 0000027: [Ядро] Фаланга (Jan) - исправлено.
- 0000071: [Ядро] Список лун для телепортации (Jan) - исправлено.
- 0000078: [Флот (Задания)] Ревизия 2074 Задание Атака (Jan) - исправлено.
- 0000077: [Ядро] Ревизия 2074 Фаланга (Jan) - исправлено.
- 0000079: [Дизайн] Всплывающие подсказки в настройках вселенной не отображаются (Jan) - исправлено.
- 0000076: [Флот (Задания)] Новая версия 1.6 (Jan) - исправлено.
',

'v1.6' => 'Jan 17.11.2011
- 0000075: [Логин] Ошибка в названии планеты при её создании (Jan) - исправлено.
- 0000069: [Ядро] Шанс уничтожения луны (Jan) - исправлено.
- 0000066: [Ядро] Регистрация (Jan) - исправлено.
- 0000054: [Ядро] Задания Ракетная атака и Уничтожить (Jan) - исправлено.
- 0000070: [Ядро] Тех. поддержка (Jan) - исправлено.
- 0000068: [Ядро] Ревизия 2065 ошибка в файле класса шаблона (Jan) - исправлено.
- 0000018: [Ядро] Занижение скорости переработчиков и шпионов в галактике (Jan) - исправлено.
- 0000062: [Логин] Ошибка в установщике (Jan) - исправлено.
- 0000065: [Ядро] Атака в режиме отпуска (Jan) - исправлено.
- 0000067: [Ядро] Ревизия 2062 Обнуление вселенной (Jan) - исправлено.
- 0000061: [Время (ошибки смещения)] Прогрес бар двигается только на 100 пикселей (Jan) - исправлено.
- 0000058: [Дизайн] Прогресс бар на странице исследований не двигается бальше 40% (Jan) - исправлено.
- 0000064: [Логин] Установщик не работает (Jan) - исправлено.
- 0000057: [Флот (Задания)] Нет возможности отправить один корабль (Jan) - исправлено.
- 0000031: [Ядро] Ограничение в поиске (Jan) - исправлено.
- 0000038: [Ядро] Баг, связанный с ресурсами (Jan) - исправлено.
- 0000044: [Ядро] Недопустимый аргумент на странице обновления (Jan) - исправлено.
- 0000047: [Логин] Кто-то заходит с другого компьютера на Ваш аккаунт каждые 2 минуты (Jan) - исправлено.
- 0000051: [Флот (Задания)] Критическая ошибка в обработчике флота (Jan) - исправлено.
- 0000052: [Ядро] Маршруты (Jan) - исправлено.
- 0000055: [Флот (Задания)] В боевом отчёте не отображается сообщение об образовании луны (Jan) - исправлено.
- 0000045: [Дизайн] Скриншоты не показываются в IE8/IE9 (Jan) - исправлено.
- 0000050: [Ядро] Неправильное перенаправление (Jan) - исправлено.
- 0000049: [Ядро] Кодировка баннера (Jan) - исправлено.
',

'v1.5' => 'Jan 18.09.2011
- ADD: Поддержка часового пояса
- FIX: Уязвимость удалённого включения файлов
- FIX: Скорость флота в инновационных разработках
- FIX: Уведомительное сообщение
- FIX: Мультивселенная ошибка в Зале славы
- FIX: Удаление сообщений в IE
- FIX: Cookie для нижнего меню планет
- FIX: PHP ошибки в системе чата
- FIX: Ошибки со специальными символами в запросе на вступление в альянс
- FIX: Время полёта кораблей, если совместная атака была отменена
- FIX: Пропажа ресурсов после шпионажа
- FIX: Небольшие ошибки дизайна
- FIX: SQL-ошибка отзыва флота, если он один в САБе
- FIX: JS ошибка в боевых докладах
- FIX: Cron для статистики, который удаляет боевые доклады
- FIX: Мультивселенная ошибка при приглашении в САБ (StoNelHa) 
- FIX: Миссия 6 в экспедиции
- DIV: Улучшение безопасности в игре
- DIV: rootID теперь константа
- DIV: Добавлено Suhosin обнаружение
- DIV: Обновлены Smarty и TS Libs
- DIV: Различные корректировки в игре
- 0000024: [Логин] Активация по электронной почте не работает (Jan) - исправлено.
- 0000046: [Ядро] Не отображается список рефералов (Jan) - исправлено.
- 0000042: [Ядро] Имена рефералов не отображаются (Jan) - исправлено.
- 0000034: [Дизайн] В IE8 / IE9 не отображается история изменений (Jan) - исправлено.
- 0000030: [Ядро] Ошибка при попытке просканировать фалангой (Jan) - исправлено.
- 0000025: [Время (ошибки смещения)] Часовые пояса [повтор] (Jan) - исправлено.
- 0000035: [Ядро] Ошибка в ревизии 2043 (Jan) - исправлено.
- 0000037: [Флот (Задания)] Зависания флотов (Jan) - исправлено.
- 0000003: [EcoSystem] Время строительства кораблей (Jan) - исправлено.
- 0000033: [Дизайн] Правила не отображаются при выборе немецкого языка (Jan) - исправлено.
- 0000013: [EcoSystem] Ревизия 2033 (Jan) - исправлено.
- 0000029: [Ядро] Критическая ошибка при отправке на почту (Jan) - исправлено.
- 0000001: [Ядро] Сообщение об ошибке при неудачной регистрации (Jan) - исправлено.
- 0000006: [Ядро] Лог ошибок (Jan) - исправлено.
- 0000023: [Флот (Задания)] Ревизия 2037 Задание уничтожить (Jan) - исправлено.
- 0000021: [Ядро] Часовые пояса (Jan) - исправлено.
- 0000019: [Ядро] Информация о настройках сервера в админке (Jan) - исправлено.
- 0000008: [Ядро] Страница исследований постоянно обновляется (Jan) - исправлено.
- 0000005: [Ядро] Межпланетные ракеты (Jan) - исправлено.
- 0000004: [Ядро] Накрутка свободных полей (Jan) - исправлено.
- 0000007: [Ядро] Накрутка свободных полей [повтор] (Jan) - исправлено.
- 0000015: [Ядро] Ревизия 2033 Ракетная шахта (Jan) - исправлено.
- 0000014: [Дизайн] В IE 8 энергия отображается с дефектами (Jan) - исправлено.
- 0000011: [Chat] Чат не работает при выборе португальского языка (Jan) - исправлено.
- 0000010: [EcoSystem] Снос построек (Jan) - исправлено.
',

'v1.4' => 'Jan 10.07.2011
- ADD: Система логирования FirePHP
- ADD: Выбор языка в глобальном сообщении
- ADD: Новая система сообщений
- ADD: {lang} тег для файлов шаблона. Прямой доступ к языковым переменным
- ADD: Больше динамики для новых языков
- FIX: Чит на ресурсы
- FIX: Дублирование одинаковых сообщений
- FIX: Восстановление пароля
- FIX: Бонус обороняющемуся в битвах
- FIX: Регистрация
- FIX: Перенаправление на сообщения
- FIX: Невозможно отправить переработчиков на поле обломков игрока, находяшегося в РО
- FIX: Спрятаны координаты в боевых отчётах Зала Славы
- FIX: Неправильный подсчёт боевых параметров при уничтожении луны
- FIX: Чат
- FIX: Неправльное отображение переработчиков в Обзоре
- FIX: Локализация серверного времени
- FIX: Максимальное количество щитов и ракет
- FIX: Неправильный отступ тевого меню
- FIX: Моудли после новой установки
- FIX: Поиск
- FIX: Регистрация в больших вселенных
- FIX: Отмена исследований
- FIX: UTF8-имена целей флотов
- FIX: Сообщения в меню Галактика
- FIX: Отключённые модули не видны в меню Галактика
- FIX: Мультизагрузка файлов из кэша
- FIX: Неправильный тип данных для больших чисел
- FIX: Неправильное отображение очереди, если в ней два элемента одного уровня
- FIX: Обход проверки состояния модуля шпионажа и переработки
- DIV: Обновление архитектуры базы данных
- DIV: Старые всплывающие окна для сообщений и карточки с информацией об игроке
- DIV: Библиотека Smarty добавлена внутрь движка
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'v1.3.5' => 'Jan 23.04.2011
- ADD: Новый чат
- ADD: Новый стиль всплывающих окон
- ADD: Реферальная система
- ADD: Уничтожение ракет
- ADD: Хорошо сформированные ссылки (строительство)
- ADD: Добыча энергии на луне солнечными спутниками
- FIX: Правильный расчёт максимального количества ракет
- FIX: Деление на ноль
- FIX: Ошибка подсчёта общего числа игроков, если новый игрок присоединился к игре
- FIX: Ошибки верфи, если BCMath не доступна
- FIX: reCAPTCHA
- FIX: Отображение в обзоре и фаланге перерабатывающего поле обломков флота
- FIX: Подключение к Facebook
- FIX: Импорт/экспорт вселенных
- FIX: Исчезновение кораблей
- FIX: Сокращённые названия в боевом докладе
- FIX: Очереди
- FIX: $_SESSION[&quot;uni&quot;] = 0, после выхода из админки
- FIX: Сбор поля обломков из меню Флот
- DEL: Испанский и французский языки
- DIV: Установлен корректный метатег для favicon
- DIV: Расчёт размера луны
- DIV: Добавлена информация о максимальном количестве полей на планете (админка)
- DIV: Добавлены пропущенные языковые ключи
- DIV: Улучшена функция request_vars
- DIV: Переписана стартовая страница
- DIV: Улучшен код Javascript
- DIV: Поддержка нескольких вселенных
- DIV: Переписана система обновления
- DIV: Переписано подключение к Facebook
- DIV: Обновлены Smarty и jQuery
- DIV: Удалены Soundmanager и библиотека overLIB
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'v1.3' => 'Jan 21.01.2011
- ADD: Поддержка нескольких вселенных
- ADD: Поддержка IPv6
- ADD: Ограничение максимального количества планет
- ADD: Шаблон системы кэша
- ADD: Ежедневная работа Cron для очистки кэша
- ADD: Скупщик флота
- ADD: Система сессий
- ADD: Защита от взлома админки
- ADD: Настройки FTP при установке игры для решения проблем с CHMOD
- ADD: Новая система чата
- ADD: Поддержка кириллицы для баннера-статистики
- FIX: Подключение к Facebook
- FIX: САБ
- FIX: XSS в симуляторе боя
- FIX: Поле обломков
- FIX: Система обновления
- FIX: Чит на ресурсы
- FIX: Атака Администратора
- FIX: SSL на IIS
- FIX: Отображение Администратора в рекордах
- FIX: Защита новичков для миссии удержания
- FIX: Боевой доклад показывает корректные параметры технологий
- FIX: Система обнуления вселенной
- FIX: Обновление ресурсов на планете-мишени при атаке
- FIX: Взлом скорости флота
- FIX: Взлом скорости строительства
- FIX: Система кэша
- FIX: Уничтожение луны
- FIX: Teamspeak API для Teamspeak 3 серверов
- FIX: Система обновления не будет скачивать уже существующие файлы
- DIV: Изменён копирайт
- DIV: Кнопка "все" для телепорта
- DIV: Переменные офицеров теперь в vars.php
- DIV: Предел перевозимых ресурсов поднят до 18.446.744.073.709.551.616
- DIV: Изменение версии через админку
- DIV: Определение языка по HTTP заголовку в Index
- DIV: Использование нового Graph API для Facebook
- DIV: Новое местоположение для error.log
- DIV: Обновлены библиотеки TS³ Lib, Soundmanager, reCAPTCHA Lib, Smarty и jQuery (UI)
',

'v1.2' => 'Jan 14.09.2010
- ADD: Максимальное количество флотов в САБе (По умолчанию: 16)
- ADD: Новая система прав доступа в админке
- ADD: .htaccess защита для некоторых директорий
- FIX: Экспедиция
- FIX: Время сервера в обзоре
- FIX: Взлом исследований когда строится ID:6 или 31
- FIX: Выход из альянса
- FIX: Не видно приглашённых в САБ
- FIX: overLIB проблемы с Internet Explorer
- FIX: Проблемы мультиязычности
- FIX: Защитный код reCAPTCHA
- FIX: Защита админа
- FIX: Образование луны
- FIX: Права в альянсе
- FIX: Телепорт
- FIX: Подсчёт очков построек
- FIX: Несколько HTML ошибок
- FIX: Разрыв строки в общем сообщении в альянсе
- FIX: Режим отпуска
- DIV: Обновление языков
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'v1.1' => 'Jan 31.08.2010
- ADD: Скин GoW
- ADD: Мод управления версиями
- ADD: Cronjob настройки для баннера-статистики
- ADD: Настройки для музыки
- FIX: Ошибка уведомления в докладах
- FIX: Взлом ресурсов
- FIX: Баг флота
- DEL: Неиспользуемые картинки
- DIV: Оптимизирован CSS
- DIV: Изменены HTML функции (td.c на th / th на td)
- DIV: Обновление до HTML 5
',

'v1.0' => 'Jan 07.08.2010
- FIX: Глобальное сообщение
- FIX: Забыли пароль?
- FIX: Перезапуск игры
- FIX: Ресурсы
- FIX: Информация об аккаунте
- FIX: Уничтожение флота после боя
- FIX: Активация пользователя в админке
- FIX: Удаление аккаунта
- FIX: Бонус к скорости для малого транспорта
- FIX: Переработка поля обломков
- FIX: Сообщение удаления в админке
- FIX: Модули на английском языке
- FIX: Страница обновления
- FIX: class.ShowShipyardPage.php на строке 43: деление на ноль
- DIV: Ограничение количества найденной тёмной материи
- DIV: Изменена система скорострела
- DIV: Решены проблемы с симулятором боя
',

'RC 6' => 'Jan 28.07.2010
- ADD: Русский язык (ssAAss и InquisitorEA)
- ADD: Португальский язык (morgado)
- ADD: Испанский язык (ZideN) АЛЬФА версия (!)
- FIX: Поддержка UTF-8 для запросов в друзья
- FIX: Уведомление о новых сообщениях
- FIX: Фаланга
- FIX: Установщик
- FIX: Поле обломков при нападении на луну
- FIX: Сбор поля обломков
- FIX: Расчёт кражи ресурсов в нападениях
- FIX: Уничтожение луны
- DIV: Новая музыка на стартовой странице
- DIV: Удалены старые настройки
- DIV: Перекодирование админки
- DIV: Оптимизирован CSS для логина
- DIV: zlib.output_compression используется вместо ob_gzhandler
- DIV: Изменён путь для reCAPTCHA AJAX
- DIV: Удалены старые UGamla функции
- DIV: Добавлена новая версия Soundmanager (2.96a.20100624)
- DIV: Обновлён движок Smarty
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.1' => 'Jan 23.06.2010
- ADD: Для задания "держаться" игрок должен быть в альянсе/списке друзей
- ADD: Название главной планеты при регистрации
- ADD: Запрос пароля при смене должности/релогине
- FIX: Потери флотов
- FIX: Работа термоядерной электростанции при отсутствии добычи дейтерия
- FIX: Прямая ссылка защитного кода не загружается
- FIX: Ракеты
- FIX: Выбор языка при регистрации
- FIX: Название колонии
- FIX: Режим отпуска
- FIX: Взлом админки через Facebook
- FIX: Возврат флота
- FIX: Сообщение транспорта
- FIX: Исследования
- FIX: Фаланга
- FIX: Получение ресурсов после победного боя
- FIX: Очередь построек
- FIX: Установка
- DIV: Автоматическое включение производства на 100% после выхода из режима отпуска
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0' => 'Jan 30.05.2010
- ADD: Новые корабли
- ADD: Поддержка всех планет в системе
- ADD: Возможность слушать музыку на главной странице
- ADD: Проверка доступных миссий в третьем окне отправления флота
- ADD: Симулятор боя
- ADD: bcmath в JS
- DEL: Система плагинов
- FIX: Проблема соединения с базой данных
- FIX: Удвоение ресурсов при полёте
- FIX: Текст заявки
- FIX: Техническая поддержка
- FIX: Уничтожение луны
- FIX: Полёт флота
- FIX: Два чита при строительстве
- FIX: Ресурсы
- FIX: Теперь в верфи можно строить до триллиона кораблей в одной очереди
- FIX: Расход Тёмной материи на оборону
- FIX: Удаление луны
- FIX: Межгалактическая исследовательская сеть
- FIX: SQL-ошибка при выборе заданий для флота
- FIX: Строительство постройки при его недоступности
- FIX: Строительство построек за ноль секунд
- FIX: Статистика альянса
- FIX: SQL-инъекция в заметках, сообщениях и целях флота
- FIX: Teamspeak
- FIX: Улучшенный транспорт, Мега переработчик
- FIX: Ошибка в статистике у новых угроков
- DIV: Использование IE7-js для IE
- DIV: Использование хоста Google для размещения jQuery JS
- DIV: Обновление библиотек Teamspeak 3
- DIV: Упрощение запросов к флоту
- DIV: Левое меню
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 8' => 'Jan 20.04.2010
- FIX: Блокировка
- FIX: Удаление невыделенных сообщений
- FIX: История запросов
- FIX: Распределение ресурсов после победного боя
- FIX: Активность
- FIX: Создание планеты в админке
- FIX: Телепортация флота
- FIX: Скачок ресурсов до 9*10^132
- FIX: BB-коды
- FIX: Потеря ресурсов
- FIX: Установка
- DIV: Переделано добавление построек в очередь
- DIV: Обновление до PHP 5.2.6
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 7' => 'Jan 16.04.2010
- ADD: Google Analytics
- FIX: Большой транспорт
- FIX: Глобальное сообщение
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 6' => 'Jan 15.04.2010
- ADD: Обновление админки (XG Proyecto 2.9.4)
- ADD: Подключение к Facebook
- ADD: Система дипломатии
- ADD: Мега переработчик в галактике
- ADD: Орбитальная база, Террор, Бегемот
- ADD: Постоянная образования луны
- ADD: Возможность загружать обновлённые файлы из админки
- FIX: Потери ресурсов в огромном количестве
- FIX: Галактика
- FIX: Шпионаж
- FIX: Передача альянса
- FIX: Отрицательные знаечения в экспедиционных боях
- FIX: Взлом альянса
- FIX: Режим отпуска
- FIX: Телепортация флота
- FIX: Постройки
- FIX: Активность
- FIX: Об игроке
- FIX: Генерал
- FIX: Распределение ресурсов при атаке в САБе
- FIX: Отрицательное время обратного полёта у участников САБа
- FIX: Расчёт ресурсов
- FIX: Время в шпионских докладах
- FIX: Статистика альянса
- FIX: Шрифт в overLIB
- DIV: Обновление админки
- DIV: Обновление Smarty до 3.0 бета 8
- DIV: Изменение системы строительства построек и флота
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 5' => 'Jan 06.03.2010
- FIX: Нападение
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 4' => 'Jan 01.03.2010
- ADD: Система плагинов v0.4 (Green @ XG Proyect)
- ADD: Новая система обновления статистики
- FIX: САБ
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 3' => 'Jan 23.02.2010
- ADD: Банк Тёмной материи
- ADD: Система обновления
- ADD: Возможность скрытия Администраторов в статистике
- ADD: jQuery 1.8 RC 2
- ADD: Новая экспедиция
- FIX: Охват фаланги и дальность полёта межпланетных ракет
- FIX: Режим отпуска
- FIX: Удерживающиеся флоты теперь учитываются в шпионских докладах
- FIX: Сообщение об уничтожении луны
- FIX: Учитывание Администраторов в рекордах
- FIX: Поиск планеты
- FIX: Новый боевой движок для межпланетных ракет
- DIV: Подключение к базе данных в UTF-8
- DIV: Баннер-статистика будет обновляться один раз в день
- DIV: Оптимизация веб-страниц
- DIV: Добавлен заголовок для кеширования браузера
- DIV: Обновление jQuery до 1.4.2
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 2' => 'Jan 20.02.2010
- ADD: Удаление аккаунта во время режима отпуска
- ADD: Поддержка UTF-8 в названиях
- ADD: Стоимость Тёмной материи
- FIX: Очередь
- FIX: Снос построек
- FIX: Создание альянса
- FIX: САБ в обзоре
- FIX: Взлом САБа
- FIX: Распределение ресурсов при атаке в САБе
- FIX: Зависимость добычи дейтерия от температуры планеты
- FIX: Термоядерная электростанция: бонус энергетической технологии
- FIX: Разрыв строки в глобальном сообщении
- DIV: Обновление Smarty до 3.0 бета 7
- DIV: Учитывание САБа в статистике об игроке
- DIV: Оптимизированы игровые сообщения
- DIV: Исправлены опечатки
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 5.0 бета 1' => 'Jan 02.02.2010
- NEW: Поиск
- NEW: Главная страница
- ADD: Движок шаблонов веб-страниц
- ADD: Максимальный уровень исследований теперь регулируем
- ADD: Список планет
- ADD: Поддержка Teamspeak 3
- ADD: Кэш для рекордов
- ADD: Обновление ресурсов в реальном времени
- ADD: Оптимизация зала славы в базе данных
- ADD: Исходящие сообщения
- FIX: Экономическая система
- FIX: Поиск Тёмной материи
- FIX: Об игроке
- FIX: Вместимость хранилищ в меню сырьё
- FIX: Дизайн
- FIX: Заблокированные
- FIX: Teamspeak в обзоре
- FIX: Количество игроков
- FIX: Отображение шпионского доклада
- FIX: Чат альянса
- FIX: Появление поля обломков после образования луны
- FIX: Проверка занятых полей на планете
- FIX: Удаление игроков
- FIX: Межгалактическая исследовательская сеть
- FIX: Данные потребления
- FIX: Обработчик флотов
- FIX: Дейтсиве межпланетных ракет в режиме отпуска и при защите админов
- FIX: Присоединение к САБу
- FIX: Время полёта флота
- FIX: Защитный код
- FIX: Уничтожение планеты
- FIX: Возврат переработчиков
- FIX: При колонизации привезённые ресурсы будут помещены в хранилища планеты
- FIX: Потребление дейтерия флотом
- FIX: SQL-дыра касательно флота
- FIX: Удаление планеты
- FIX: Различные читы связанные с флотом
- FIX: Ошибка при открытии админки
- FIX: Неправильное отображение в Опере
- FIX: Уничтожение луны
- FIX: Аддон Модули
- FIX: Техническая поддержка
- FIX: Задание: поиск Тёмной материи
- FIX: Проблема образования больших планет
- FIX: Члены альянса в информации
- FIX: Защита новичков
- FIX: Строительство на луне
- FIX: Защита администарции
- FIX: Строительство кораблей без верфи
- FIX: Ошибка при создании боевого доклада
- FIX: Восстановление пароля
- FIX: Изменение логина и пароля
- FIX: Пояснения в описаниях
- DIV: Новый способ вызова обработчика флота
- DIV: Новая система образования планет
- DIV: Более удобное добавление строительства построек
- DIV: Новая формула для расчёта вместимости хранилищ
- DIV: Информация в админке, при ошибке обработчика флотов
- DIV: Активация пользователей в админке
- DIV: Новые формулы для солнечного спутника, дейтерия, температуры и полей планеты
- DIV: Обновление jQuery до 1.4.1
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 4.2' => 'Jan 06.12.2009
- ADD: Баннер-статистика
- ADD: Ограничение доступа к содержимому
- ADD: Фукция подтверждения пользователя регулируема
- FIX: Офицеры
- FIX: Ссылка на подтверждение электронной почты
- FIX: Возврат - тема в сообщения
- FIX: Глобальное сообщение
- FIX: SQL-брешь в заметках
- FIX: Новости
- FIX: Скорость кораблей
- FIX: Расчёт добычи (by WOT-Game)
- FIX: Луна в галактике
- FIX: Электронная почта
- FIX: Описание альянса
- FIX: Восстановление пароля
- FIX: Старница альянса
- FIX: макс. время в экспедиции и макс. время удерживания флота
- FIX: Проверка имени пользователя при регистрации
- FIX: Закрытие регистрации и отключение сервера
- FIX: Редактор чата в админке
- FIX: Сообщение о переполнении склада
- FIX: Название альянса в галактике
- FIX: Статистика
- DIV: Электронная почта через SMTP
- DIV: Чат
- DIV: Переделан установщик
- DIV: Заметки
- DIV: Интервал между сообщениями в чате - десять секунд
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 4.1' => 'Jan 23.11.2009
- FIX: Модерация в админке
- FIX: Удаление игроков
- FIX: Cron
- FIX: Отправление автосообщения на электронную почту
- FIX: Ошибка в верхней навигационной полосе в админке
- FIX: UTF-8 в админке
- FIX: Мелкие SQL-уязвимости
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 4.0' => 'Jan 13.11.2009
- ADD: Настройка флота и обороны в обломки
- ADD: Новые функции в коде игры
- ADD: Полностью переделана админка (XGP 2.9.1)
- ADD: Обработчик флота больше не вызывается из авторизации
- ADD: Новый Cron - движок
- ADD: Использование PHPMailer v5.1 Lite
- MOD: Связь с базой данных через MySQLi
- MOD: САБ в обзоре
- MOD: Новый движок чата на основе jQuery
- MOD: Сообщение о строительстве выключено
- MOD: Мультизапрос (5%)
- MOD: Замена функций в движке игры (70%)
- MOD: Замена функций-запросов к базе данных (80%)
- MOD: Новый отправщик электронных сообщений
- MOD: Оставшееся время строительства/изучения в заголовке страницы
- MOD: Функция автозагрузки
- FIX: Разрыв строки в описании альянса
- FIX: Список друзей
- FIX: Предел очков в статистике поднят до 18.446.744.073.709.551.616
- FIX: Обнуление вселенной
- FIX: Нападение шпионскими зондами
- FIX: SQL-брешь касательно ракет
- FIX: Нахождение в игре анонимных пользователей
- FIX: Удаление планеты
- FIX: Ресурсы за "снос" исследований
- FIX: Вычет десяти дейтрия за просмотр своей системы
- FIX: Список планет в админке
- FIX: (ID:01) - строительство
- FIX: Строительство построек без затрат ресурсов
- FIX: Главной планетой является одна из колоний
- FIX: Ссылка на атаку в сообщениях шпионажа луны
- FIX: Задание поиск Тёмной материи
- DIV: Из базы данных удалены таблицы лун и галактик
- DIV: Полный переход на UTF-8
- DIV: Оптимизация скина
- DIV: Изменения в базе данных относительно построек и исследований
- DIV: Адаптация к Internet Explorer 8 и Opera
- DIV: Ненужные SQL-запросы (SELECT * FROM) изменены и дополнены
- DIV: Все таблицы базы данных отптимизируются один раз в день
- DIV: Страницу альянса можно включать и выключать
- DIV: Эффективность межгалактической исследовательской станции увеличилась
- DIV: Новая регистрация (XNova-Reloaded 0.1)
- DIV: Новое сообещние Администрации (XNova-Reloaded 0.1)
- DIV: Новая очередь (XNova-Reloaded 0.1)
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 3.0' => 'Jan 18.10.2009
- ADD: Положения
- ADD: Правила
- ADD: Подтверждение электронной почты
- ADD: Резервное копирование базы данных
- ADD: Выбор порта базы данных
- MOD: Оптимизация базы данных
- FIX: Страница альянса
- FIX: Смена названия альянса
- FIX: Смена аббревиатуры альянса
- FIX: Невозможность перевозить более 2.147.483.647 ресурсов
- FIX: Обновление статистики
- FIX: Удаление игроков
- FIX: Добыча при нападении
- FIX: Получение Тёмной материи в экспедиции
- DIV: Старая экономическая система и распеределение ресурсов после победного боя
- DIV: Новый текст, приходящий при восстановлении пароля
- DIV: Система авторизации
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре
',

'RC 2.0' => 'Jan 13.10.2009
- MOD: Лотерея
- MOD: Teamspeak
- MOD: Минимальное время строитльства
- MOD: Защитный код
- MOD: Новости в обзоре и на главной странице
- MOD: Зал славы
- MOD: Статистика альянса
- MOD: Информация об игроке в меню галактика
- MOD: Новые списки планет, лун, игроков в админке
- MOD: Новые корабли: Улучшенный транспорт, Мега переработчик, Сборщик Тёмной материи, Звёздный ловец
- MOD: Новое оборонительное орудие (Гравитонное орудие)
- MOD: Новое задание (Поиск Тёмной материи)
- MOD: Новая экономическая система
- MOD: Модули
- MOD: Техническая поддержка
- MOD: Рекорды
- FIX: Неправильный расчёт размера луны при её образовании
- FIX: Неправильное распределение ресурсов после победного боя
- FIX: Старница альянса
- FIX: При уничтожении луны флоты не возвращаются на планету
- DIV: Новый стандартный скин Darkness
- DIV: Игра на 100% переведена на русский (автор InquisitorEA)
- DIV: Показ админов, которые в настоящее время в сети
- DIV: Улучшение безопасности в игре
- DIV: Различные корректировки в игре

За основу взята XG Proyect 2.8 по состоянию на 11.10.2009
',
);