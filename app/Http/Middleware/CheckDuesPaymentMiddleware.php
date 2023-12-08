<?php

namespace App\Http\Middleware;

use App\Models\UserProfile;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckDuesPaymentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $user_profile = UserProfile::where('user_id', $user->id)->first();

        if (!$user->hasRole('Client')) {
            return $next($request);
        }

        if ($user_profile->is_first_time_dues_paid == 0) {
            return redirect()->route('payment.dues_payment');
        }

        return $next($request);
    }
}
