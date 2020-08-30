<!DOCTYPE html>
<html lang="en">
<body>

    <p>Hello {{$user['name']}}</p>
    <br><br>
    Welcome to my Website!
    <br>
    Please click the below link to verify your email and activate your account!
    <br><br>
    {{-- for live server address --}}
    {{-- <a href="http://mywebsite.com/verify?token={{$email_data['verification_code']}}">Click Here!</a> --}}

    {{-- for localhost address --}}
    {{-- <a href="http://localhost:8000/Olivine/public/verify?token={{$user['verification_token']}}">Click Here!</a> --}}
    <a href="http://127.0.0.1:8000/verify?token={{$user['verification_token']}}"> Click Here</a>

    <br><br>
    Thank you!
    <br>
    BDdevelopers
    
</body>
</html>