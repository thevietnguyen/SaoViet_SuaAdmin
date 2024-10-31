$ = document.querySelector.bind(document);

btnCloseUser = $(".close-btn__user");
formInsertUser = $(".form__insert-user");
userInsertBtn = $(".user-Insert__btn");

function showFormInsertUser() {
    formInsertUser.classList.add("show");
}
function hidderFormInsertUser() {
    formInsertUser.classList.remove("show");
}

userInsertBtn.addEventListener("click", showFormInsertUser);
btnCloseUser.addEventListener("click", hidderFormInsertUser);
/*
    // Lấy các phần tử
    const addCustomerBtn = document.getElementById('addCustomerBtn');
    const formInsert = document.querySelector('.form-insert');
    const closeBtn = document.querySelector('.close-btn');

    // Hiện pop-up khi nhấn nút "Thêm"
    addCustomerBtn.addEventListener('click', function() {
        formInsert.style.display = 'block'; // Hiện pop-up
    });

    // Đóng pop-up khi nhấn nút đóng
    closeBtn.addEventListener('click', function() {
        formInsert.style.display = 'none'; // Ẩn pop-up
    });

    // Đóng pop-up nếu nhấn ra bên ngoài
    window.addEventListener('click', function(event) {
        if (event.target === formInsert) {
            formInsert.style.display = 'none'; // Ẩn pop-up
        }
    });

*/