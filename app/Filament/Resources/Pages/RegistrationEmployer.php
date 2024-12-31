<?php

namespace App\Filament\Resources\Pages;

use App\Jobs\Employer\VerificationEmailBusiness;
use App\Models\Address;
use App\Models\Employer;
use App\Models\User;
use Database\Seeders\RegisterEmployerPermissionsSeeder;
use Filament\Facades\Filament;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Auth\VerifyEmail;
use Filament\Notifications\Notification;
use Filament\Pages\Auth\Register;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;


class RegistrationEmployer extends Register
{
    protected ?string $maxWidth = '3xl';


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Tài khoản')
                        ->schema([
                            $this->getNameFormComponent(),
                            $this->getEmailFormComponent(),
                            $this->getPasswordFormComponent(),
                            $this->getPasswordConfirmationFormComponent(),
                        ]),
                    Wizard\Step::make('Thông tin công ty')
                        ->schema([
                            $this->getCompanyNameFormComponent()->columnSpanFull(),

                            $this->getTaxCodeFormComponent(),
                            $this->getCompanyPhoneFormComponent(),
                            $this->getCompanyCompanyTypeFormComponent(),
                            $this->getStreetFormComponent(),

                            $this->getCompanyLogoFormComponent()->columnSpanFull(),
                        ]),
                ])->submitAction(new HtmlString(Blade::render(<<<BLADE
                    <x-filament::button
                        type="submit"
                        size="sm"
                        wire:submit="register"
                    >
                        Đăng ký
                    </x-filament::button>
                    BLADE))),
            ]);
    }


    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();

        // Create the user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'employer', // Assign the employer role
            'active_status' => 1,
            'remember_token' => Str::random(40),
        ]);

        // Handle the company logo upload
        $companyLogoPath = $data['employers']['company_logo'];
        if ($companyLogoPath instanceof \Illuminate\Http\UploadedFile) {
            $companyLogoPath = $companyLogoPath->store('images/employer', 'public'); // Store the file and get the path
        }


        // Tạo địa chỉ
        $address = Address::create([
            'street' => $data['address']['street'],
        ]);

        $addressId = $address->id;


        $slugEmployer = $data['employers']['company_name'] .' '.$user->id;
        // Create the associated employer record
        Employer::create([
            'user_id' => $user->id,
            'company_name' => $data['employers']['company_name'],
            'company_logo' => $companyLogoPath,
            'slug' => Str::slug($slugEmployer),
            'tax_code' => $data['employers']['tax_code'],
            'company_phone' => $data['employers']['company_phone'],
            'company_type' => $data['employers']['company_type'],
            'address_id' => $addressId,
        ]);



        try {
            // Gửi email xác thực
            dispatch(new VerificationEmailBusiness($user));
            Notification::make()
                ->title(__('Đăng ký thành công, vui lòng kiểm tra email xác thực.'))
                ->success()
                ->duration(10000) 
                ->send();

        } catch (\Exception $e) {
            // Log lỗi nếu có
            Log::error('Error dispatching email verification job: ' . $e->getMessage());
        }

        // Chạy seeder AssignEmployerPermissionsSeeder
        // Phân quyền Employer cho người dùng vừa đăng ký
       (new RegisterEmployerPermissionsSeeder())->run($user->id);

        return app(RegistrationResponse::class);
    }

    protected function getFormActions(): array
    {
        return [];
    }

    protected function getCompanyNameFormComponent(): Component
    {
        return TextInput::make('employers.company_name')
            ->label(__('Tên công ty'))
            ->required()
            ->maxLength(255);
    }

    protected function getCompanyLogoFormComponent(): Component
    {
        return FileUpload::make('employers.company_logo')
            ->label(__('Logo công ty'))
            ->imageEditor()
            ->disk('public')
//            ->required()
            ->directory('images/employer')
            ->image();
    }

    protected function getTaxCodeFormComponent(): Component
    {
        return TextInput::make('employers.tax_code')
            ->label(__('Mã số thuế'))
            ->maxLength(255)
            ->required();
    }

    protected function getCompanyPhoneFormComponent(): Component
    {
        return TextInput::make('employers.company_phone')
            ->label(__('Số diện thoại'))
            ->unique(Employer::class)
            ->maxLength(255)
            ->required();
    }

    protected function getStreetFormComponent(): Component
    {
        return TextInput::make('address.street')
            ->label(__('Địa chỉ'))
            ->maxLength(255)
            ->required();
    }

    protected function getCompanyCompanyTypeFormComponent(): Component
    {
        return Select::make('employers.company_type')
            ->label(__('Loại hình công ty'))
            ->helperText('Ví dụ: Công ty TNHH, Công ty Cổ phần, Doanh nghiệp tư nhân...')
            ->options([
                'Công ty TNHH' => 'Công ty TNHH',
                'Công ty Cổ phần' => 'Công ty Cổ phần',
                'Doanh nghiệp tư nhân' => 'Doanh nghiệp tư nhân',
                'Khác' => 'Khác',
            ])
            ->required();
    }
}

