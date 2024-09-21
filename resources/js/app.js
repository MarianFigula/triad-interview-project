document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('reviewForm');
    const fileInput = document.getElementById('file');
    const fileNameLabel = document.getElementById('fileName');

    fileInput.addEventListener('change', () => {
        fileNameLabel.textContent = fileInput.files.length > 0  ?
            fileInput.files[0].name :fileNameLabel.textContent = 'Nahraj svoje CV';
    });

    form.addEventListener('submit', (event) => {
        const validations = [
            {
                field: 'name',
                condition: () => !document.getElementById('name').value.trim(),
                message: 'Zadaj svoje meno.',
            },
            {
                field: 'email',
                condition: () => {
                    const email = document.getElementById('email').value.trim();
                    return !email || !isValidEmail(email);
                },
                message: 'Email is required and must be valid.',
            },
            {
                field: 'file',
                condition: () => fileInput.files.length === 0,
                message: 'Please upload a file.',
            },
            {
                field: 'description',
                condition: () => !document.getElementById('description').value.trim(),
                message: 'Please provide a project description.',
            },
            {
                field: 'agree',
                condition: () => !document.getElementById('agree').checked,
                message: 'You must agree to the terms.',
            },
        ];

        clearErrors();
        let valid = true;

        validations.forEach(({ field, condition, message }) => {
            if (condition()) {
                valid = false;
                showError(field, message);
            }
        });

        if (!valid) {
            event.preventDefault();
            form.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });

    function isValidEmail(email) {
        const regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
        return regex.test(email);
    }

    function showError(field, message) {
        const errorContainer = document.createElement('div');
        errorContainer.className = 'error-message text-danger';
        errorContainer.textContent = message;
        document.querySelector(`input[name="${field}"],
            textarea[name="${field}"]`)
            .insertAdjacentElement('afterend', errorContainer);
    }

    function clearErrors() {
        const errorMessages = document.querySelectorAll('.errors');
        errorMessages.forEach((msg) => msg.remove());
    }
});
