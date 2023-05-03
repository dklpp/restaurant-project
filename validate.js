const validator = new window.JustValidate("#signup");

validator
    .addField('#name', [
        {
            rule: 'required',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 15,
        },
    ])
    .addField('#surname', [
        {
            rule: 'required',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 15,
        },
    ])
    .addField('#phone_num', [
        {
            rule: 'required',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 15,
        },
    ])
    .addField('#email', [
        {
            rule: 'required'
        },
        {
            rule: 'email'
        },
        /*{
            validator: (value) => () => {
                return fetch("validate-email.php?email=" + encodeURIComponent(value))
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (json) {
                        return json.available;
                    });
            },
            errorMessage: "email already taken"
        }*/
    ])
    .addField('#password', [
        {
            rule: 'required'
        },
        {
            rule: 'password'
        }
    ])
    .addField('#password_confirmation', [
        {
            validator: (value, fields) => {
                return value === fields['#password'].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .onSuccess((event) => {
        console.log("Triggered");
        document.getElementById("signup").submit();
    });
