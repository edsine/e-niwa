<?php

Route::get('payment/remita', [App\Http\Controllers\PaymentController::class, 'callbackRemita'])->name('payment.callback');Route::post('payment/remita', [App\Http\Controllers\PaymentController::class, 'generateRemita'])->name('payment.remita');
