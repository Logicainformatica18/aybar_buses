<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// con esto le damos roles a los usuarios
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
//excel
use App\Exports\ExportUsers;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Services\GoogleSheetService;

class UserController extends Controller
{
    use Notifiable;
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->get();
        $roles = Role::all();
        return view('user.user', compact('user', 'roles'));
    }
    public function profile()
    {

        return view('user.profile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::orderBy('id', 'DESC')->get();
        return view('user.usertable', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        try {
            $user = new User();
            $user->dni = $request->dni;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->names = $request->names;
            $user->password =  Hash::make($request->password);
            $user->datebirth = $request->datebirth;
            $user->cellphone = $request->cellphone;
            //file
            if ($request->file('photo') != null) {
                $request->photo = fileStore($request->file('photo'), "imageusers");
                $user->photo = $request->photo;
            }
            $user->email = $request->email;
            $user->sex = $request->sex;
            $user->save();
            $user->assignRole("Administrador");
        } catch (\Exception $e) {
            // do task when error
            //   return  $e->getMessage();   // insert query
            return "<div style='background-color:red'> ERROR</div>";
        }
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show = "%" . $request["show"] . "%";
        $user = User::where('firstname', "like", $show)->all();
        return view('usertable', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user =  User::find($request["id"]);
        // foreach ($user->roles_ as $key => $valor) {
        //     $user->role_name=  $valor->name;
        // }

        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        if ($request->photo == "") {
            $users = User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
            $users->sex = $request->sex;

            $users->password =  Hash::make($request->password);


            $users->save();
        } else {
            $table = User::find($request["id"]);
            fileDestroy($table->photo, "imageusers");
            $request->photo = fileStore($request->file('photo'), "imageusers");
            $users = User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
            $users->sex = $request->sex;
            $users->photo = $request->photo;
            $users->password =  Hash::make($request->password);
            $users->save();
        }

        return   $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $table = User::find($request["id"]);
        fileDestroy($table->photo, "imageusers");
        User::find($request["id"])->delete();
        return   $this->create();
    }
    public function updateProfile(Request $request)
    {

        $request->datebirth = datebirth($request->day, $request->month, $request->year);
        //  if ($request->photo == "") {
        $users = User::find($request->id);
        $users->cellphone = $request->cellphone;
        $users->names = $request->names;
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;

        $users->sex =   $request->sex;

        $users->datebirth = $request->datebirth;
        $users->cellphone = $request->cellphone;

        if ($request->photo != "") {
            $table = User::find($request->id);
            fileDestroy($table->photo, "imageusers");
            $request->photo = fileStore($request->file('photo'), "imageusers");
            $users->photo = $request->photo;
        }
        if ($request->password!="") {
            $users->password =  Hash::make($request->password);
        }


        $users->save();
    
    }


    public function import()
    {
        Excel::import(new ImportUsers, request()->file('file'));

        return back();
    }
    public function importGoogle(Request $request)
    {
        //   $request->id_sheet = '1ShgVLdsBMDAW2v0Xzk3JL8xls0KlKUEUMzY5mlTvwds'; 
        //   $request->range = 'hoja!A1:H10'; // Ajusta el rango según tu hoja de cálculo


        $google = new GoogleSheetService();
        $data =   $google->getSheetDataWithHeaders($request->id_sheet, $request->range);

        $object = json_decode(json_encode($data));
        // return $object;
        // return var_dump($data);

        foreach ($object as $row) {
            $existingStudent = User::where('email', $row->email)->first();

            if ($existingStudent) {
                continue;
            } else {
                $user1 = new User([
                    'dni'       => $row->dni,
                    'names'     => $row->nombres,
                    'firstname' => $row->paterno,
                    'lastname'  => $row->materno,
                    'email'     => $row->email,
                    'password'  => Hash::make($row->password),
                    'sex'       => substr($row->sexo, 0, 1),
                    'cellphone' => $row->celular,
                ]);
                $user1->save();
                $user1->assignRole('Socio Comercial');
            }
        }
    }
}
