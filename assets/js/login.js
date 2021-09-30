document.getElementById("googlelog").addEventListener("click", function GoogleLogIn() {
    var provider = new firebase.auth.GoogleAuthProvider();
  
    firebase.auth().signInWithPopup(provider).then((result) => {
      
      var credential = result.credential;
      var token = credential.accessToken;
      var user = result.user;
      
      console.log("signed in with google");
      var id = firebase.auth().currentUser.uid;
      firebase.firestore().collection("users").doc(id).set({
        name: user.displayName,
        email: user.email,
        provider: "google",
        loginDate: new Date(),
      });
      window.location.href="newshome.html"
    }).catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      var email = error.email;
      var credential = error.credential;
      console.log(errorCode + " " + errorMessage);
      if (errorCode == "auth/account-exists-with-different-credential") {
        alert("You have logged in earlier with different method. Kindly use the same for logging in!");
      }
    });
  });



document.getElementById("signsubmit").addEventListener("click", function RegisterUser() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
  
    if (fname == null || fname == "") {
      alert("You have to enter the first name!!!");
    } else if (lname == null || lname == "") {
      alert("You have to enter the last name!!!");
    } else if (!ValidateEmail(email)) {
      alert("Please enter a valid e-mail address!!");
    } else if (!ValidatePwd(password)) {
      alert("Password should contain at least 1 uppercase character, 1 lowercase character, 1 digit, 1 special character, minimum 8 characters");
    } else {
      firebase.auth().createUserWithEmailAndPassword(email, password).then(function () {
        var user = firebase.auth().currentUser;
        user.sendEmailVerification().then(function () {
       
          alert("Verification email sent! Kindly confirm your email to continue");
        }).catch(function (error) {
          var errorcode = error.code;
          var errormsg = error.message;
          console.log(errorcode + " " + errormsg)
        });
  
        var id = firebase.auth().currentUser.uid;
        firebase.firestore().collection("users").doc(id).set({
          name: fname + " " + lname,
          email: email,
          provider: "custom",
          dateCreated: new Date(),
        });
        setTimeout(function(){  window.location.href="newshome.html"}, 3000);
       
      }).catch(function (error) {
        var errorcode = error.code;
        var errormsg = error.message;
        console.log(errorcode + " " + errormsg)
      });
    }
  });
  

  document.getElementById("logsubmit").addEventListener("click", function LoginUser() {
    var email = document.getElementById("logemail").value;
    var password = document.getElementById("logpassword").value;
  
    if (!ValidateEmail(email)) {
      alert("Please enter a valid e-mail address!!");
    } else {
      firebase.auth().signInWithEmailAndPassword(email, password).then(function () {
        
        alert("Logged in");
        setTimeout(function(){  window.location.href="newshome.html"}, 3000);
      }).catch(function (error) {
        var errorCode = error.code;
        var errorMsg = error.message;
        alert(errorMsg);
      });
    }
  });


  document.getElementById("forgot").addEventListener("click", function (e) {
    e.preventDefault();
    var emailAddress = document.getElementById("logemail").value;
    if (!ValidateEmail(emailAddress)) {
      alert("Please enter a valid e-mail address!!");
    } else {
      firebase.auth().sendPasswordResetEmail(emailAddress).then(function () {
      
        alert("Check your email for link to reset password!");
      }).catch(function (error) {
        var errorCode = error.code;
        var errorMsg = error.message;
        alert(errorMsg);
      });
    }
  });



  function ValidateEmail(email) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
      return true;
    else
      return false;
  }
  
  function ValidatePwd(password) {
    if (password.match(/[a-z]/g) && password.match(/[A-Z]/g) && password.match(/[0-9]/g) && password.match(/[^a-zA-Z\d]/g) && password.length >= 8)
      return true;
    else
      return false;
  }