#!/bin/bash

LOG_TXT_PATH="/home/life/gitlab/backup/log.txt"

echo "$(date '+%Y/%m/%d %H:%M:%S'): Start gitlab backup..." | tee -a $LOG_TXT_PATH

backup_name=`echo "gitlab_data_$(date '+%Y%m%d%H%M%S').tar.gz"`

echo "$(date '+%Y/%m/%d %H:%M:%S'): Backup..." | tee -a $LOG_TXT_PATH

tar=`sudo tar -czvf /home/life/gitlab/backup/$backup_name /srv/gitlab/data/`

echo "$(date '+%Y/%m/%d %H:%M:%S'): Upload to GCS...($backup_name)" | tee -a $LOG_TXT_PATH

update=`gsutil cp /home/life/gitlab/backup/$backup_name gs://lifetechvn-a8a8b.appspot.com/gitlab_backup`

echo "$(date '+%Y/%m/%d %H:%M:%S'): Upload done." | tee -a $LOG_TXT_PATH

echo "$(date '+%Y/%m/%d %H:%M:%S'): Clear old data." | tee -a $LOG_TXT_PATH

sudo rm /home/life/gitlab/backup/gitlab_data_*

echo "$(date '+%Y/%m/%d %H:%M:%S'): Process done." | tee -a $LOG_TXT_PATH
