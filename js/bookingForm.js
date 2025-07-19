// BookingForm.js

function validateForm() {
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let phone = document.getElementById('phone').value.trim();
    let checkin = document.getElementById('checkin').value;
    let checkout = document.getElementById('checkout').value;
    let guests = document.getElementById('guests').value;
    let packageSelected = document.getElementById('package').value;

    // Validate Name
    if (name === "") {
        alert("Full Name is required.");
        return false;
    }

    // Validate Email
    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
        alert("A valid Email Address is required.");
        return false;
    }

    // Validate Phone
    if (phone === "" || isNaN(phone) || phone.length < 7) {
        alert("A valid Phone Number is required.");
        return false;
    }

    // Validate Check-in and Check-out Dates
    if (checkin === "") {
        alert("Check-in date is required.");
        return false;
    }
    if (checkout === "") {
        alert("Check-out date is required.");
        return false;
    }
    if (new Date(checkin) > new Date(checkout)) {
        alert("Check-out date must be after Check-in date.");
        return false;
    }

    // Validate Guests
    if (guests === "") {
        alert("Please select number of guests.");
        return false;
    }

    // Validate Package
    if (packageSelected === "") {
        alert("Please select a wellness package.");
        return false;
    }

    // Optional: validate textarea if needed

    // If all fields are valid
    return true;
}
