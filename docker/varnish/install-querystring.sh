#!/bin/bash
cd /usr/local/src/
curl -sfL https://github.com/Dridi/libvmod-querystring/archive/v$QUERYSTRING_VERSION.tar.gz -o libvmod-querystring-$QUERYSTRING_VERSION.tar.gz
tar -xzf libvmod-querystring-$QUERYSTRING_VERSION.tar.gz
cd libvmod-querystring-$QUERYSTRING_VERSION
./autogen.sh
./configure VARNISHSRC=/usr/local/src/varnish-$VARNISH_VERSION
make install
rm -r ../libvmod-querystring-$QUERYSTRING_VERSION*