# 🇬🇧 English
DirectoryLister4Win is a fork of Directory Lister 📂 v4.4.0, compatible with the Windows file system.

Requirements
------------
  - Directory Lister requires [PHP](https://windows.php.net/download) >= 8.0.
  - PHP extensions:
    - [Zip](https://www.php.net/manual/en/book.zip.php);
    - [DOM](https://www.php.net/en/dom);
    - [Fileinfo](https://www.php.net/manual/en/book.fileinfo.php);
    - [Multibyte String](https://www.php.net/manual/en/book.mbstring.php).

Installation
------------
  1. [Install](https://www.php.net/manual/en/install.windows.php) a web-server and php bundle (for example [Apache + PHP](https://www.php.net/manual/en/install.windows.apache2.php), or [IIS + PHP](https://www.php.net/manual/en/install.windows.iis.php)).
  2. Edit the `php.ini` file by uncommenting the values below by removing the semi colon symbol `;`. Line numbers depend on version (line numbers as of PHP 8.4.14):
```ini
extension=fileinfo      # Line 922
extension=mbstring      # Line 928
extension=zip           # Line 951
```
  3. Set default document to `index.php`.
  4. [Download Directory Lister](https://github.com/Secret-Rabbit/DirectoryLister4Win/archive/refs/heads/master.zip).
  5. Extract the zip archive.
  6. Copy extracted files/folders to your web server.

Configuration
-------------
  1. Copy `.env.example` to `.env`.
  2. Edit the configuration values in `.env`.

See the [Configuration Documentation](https://docs.directorylister.com/configuration) for more information. __Warning__: The functions added in version 5 of Directory Lister will not work.

Copyright
---------
This project is licensed under the [MIT License](https://github.com/DirectoryLister/DirectoryLister/blob/master/LICENSE).


# 🇷🇺 Русский
DirectoryLister4Win — это форк Directory Lister 📂 v4.4.0, совместимый с файловой системой Windows.


Требования
----------
  - Для работы Directory Lister требуется [PHP](https://windows.php.net/download) версии 8.0 и выше.
  - Необходимые расширения PHP:
    - [Zip](https://www.php.net/manual/en/book.zip.php);
    - [DOM](https://www.php.net/en/dom);
    - [Fileinfo](https://www.php.net/manual/en/book.fileinfo.php);
    - [Multibyte String](https://www.php.net/manual/en/book.mbstring.php).

Установка
---------
  1. [Установите](https://www.php.net/manual/en/install.windows.php) веб‑сервер и комплект PHP (например, [Apache + PHP](https://www.php.net/manual/en/install.windows.apache2.php) или [IIS + PHP](https://www.php.net/manual/en/install.windows.iis.php)).
  2. Отредактируйте файл `php.ini`, раскомментировав строки ниже — удалите точку с запятой `;` в начале строки. Номера строк зависят от версии PHP (номера строк приведены для PHP 8.4.14):
```ini
extension=fileinfo      # Строка 922
extension=mbstring      # Строка 928
extension=zip           # Строка 951
```
  3. Установите `index.php` как документ по умолчанию.
  4. [Скачайте Directory Lister](https://github.com/Secret-Rabbit/DirectoryLister4Win/archive/refs/heads/master.zip).
  5. Распакуйте ZIP‑архив.
  6. Скопируйте распакованные файлы и папки на ваш веб‑сервер.

Настройка
------------
  1. Скопируйте `.env.example` как `.env`.
  2. Отредактируйте параметры в `.env`.

См. [документацию по конфигурации](https://docs.directorylister.com/configuration) для получения дополнительной информации.  
__Предупреждение__: функции, добавленные в 5 версии Directory Lister, не работают.

Авторские права
---------------
Этот проект распространяется под лицензией [MIT](https://github.com/DirectoryLister/DirectoryLister/blob/master/LICENSE).