document.getElementById('workshopForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the default form submission

    // Collect form data
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        businessName: document.getElementById('business-name').value,
        website: document.getElementById('website').value,
        productServices: document.getElementById('product-services').value,
        marketingStrategy: document.getElementById('marketingStrategy').value, // Updated to get value from select
        challenges: document.getElementById('challenges').value,
        learning: document.getElementById('learning').value,
        businessDuration: document.getElementById('business-duration').value, // Updated to get value from select
        digitalMarketingInterest: document.getElementById('futureServices').value, // Updated to get value from select
        feedback: document.getElementById('testimonial').value // Updated to get value from select
    };

    
    // Send form data to PHP using fetch
    fetch('./Component/save_message.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',  // Sending JSON data
        },
        body: JSON.stringify(formData),  // Convert the object to JSON string
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the server
        if (data.success) {
            alert('Form successfully submitted');

            document.getElementById("workshopForm").reset();
            // You can add additional actions like clearing the form or showing a success message
        } else {
            alert('Form submission failed:', data.error);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});


//CountDown clock code section
//CountDown clock code section
//CountDown clock code section

const endDate = "16 Nov 2024 12:00 PM";

document.getElementById("end-date").innerText = endDate;
const inputs =document.querySelectorAll("input");

const clock = () => {
    const end = new Date(endDate);  // Parse the end date correctly
    const now = new Date();         // Get the current time
    const diff = (end - now) / 1000; // Difference in seconds

    inputs[0].value = Math.floor(diff / 3600 / 24);  // Convert seconds to days
    inputs[1].value = Math.floor((diff % (3600 * 24)) / 3600);  // Remaining hours
    inputs[2].value = Math.floor((diff % 3600) / 60); // Remaining minutes
    inputs[3].value = Math.floor(diff % 60);  // Remaining seconds

} 

setInterval( () => {
    clock(); } , 1000

)



document.getElementById('registBtn').addEventListener('click', function() {
    // Scroll to the registration form
    document.getElementById('workshopForm').scrollIntoView({ behavior: 'smooth' });
});