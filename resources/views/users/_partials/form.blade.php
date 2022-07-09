@csrf
<input type="text" name="name" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password">
<button type="submit">
    Enviar
</button>