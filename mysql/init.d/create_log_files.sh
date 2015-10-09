#!/bin/sh

echo "creating query.log file..."
touch /var/logstash/query.log && chown mysql:mysql /var/logstash/query.log && echo "Done."

echo "creating slow_queries.log file..."
touch /var/logstash/slow_queries.log && chown mysql:mysql /var/logstash/slow_queries.log && echo "Done."
