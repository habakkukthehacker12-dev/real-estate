<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $this->redirectAfterVerification($request->user());
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return $this->redirectAfterVerification($request->user());
    }

    private function redirectAfterVerification(User $user): RedirectResponse
    {
        $role = $user->role instanceof \BackedEnum
                ? $user->role->value
                : $user->role;

        // Agent ou Admin → dashboard
        if (in_array($role, ['agent', 'admin'])) {
            return redirect()->route('admin.dashboard')
                ->with('success', 'Email vérifié ! Bienvenue sur votre dashboard.');
        }

        // Buyer → accueil
        return redirect()->route('home')
            ->with('success', 'Email vérifié ! Bienvenue sur EstateVista.');
    }
}