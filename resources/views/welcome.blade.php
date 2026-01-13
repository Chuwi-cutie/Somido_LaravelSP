<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pauleene's Portfolio</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navigation Bar */
        .navbar {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: white !important;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 8px 12px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Hero Section */
        #home {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            padding: 120px 0 80px 0;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content h1 span {
            color: #ffd93d;
        }

        .hero-content h2 {
            font-size: 1.5rem;
            color: #ffd93d;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .hero-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #ff6b6b 0%, #ffa07a 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .btn-gradient:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.5);
            color: white;
        }

        .hero-image {
            max-width: 500px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .hero-image:hover {
            transform: scale(1.02);
        }

        .hero-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contact Section */
        #contact {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
            padding: 100px 0;
        }

        #contact h2 {
            color: #6a11cb;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 60px;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #6a11cb;
            height: 100%;
        }

        .contact-item {
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact-item:hover {
            transform: translateX(10px);
            background: rgba(106, 17, 203, 0.1);
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-label {
            color: #6a11cb;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-value {
            color: #666;
            font-size: 1.1rem;
        }

        .map-container {
            height: 100%;
            min-height: 400px;
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border-radius: 15px;
            border: 3px solid #6a11cb;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content h2 {
                font-size: 1.2rem;
            }

            .hero-image-container {
                margin-top: 50px;
            }

            .hero-image {
                max-width: 100%;
            }

            #contact h2 {
                font-size: 2rem;
            }

            .contact-card {
                margin-bottom: 30px;
            }

            .map-container {
                margin-top: 30px;
            }

            #home {
                padding: 100px 0 60px 0;
            }
        }

        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .btn-gradient {
                padding: 12px 30px;
                font-size: 1rem;
            }

            .contact-card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Pauleene's Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Cookie <span>Cutie</span></h1>
                        <h2>Cookie Cutie</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore.</p>
                        <a href="#contact" class="btn-gradient">Get In Touch</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-container">
                        <img src="{{ asset('Cookie.jpg') }}" alt="Profile Image" class="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="experience" style="height: 0; padding: 0;"></section>


    <section id="contact">
        <div class="container">
            <h2>Contact Information</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-card">
                        <div class="contact-item">
                            <div class="contact-label">Main Location</div>
                            <div class="contact-value">Davao City</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">pauleene_240000002584@uic.edu.ph</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">Phone Number</div>
                            <div class="contact-value">09078683887</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">Address</div>
                            <div class="contact-value">Purok 44, Sto. Nino, Maa, Davao City</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">School</div>
                            <div class="contact-value">University of the Immaculate Conception</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56493849902!2d125.51aboratories3651!3d7.0731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327d%3A0x63db6c73794be1c6!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1704960000000!5m2!1sen!2sph"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>