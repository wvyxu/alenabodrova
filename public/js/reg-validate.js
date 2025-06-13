
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form'); // Оберните ваши поля внутри тега <form> или укажите конкретный селектор
    const nameInput = document.getElementById('name');
    const patronymicInput = document.getElementById('patronymic');
    const surnameInput = document.getElementById('surname');
    const passwordInput = document.getElementById('password');
    const passwordConfirmationInput = document.getElementById('password_confirmation');
    const rulesCheckbox = document.getElementById('rules');

    // Ошибки
    const nameError = document.querySelector('.nameError');
    const patronymicError = document.querySelector('.patronymicError');
    const surnameError = document.querySelector('.surnameError');
    const passError = document.querySelector('.passError');
    const passconfError = document.querySelector('.passconfError');
    const rulesError = document.querySelector('.rulesError');

    function validate() {
        // Очистка ошибок
        nameError.textContent = '';
        patronymicError.textContent = '';
        surnameError.textContent = '';
        passError.textContent = '';
        passconfError.textContent = '';
        rulesError.textContent = '';
        let isValid = true;

        // Валидация имени
        if (!nameInput.value.trim()) {
            nameError.textContent = 'Пожалуйста, введите имя';
            isValid = false;
        }

        // Валидация отчества
        if (!patronymicInput.value.trim()) {
            patronymicError.textContent = 'Пожалуйста, введите отчество';
            isValid = false;
        }

        // Валидация фамилии
        if (!surnameInput.value.trim()) {
            surnameError.textContent = 'Пожалуйста, введите фамилию';
            isValid = false;
        }

        // Валидация пароля
        if (passwordInput.value.length < 6) {
            passError.textContent = 'Пароль должен быть не менее 6 символов';
            isValid = false;
        }

        // Проверка совпадения паролей
        if (passwordInput.value !== passwordConfirmationInput.value) {
            passconfError.textContent = 'Пароли не совпадают';
            isValid = false;
        }

        // Проверка согласия с правилами
        if (!rulesCheckbox.checked) {
            rulesError.textContent = 'Пожалуйста, подтвердите согласие с политикой конфиденциальности';
            isValid = false;
        }

        return isValid;
    }

    // Обработчик отправки формы
    // Предположим, у вас есть форма с id="registration-form"
    document.querySelector('form').addEventListener('submit', (e) => {
        if (validate()) {
        
        } else e.preventDefault();
    });
});