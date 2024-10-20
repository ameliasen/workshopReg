<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="workshop-logo">
        <img src="img/logo.png" alt="Workshop Logo" class="logo">
        
    </div>
    
   <!-- Orange box -->
<div id="orange-box"></div>
<div id="business-image">
    <img src="img/Must-Know-Digital-Marketing-Strategies-for-Business-Growth.webp" alt="">
</div>
<!-- Registration form container -->
<!-- Orange box -->
<div id="orange-box"></div>
<div id="business-image"><img src="img/Must-Know-Digital-Marketing-Strategies-for-Business-Growth.webp" alt=""></div>
<!-- Registration form container -->
<div class="form-container">
    <div class="header-container">
        <h2>JOIN WORKSHOP:</h2>
    </div>
    
    <form action="submit_form.php" method="post" id="workshopForm">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces">
            <small class="error-message" id="nameError"></small>
        </div>
    
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <small class="error-message" id="emailError"></small>
        </div>
    
        <div class="form-group">
            <label for="phone">Phone Number For WhatsApp (Optional):</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Phone number should be 10 digits">
            <small class="error-message" id="phoneError"></small>
        </div>
    
        <div class="form-group">
            <label for="business-name">Business Name:</label>
            <input type="text" id="business-name" name="business-name" required>
            <small class="error-message" id="businessNameError"></small>
        </div>
    
        <div class="form-group">
            <label for="website">Website or Social Media Handle:</label>
            <input type="text" id="website" name="website" required placeholder="">
            <small class="error-message" id="websiteError"></small>
        </div>
    
        <div class="form-group">
            <label for="product-services">What type of Product or Services do you offer?</label>
            <input type="text" id="product-services" name="product-services" required>
            <small class="error-message" id="productServicesError"></small>
        </div>
    
        <div class="form-group">
            <label for="marketing-strategy">Current Marketing Strategy:</label>
            <div class="radio-option">
                <input type="radio" id="organic" name="choice" value="Organic Social Media Marketing" >
                <label for="organic">Organic Social Media Marketing</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="paid-ads" name="choice" value="Paid Ads (Google, Facebook, Instagram)">
                <label for="paid-ads">Paid Ads (Google, Facebook, Instagram)</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="word-of-mouth" name="choice" value="Word of Mouth">
                <label for="word-of-mouth">Word of Mouth</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="other" name="choice" value="Other">
                <label for="other">Other</label>
            </div>
            <small class="error-message" id="marketingStrategyError"></small>
        </div>
    
        <div class="form-group">
            <label for="challenges">What are your main Challenges with Online Marketing?</label>
            <input type="text" id="challenges" name="challenges" required>
            <small class="error-message" id="challengesError"></small>
        </div>
    
        <div class="form-group">
            <label for="learning">What do you hope to learn from this Workshop?</label>
            <input type="text" id="learning" name="learning" required>
            <small class="error-message" id="learningError"></small>
        </div>
    
        <div class="form-group">
            <label for="business-duration">How long have you been in Business?</label>
            <input type="text" id="business-duration" name="business-duration" required>
            <small class="error-message" id="businessDurationError"></small>
        </div>
    
        <div class="form-group">
            <label for="digital-marketing-interest">Are you interested in exploring more digital marketing services after the Workshop?</label>
            <div class="radio-option">
                <input type="radio" id="yes" name="digital-marketing" value="Yes">
                <label for="yes">Yes</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="no" name="digital-marketing" value="No">
                <label for="no">No</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="maybe" name="digital-marketing" value="Maybe">
                <label for="maybe">Maybe</label>
            </div>
            <small class="error-message" id="digitalMarketingError"></small>
        </div>
    
        <div class="form-group">
            <label for="feedback">Would you be willing to provide feedback or a testimonial after the Workshop?</label>
            <div class="radio-option">
                <input type="radio" id="feedback-yes" name="feedback" value="Yes">
                <label for="feedback-yes">Yes</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="feedback-no" name="feedback" value="No">
                <label for="feedback-no">No</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="feedback-maybe" name="feedback" value="Maybe">
                <label for="feedback-maybe">Maybe</label>
            </div>
            <small class="error-message" id="feedbackError"></small>
        </div>
    
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
    
    
</div>
</body>

<script src="script.js"></script>

</html>
</body>
</html>