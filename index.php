<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebinarFrom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="container-sec-1">
            <div class="overlay"></div>
        </div>
        <div class="regist-link-button" id="registBtn">
    <p>Organic Marketing</p>
    <p>Workshop</p>
    <div class="reg">Registration</div>
</div>

        <div class="timeing-sec">
            <div class="overlay1">
                <p>Workshop Date: November 16,2024</p>
                <p>Duration: 2 Hours (Online) </p>
                <p>Hosted by: MarkManta - Your Digital</p>
                <p>Marketing Experts</p>
            </div>
        </div>
        <div class="container-sec-2">
            <div class="para1">
                <p>Are you a small business owner or someone selling products or services online through a website,
                    Instagram, or other channels? Do you want to increase your online presence and sales without relying
                    heavily on paid ads?</p>
            </div>

            <div class="para2">
                This Organic Marketing Workshop, conducted by MarkManta, is designed for entrepreneurs like you who want
                to grow their business using cost-effective, sustainable marketing strategies. During this 2-hour
                session, you’ll learn how to:
                <ul>
                    <li>Optimize your online presence through organic (non-paid) marketing techniques.</li>
                    <li>Use social media, content marketing, and SEO to attract and engage your target audience.</li>
                    <li>Build trust and credibility with your customers without spending on paid ads.</li>
                </ul>
                This workshop is especially beneficial for small businesses and online sellers who are new to organic
                marketing or want to improve their current approach. By the end of the session, you’ll have actionable
                steps to boost your online visibility and grow your business organically.
            </div>

        </div>
        <div class="container-sec-3">

        </div>


        <div class="container-sec-4">

            <h2>Register for the Workshop</h2>
            <div class="login-message">
                <p>Already registered? <a href="#">Login here</a></p>
            </div>

            <div class="form-container">
                <!-- <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <button type="submit" class="submit-btn">Register</button>
                </form> -->

               
                <form action="submit_form.php" method="post" id="workshopForm">
                        <h2>Register for the Workshop</h2>
        
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces">
                        </div>
        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                            </div>
        
                        <div class="form-group">
                            <label for="phone">Phone Number (Optional)</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Phone number should be 10 digits">
                        </div>
        
                        <div class="form-group">
                            <label for="businessName">Business Name</label>
                            <input type="text" id="business-name" name="business-name" required>
                        </div>
        
                        <div class="form-group">
                            <label for="website">Website or Social Media Handle</label>
                            <input type="text" id="website" name="website" required placeholder="">
                        </div>
        
                        <div class="form-group">
                            <label for="productDescription">What type of products or services do you offer?</label>
                            <input type="text" id="product-services" name="product-services" required>
                        </div>
        
                        <div class="form-group">
                            <label for="marketingStrategy">Current Marketing Strategy</label>
                            <select id="marketingStrategy" name="marketingStrategy" required>
                                <option value="" disabled selected>Select your current strategy</option>
                                <option value="organic">Organic Social Media Marketing</option>
                                <option value="paidAds">Paid Ads (Google, Facebook, Instagram)</option>
                                <option value="wordOfMouth">Word of Mouth</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="challenges">Main challenges with online marketing</label>
                            <textarea id="challenges" name="challenges" required></textarea>
                        </div>
        
                        <div class="form-group">
                            <label for="learningGoals">What do you hope to learn from this workshop?</label>
                            <textarea id="learning" name="learning" required></textarea>
                        </div>
        
                        <div class="form-group">
                            <label for="businessDuration">How long have you been in business?</label>
                            <select id="business-duration" name="business-duration" required>
                                <option value="" disabled selected>Select duration</option>
                                <option value="lessThan1Year">Less than 1 year</option>
                                <option value="1to5Years">1 to 5 years</option>
                                <option value="5to10Years">5 to 10 years</option>
                                <option value="10to20Years">10 to 20 years</option>
                                <option value="moreThan20Years">More than 20 years</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="futureServices">Are you interested in exploring more digital marketing services after
                                the workshop?</label>
                            <select id="futureServices" name="futureServices">
                                <option value="" disabled selected>Select an option</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="maybe">Maybe in the future</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="testimonial">Would you be willing to provide feedback or a testimonial after the
                                workshop?</label>
                            <select id="testimonial" name="testimonial">
                                <option value="" disabled selected>Select an option</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="maybe">Maybe</option>
                            </select>
                        </div>
        
                        <input type="submit" class="reg midbtn"  value="Submit">
                    </form>
        


            </div>

        </div>
        <div class="count-down">
                <div class="title">Join Our Limited Offer</div>
                <div class="title2" id="end-date">16 Nov 2024 12:00 PM</div>
                <div class="count">
                    <div class="timer">
                        <input type="text" readonly value="0" class="inp">
                        <label for="">Days</label>
                    </div>

                    <div class="timer">
                        <input type="text" readonly value="0" class="inp">
                        <label for="">Hours</label>
                    </div>

                    <div class="timer">
                        <input type="text" readonly value="0" class="inp">
                        <label for="">Mins</label>
                    </div>

                    <div class="timer">
                        <input type="text" readonly value="0" class="inp">
                        <label for="">Sec</label>
                    </div>
                </div>
                

    </div>






    <script src="script.js"></script>
</body>

</html>