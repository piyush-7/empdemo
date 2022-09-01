<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-01 08:05:48 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:13:59 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:14:35 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:16:03 --> Query error: Not unique table/alias: 'tbl_employee' - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM (`tbl_employee`, `tbl_employee`)
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:16:21 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:18:54 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:20:03 --> Query error: Column 'emp_id' in where clause is ambiguous - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:23:16 --> Query error: Unknown column 'tbl_department.depart_name' in 'field list' - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`
FROM `tbl_employee`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:23:29 --> Query error: Table 'management-2.emp_id' doesn't exist - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`
FROM `emp_id`
WHERE 1 IS NULL
ERROR - 2022-09-01 08:27:04 --> Query error: Unknown column 'tbl_department.depart_name' in 'field list' - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
WHERE `emp_id` = '1'
ERROR - 2022-09-01 08:29:00 --> Query error: Unknown column 'tbl_department.depart_name' in 'field list' - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM `tbl_employee`
WHERE `tbl_employee`.`emp_id` = '1'
