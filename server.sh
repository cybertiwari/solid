#/usr/bin/bash
{ 
    php -S 127.0.0.1:8000 -t ./public 
} || {
     php -S 127.0.0.1:8001 -t ./public
} || {
     php -S 127.0.0.1:8002 -t ./public
} || {
     php -S 127.0.0.1:8003 -t ./public
} || {
     php -S 127.0.0.1:8004 -t ./public
} || {
     php -S 127.0.0.1:8005 -t ./public
} || {
     php -S 127.0.0.1:8006 -t ./public
} || {
     php -S 127.0.0.1:8007 -t ./public
} || {
     php -S 127.0.0.1:8008 -t ./public
} || {
     php -S 127.0.0.1:8009 -t ./public
} || {
     php -S 127.0.0.1:8010 -t ./public
}