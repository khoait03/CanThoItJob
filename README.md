# Hệ thống website đăng tin tuyển dụng và tìm kiếm việc tích hợp công cụ tạo CV

# Phạm vi dự án

-   Công nghệ: Laravel, ReactJS, MySQL, JWT

-   Mô tả:  Là một nền tảng tuyển dụng và tìm kiếm việc làm. Website kết nối nhà tuyển dụng và ứng viên, giúp quá trình tuyển dụng trở nên nhanh chóng và hiệu quả hơn.

### 🧑‍💼 Ứng Viên
- 🔹 Đăng ký, đăng nhập tài khoản.
- 🔹 Tìm kiếm và ứng tuyển việc làm.
- 🔹 Sử dụng công cụ tạo CV chuyên nghiệp.
- 🔹 Quản lý danh sách công việc đã ứng tuyển.

### 🏢 Nhà Tuyển Dụng
- 🔹 Đăng tin tuyển dụng, tiếp cận ứng viên tiềm năng.
- 🔹 Nhận và quản lý CV từ ứng viên.
- 🔹 Gửi email thông báo kết quả tuyển dụng.
- 🔹 Tạo lịch phỏng vấn và quản lý quy trình tuyển dụng.
- 🔹 Mua gói đăng tin để nâng cao hiệu quả tuyển dụng.

### 🔧 Quản Trị Viên
- 🔹 Quản lý toàn bộ hệ thống.
- 🔹 Duyệt tin tuyển dụng trước khi hiển thị.
- 🔹 Quản lý bài viết, nội dung trên website.
- 🔹 Phân quyền tài khoản theo từng vai trò


# Tài khoản

-   Admin: admin@gmail.com - admin123456
-   Ứng viên: ungvien@gmail.com - 123456
-   Nhà tuyển dụng: nhatuyendung@gmail.com - 123456

# Trang chủ
<img src="https://raw.githubusercontent.com/khoait03/laravel-react-spa-management/main/public/uploads/github/job_vieclam.png" alt="Job Demo" width="900">

# Mẫu CV
<img src="https://raw.githubusercontent.com/khoait03/laravel-react-spa-management/main/public/uploads/github/job_maucv.png" alt="Job Demo" width="900">

# Admin


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
    http://localhost:3000/
    ```

Đóng góp
Nếu bạn muốn đóng góp cho dự án, vui lòng tạo pull request và tuân thủ các quy tắc đóng góp.
