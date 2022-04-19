echo "" > tmp_cron
crontab -l > tmp_cron
echo "* * * * * cd $PWD && docker-compose run app php artisan schedule:run >> /dev/null 2>&1" >> tmp_cron
crontab tmp_cron
rm tmp_cron
echo "success"
