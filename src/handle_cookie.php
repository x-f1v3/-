<?php
/**
test account: test

*/ 

...


  /**
  
  Verify administrator privileges via cookies
  */
$sign = array(
                    'id'=>$model->id,
                    'name'=>$model->username,
                    'sign'=>md5($model->id.$model->username),
                );
$_COOKIE['Cib_security'] = serialize($sign);

?>
