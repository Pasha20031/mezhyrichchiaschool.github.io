const isCheckboxOrRadio = type => ['checkbox', 'radio'].includes(type);

const form = document.getElementById('form');

function retrieveFormValue(event) {
    event.preventDefault();

    const fields = document.querySelectorAll('input, select, textarea');
    const values = {};

    fields.forEach(field => {
        const {name, value, type, checked} = field;

        values[name] = isCheckboxOrRadio(type) ? checked : value;
    });

    console.log('Zayavky', values);

}

form.addEventListener('submit', retrieveFormValue);
