#!/bin/bash

sed -i -e "s/xdebug\.remote_host=.*/xdebug.remote_host=${XDEBUG_HOST}/g" /etc/php/7.1/mods-available/xdebug.ini
sed -i -e "s/xdebug\.remote_port=.*/xdebug.remote_port=${XDEBUG_PORT}/g" /etc/php/7.1/mods-available/xdebug.ini
sed -i -e "s/xdebug\.idekey=.*/xdebug.idekey=${XDEBUG_IDE_KEY}/g" /etc/php/7.1/mods-available/xdebug.ini
