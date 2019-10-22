function sendEmail(event) {

    event.preventDefault();
    alert("pouet");

    Email.send({
        Host: "smtp.elasticemail.com",
        SecureToken: "23233e6d-0532-4262-859f-b22d911644cd",
        To: 'contact@jerm-workshop.fr',
        From: "pouetpouet@camembert.com",
        Subject: "This is the subject",
        Body: "And this is the body"
    }).then(
        message => alert(message)
    );
}
