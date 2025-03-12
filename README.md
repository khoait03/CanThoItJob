# Hệ thống website đăng tin tuyển dụng và tìm kiếm việc tích hợp công cụ tạo CV

## Phạm vi dự án

-   Công nghệ:  ReactJS, Laravel, Filament, Bootstap 5, Tailwind, MySQL, Pusher...

-   Mô tả:  Là một nền tảng tuyển dụng và tìm kiếm việc làm. Website kết nối nhà tuyển dụng và ứng viên, giúp quá trình tuyển dụng trở nên nhanh chóng và hiệu quả hơn...

#### 🧑‍💼 Ứng Viên
- 🔹 Đăng ký, đăng nhập tài khoản.
- 🔹 Tìm kiếm và ứng tuyển việc làm.
- 🔹 Sử dụng công cụ tạo CV chuyên nghiệp.
- 🔹 Quản lý danh sách công việc đã ứng tuyển...

#### 🏢 Nhà Tuyển Dụng
- 🔹 Đăng tin tuyển dụng, tiếp cận ứng viên tiềm năng.
- 🔹 Nhận và quản lý CV từ ứng viên.
- 🔹 Gửi email thông báo kết quả tuyển dụng.
- 🔹 Tạo lịch phỏng vấn và quản lý quy trình tuyển dụng.
- 🔹 Mua gói đăng tin để nâng cao hiệu quả tuyển dụng...

#### 🔧 Quản Trị Viên
- 🔹 Quản lý toàn bộ hệ thống.
- 🔹 Duyệt tin tuyển dụng trước khi hiển thị.
- 🔹 Quản lý bài viết, nội dung trên website.
- 🔹 Phân quyền tài khoản theo từng vai trò...

#### 🌐 Webdemo: https://www.vieclamphuquoc.com.vn/

#### 🔧 Quản Trị Viên: https://www.vieclamphuquoc.com.vn/admin
#### 🏢 Nhà Tuyển Dụng: https://www.vieclamphuquoc.com.vn/business

#### Tài khoản

-   Admin: admin@gmail.com - admin123456
-   Ứng viên: ungvien@gmail.com - 123456
-   Nhà tuyển dụng: nhatuyendung@gmail.com - 123456

### Tin tuyển dụng
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_vieclam.png" alt="Job Demo" width="900">

### Mẫu CV
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_maucv.png" alt="Job Demo" width="900">


### Admin danh sách việc làm
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_admin_vieclam.png" alt="Job Demo" width="900">

### Admin ứng viên
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_admin_ungvien.png" alt="Job Demo" width="900">

### Admin nhà tuyển dụng
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_admin_nhatuyendung.png" alt="Job Demo" width="900">

### Phân quyền
<img src="https://raw.githubusercontent.com/khoait03/CanThoItJob/main/public/uploads/github/job_admin_phanquyen.png" alt="Job Demo" width="900">

## Cài đặt

Để cài đặt dự án, bạn cần thực hiện các bước sau:

1. Clone repository

2. Cài đặt các phụ thuộc:

    ```bash
    composer install 
   
    npm install
    ```

3. Tạo file .env:

    ```bash
    cp .env.example .env

    ```

4. Cấu hình file .env:
   Mở file .env và cấu hình các thông số kết nối cơ sở dữ liệu, ứng dụng, và các thông tin khác cần thiết cho dự án.

5. Tạo khóa ứng dụng:

    ```bash
    php artisan key:generate

    ```

6. Chạy migration:

    ```bash
    php artisan migrate

    ```

7. Chạy seeder:

    ```bash
    php artisan db:seed

    ```

8. Run project:

    ```bash
    php artisan serve
   
    npm run dev

    ```

9. Truy cập vào đường dẫn để xem ứng dụng:
    ```bash
    http://127.0.0.1:8000/
    ```

## 📜 Copyright Notice

© 2024 Nguyen Le Anh Khoa. All rights reserved.

This project and its contents are protected under copyright law. Unauthorized copying, distribution, or modification of any part of this project without prior written permission from the author is strictly prohibited.

For inquiries, please contact:  
📞 Phone: 0336216546  
📧 Email: [khoacntt2003@gmail.com](mailto:khoacntt2003@gmail.com), [nguyenleanhkhoa.dev@gmail.com](mailto:nguyenleanhkhoa.dev@gmail.com)  
