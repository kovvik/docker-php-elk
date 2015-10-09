#!/bin/bash
mysqldump --host=localhost --port=3306 -u root --protocol=tcp --password=1q9o2w8i37eu wordpress > wordpress/dump.sql
