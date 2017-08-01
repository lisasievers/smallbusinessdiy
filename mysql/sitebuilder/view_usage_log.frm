TYPE=VIEW
query=select `sitebuilder`.`usage_log`.`id` AS `id`,`sitebuilder`.`usage_log`.`module_id` AS `module_id`,`sitebuilder`.`usage_log`.`user_id` AS `user_id`,`sitebuilder`.`usage_log`.`usage_month` AS `usage_month`,`sitebuilder`.`usage_log`.`usage_year` AS `usage_year`,`sitebuilder`.`usage_log`.`usage_count` AS `usage_count` from `sitebuilder`.`usage_log` where ((`sitebuilder`.`usage_log`.`usage_month` = month(curdate())) and (`sitebuilder`.`usage_log`.`usage_year` = year(curdate())))
md5=9397a6075ec28d68d0b87bbcd997bcca
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-08-01 09:37:23
create-version=1
source=select `usage_log`.`id` AS `id`,`usage_log`.`module_id` AS `module_id`,`usage_log`.`user_id` AS `user_id`,`usage_log`.`usage_month` AS `usage_month`,`usage_log`.`usage_year` AS `usage_year`,`usage_log`.`usage_count` AS `usage_count` from `usage_log` where ((`usage_log`.`usage_month` = month(curdate())) and (`usage_log`.`usage_year` = year(curdate())))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `sitebuilder`.`usage_log`.`id` AS `id`,`sitebuilder`.`usage_log`.`module_id` AS `module_id`,`sitebuilder`.`usage_log`.`user_id` AS `user_id`,`sitebuilder`.`usage_log`.`usage_month` AS `usage_month`,`sitebuilder`.`usage_log`.`usage_year` AS `usage_year`,`sitebuilder`.`usage_log`.`usage_count` AS `usage_count` from `sitebuilder`.`usage_log` where ((`sitebuilder`.`usage_log`.`usage_month` = month(curdate())) and (`sitebuilder`.`usage_log`.`usage_year` = year(curdate())))
