<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-08-30 08:33:54 --> Query error: Not unique table/alias: 'tbl_employee' - Invalid query: SELECT `tbl_employee`.`emp_id`, `tbl_employee`.`emp_name`, `tbl_employee`.`emp_email`, `tbl_employee`.`emp_add`, `tbl_employee`.`emp_mobile`, `tbl_employee`.`emp_gender`, `tbl_employee`.`emp_dob`, `tbl_employee`.`emp_pancard`, `tbl_employee`.`emp_joining`, `tbl_employee`.`emp_salary`, `tbl_department`.`depart_name`, `tbl_designaion`.`desi_name`
FROM (`tbl_employee`, `tbl_employee`)
JOIN `tbl_department` ON `tbl_employee`.`emp_id` = `tbl_department`.`emp_id`
JOIN `tbl_designaion` ON `tbl_employee`.`emp_id` = `tbl_designaion`.`emp_id`
ERROR - 2022-08-30 11:16:18 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 11:16:41 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 11:22:32 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 11:24:26 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 11:25:21 --> Severity: error --> Exception: Call to undefined method CI_Input::put() C:\xampp\htdocs\empdemo\application\modules\emp\controllers\api\Employee.php 320
ERROR - 2022-08-30 11:29:53 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 11:30:07 --> Could not find the language line "input_invalid_format"
ERROR - 2022-08-30 13:13:56 --> 404 Page Not Found: ../modules/emp/controllers/api//index
ERROR - 2022-08-30 13:29:21 --> Severity: error --> Exception: Too few arguments to function Employee::index_get(), 0 passed in C:\xampp\htdocs\empdemo\application\libraries\REST_Controller.php on line 703 and exactly 1 expected C:\xampp\htdocs\empdemo\application\modules\emp\controllers\api\Employee.php 135
ERROR - 2022-08-30 13:30:36 --> Severity: error --> Exception: Too few arguments to function Employee::index_get(), 0 passed in C:\xampp\htdocs\empdemo\application\libraries\REST_Controller.php on line 703 and exactly 1 expected C:\xampp\htdocs\empdemo\application\modules\emp\controllers\api\Employee.php 135
ERROR - 2022-08-30 13:31:32 --> Severity: error --> Exception: Too few arguments to function Employee::index_get(), 0 passed in C:\xampp\htdocs\empdemo\application\libraries\REST_Controller.php on line 703 and exactly 1 expected C:\xampp\htdocs\empdemo\application\modules\emp\controllers\api\Employee.php 135
