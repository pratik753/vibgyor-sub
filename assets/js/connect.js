

var form = document.getElementById("contact-form-active");
var sub = document.getElementById("form-submit");

sub.addEventListener("click", function (e) {
    e.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    var status = document.getElementById("formstatus");

    if (name.length < 2) {
        status.textContent = "Please enter a valid name!";
        status.style.color = "red";
    } else if (!ValidateEmail(email)) {
        status.textContent = "Please enter a valid email!";
        status.style.color = "red";
    } else if (subject.length < 10) {
        status.textContent = "Subject need to be of at least 10 characters!";
        status.style.color = "red";
    } else if (message.length < 20) {
        status.textContent = "Message need to be of at least 20 characters!";
        status.style.color = "red";
    } else {
            
            status.textContent = "Message sent successfully!";
            status.style.color = "green";
            
            form.reset();
        
    }
});

function ValidateEmail(email) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        return true;
    }
    return false;
}