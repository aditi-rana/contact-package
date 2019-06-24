<!DOCTYPE html>
<html lang="en">
    <head>
        <title>contact</title>
    </head>
    <body>
        <h1>Contact form</h1>
        <form action="{{route('contact')}}" method="post">
            @csrf
            <input type="text" name="name">
            <input type="email" name="email">
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="submit">
        </form>
    </body>