<?php

namespace App\Livewire;

use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Fieldset;
use App\Models\JobSeeker;
use App\Livewire\VCard;
use Filament\Forms\Components\Livewire;
use Filament\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use App\Models\User;

class Profile extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $user = [];
    
    public function mount(): void
    {
        $this->user = auth()->user();
        //get job seeker data via user id
        $jobseekerData = JobSeeker::where('user_id', $this->user->id)->first();

        $dataFill = [
            'first_name' => $jobseekerData->first_name,
            'last_name' => $jobseekerData->last_name,
            'email' => $jobseekerData->email,
            'contact_number' => $jobseekerData->contact_number,
            'address' => $jobseekerData->address,
            'city' => $jobseekerData->city,
            'state_region' => $jobseekerData->state_region,
            'postal_code' => $jobseekerData->postal_code,
            'country' => $jobseekerData->country,
            'bio' => $jobseekerData->bio,
            'alias' => $jobseekerData->alias,
            'username' => $this->user->email,
            'photo' => $jobseekerData->photo,
            'description_intro' => $jobseekerData->description_intro
        ];

        $this->data = $dataFill;

        $this->form->fill($dataFill);
    }

    public function create(User $notifiable): BroadcastMessage
    {
        $formData = $this->form->getState();
        //save for job seeker table
        $jobSeeker = JobSeeker::where('user_id', $this->user['id'])->first();
        $jobSeeker->first_name = $formData['first_name'];
        $jobSeeker->last_name = $formData['last_name'];
        $jobSeeker->email = $formData['email'];
        $jobSeeker->contact_number = $formData['contact_number'];
        $jobSeeker->address = $formData['address'];
        $jobSeeker->city = $formData['city'];
        $jobSeeker->state = $formData['state'];
        $jobSeeker->postal_code = $formData['postal_code'];
        $jobSeeker->country = $formData['country'];
        $jobSeeker->bio = $formData['bio'];

        if($formData['photo'] != null) {
            $jobSeeker->photo = $formData['photo'];
        }

        $jobSeeker->save();

        //save for user table
        $user = auth()->user();
        $user->email = $formData['username'];
        //check if conform password is not empty
        if($formData['password_confirmation'] != null)
        {
            $user->password = bcrypt($formData['password']);
        } else {
            $user->password = $user->password;
        }
        $user->save();

        return Notification::make()
        ->title('Saved successfully')
        ->getBroadcastMessage();

        //notify back
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Basic Information')
                    ->schema([
                        //file upload image
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->label('Image'),
                        //livewire component
                        Livewire::make(VCard::class, ['data' => $this->data])
                    ])->columns(2),
                Fieldset::make('Basic Information')
                    ->schema([
                        //bio input
                        Forms\Components\Textarea::make('bio')
                    ])->columns(2),
                Fieldset::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('first_name')
                            ->label('First Name')
                            ->required(),
                        Forms\Components\TextInput::make('last_name')
                            ->label('Last Name')
                            ->required(),
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('contact_number'),
                        Forms\Components\TextInput::make('address'),
                        Forms\Components\TextInput::make('city'),
                        Forms\Components\TextInput::make('state'),
                        Forms\Components\TextInput::make('postal_code'),
                        Forms\Components\TextInput::make('country'),
                    ])->columns(2),
                Fieldset::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('username')
                            ->label('Username')
                            ->required(),
                        Forms\Components\TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(),
                        Forms\Components\TextInput::make('password_confirmation')
                            ->label('Confirm Password')
                            ->password()
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
