<?php

Route::get('/', function (){
    return view ('layouts.master');
});

Route::get('auditAccount', function (){
    return view ('module8.expense');
});

Route::get('inviteAuditor', function (){
    return view ('module8.income');
});

Route::get('version', function (){
    return view ('module8.fast-entry');
});

Route::get('auditedAccount', function (){
    return view ('module8.account-transfer');
});