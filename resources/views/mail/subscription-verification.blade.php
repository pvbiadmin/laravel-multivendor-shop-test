<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification</title>
</head>
<body>
<p>Click the link to verify your email.</p>
<a href="{{ route('newsletter-verify', $subscriber->verified_token) }}">Click here</a>
</body>
</html>
