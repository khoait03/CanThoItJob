<?php

namespace App\Livewire\Filament\Employer;

use App\Filament\Components\ImageUploadComponent;
use App\Models\Employer;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Joaopaulolndev\FilamentEditProfile\Concerns\HasSort;
use Livewire\Component;

class EmployerProfile extends Component implements HasForms
{
    use InteractsWithForms;
    use HasSort;

    public ?array $data = [];

    public Model $employer;

    protected static int $sort = 15;



    public function mount(): void
    {
        $this->employer = Employer::find(auth()->user()->employer->id);

        $this->form->fill(
            $this->employer->attributesToArray()
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin công ty')
                    ->aside()
                    ->description('Vui lòng cập nhật thông tin công ty')
                    ->schema([

                        Section::make('Thông tin công ty')
                            ->schema([
                                TextInput::make('company_name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Tên công ty'),

                                RichEditor::make('description')
                                    ->label('Mô tả')
                                    ->required(),
                            ]),

                        Section::make('Nhận diện công ty')
                            ->schema([

                                ImageUploadComponent::make(
                                    'company_logo',
                                    'company_name',
                                    'cong-ty',
                                    'images/employer/logo',
                                )->imageEditor()
                                ->imageEditorAspectRatios([
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                ]),

                                ImageUploadComponent::make(
                                    'company_photo_cover',
                                    'company_name',
                                    'cong-ty',
                                    'images/employer/banner',
                                )->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])->rules(['required', 'mimes:jpeg,png,jpg,gif', 'max:2048']),

                            ]),

                        Section::make('Quy mô công ty')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        DatePicker::make('since')
                                            ->label('Ngày thành lập')
                                            ->required()
                                            ->rules(['before_or_equal:today'])
                                            ->validationAttribute('ngày thành lập')
                                            ->default(now()),

                                        TextInput::make('tax_code')
                                            ->label('Mã số thuế')
                                            ->maxLength(15),


                                        Select::make('company_size')
                                            ->label('Số nhân viên')
                                            ->options([
                                                '1 - 50' => '1 - 50',
                                                '50 - 100' => '50 - 100',
                                                '100 - 200' => '100 - 200',
                                                'Trên 200' => 'Trên 200',
                                                'Trên 500' => 'Trên 500',
                                            ])
                                            ->required(),

                                        Select::make('company_type')
                                            ->label(__('Loại hình công ty'))
                                            ->options([
                                                'Công ty TNHH' => 'Công ty TNHH',
                                                'Công ty Cổ phần' => 'Công ty Cổ phần',
                                                'Doanh nghiệp tư nhân' => 'Doanh nghiệp tư nhân',
                                                'Khác' => 'Khác',
                                            ])
                                            ->required()

                                    ]),
                            ]),

                        Section::make('Liên hệ')
                            ->schema([
                                TextInput::make('company_phone')
                                    ->label('Số điện thoại công ty')
                                    ->required()
                                    ->maxLength(20),

                                TextInput::make('facebook_url')
                                    ->label('Facebook')
                                    ->url(),

                                TextInput::make('website_url')
                                    ->label('Website')
                                    ->url(),
                            ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->employer->update($data);

        Notification::make()
            ->success()
            ->title('Cập nhật thông tin công ty thành công')
            ->send();
    }

    public function render(): View
    {
        return view('livewire.filament.employer.employer-profile');
    }
}
