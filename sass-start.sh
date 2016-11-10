#!/bin/bash
echo Compiling your sass ...
sass scss/app.scss:www/css/styles.css
sass --watch scss/app.scss:www/css/styles.css