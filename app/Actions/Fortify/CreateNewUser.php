<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        logger('You are here');
        $input['name'] = $input['first_name']." ".$input['last_name'];
        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'type' => ['required','string'],
        //     'password' => $this->passwordRules(),
        // ])->validate();
        logger('You are here after the validaion');

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => request()->email,
                'type' => request()->type,
                'unv' => request()->unv,
                'college' => request()->college,
                'gpa' => request()->GPA,
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
                if($user->type == "company")
                $this->createCompany($user->id);
            });
            logger('You are here before returning');

        });
    }
    public function createCompany($user_id){
        $imageName = time().'.'.request()->image->extension();
        request()->image->move(public_path('images'), $imageName);
        $company = new Company();
        $company->name = request()->company_name;
        $company->slug = Str::slug(request()->company_name);
        $company->site = request()->company_site;
        $company->image = $imageName;
        $company->hq = request()->company_hq;
        $company->user_id = $user_id;
        $company->save();
        }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
