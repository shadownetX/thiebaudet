#!/bin/bash

# start varnish with various options
varnishd -j unix,user=varnishd -F -f ${VARNISH_VCL_PATH} -s malloc,${VARNISH_MEMORY} -a 0.0.0.0:${VARNISH_PORT} -p http_req_hdr_len=16384 -p http_resp_hdr_len=16384

# start varnishlog (as a daemon) with various options
# varnishlog -D -B -w ${VARNISHLOG_PATH}

# start varnishncsa (in foreground) with a 10 second connection timeout
# varnishncsa -r ${VARNISHLOG_PATH} -f ${VARNISHNCSA_FORMAT_PATH} -t 10 -a -w ${VARNISHNCSA_LOG_PATH}