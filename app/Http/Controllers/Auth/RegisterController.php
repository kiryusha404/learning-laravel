<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login' =>'required|max:255|regex:/^[a-zA-Z0-9\-]+$/i|unique:users,login', // обязательное, только английские буквы и цифры + знак "-", проверка на уникальное поле
            'name' =>'required|max:255|regex:/^[а-яА-ЯёЁ0-9\-\s]+$/iu', // обязательное, только английские буквы и цифры + знак "-"
            'surname' =>'required|max:255|regex:/^[а-яА-ЯёЁ0-9\-\s]+$/iu',
            'patronymic' => 'nullable|max:255|regex:/^[а-яА-ЯёЁ0-9\-\s]+$/iu',
            'email' =>'required|max:255|email|unique:users,email', // обязательное, встроенная проверка на email, проверка на уникальное поле
            'password' =>'required|min:6', // обязательное, минимум 6 символов
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'login' =>$data['login'],
            'name' =>$data['name'],
            'surname' =>$data['surname'],
            'patronymic' =>$data['patronymic'],
            'email' =>$data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
