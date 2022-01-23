<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->namespace('Api')->group(function () {
	Route::resource('/mailing_list', MailingListController::class);
});
