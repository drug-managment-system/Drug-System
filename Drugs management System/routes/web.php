<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AddCompanyController;
use App\Http\Controllers\DepartementController;
 

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/index', function () {
    
    return view('index');
});
Route::get('/About', function () {
    
    return view('User/About');
});
 
 
 
Route::post('/store1',[EmployeeController::class, 'store1']);
Route::get('/Employees',[EmployeeController::class, 'Employees']);
Route::get('/AddEmployee',[EmployeeController::class, 'AddEmployee']);
Route::get('Emp_Edit/{id}', [EmployeeController::class, 'Emp_Edit']);
Route::put('update-Emp/{id}', [EmployeeController::class, 'update']);
Route::get('/TrashEmployee',[EmployeeController::class, 'TrashEmployee']);
Route::get('/TrashingEmployee/{id}',[EmployeeController::class, 'TrashingEmployee']);
Route::get('/restoreEmployee/{id}',[EmployeeController::class, 'restoreEmployee']); 
Route::get('/destroyEmployee/{id}',[EmployeeController::class, 'destroyEmployee']);

  
Route::post('/store14',[AddCompanyController::class, 'store14']);
Route::get('/AddCompany',[AddCompanyController::class, 'AddCompany']);
Route::get('/AddCompany1',[AddCompanyController::class, 'AddCompany1']);
Route::get('AddCompany_Edit/{id}', [AddCompanyController::class, 'AddCompany_Edit']);
Route::put('update-AddCompany/{id}', [AddCompanyController::class, 'update14']);
Route::get('/TrashAddCompany',[AddCompanyController::class, 'TrashAddCompany']);
Route::get('/TrashingAddCompany/{id}',[AddCompanyController::class, 'TrashingAddCompany']);
Route::get('/restoreAddCompany/{id}',[AddCompanyController::class, 'restoreAddCompany']); 
Route::get('/destroyAddCompany/{id}',[AddCompanyController::class, 'destroyAddCompany']);




Route::post('/store5',[StockController::class, 'store5']);
Route::get('/Stocks',[StockController::class, 'Stocks']);
Route::get('/AddStock',[StockController::class, 'AddStock']);
Route::get('Stock_Edit/{id}', [StockController::class, 'Stock_Edit']);
Route::put('update-Stock/{id}', [StockController::class, 'update5']);
Route::get('/TrashStock',[StockController::class, 'TrashStock']);
Route::get('/TrashingStock/{id}',[StockController::class, 'TrashingStock']);
Route::get('/restoreStock/{id}',[StockController::class, 'restoreStock']); 
Route::get('/destroyStock/{id}',[StockController::class, 'destroyStock']);



Route::post('/store10',[DrugController::class, 'store10']);
Route::get('/Drugs',[DrugController::class, 'drugs']);
Route::get('/AddDrugs',[DrugController::class, 'Adddrugs']);
Route::get('Drugs_Edit/{id}', [DrugController::class, 'Drugs_Edit']);
Route::put('update-Drugs/{id}', [DrugController::class, 'update10']);
Route::get('/TrashDrug',[DrugController::class, 'TrashDrug']);
Route::get('/TrashingDrug/{id}',[DrugController::class, 'TrashingDrug']);
Route::get('/restoreDrug/{id}',[DrugController::class, 'restoreDrug']); 
Route::get('/destroyDrug/{id}',[DrugController::class, 'destroyDrug']);



Route::post('/store6',[ExpensesController::class, 'store6']);
Route::get('/Expensess',[ExpensesController::class, 'Expensess']);
Route::get('/AddExpenses',[ExpensesController::class, 'AddExpenses']);
Route::get('Exp_Edit/{id}', [ExpensesController::class, 'Exp_Edit']);
Route::put('update-Exp/{id}', [ExpensesController::class, 'update6']);
Route::get('/TrashExpenses',[ExpensesController::class, 'TrashExpenses']);
Route::get('/TrashingExpenses/{id}',[ExpensesController::class, 'TrashingExpenses']);
Route::get('/restoreExpenses/{id}',[ExpensesController::class, 'restoreExpenses']); 
Route::get('/destroyExpenses/{id}',[ExpensesController::class, 'destroyExpenses']);


 
Route::get('/Departement',[DepartementController::class, 'Departement']);
Route::get('/AddDepartement',[DepartementController::class, 'AddDepartement']);
Route::post('/store4',[DepartementController::class, 'store4']);
Route::get('Dep_Edit/{id}', [DepartementController::class, 'Dep_Edit']);
Route::put('update-Dep/{id}', [DepartementController::class, 'update4']);
Route::get('/TrashDepartement',[DepartementController::class, 'TrashDepartement']);
Route::get('/TrashingDepartement/{id}',[DepartementController::class, 'TrashingDepartement']);
Route::get('/restoreDepartement/{id}',[DepartementController::class, 'restoreDepartement']); 
Route::get('/destroyDepartement/{id}',[DepartementController::class, 'destroyDepartement']);



Route::get('/Notes',[NoteController::class, 'Notes']);
Route::get('/AddNotes',[NoteController::class, 'AddNotes']);
Route::post('/store11',[NoteController::class, 'store11']);
Route::get('Notes_Edit/{id}', [NoteController::class, 'Notes_Edit']);
Route::put('update-Notes/{id}', [NoteController::class, 'update11']);
Route::get('/TrashNote',[NoteController::class, 'TrashNote']);
Route::get('/TrashingNote/{id}',[NoteController::class, 'TrashingNote']);
Route::get('/restoreNote/{id}',[NoteController::class, 'restoreNote']); 
Route::get('/destroyNote/{id}',[NoteController::class, 'destroyNote']);


Route::post('/store3',[BillController::class, 'store3']);
Route::get('/Bills',[BillController::class, 'Bills']);
Route::get('/AddBill',[BillController::class, 'AddBill']);
Route::get('Bill_Edit/{id}', [BillController::class, 'Bill_Edit']);
Route::put('update-Bill/{id}', [BillController::class, 'update3']);
Route::get('/TrashBill',[BillController::class, 'TrashBill']);
Route::get('/TrashingBill/{id}',[BillController::class, 'TrashingBill']);
Route::get('/restoreBill/{id}',[BillController::class, 'restoreBill']); 
Route::get('/destroyBill/{id}',[BillController::class, 'destroyBill']);


Route::post('/store13',[MoneyController::class, 'store13']);
Route::get('/Money',[MoneyController::class, 'Money']);
Route::get('/AddMoney',[MoneyController::class, 'AddMoney']);
Route::get('Money_Edit/{id}', [MoneyController::class, 'Money_Edit']);
Route::put('update-Money/{id}', [MoneyController::class, 'update13']);
Route::get('/TrashMoney',[MoneyController::class, 'TrashMoney']);
Route::get('/TrashingMoney/{id}',[MoneyController::class, 'TrashingMoney']);
Route::get('/restoreMoney/{id}',[MoneyController::class, 'restoreMoney']); 
Route::get('/destroyMoney/{id}',[MoneyController::class, 'destroyMoney']);
 

Route::post('/store2',[CustomerController::class, 'store2']);
Route::get('/Customer',[CustomerController::class, 'Customer']);
Route::get('/AddCustomer',[CustomerController::class, 'AddCustomer']);
Route::get('Cust_Edit/{id}', [CustomerController::class, 'Cust_Edit']);
Route::put('update-Cust/{id}', [CustomerController::class, 'update1']);
Route::get('/TrashCustomer',[CustomerController::class, 'TrashCustomer']);
Route::get('/TrashingCustomer/{id}',[CustomerController::class, 'TrashingCustomer']);
Route::get('/restoreCustomer/{id}',[CustomerController::class, 'restoreCustomer']); 
Route::get('/destroyCustomer/{id}',[CustomerController::class, 'destroyCustomer']);



 
Route::get('/Lock',[UserController::class, 'Locked'])->name('Lock');
Route::get('/login',[UserController::class, 'create'])->name('login');
Route::post('/login',[Usercontroller::class, "store"])->name('/login');
Route::post('/Lock',[Usercontroller::class, "store20"])->name('/Lock');
  











