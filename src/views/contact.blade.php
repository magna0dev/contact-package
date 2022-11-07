<!DOCTYPE html>
<html>
    <head>
        <title>TEST CONTACT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Contact TEST</h1>
        </div>
        <div>
            <form name="contact" action="{{route('contact')}}" method="post">
                <!--@csrf-->
                <input type="text" name="name" placeholder="your name here .." />
                <br>
                <br>
                <input type="email" name="email" placeholder="your email here .." />
                <br>
                <br>
                <textarea name="message" placeholder="your name here .." rows="7" cols="30"></textarea>
                <br>
                <br>
                <button type="submit">SEND EMAIL</button>
            </form>
        </div>
    </body>
</html>
