<div class="modal" id="modal">
    <div class="box_modal" id="box_modal">
        <div class="title_modal">
            <div class="tt1">
                <span class="title_1">Đăng ký</span>
                <span class="des">Nhanh chóng và dễ dàng</span>
            </div>
            <button class="tt2" id="close_modal">X</button>
        </div>
        <form class="form_modal" action="./process/process-signup.php" method="post" id="form_signup">
            <div class="item_modal">
                <input id="fullname" type="text" minlength="1" placeholder="Họ Tên" name="fullname">
            </div>
            <div class="item_modal">
                <input id="email" type="text" minlength="1" placeholder="Email" name="email">
            </div>
            <div class="item_modal">
                <input id="password" type="password" minlength="1" placeholder="Mật khẩu mới" name="password">
            </div>
            <div class="item_modal">
                <input id="birthday" type="date" name="birthday" id="birthday">
            </div>
            <div class="item_modal">
                <span class="radio_sex">
                    <label for="radio_male">Nam</label>
                    <input type="radio" name="sex" id="radio_male">
                </span>
                <span class="radio_sex">
                    <label for="radio_male">Nữ</label>
                    <input type="radio" name="sex" id="radio_female">
                </span>

            </div>
            <button id="submit_signup" type="submit">Đăng ký</button>

        </form>
    </div>
</div>

<script>
    const form_signup = document.querySelector('#form_signup');
    const fullname = document.querySelector('#fullname');
    const email = document.querySelector('#email');
    const password = document.querySelector('#password');
    const birthday = document.querySelector('#birthday');
    const radio_male = document.querySelector('#radio_male');
    const radio_female = document.querySelector('#radio_female');
    const toast = document.querySelector('#toast');

    form_signup.onsubmit = (e) => {
        e.preventDefault();
        let sex = '0';
        if (radio_male.checked == true) {
            sex = '1';
        }
        if (radio_female.checked == true) {
            sex = '0';
        }
        let formData = new FormData();
        formData.append('fullname', fullname.value);
        formData.append('email', email.value);
        formData.append('password', password.value);
        formData.append('birthday', birthday.value);
        formData.append('sex', sex);


        if (fullname.value && email.value && password.value && birthday.value && sex) {
            fetch('http://localhost/BaiTapLon_CNW/process/process-signup.php', {
                    method: 'POST',
                    body: formData
                }).then(res => res.json())
                .then((data) => {
                    if (data) {
                        toast.style.display = 'block';
                        toast.textContent = data.response;
                        setInterval(() => {
                            toast.style.display = 'none';
                        }, 5000)
                    }
                })
        } else {
            toast.style.display = 'block';
            toast.textContent = 'Chưa điền đủ thông tin';
            setInterval(() => {
                toast.style.display = 'none';
            }, 4500)
        }

    }
</script>