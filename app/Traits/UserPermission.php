<?php

namespace App\Traits;


trait UserPermission
{


    public function checkRequestPermission()
    {
        if (
            empty(auth()->user()->role->permission['permission']['user']['list']) && \Route::is('user.index') ||
            empty(auth()->user()->role->permission['permission']['user']['add']) && \Route::is('user.create') ||
            empty(auth()->user()->role->permission['permission']['user']['edit']) && \Route::is('user.edit')  ||
            empty(auth()->user()->role->permission['permission']['permission']['list']) && \Route::is('permission.index') ||
            empty(auth()->user()->role->permission['permission']['permission']['add']) && \Route::is('permission.create') ||
            empty(auth()->user()->role->permission['permission']['permission']['edit']) && \Route::is('permission.edit')  ||
            empty(auth()->user()->role->permission['permission']['role']['list']) && \Route::is('role.index') ||
            empty(auth()->user()->role->permission['permission']['role']['add']) && \Route::is('role.create') ||
            empty(auth()->user()->role->permission['permission']['permission']['edit']) && \Route::is('role.edit')
        ) {
            return response()->view('welcome');
        }
    }
}
