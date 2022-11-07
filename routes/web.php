<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

                                          /* Parent */



Auth::routes();
Route:: get ('/scouts',[App\Http\Controllers\ParentController::class, 'scouts'])->name('scouts')->middleware('auth');

Route::post('/like', [App\Http\Controllers\ParentController::class, 'like'])->name('posts');

Route::get('/home', [App\Http\Controllers\ParentController::class, 'Home'])->name('home');

Route:: get ('/logout',[App\Http\Controllers\LogoutController::class, 'index'])->name('logout');
Route:: get ('/contact',[App\Http\Controllers\ParentController::class, 'contact'])->name('contact');
Route:: post ('/AjoutContact',[App\Http\Controllers\ParentController::class, 'AjoutContact'])->name('AjoutContact');
Route:: get ('/profile',[App\Http\Controllers\ParentController::class, 'profile'])->name('profile')->middleware('auth');
Route:: get ('/Affichemodifierprofile',[App\Http\Controllers\ParentController::class, 'Affichemodifier'])->name('Affichemodifier')->middleware('auth');
Route:: get ('/rondivoo',[App\Http\Controllers\RondivoController::class, 'index'])->name('rondivo')->middleware('auth');
Route:: get ('/aflaton',[App\Http\Controllers\ParentController::class, 'aflaton'])->name('aflaton')->middleware('auth');
Route:: post ('/btnajoutaflaton',[App\Http\Controllers\ParentController::class, 'AjoutAflaton'])->name('AjoutAflaton');

Route:: post ('/btnmodifierrondivo',[App\Http\Controllers\RondivoController::class, 'Modifierrondivo'])->name('Modifierrondivo');

Route:: post ('/btnmodifier',[App\Http\Controllers\ParentController::class, 'Modifierprofile'])->name('Modifierprofile');
Route:: get ('/affichechangermotdepasse',[App\Http\Controllers\ParentController::class, 'changemdp'])->name('changemdp')->middleware('auth');
Route:: post ('/update-password',[App\Http\Controllers\ParentController::class, 'update_password'])->name('update_password');
Route:: get ('/indexaflatone',[App\Http\Controllers\ParentController::class, 'indexaflatone'])->name('indexaflatone')->middleware('auth');
Route:: get ('/affichemessage',[App\Http\Controllers\ParentController::class, 'affichemessage'])->name('affichemessage')->middleware('auth');
Route:: post ('/boutanAjoutMessage',[App\Http\Controllers\ParentController::class, 'btnAjoutMessage'])->name('btAjoutMessage');
Route:: get ('/affichedossiereleve',[App\Http\Controllers\ParentController::class, 'affichedossiereleve'])->name('affichedossiereleve')->middleware('auth');






                                         /* end Parent */

                                        /* Admin */

                                        Route:: post ('/modifierprofile',[App\Http\Controllers\AdminController::class, 'Modifierprofile'])->name('x');
                                        Route:: post ('/updatee',[App\Http\Controllers\AdminController::class, 'update_password'])->name('a');
                                        Route::namespace('Admin')->group(function()  {

                                        Route::get('/administrateur',[App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
                                        Route::post('/acces',[App\Http\Controllers\Admin\Auth\LoginController::class, 'Login'])->name('acces');
                                      

                                        Route::get('/home_administrateur',[App\Http\Controllers\AdminController::class, 'index'])->name('home_administrateur');
                                        });
                                        Route::get('/registerr',[App\Http\Controllers\RegisterController::class, 'index'])->name('registerr');
                                        Route::post('/save',[App\Http\Controllers\RegisterController::class, 'save'])->name('save');
                                        
                                        Route::get('/profilee',[App\Http\Controllers\AdminController::class, 'profile'])->name('profilee');

                                        Route:: get ('/index1',[App\Http\Controllers\AbscenseController::class, 'index1'])->name('index1')->middleware('auth:admin');
                                        Route:: get ('/index2',[App\Http\Controllers\AbscenseController::class, 'index2'])->name('index2')->middleware('auth:admin');
                                        Route:: get ('/index3',[App\Http\Controllers\AbscenseController::class, 'index3'])->name('index3')->middleware('auth:admin');
                                        Route:: get ('/index4',[App\Http\Controllers\AbscenseController::class, 'index4'])->name('index4')->middleware('auth:admin');
                                        Route:: get ('/index5',[App\Http\Controllers\AbscenseController::class, 'index5'])->name('index5')->middleware('auth:admin');
                                        Route:: get ('/index6',[App\Http\Controllers\AbscenseController::class, 'index6'])->name('index6')->middleware('auth:admin');
                                        Route::post('/modifier',[App\Http\Controllers\AbscenseController::class, 'Edit'])->name('modifier');
                                        Route::post('/modifier2',[App\Http\Controllers\AbscenseController::class, 'Edit2'])->name('modifier2');
                                        Route::post('/modifier3',[App\Http\Controllers\AbscenseController::class, 'Edit3'])->name('modifier3');
                                        Route::post('/modifier4',[App\Http\Controllers\AbscenseController::class, 'Edit4'])->name('modifier4');
                                        Route::post('/modifier5',[App\Http\Controllers\AbscenseController::class, 'Edit5'])->name('modifier5');
                                        Route::post('/modifier6',[App\Http\Controllers\AbscenseController::class, 'Edit6'])->name('modifier6');

                                        Route::post('/modifieraflaton1',[App\Http\Controllers\AdminController::class, 'updateAflaton1'])->name('updateAflaton1');

                                        Route::post('/modifieraflaton2',[App\Http\Controllers\AdminController::class, 'updateAflaton2'])->name('updateAflaton2');
                                        Route:: get ('/image',[App\Http\Controllers\AdminController::class, 'image'])->name('image')->middleware('auth:admin');
                                        Route:: get ('/Ajoutimage',[App\Http\Controllers\AdminController::class, 'Ajoutimage'])->name('Ajoutimage')->middleware('auth:admin');
                                        Route::post('/btnajoutimage',[App\Http\Controllers\AdminController::class, 'btnAjoutimage'])->name('btnAjoutimage');









                                        Route:: get ('/historique1',[App\Http\Controllers\AbscenseController::class, 'historique1'])->name('historique1')->middleware('auth:admin');
                                        Route:: get ('/historique2',[App\Http\Controllers\AbscenseController::class, 'historique2'])->name('historique2')->middleware('auth:admin');
                                        Route:: get ('/historique3',[App\Http\Controllers\AbscenseController::class, 'historique3'])->name('historique3')->middleware('auth:admin');
                                        Route:: get ('/historique4',[App\Http\Controllers\AbscenseController::class, 'historique4'])->name('historique4')->middleware('auth:admin');
                                        Route:: get ('/historique5',[App\Http\Controllers\AbscenseController::class, 'historique5'])->name('historique5')->middleware('auth:admin');
                                        Route:: get ('/historique6',[App\Http\Controllers\AbscenseController::class, 'historique6'])->name('historique6')->middleware('auth:admin');


                                        Route:: get ('/eleve1',[App\Http\Controllers\AdminController::class, 'eleve1'])->name('eleve1')->middleware('auth:admin');
                                        Route:: get ('/eleve2',[App\Http\Controllers\AdminController::class, 'eleve2'])->name('eleve2')->middleware('auth:admin');
                                        Route:: get ('/eleve3',[App\Http\Controllers\AdminController::class, 'eleve3'])->name('eleve3')->middleware('auth:admin');
                                        Route:: get ('/eleve4',[App\Http\Controllers\AdminController::class, 'eleve4'])->name('eleve4')->middleware('auth:admin');
                                        Route:: get ('/eleve5',[App\Http\Controllers\AdminController::class, 'eleve5'])->name('eleve5')->middleware('auth:admin');
                                        Route:: get ('/eleve6',[App\Http\Controllers\AdminController::class, 'eleve6'])->name('eleve6')->middleware('auth:admin');


                                        Route:: get ('/Supprimereleve1/{id}',[App\Http\Controllers\AdminController::class, 'supprimereleve1'])->name('supprimereleve1')->middleware('auth:admin');
                                        Route:: get ('/Supprimereleve2/{id}',[App\Http\Controllers\AdminController::class, 'supprimereleve2'])->name('supprimereleve2')->middleware('auth:admin');
                                        Route:: get ('/Supprimereleve3/{id}',[App\Http\Controllers\AdminController::class, 'Supprimereleve3'])->name('supprimereleve3')->middleware('auth:admin');
                                        Route:: get ('/Supprimereleve4/{id}',[App\Http\Controllers\AdminController::class, 'Supprimereleve4'])->name('supprimereleve4')->middleware('auth:admin');
                                        Route:: get ('/Supprimereleve5/{id}',[App\Http\Controllers\AdminController::class, 'Supprimereleve5'])->name('supprimereleve5')->middleware('auth:admin');
                                        Route:: get ('/Supprimereleve6/{id}',[App\Http\Controllers\AdminController::class, 'Supprimereleve6'])->name('supprimereleve6')->middleware('auth:admin');
                                        Route:: get ('/Supprimercontact/{id}',[App\Http\Controllers\AdminController::class, 'supprimerecontact'])->name('supprimerecontact')->middleware('auth:admin');

                                        Route:: get ('/supprimerimage/{id}',[App\Http\Controllers\AdminController::class, 'supprimerimage'])->name('supprimerimage')->middleware('auth:admin');
                                        Route:: get ('/afficheprofile/{id}',[App\Http\Controllers\AdminController::class, 'afficheuser'])->name('afficheuser')->middleware('auth:admin');

                                        Route:: get ('/retour',[App\Http\Controllers\AdminController::class, 'redirectback'])->name('redirectback')->middleware('auth:admin');
                                        Route:: get ('/affiche_rondivo',[App\Http\Controllers\AdminController::class, 'affiche_rondivo'])->name('affiche_rondivo')->middleware('auth:admin');
                                        Route:: get ('/affiche_page_rondivo',[App\Http\Controllers\AdminController::class, 'affiche_ajouter_rondivo'])->name('affiche_ajouter_rondivo')->middleware('auth:admin');
                                        Route:: get ('/clubbaflaton',[App\Http\Controllers\AdminController::class, 'aflatonn'])->name('aflatonn')->middleware('auth:admin');

                                        Route:: get ('/Supprimerrondivo/{id}',[App\Http\Controllers\AdminController::class, 'supprimerrondivo'])->name('Supprimerrondivo')->middleware('auth:admin');

                                        Route::post('/AjoutRondivo',[App\Http\Controllers\AdminController::class, 'AjoutRondivo'])->name('AjoutRondivo');
                                        Route:: get ('/affichecahierlaison',[App\Http\Controllers\AdminController::class, 'affichecahierlaison'])->name('affichecahierlaison')->middleware('auth:admin');
                                        Route:: get ('/pageRepondre',[App\Http\Controllers\AdminController::class, 'pageRepondre'])->name('pageRepondre')->middleware('auth:admin');
                                        Route::post('/btnAjoutMessage',[App\Http\Controllers\AdminController::class, 'btnAjoutMessage'])->name('btnAjoutMessage');
                                       
                                        Route:: get ('/AfficheEditmessage/{id}',[App\Http\Controllers\AdminController::class, 'AfficheEditmessage'])->name('AfficheEditmessage')->middleware('auth:admin');
                                        Route:: get ('/acontact',[App\Http\Controllers\AdminController::class, 'showcontact'])->name('showcontact')->middleware('auth:admin');
                                        Route:: get ('/showdoosiereleve',[App\Http\Controllers\AdminController::class, 'showdoosiereleve'])->name('showdoosiereleve')->middleware('auth:admin');
                                        Route:: get ('/ajouterdossier',[App\Http\Controllers\AdminController::class, 'ajouterdossier'])->name('ajouterdossier')->middleware('auth:admin');

                                        Route::post('/btnAjoutsana12',[App\Http\Controllers\AdminController::class, 'btnAjoutsana12'])->name('btnAjoutsana12');
                                        Route::post('/semstre2',[App\Http\Controllers\AdminController::class, 'semstre2'])->name('semstre2');
                                        Route::post('/semstre2',[App\Http\Controllers\AdminController::class, 'semstre2'])->name('semstre2');
                                        Route::post('/semstre3',[App\Http\Controllers\AdminController::class, 'semstre3'])->name('semstre3');

                                        Route::post('/s1',[App\Http\Controllers\AdminController::class, 's1'])->name('s1');
                                        Route::post('/s2',[App\Http\Controllers\AdminController::class, 's2'])->name('s2');
                                        Route::post('/s3',[App\Http\Controllers\AdminController::class, 's3'])->name('s3');

                                        Route::post('/sana1',[App\Http\Controllers\AdminController::class, 'sana1'])->name('sana1');
                                        Route::post('/sana2',[App\Http\Controllers\AdminController::class, 'sana2'])->name('sana2');
                                        Route::post('/sana3',[App\Http\Controllers\AdminController::class, 'sana3'])->name('sana3');
                                        Route:: get ('/feedback',[App\Http\Controllers\AdminController::class, 'feedback'])->name('feedback')->middleware('auth:admin');

                                     
                                        
                                        /* end Admin */
