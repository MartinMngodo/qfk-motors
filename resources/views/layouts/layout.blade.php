<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.png">
    <title>Qfk Motors </title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
        @yield('content')
        <!-- footer -->
        <footer class="footer">
            <div class="container-custom">
                <div class="footer-content">
                    <div class="footer-grid">
                        <div class="footer-content-info">
                            <h4>Qfk-Motors</h4>
                            <P>
                                We are a car dealership based in Dar es Salaam, Tanzania. 
                                At qfk motors we provide a complete customer care experience by 
                                walking you through selecting and acquiring the vehicle that you desire.
                            </P>
                            <ul>
                                <li>Email: <span>qfkmotors@gmail.com</span></li>
                                <li>Email: <span>qfkinsurance@gmail.com</span></li>
                                <li>Phone: <span>0722 172906</span></li>
                            </ul>
                        </div>
                        <div class="footer-content-links">
                            <div class="footer-content-nav-link">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/cars">Cars</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="/listings">Log In</a></li>
                                </ul>
                            </div>
                            <div class="footer-content-nav-link">
                                <h5>Services</h5>
                                <ul>
                                    <li>Car Imports</li>
                                    <li>Buy Used Cars</li>
                                    <li>Insurance</li>
                                    <li>Registration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-content-bottom">
                        <p class="bottom-text">© Qfk-Motors , All Right Reserved.Crafted By <a href="https://hazarani.com/" target="_blank">HazaraniDigital</a>.</p>
                    </div>
                </div>
                
            </div>
        </footer>
    </main>
    <!-- bootrstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>