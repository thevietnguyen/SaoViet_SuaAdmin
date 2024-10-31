<div class="user">
    <h2 id="title">Danh sách khách hàng</h2>
    <div class="control">
        <button>Thêm</button>
        <div>
            <input type="search"><button>Tìm</button>
        </div>
    </div>

    <div class="main">
        <table>
            <thead>
                <th>STT</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Thao tác</th>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($users as $value): ?>
                    <tr>
                        <td><?= $stt++ ?></td>
                        <td><?= $value->MaKH ?></td>
                        <td><?= $value->TenKH ?></td>
                        <td><?= $value->SDT ?></td>
                        <td><?= $value->Email ?></td>
                        <td><?= $value->MatKhau ?></td>
                        <td>
                            <a href="index.php?controller=user&action=showForm&iduser=<?= $value->MaKH ?>&idaccount=<?= $value->MaTK ?>"><button class="edit">Sửa</button></a>
                            <a href="index.php?controller=user&action=delete&iduser=<?= $value->MaKH ?>&idaccount=<?= $value->MaTK ?>"><button class="delete" style="color: red;">Xóa</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="form-insert">
        <div class="content">
            <h2>Thêm khách hàng</h2>
            <button class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <form action="index.php?controller=user&action=insert" method="post">
                <label for="name">Tên khách hàng</label>
                <input type="text" name="full-name" id="name" /> <br />
                <label for="name">Số điện thoại</label>
                <input type="text" name="number-phone" id="name" /><br />
                <label for="name">Email</label>
                <input type="text" name="email" id="name" /><br/>
                <label for="name">Mật khẩu</label>
                <input type="text" name="password" id="name" /><br />
        
                <button type="submit" name="insert" class="insert">Thêm</button>
            </form>
        </div>
    </div>

    <!-- <div class="form-insert">
    <div class="content">
        <h2>Thêm khách hàng</h2>
        <button class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <form action="index.php?controller=user&action=insert" method="post">
            <label for="name">Tên khách hàng</label>
            <input type="text" name="full-name" id="name" required /> <br />
            <label for="phone">Số điện thoại</label>
            <input type="text" name="number-phone" id="phone" required /><br />
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required /><br/>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" required /><br />
    
            <button type="submit" name="insert" class="insert">Thêm</button>
        </form>
    </div>
</div> -->
</div>



