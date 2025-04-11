<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('prueba', function () {
    return view("home.home");
});


Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index']);

Route::get('admin/buses', [App\Http\Controllers\BusController::class, 'index'])->middleware('permission:administrar');
Route::post('BusStore', [App\Http\Controllers\BusController::class, 'store'])->middleware('permission:administrar');
Route::post('BusDestroy', [App\Http\Controllers\BusController::class, 'destroy'])->middleware('permission:administrar');
Route::post('BusEdit', [App\Http\Controllers\BusController::class, 'edit'])->middleware('permission:administrar');
Route::post('BusUpdate', [App\Http\Controllers\BusController::class, 'update'])->middleware('permission:administrar');

Route::get('admin/programacion', [App\Http\Controllers\ScheduleController::class, 'index'])->middleware('permission:administrar');
Route::post('ScheduleStore', [App\Http\Controllers\ScheduleController::class, 'store'])->middleware('permission:administrar');
Route::post('ScheduleDestroy', [App\Http\Controllers\ScheduleController::class, 'destroy'])->middleware('permission:administrar');
Route::post('ScheduleEdit', [App\Http\Controllers\ScheduleController::class, 'edit'])->middleware('permission:administrar');
Route::post('ScheduleUpdate', [App\Http\Controllers\ScheduleController::class, 'update'])->middleware('permission:administrar');

Route::get('admin/reserva', [App\Http\Controllers\SeatReservationController::class, 'index'])->middleware('permission:administrar');
Route::post('SeatReservationStore', [App\Http\Controllers\SeatReservationController::class, 'store'])->middleware('permission:administrar');
Route::post('SeatReservationDestroy', [App\Http\Controllers\SeatReservationController::class, 'destroy'])->middleware('permission:administrar');
Route::post('SeatReservationEdit', [App\Http\Controllers\SeatReservationController::class, 'edit'])->middleware('permission:administrar');
Route::post('SeatReservationUpdate', [App\Http\Controllers\SeatReservationController::class, 'update'])->middleware('permission:administrar');

Route::get('/schedule/{id}/seats', [App\Http\Controllers\SeatReservationController::class, 'seatMap'])->name('seat.map');

Route::get('/reporte/{schedule_id}', [App\Http\Controllers\ScheduleController::class, 'report']);


Route::get('admin/reclamaciones', [App\Http\Controllers\BookController::class, 'index']);
Route::get('libro_reclamaciones', [App\Http\Controllers\BookController::class, 'indexPublic']);
Route::post('BookStorePublic', [App\Http\Controllers\BookController::class, 'storePublic'])->middleware('throttle:50,1440');
Route::post('BookDestroy', [App\Http\Controllers\BookController::class, 'destroy'])->middleware('permission:administrar|eliminar');
Route::post('BookEdit', [App\Http\Controllers\BookController::class, 'edit'])->middleware('permission:administrar|editar');
Route::post('BookUpdate', [App\Http\Controllers\BookController::class, 'update'])->middleware('permission:administrar|actualizar');





use App\Http\Controllers\ChatbotController;

Route::get('/chat', [ChatbotController::class, 'index']);
Route::post('/chatPost', [ChatbotController::class, 'chat'])->middleware('throttle:1000,1440');

Route::get('proyectos/{description}', [App\Http\Controllers\ProjectController::class, 'public']);



   //USUARIOS
   Route::get('home_demo/plantilla', [App\Http\Controllers\Home_demoController::class, 'template']);
   Route::get('home_demo/inicio', [App\Http\Controllers\Home_demoController::class, 'home']);
   Route::get('home_demo/nosotros', [App\Http\Controllers\Home_demoController::class, 'us']);
   Route::get('home_demo/proyectos', [App\Http\Controllers\Home_demoController::class, 'project']);
   Route::get('home_demo/blog', [App\Http\Controllers\Home_demoController::class, 'blog']);
   Route::get('home_demo/contacto', [App\Http\Controllers\Home_demoController::class, 'contact']);

   Route::get('blog/topicPublic', [App\Http\Controllers\TopicPublicController::class, 'index']);

   Route::get('/', function () {
    return redirect("login");
});
Route::get('/nosotros', function () {
    return view("production.3");
});
Route::get('/proyectos', function () {
    return view("production.4");
});
Route::get('/blog', function () {
    return view("production.5");
});
Route::get('/contacto', function () {
    return view("production.6");
});







   Route::get('ProjectList', [App\Http\Controllers\CustomerController::class, 'ProjectList']);
   Route::post('CustomerStorePublic', [App\Http\Controllers\CustomerController::class, 'storePublic'])->middleware('throttle:200,1440');

   Route::get('blog/{url}', [App\Http\Controllers\TopicPublicController::class, 'report']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/////////////////////////////////////////




Route::group(['middleware' => ['auth']], function () {
    //
    Route::get('/sistema', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema')->middleware('permission:administrar');


    Route::get('admin', [App\Http\Controllers\UserController::class, 'profile']);

    Route::get('admin/clientes', [App\Http\Controllers\CustomerController::class, 'index'])->middleware('permission:administrar|clientes');
    Route::post('CustomerStore', [App\Http\Controllers\CustomerController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('CustomerDestroy', [App\Http\Controllers\CustomerController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('CustomerEdit', [App\Http\Controllers\CustomerController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('CustomerUpdate', [App\Http\Controllers\CustomerController::class, 'update'])->middleware('permission:administrar|actualizar');

    Route::get('admin/imagenes', [App\Http\Controllers\ImageController::class, 'index'])->middleware('permission:administrar|imagenes');
    Route::post('ImageStore', [App\Http\Controllers\ImageController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('ImageDestroy', [App\Http\Controllers\ImageController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('ImageEdit', [App\Http\Controllers\ImageController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('ImageUpdate', [App\Http\Controllers\ImageController::class, 'update'])->middleware('permission:administrar|actualizar');

    Route::post('ImageDestroyAll', [App\Http\Controllers\ImageController::class, 'destroyAll'])->middleware('permission:administrar|eliminar');

    Route::get('admin/secciones', [App\Http\Controllers\SectionController::class, 'index'])->middleware('permission:administrar|secciones');
    Route::post('SectionStore', [App\Http\Controllers\SectionController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('SectionDestroy', [App\Http\Controllers\SectionController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('SectionEdit', [App\Http\Controllers\SectionController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('SectionUpdate', [App\Http\Controllers\SectionController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('SectionUpdateDinamic', [App\Http\Controllers\SectionController::class, 'updateDinamic']);

    Route::get('admin/proyectos', [App\Http\Controllers\ProjectController::class, 'index'])->middleware('permission:administrar|proyectos');
    Route::post('ProjectStore', [App\Http\Controllers\ProjectController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('ProjectDestroy', [App\Http\Controllers\ProjectController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('ProjectEdit', [App\Http\Controllers\ProjectController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('ProjectUpdate', [App\Http\Controllers\ProjectController::class, 'update'])->middleware('permission:administrar|actualizar');


    Route::get('admin/proyectos_detalle', [App\Http\Controllers\ProjectDetailController::class, 'index'])->middleware('permission:administrar|proyectos');
    Route::post('ProjectDetailStore', [App\Http\Controllers\ProjectDetailController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('ProjectDetailDestroy', [App\Http\Controllers\ProjectDetailController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('ProjectDetailEdit', [App\Http\Controllers\ProjectDetailController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('ProjectDetailUpdate', [App\Http\Controllers\ProjectDetailController::class, 'update'])->middleware('permission:administrar|actualizar');


   //ADMINISTRATIVO
    Route::get('home_edit/plantilla', [App\Http\Controllers\Home_edit::class, 'template'])->middleware('permission:administrar|editar_plantilla');
    Route::get('home_edit/inicio', [App\Http\Controllers\Home_edit::class, 'home'])->middleware('permission:administrar|editar_inicio');
    Route::get('home_edit/nosotros', [App\Http\Controllers\Home_edit::class, 'us'])->middleware('permission:administrar|editar_nosotros');
    Route::get('home_edit/proyectos', [App\Http\Controllers\Home_edit::class, 'project'])->middleware('permission:administrar|editar_proyectos');
    Route::get('home_edit/blog', [App\Http\Controllers\Home_edit::class, 'blog'])->middleware('permission:administrar|editar_blog');
    Route::get('home_edit/contacto', [App\Http\Controllers\Home_edit::class, 'contact'])->middleware('permission:administrar|editar_contactos');



    Route::resource("admin/blog", App\Http\Controllers\TopicController::class)->middleware('permission:administrar|blogs');
    Route::post('topicStore', [App\Http\Controllers\TopicController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('topicEdit', [App\Http\Controllers\TopicController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('topicUpdate', [App\Http\Controllers\TopicController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('topicDestroy', [App\Http\Controllers\TopicController::class, 'destroy'])->middleware('permission:administrar|eliminar');






    Route::resource("admin/categorias", App\Http\Controllers\CategoryController::class);
    Route::post('categoryStore', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('categoryEdit', [App\Http\Controllers\CategoryController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('categoryUpdate', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('categoryDestroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('permission:administrar|eliminar');


    Route::resource('admin/usuarios', App\Http\Controllers\UserController::class)->middleware('permission:administrar|usuarios');
    Route::post('userStore', [App\Http\Controllers\UserController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('userDestroy', [App\Http\Controllers\UserController::class, 'destroy'])->middleware('permission:administrar|eliminar');
    Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
    Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);
    // Route::post('userImportGoogle', [App\Http\Controllers\UserController::class, 'importGoogle'])->name("userImportGoogle");

    Route::post('UserRoleUpdate', [App\Http\Controllers\UserRoleController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('UserRoleEdit', [App\Http\Controllers\UserRoleController::class, 'edit'])->middleware('permission:administrar|editar');


    Route::resource("admin/roles", App\Http\Controllers\RoleController::class)->middleware('permission:administrar|usuarios');
    Route::post('RoleStore', [App\Http\Controllers\RoleController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('RoleEdit', [App\Http\Controllers\RoleController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('RoleUpdate', [App\Http\Controllers\RoleController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('RoleDestroy', [App\Http\Controllers\RoleController::class, 'destroy'])->middleware('permission:administrar|eliminar');


    Route::post('RolePermissionUpdate', [App\Http\Controllers\RolePermissionController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('RolePermissionEdit', [App\Http\Controllers\RolePermissionController::class, 'edit'])->middleware('permission:administrar|editar');




    Route::resource("tipos", App\Http\Controllers\TypeController::class)->middleware('permission:administrar|tipos');
    Route::post('typeStore', [App\Http\Controllers\TypeController::class, 'store'])->middleware('permission:administrar|agregar');
    Route::post('typeEdit', [App\Http\Controllers\TypeController::class, 'edit'])->middleware('permission:administrar|editar');
    Route::post('typeUpdate', [App\Http\Controllers\TypeController::class, 'update'])->middleware('permission:administrar|actualizar');
    Route::post('typeDestroy', [App\Http\Controllers\TypeController::class, 'destroy'])->middleware('permission:administrar|eliminar');

    Route::get('home_edit/generate/{module}', [App\Http\Controllers\GenerateProductionController::class, 'generate'])->middleware('permission:administrar|actualizar');


    Route::get('admin/documentacion', function(){
        return view('doc.documentation');
    });
});


//// social media
Route::post('socialMediaShare', [App\Http\Controllers\SocialMediaController::class, 'share']);

//


Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('/auth/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);

use App\Models\User;



Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');

    Route::post('userImportGoogle', 'importGoogle');


});




//////////////////////////////////////////////////



Route::get('login/microsoft', function () {
    return Socialite::driver('microsoft')->redirect();
});

Route::get('login/microsoft/callback', function () {
    try {
        //create a user using socialite driver google
        $user = Socialite::driver('microsoft')->user();
        // if the user exits, use that user and login
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            //if the user exists, login and show dashboard
            Auth::login($finduser);
            return redirect('/home');
        } else {
            //user is not yet created, so create first
            $newUser = User::create([
                'names' => $user->name,
                'firstname' => '',
                'lastname' => '',
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => Hash::make('onedigital123')
            ]);

            $newUser->save();
            //login as the new user
            Auth::login($newUser);
            $newUser->assignRole('Socio Comercial');
            //
            //  $newUser->createToken(request()->device_name)->plainTextToken ;
            // go to the dashboard
            return redirect('/home');
        }
        //catch exceptions
    } catch (Exception $e) {
        dd($e->getMessage());
    }
});


Route::get('google_sheet', [\App\Http\Controllers\GoogleSheetController::class, 'index']);


//925680958 936158747






use Illuminate\Support\Facades\Session;

Route::get('/get-thread-id', function () {
    $apiKey = env('OPENAI_API_KEY'); // Clave API de OpenAI
    $url = 'https://api.openai.com/v1/threads/runs';

    $data = [
        "assistant_id" =>   "asst_4g8T8GyJPii6NDHcBUxfju9M", // Reemplaza con tu ID real
        "thread" => [
            "messages" => [
                ["role" => "user", "content" => "Eres un experto en cursos de programación"]
            ]
        ]
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json",
        "OpenAI-Beta: assistants=v2",
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);

    if (isset($response['thread_id'])) {
        // Guardar el `thread_id` en la sesión
        Session::put('thread_id', $response['thread_id']);
        Session::put('expires_at', $response['expires_at']); // Almacenar la fecha de expiración si está disponible
        return response()->json(['message' => 'Thread ID obtenido.', 'thread_id' => $response['thread_id']]);
    }

    return response()->json(['error' => 'No se pudo obtener el thread_id.'], 500);
});

Route::post('/send-message', function (\Illuminate\Http\Request $request) {
    $apiKey = env('OPENAI_API_KEY'); // Tu clave API de OpenAI

    // Recuperar el `thread_id` desde la sesión
    $threadId = Session::get('thread_id');
    if (!$threadId) {
        return response()->json(['error' => 'No hay un thread_id activo. Por favor, obtén un nuevo hilo.'], 400);
    }

    // Construir la URL con el `thread_id`
    $url = "https://api.openai.com/v1/threads/{$threadId}/messages";

    // Cuerpo de la solicitud (mensaje del usuario)
    $data = [
        "role" => "user",
        "content" => $request->input('message') // Mensaje enviado por el usuario desde el frontend
    ];

    // Configuración de cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",      // Clave de autorización
        "Content-Type: application/json",    // Tipo de contenido
        "OpenAI-Beta: assistants=v2"         // Cambiado a v2
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Convertir datos a JSON

    // Ejecutar la solicitud
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    // Manejar errores de cURL
    if ($error) {
        return response()->json(['error' => "cURL error: $error"], 500);
    }

    // Decodificar la respuesta JSON
    $responseData = json_decode($response, true);

    // Verificar si hay errores en la respuesta de OpenAI
    if (isset($responseData['error'])) {
        return response()->json(['error' => $responseData['error']], 500);
    }

    // Devolver la respuesta de OpenAI
    return response()->json(['message' => 'Respuesta recibida.', 'response' => $responseData]);
});



Route::get('/get-thread-messages', function () {
    $apiKey = env('OPENAI_API_KEY'); // Asegúrate de tener tu clave API en el archivo .env
    $threadId = Session::get('thread_id'); // Recupera el thread_id de la sesión

    if (!$threadId) {
        return response()->json(['error' => 'No hay un thread_id activo. Por favor, obtén un nuevo hilo.'], 400);
    }

    // Construye la URL con el thread_id
    $url = "https://api.openai.com/v1/threads/{$threadId}/messages";

    // Configuración de cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json",
        "OpenAI-Beta: assistants=v2"
    ]);

    // Ejecuta la solicitud
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    // Manejo de errores de cURL
    if ($error) {
        return response()->json(['error' => "cURL error: $error"], 500);
    }

    $responseData = json_decode($response, true);

    // Manejo de errores de OpenAI
    if (isset($responseData['error'])) {
        return response()->json(['error' => $responseData['error']], 500);
    }

    // Devuelve la respuesta de OpenAI
    return response()->json(['messages' => $responseData]);
});

