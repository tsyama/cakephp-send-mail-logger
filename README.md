# SendMailLogger plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require tsyama/cakephp-send-mail-logger
```

## Usage

### 1. Create send_mail_logs table

```
bin/cake migrations migrate -p SendMailLogger
```

### 2. Replace Email class

```
use SendMailLogger\Email;
```