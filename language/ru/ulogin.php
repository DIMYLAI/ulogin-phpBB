<?php

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}


$lang = array_merge($lang, array(
	'ULOGIN_ID1'                => 'Идентификатор виджета uLogin №1',
	'ULOGIN_ID1_EXPLAIN'        => 'Идентификатор виджета в шапке форума. Пустое поле - виджет по умолчанию. Идентификатор виджета можно получить в личном кабинете на сайте <strong><a href = "http://ulogin.ru/">ulogin.ru</a></strong>.',
	'ULOGIN_ID2'                => 'Идентификатор виджета uLogin №2',
	'ULOGIN_ID2_EXPLAIN'        => 'Идентификатор виджета на странице входа. Пустое поле - виджет из поля №1',
	'ULOGIN_LABEL_UCP'          => 'Войти через:',

	'ULOGIN_ADD_ACCOUNT_SUCCESS' => 'Аккаунт успешно добавлен',
	'ULOGIN_DB_ERROR' => 'Ошибка при работе с БД.',

	'ULOGIN_VERIFY' => 'Подтверждение аккаунта.',
	'ULOGIN_VERIFY_TEXT' => 'Электронный адрес данного аккаунта совпадает с электронным адресом существующего пользователя. <br>Требуется подтверждение на владение указанным email.',

	'ULOGIN_SYNCH' => 'Синхронизация аккаунтов.',
	'ULOGIN_SYNCH_TEXT' => 'С данным аккаунтом уже связаны данные из другой социальной сети. <br>Требуется привязка новой учётной записи социальной сети к этому аккаунту.',

	'ULOGIN_REG_ERROR' => 'Ошибка при регистрации.',
	'ULOGIN_REG_ERROR_TEXT' => 'Произошла ошибка при регистрации пользователя.',

	'ULOGIN_AUTH_ERROR' => 'Произошла ошибка при авторизации.',
	'ULOGIN_ADD_ACCOUNT_ERROR' => 'Не удалось записать данные об аккаунте.',
	'ULOGIN_NO_TOKEN_ERROR' => 'Не был получен токен uLogin.',
	'ULOGIN_NO_USER_DATA_ERROR' => 'Не удалось получить данные о пользователе с помощью токена.',
	'ULOGIN_WRONG_USER_DATA_ERROR' => 'Данные о пользователе содержат неверный формат.',
	'ULOGIN_HOST_ADDRESS_ERROR' => '<i>ERROR</i>: адрес хоста не совпадает с оригиналом %s',
	'ULOGIN_TOKEN_EXPIRED_ERROR' => '<i>ERROR</i>: время жизни токена истекло',
	'ULOGIN_INVALID_TOKEN_ERROR' => '<i>ERROR</i>: неверный токен',
	'ULOGIN_NO_VARIABLE_ERROR' => 'В возвращаемых данных отсутствует переменная <b>%s</b>',

	'ULOGIN_ACCOUNT_NOT_AVAILABLE' => 'Данный аккаунт привязан к другому пользователю. </br>Вы не можете использовать этот аккаунт',

	'ULOGIN_DELETE_ACCOUNT_SUCCESS' => 'Удаление аккаунта %s успешно выполнено',
	'ULOGIN_DELETE_ACCOUNT_ERROR' => 'Ошибка при удалении аккаунта',

	'ULOGIN_BACK_URL' => 'Вернуться',


));

