$(document).ready(function () {
    $('#disForm').click(function() {
      rules: {
        'name': {
            required: true,
            minlength: 2
        },
        'email': {
          required: true,
          email: true
        }
      },
      messages: {
        'name': {
            required: "Please specify your name.",
            minlength: "There's more letters in your name, I'm sure."
        },
        'email': {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        }
      },
      submitHandler: function(form) {
          console.log("Submitting this form...");
          console.log(form);
          form.submit();
      }
    });
});
