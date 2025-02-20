<h2>Parola Sıfırlama Maili</h2>

<p>
    Aşağıdaki linkten parolanızı sıfırlayabilirsiniz!
</p>

<a href="{{ env('FRONT_URL') . '/auth/reset-password/' . $token . '/' . $user->user_id }}">
    Parolamı sıfırla
</a>
