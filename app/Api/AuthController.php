<?php

namespace App\Api;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWT;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Если данные не проходят проверку, Laravel автоматически вернёт ошибку 422 с описанием.
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

//Hash::make — хеширует пароль, чтобы его нельзя было прочитать в базе.
        //User::create использует массив $fillable из модели User для массового заполнения.
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // 👇JWTAuth::fromUser($user) — создаёт JWT токен для нового пользователя.
        //Этот токен будет нужен фронтенду для авторизации в защищённых маршрутах.
        $token = JWTAuth::fromUser($user);


        //Laravel возвращает JSON с данными пользователя и токеном.
        //Фронтенд сохраняет токен и использует его для следующих запросов.
        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    //Принимает email и пароль от пользователя для входа.
    public function login(Request $request)
    {
        //Берём только email и пароль из запроса.
        $credentials = $request->only('email', 'password');

        //JWTAuth::attempt проверяет данные в базе.
        //Если данные неверные — возвращаем 401 Unauthorized.
        //Если верные — создаётся JWT токен.
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }

        return response()->json([
            'user' => auth()->user(),
            'token' => $token,
        ]);
    }


    //Получаем текущего пользователя JWTAuth::parseToken() берёт токен из заголовка Authorization: Bearer ....
    //authenticate() возвращает пользователя, которому принадлежит токен.
    //Если токен неверный или просрочен — ловим исключение и возвращаем 401.
    public function me()
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token invalid or expired'], 401);
        }
    }

    //Выходим отдаетм токен. J
    public function logout()
    {
        //WTAuth::getToken() получает текущий токен из запроса.
        //JWTAuth::invalidate() делает токен недействительным — после этого его нельзя использовать для входа.
        //Возвращаем сообщение о успешном выходе.
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Successfully logged out']);
    }
}
