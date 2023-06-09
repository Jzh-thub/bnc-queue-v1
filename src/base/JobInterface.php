<?php


namespace bnc\queueV1\base;


use think\queue\Job;

/**
 * 队列接口
 * Interface JobInterface
 * @package src\base
 */
interface JobInterface
{
    public function fire(Job $job, $data): void;
}