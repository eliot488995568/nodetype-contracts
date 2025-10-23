test:
	vendor/bin/php-cs-fixer check --ansi -vvv
	vendor/bin/phpstan analyse


rector:
	vendor/bin/rector process
	vendor/bin/php-cs-fixer fix --ansi -vvv
