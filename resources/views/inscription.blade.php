@extends ('layout')

@section ('contenu')
    <h1>Inscription</h1>
    <br>
    <form action="/inscription" method="post">
        {{csrf_field()}}
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="mot de passe">
        <input type="password" name="password_confirmation" placeholder="confirmation mdp">
        <input type="submit" value="M'inscrire">
    </form>
@endsection
