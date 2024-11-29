<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Access\AuthorizationException;
use Laravel\Fortify\Http\Requests\VerifyEmailRequest;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;

class VerificationController extends Controller
{
    public function __invoke(Request $request, $id, $hash)
    {

        $user = User::findOrFail($id);

        if (! hash_equals($hash, sha1($user->getEmailForVerification()))) {
            abort(403, 'Invalid verification link.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect('/')->with('status', 'Email already verified!');
        }

        // إذا لم يتم التحقق مسبقًا، قم بتحديث الحالة
        $user->markEmailAsVerified();

        // إطلاق حدث التحقق
        event(new Verified($user));

        // إعادة التوجيه بعد النجاح
        return redirect('/')->with('status', 'Email verified successfully!');
    }
}
