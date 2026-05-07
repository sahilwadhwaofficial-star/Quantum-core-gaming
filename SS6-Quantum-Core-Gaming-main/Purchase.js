function validateForm() {
    // Get the input fields
    let dbdt = document.getElementById('dbdt').value.replace(/\s+/g, ''); // Card number
    let lendbt = dbdt.length;

    let gamerTag = document.getElementById('gtag').value.trim(); // Gamer tag

    let acn = document.getElementById('acn').value.trim(); // Name

    let cvv = document.getElementById('cvv').value.replace(/\s+/g, ''); // CVV
    let lencv = cvv.length;

    // Validate card number
    if (lendbt != 16) { // Card number length is usually 16
        alert("Please enter a valid card number.");
        return false;
    }

    // Validate gamer tag
    if (gamerTag === "") {
        alert("Please enter your gamer tag.");
        return false;
    }

    // Validate CVV
    if (lencv != 3) { // CVV length is usually 3
        alert("Please enter a valid CVV Code.");
        return false;
    }

    // Validate name (ACN)
    let namept = /^[A-Za-z\s'-]+$/; // Allow letters, spaces, apostrophes, and hyphens
    if (!namept.test(acn)) {
        alert("Please enter a valid name.");
        return false;
    }

    // If all validations pass
    alert("Congratulations " + gamerTag + "! Payment Successful!");
    return true;
}
