<?php
/**
test account: test/1622827161716232

*/ 
...


$sign = array(
                    'id'=>$model->id,
                    'name'=>$model->username,
                    'sign'=>md5($model->id.$model->username),
                );
$_COOKIE['Cib_security'] = serialize($sign);

?>
