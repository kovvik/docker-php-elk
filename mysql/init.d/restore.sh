#!/bin/bash
DUMPFILE=dump.sql

if [ -f $DUMPFILE ];
then
  echo "Dump file found, restoring database from it..."
  mysql --host=localhost --port=3306 -u root --protocol=tcp --password=1q9o2w8i37eu database < $DUMPFILE && echo "Done."
fi
