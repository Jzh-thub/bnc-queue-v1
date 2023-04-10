<?php
include __DIR__.'/../vendor/autoload.php';
//立即执行
\bnc\queueV1\Queue::instance()->do('doJob')->job(\bnc\tests\TestJob::class)->data([1, 2, 3])->push();

//延迟5秒执行
\bnc\queueV1\Queue::instance()->do('doJob1')->job(\bnc\tests\TestJob::class)->data([1, 2, 3],123)->secs(5)->push();

//如果出现错误 最大错误4次
\bnc\queueV1\Queue::instance()->do('doJob1')->job(\bnc\tests\TestJob::class)->data([1, 2, 3],123)->errorCount(4)->push();
