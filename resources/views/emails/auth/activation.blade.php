@component('mail::message')
# Aktifkan Akun

Terimakasih Telah Mendaftar, Silahkan Aktifkan Email Anda

@component('mail::button', ['url' => route('auth.activate', [
                                    'token' => $user->activation_token,
                                    'email' => $user->email,
                                ])
                            ]
        )

Aktifkan
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
