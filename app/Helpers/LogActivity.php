<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Models\LogActivity as LogActivityModel;

class LogActivity
{


    public static function addToLog(Request $subject)
    {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = $subject->fullUrl();
        $log['method'] = $subject->method();
        $log['ip'] = $subject->ip();
        $log['agent'] = $subject->header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }
}
