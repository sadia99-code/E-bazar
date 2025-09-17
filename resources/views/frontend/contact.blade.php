@extends('layouts.frontendlayout')

@section('title', 'Contact Us - eBazar')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">
@endsection

@section('content')
<section class="contact-section  pt-96 pb-96" style="margin-bottom: 100px;">
    <div class="container">
        <div class="heading text-center" style="margin: 100px 0">
            <h2 >Contact Us</h2>
        
        <p class="text-center mb-48">Get in touch with us. We'd love to hear from you!</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form design-block">
                    <h2 style="margin-left: 30px">Send us a message</h2>
                    <form>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="name" class="me-2" style="min-width: 90px; text-align: right;">Name :</label>
                            <input type="text" id="name" required class="flex-grow-1">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="email" class="me-2" style="min-width: 90px; text-align: right;">Email :</label>
                            <input type="email" id="email" required class="flex-grow-1">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="subject" class="me-2" style="min-width: 90px; text-align: right;">Subject :</label>
                            <input type="text" id="subject" required class="flex-grow-1">
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-center" style="margin-left: 100px;">
                            <label for="message" class="mb-2 text-center" style="width: 100%;">Message :</label>
                            <textarea id="message" rows="5" required style="width: 100%; max-width: 500px;"></textarea>
                        </div>
                        <button type="submit" class="cus-btn dark" style="margin-left: 250px">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info design-block">
                    <h2>Contact Information</h2>
                    <p><strong>Address:</strong> 123 Organic Street, Healthy City, HC 12345</p>
                    <p><strong>Phone:</strong> (123) 456-7890</p>
                    <p><strong>Email:</strong> info@supershop.com</p>
                    <p><strong>Hours:</strong> Monday - Friday: 9am - 6pm<br>Saturday: 10am - 4pm<br>Sunday: Closed</p>

                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="cus-btn dark">Facebook</a>
                        <a href="#" class="cus-btn dark">Twitter</a>
                        <a href="#" class="cus-btn dark">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
