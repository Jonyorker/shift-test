#!/bin/bash

# Run Microsoft SQl Server and initialization script (at the same time)
/usr/src/app/run-initialization.sh "$1" & /opt/mssql/bin/sqlservr