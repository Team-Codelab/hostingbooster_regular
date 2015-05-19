<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-07-27 20:35:35 +00:00 --- error: Kohana_Exception [ 403 ]: @todo FORBIDDEN
/home/hostin18/public_html/cloudimg/modules/gallery/helpers/access.php [ 202 ]
#0 /home/hostin18/public_html/cloudimg/modules/gallery/helpers/access.php(425): access_Core::forbidden()
#1 /home/hostin18/public_html/cloudimg/modules/gallery/controllers/uploader.php(41): access_Core::verify_csrf()
#2 [internal function]: Uploader_Controller->add_photo('1')
#3 /home/hostin18/public_html/cloudimg/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Uploader_Controller), Array)
#4 [internal function]: Kohana_Core::instance(NULL)
#5 /home/hostin18/public_html/cloudimg/system/core/Event.php(208): call_user_func_array(Array, Array)
#6 /home/hostin18/public_html/cloudimg/application/Bootstrap.php(67): Event_Core::run('system.execute')
#7 /home/hostin18/public_html/cloudimg/index.php(116): require('/home/hostin18/...')
#8 {main}
2014-07-27 20:35:35 +00:00 --- error: Missing messages entry kohana/core.errors.403 for message kohana/core
