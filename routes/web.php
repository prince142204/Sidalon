    <?php  

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\UserController; 
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\OrderController;

    // Authentication Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Show login form
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Handle login
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Handle logout

    // User home route after login (add middleware for authentication)
    Route::middleware('auth')->group(function () {
        Route::get('/user/home', [UserController::class, 'show'])->name('user.home'); // Corrected route name to 'user.home'
    });

    // Registration Routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Public Routes
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/drink', [PageController::class, 'drink']);
    Route::get('/food', [PageController::class, 'food']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'store']);
    
    // Order Routes
    Route::get('/order', [OrderController::class, 'showOrderForm'])->name('order.form');
    Route::post('/order', [OrderController::class, 'submitOrder'])->name('order.submit');

    // Default welcome page
    Route::get('/', function () {
        return view('welcome');
    });

