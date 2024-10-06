<?php
namespace App\Http\Controllers\Auth;
return view('login');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            display: flex;
            justify-content: space-between;
            margin: 30px auto;
            width: 90%;
        }
        .info-box {
            width: 30%;
            text-align: center;
        }
        .info-box h3 {
            color: #ff9000;
        }
        .info-box p {
            font-size: 16px;
            color: #555;
        }
        .info-box i {
            font-size: 30px;
            color: #ff9000;
        }
        .contact-form {
            width: 65%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #ff9000;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .map {
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 300px;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Contact Info -->
        <div class="info-box">
            <h3>Booking</h3>
            <p>book@example.com</p>
        </div>
        <div class="info-box">
            <h3>General</h3>
            <p>info@example.com</p>
        </div>
        <div class="info-box">
            <h3>Technical</h3>
            <p>tech@example.com</p>
        </div>
    </div>

    <div class="container">
        <!-- Google Map -->
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24176.94790549179!2d-74.01190518447268!3d40.71272812808844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a19f6e6a4f1%3A0x9d1e0370edb6de2!2sNew%20York!5e0!3m2!1sen!2sus!4v1631113188249!5m2!1sen!2sus" 
                allowfullscreen=""
                loading="lazy"></iframe>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Message" rows="5"></textarea>
            <button type="submit">Send Message</button>
        </div>
    </div>
    

</body>
</html>
