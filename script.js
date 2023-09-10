// Validation //


//  Message form validation 
function validateForm() {
    var returnval = true;
    clearErrors();

    // Name
    var fname = document.forms['myForm']["name"].value;
    if (fname.length == 0) {
        seterror("fname", "*First name is required");
        returnval = false;
    } else if (!isNaN(fname)) {
        seterror("fname", "*Enter valid name");
        returnval = false;
    }

    // Email
    var email = document.forms['myForm']["email"].value;
    if (email.length == 0) {
        seterror("email", "*Email is required");
        returnval = false;
    }

    // phone
    var phone = document.forms['myForm']["phone"].value;
    if (phone.length == 0) {
        seterror("phone", "*phone no is required");
        returnval = false;
    } else if (phone.length != 10) {
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    } else if (isNaN(phone)) {
        seterror("phone", "*Enter only number");
        returnval = false;
    }

    // message
    var msg = document.forms['myForm']["msg"].value;
    if (msg.length == 0) {
        seterror("msg", "*message is required");
        returnval = false;
    }
    return returnval;
}

// validation form error clears
function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}
